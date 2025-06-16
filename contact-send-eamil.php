<?php
// Enable error reporting
error_reporting(E_ALL);
ini_set('display_errors', 1);

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

require 'PHPMailer/Exception.php';
require 'PHPMailer/PHPMailer.php';
require 'PHPMailer/SMTP.php';

// DB connection config
$host = 'localhost';
$db = 'u635694844_Printersetupzo';
$user = 'u635694844_Printersetupzo';
$pass = 'Printersetupzone@#12';

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    // Sanitize form inputs using modern methods
    $name = isset($_POST['name']) ? htmlspecialchars(trim($_POST['name'])) : '';
    $email = isset($_POST['email']) ? filter_var(trim($_POST['email']), FILTER_SANITIZE_EMAIL) : '';
    $phone = isset($_POST['phone']) ? htmlspecialchars(trim($_POST['phone'])) : '';
    $subject = isset($_POST['subject']) ? htmlspecialchars(trim($_POST['subject'])) : '';
    $printer = isset($_POST['printer']) ? htmlspecialchars(trim($_POST['printer'])) : '';
    $message = isset($_POST['message']) ? htmlspecialchars(trim($_POST['message'])) : '';

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

        // Use only existing columns in your table
        $stmt = $conn->prepare("INSERT INTO contact_submissions (name, email, phone, subject, printer, message) VALUES (?, ?, ?, ?, ?, ?)");
        $stmt->bind_param("ssssss", $name, $email, $phone, $subject, $printer, $message);

        if (!$stmt->execute()) {
            throw new Exception("Execute failed: " . $stmt->error);
        }

        $stmt->close();
        $conn->close();
    } catch (Exception $e) {
        error_log("Database Error: " . $e->getMessage());
    }

    // Send Email to Admin
    $mail = new PHPMailer(true);

    try {
        // SMTP Configuration (USE REAL CREDENTIALS)
        $mail->isSMTP();
        $mail->Host = 'smtp.gmail.com';
        $mail->SMTPAuth = true;
        $mail->Username = 'adityagupta80041@gmail.com';
        $mail->Password = 'zpzlkerohziiaouu';
        $mail->SMTPSecure = 'tls';
        $mail->Port = 587;

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
        error_log("Mailer Error: " . $mail->ErrorInfo);
        echo "Message could not be sent. Please try again later or contact us directly.";
    }
} else {
    http_response_code(405);
    echo "Method Not Allowed";
}
?>