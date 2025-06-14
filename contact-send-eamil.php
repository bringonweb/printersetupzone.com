<?php
// include 'db.php'; // Include the connection file
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

// Check POST method
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    // Sanitize form inputs
    $name = htmlspecialchars(trim($_POST['name']));
    $email = htmlspecialchars(trim($_POST['email']));
    $phone = htmlspecialchars(trim($_POST['phone'] ?? ''));
    $subject = htmlspecialchars(trim($_POST['subject']));
    $printer = htmlspecialchars(trim($_POST['printer'] ?? ''));
    $message = htmlspecialchars(trim($_POST['message']));

    // Store in DB
    $conn = new mysqli($host, $user, $pass, $db);
    if ($conn->connect_error) {
        die("DB Connection failed: " . $conn->connect_error);
    }

    $stmt = $conn->prepare("INSERT INTO contact_submissions (name, email, phone, subject, printer, message) VALUES (?, ?, ?, ?, ?, ?)");
    $stmt->bind_param("ssssss", $name, $email, $phone, $subject, $printer, $message);
    $stmt->execute();
    $stmt->close();
    $conn->close();

    // Send Email to Admin
    $mail = new PHPMailer(true);

    try {
        // SMTP settings
        $mail->isSMTP();
        $mail->Host = 'smtp.gmail.com';
        $mail->SMTPAuth = true;
        $mail->Username = 'adityagupta80041@gmail.com';
        $mail->Password = 'zpzlkerohziiaouu';
        $mail->SMTPSecure = 'tls';
        $mail->Port = 587;

        // Email content
        $mail->setFrom('adityagupta80041@gmail.com', 'Printer Support Contact');
        $mail->addAddress('adityagupta80041@gmail.com', 'Admin');

        $mail->isHTML(true);
        $mail->Subject = "New Contact Form Submission: $subject";
        $mail->Body = "
            <h3>Contact Form Details</h3>
            <p><strong>Name:</strong> $name</p>
            <p><strong>Email:</strong> $email</p>
            <p><strong>Phone:</strong> $phone</p>
            <p><strong>Subject:</strong> $subject</p>
            <p><strong>Printer Brand:</strong> $printer</p>
            <p><strong>Message:</strong><br>$message</p>
        ";

        $mail->send();

        // Redirect to thank you page
        header('Location: thank-you.php');
        exit();

    } catch (Exception $e) {
        echo "Message could not be sent. Mailer Error: {$mail->ErrorInfo}";
    }

} else {
    echo "Invalid Request";
}
?>