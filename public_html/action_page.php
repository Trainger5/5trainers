<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = $_POST['name'];
    $email = $_POST['email'];
    $phone = $_POST['phone_number'];
    $basic = $_POST['basic'];

    $to = "info@5trainers.com, 5trainers.official@gmail.com, theneedleads@gmail.com";
    $subject = "New Course Booking Form Submission";
    $message = "Name: $name\nEmail: $email\nPhone: $phone\nExperience: $basic";
    $headers = "From: noreply@yourdomain.com";

    if (mail($to, $subject, $message, $headers)) {
        header("Location: thanku-page.php");
        exit();
    } else {
        echo "❌ Something went wrong. Please try again.";
    }
}
?>