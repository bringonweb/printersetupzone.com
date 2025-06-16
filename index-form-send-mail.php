<?php
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

require 'PHPMailer/Exception.php';
require 'PHPMailer/PHPMailer.php';
require 'PHPMailer/SMTP.php';

if ($_SERVER["REQUEST_METHOD"] === "POST") {
    // Sanitize input
    $name = htmlspecialchars(trim($_POST['name']));
    $phone = htmlspecialchars(trim($_POST['phone']));
    $email = htmlspecialchars(trim($_POST['email']));
    $message = htmlspecialchars(trim($_POST['message'] ?? ''));

    // Basic validation
    if (!empty($name) && !empty($phone) && !empty($email)) {
        $mail = new PHPMailer(true);

        try {
            // SMTP settings
            $mail->isSMTP();
            $mail->Host = 'smtp.gmail.com';
            $mail->SMTPAuth = true;
            $mail->Username = 'adityagupta80041@gmail.com'; // Use your actual Gmail
            $mail->Password = 'zpzlkerohziiaouu';    // Use Gmail app password
            $mail->SMTPSecure = 'tls';
            $mail->Port = 587;

            // Recipients
            $mail->setFrom('adityagupta80041@gmail.com', 'Printer Support');
            $mail->addAddress('adityagupta80041@gmail.com', 'Admin');

            // Content
            $mail->isHTML(true);
            $mail->Subject = 'New Consultation Request';
            $mail->Body = "
                <h2>New Request</h2>
                <p><strong>Name:</strong> $name</p>
                <p><strong>Phone:</strong> $phone</p>
                <p><strong>Email:</strong> $email</p>
                <p><strong>Message:</strong> $message</p>
            ";

            $mail->send();
            header("Location: thank-you.php");
            exit();
        } catch (Exception $e) {
            echo "Error: {$mail->ErrorInfo}";
        }
    } else {
        echo "Please fill all required fields.";
    }
} else {
    echo "Invalid request method.";
}
?>