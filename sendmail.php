<?php

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

require __DIR__ . '/PHPMailer/src/Exception.php';
require __DIR__ . '/PHPMailer/src/PHPMailer.php';
require __DIR__ . '/PHPMailer/src/SMTP.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {

    // Sanitize inputs
    $name  = htmlspecialchars($_POST['name']);
    $email = htmlspecialchars($_POST['email']);
    $phone = htmlspecialchars($_POST['phone_number']);
    $course = isset($_POST['basic']) ? htmlspecialchars($_POST['basic']) : 'Not Selected';

    // Email subject
    $subject = "New Course Booking Enquiry - " . $course;

    // Email body
    $message = "
        <h2>New Course Booking Details</h2>
        <p><strong>Name:</strong> $name</p>
        <p><strong>Email:</strong> $email</p>
        <p><strong>Phone Number:</strong> $phone</p>
        <p><strong>Course:</strong> $course</p>
    ";

    try {
        $mail = new PHPMailer(true);

        // SMTP Configuration (Hostinger)
        $mail->isSMTP();
        $mail->Host       = 'smtp.hostinger.com';
        $mail->SMTPAuth   = true;
        $mail->Username   = 'no-reply@5trainers.com';   // your email
        $mail->Password   = 'Reset@101010!#';           // email password
        $mail->SMTPSecure = PHPMailer::ENCRYPTION_SMTPS;
        $mail->Port       = 465;

        // Sender & Receiver
        $mail->setFrom('no-reply@5trainers.com', '5Trainers');
        $mail->addAddress('info@5trainers.com');
        $mail->addAddress('5trainers.official@gmail.com');

        // Reply-to user
        if (!empty($email)) {
            $mail->addReplyTo($email, $name);
        }

        // Email content
        $mail->isHTML(true);
        $mail->Subject = $subject;
        $mail->Body    = $message;

        $mail->send();

        // Redirect after success
        header("Location: thanku-page.php");
        exit();

    } catch (Exception $e) {
        echo "Mail sending failed: " . $mail->ErrorInfo;
    }
}
?>
