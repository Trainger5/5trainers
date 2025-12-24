<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $email = $_POST['email'];

    $to = "5trainers.official@gmail.com";
    $subject = "New Newsletter Signup";
    $message = "New subscriber: " . $email;
    $headers = "From: no-reply@yourwebsite.com";

    if (mail($to, $subject, $message, $headers)) {
        echo "Thank you for signing up!";
    } else {
        echo "Error sending email.";
    }
}
?>