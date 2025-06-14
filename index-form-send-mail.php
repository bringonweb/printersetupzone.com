<?php
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

require 'PHPMailer/Exception.php';
require 'PHPMailer/PHPMailer.php';
require 'PHPMailer/SMTP.php';

if ($_SERVER["REQUEST_METHOD"] === "POST") {
    // Sanitize input
    $name = htmlspecialchars(trim($_POST['name'] ?? ''));
    $phone = htmlspecialchars(trim($_POST['phone'] ?? ''));
    $email = htmlspecialchars(trim($_POST['email'] ?? ''));
    $message = htmlspecialchars(trim($_POST['message'] ?? ''));

    // Basic validation
    if (!empty($name) && !empty($phone) && !empty($email)) {
        $mail = new PHPMailer(true);

        try {
            // SMTP settings
            $mail->isSMTP();
            $mail->Host = 'smtp.gmail.com';         // Replace with your SMTP server
            $mail->SMTPAuth = true;
            $mail->Username = 'adityagupta80041@gmail.com';          // SMTP username (your email)
            $mail->Password = 'zpzlkerohziiaouu';        // SMTP password or app password
            $mail->SMTPSecure = 'tls';                      // Encryption type
            $mail->Port = 587;

            // Recipients
            $mail->setFrom('adityagupta80041@gmail.com', 'Printer Support Zone');
            $mail->addAddress('adityagupta80041@gmail.com', 'Admin'); // Admin’s email

            // Content
            $mail->isHTML(true);
            $mail->Subject = 'New Free Consultation Inquiry';
            $mail->Body = "
                <h2>New Request</h2>
                <p><strong>Name:</strong> {$name}</p>
                <p><strong>Phone:</strong> {$phone}</p>
                <p><strong>Email:</strong> {$email}</p>
                <p><strong>Message:</strong> {$message}</p>
            ";

            $mail->send();

            // ✅ Redirect to thank-you page
            header("Location: thank-you.php");
            exit();
        } catch (Exception $e) {
            echo "Error sending email: {$mail->ErrorInfo}";
        }
    } else {
        echo "Please fill all required fields.";
    }
} else {
    echo "Invalid request method.";
}
?>