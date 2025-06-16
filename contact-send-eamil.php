<?php
// Enable error reporting
error_reporting(E_ALL);
ini_set('display_errors', 1);

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

require 'PHPMailer/Exception.php';
require 'PHPMailer/PHPMailer.php';
require 'PHPMailer/SMTP.php';

// DB connection config (USE YOUR ACTUAL CREDENTIALS)
$host = 'localhost';
$db = 'u635694844_Printersetupzo';
$user = 'u635694844_Printersetupzo';
$pass = 'Printersetupzone@#12';

// Check POST method
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    // Sanitize form inputs
    $name = filter_input(INPUT_POST, 'name', FILTER_SANITIZE_STRING);
    $email = filter_input(INPUT_POST, 'email', FILTER_SANITIZE_EMAIL);
    $phone = filter_input(INPUT_POST, 'phone', FILTER_SANITIZE_STRING);
    $subject = filter_input(INPUT_POST, 'subject', FILTER_SANITIZE_STRING);
    $printer = filter_input(INPUT_POST, 'printer', FILTER_SANITIZE_STRING);
    $message = filter_input(INPUT_POST, 'message', FILTER_SANITIZE_STRING);

    // Validate required fields
    if (empty($name) || empty($email) || empty($subject) || empty($message)) {
        die("All required fields must be filled");
    }

    // Store in DB
    try {
        $conn = new mysqli($host, $user, $pass, $db);

        if ($conn->connect_error) {
            throw new Exception("DB Connection failed: " . $conn->connect_error);
        }

        $stmt = $conn->prepare("INSERT INTO contact_submissions (name, email, phone, subject, printer, message, created_at) VALUES (?, ?, ?, ?, ?, ?, NOW())");
        $stmt->bind_param("ssssss", $name, $email, $phone, $subject, $printer, $message);

        if (!$stmt->execute()) {
            throw new Exception("Execute failed: " . $stmt->error);
        }

        $stmt->close();
        $conn->close();
    } catch (Exception $e) {
        // Log error but continue to try sending email
        error_log($e->getMessage());
    }

    // Send Email to Admin (USE REAL GMAIL CREDENTIALS)
    $mail = new PHPMailer(true);

    try {
        // SMTP Configuration
        $mail->isSMTP();
        $mail->Host = 'smtp.gmail.com';
        $mail->SMTPAuth = true;
        $mail->Username = 'adityagupta80041@gmail.com'; // REAL EMAIL
        $mail->Password = 'zpzlkerohziiaouu'; // GMAIL APP PASSWORD
        $mail->SMTPSecure = 'tls';
        $mail->Port = 587;
        $mail->SMTPDebug = 2; // Enable verbose debug output

        // Email Content
        $mail->setFrom('adityagupta80041@gmail.com', 'PrinterSetupZone');
        $mail->addAddress('adityagupta80041@gmail.com', 'Admin');

        $mail->isHTML(true);
        $mail->Subject = "New Contact Form: $subject";
        $mail->Body = "
            <h3>New Contact Submission</h3>
            <p><strong>Name:</strong> $name</p>
            <p><strong>Email:</strong> $email</p>
            <p><strong>Phone:</strong> $phone</p>
            <p><strong>Subject:</strong> $subject</p>
            <p><strong>Printer:</strong> $printer</p>
            <p><strong>Message:</strong></p>
            <p>$message</p>
        ";

        $mail->send();
        header('Location: thank-you.php');
        exit();
    } catch (Exception $e) {
        // Log error and show user-friendly message
        error_log("Mailer Error: " . $mail->ErrorInfo);
        echo "Message could not be sent. Please try again later or contact us directly.";
    }
} else {
    http_response_code(405);
    echo "Method Not Allowed";
}
?>