<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = htmlspecialchars($_POST['name']);
    $email = htmlspecialchars($_POST['email']);
    $phone = htmlspecialchars($_POST['phone_number']);

    $course = isset($_POST['basic']) ? $_POST['basic'] : 'Not Selected';

    // Your email address
    $to = "info@5trainers.com, 5trainers.official@gmail.com";

    // Subject with course name
    $subject = "New Course Booking Enquiry - " . $course;

    $message = "
    <h2>New Course Booking Details</h2>
    <p><strong>Name:</strong> $name</p>
    <p><strong>Email:</strong> $email</p>
    <p><strong>Phone Number:</strong> $phone</p>
    <p><strong>Course:</strong> $course</p>
    ";

    // Email headers
    $headers = "MIME-Version: 1.0" . "\r\n";
    $headers .= "Content-type:text/html;charset=UTF-8" . "\r\n";
    $headers .= "From: <noreply@yourdomain.com>" . "\r\n";

    if (mail($to, $subject, $message, $headers)) {
        // Redirect to thank you page
        header("Location: thanku-page.php");
        exit();
    } else {
        echo "Email sending failed.";
    }
}
?>