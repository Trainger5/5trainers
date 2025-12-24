<?php
if ($_SERVER["REQUEST_METHOD"] === "POST") {

    // Collect form data safely
    $name        = isset($_POST['name']) ? htmlspecialchars(trim($_POST['name'])) : '';
    $email       = isset($_POST['email']) ? htmlspecialchars(trim($_POST['email'])) : '';
    $phone       = isset($_POST['phone']) ? htmlspecialchars(trim($_POST['phone'])) : '';
    $country = isset($_POST['country']) ? htmlspecialchars(trim($_POST['country'])) : '';
    $service  = isset($_POST['service']) ? htmlspecialchars(trim($_POST['service'])) : '';
    $messageText = isset($_POST['message']) ? htmlspecialchars(trim($_POST['message'])) : '';

    // Validate essential fields
    if (empty($name) || empty($email) || empty($phone)) {
        echo "<h3>❌ Please complete all required fields.</h3>";
        exit;
    }

    // Email recipient
    $to = "contact.visa@5trainers.com";    // <-- Add your email here
    
    // Email subject
    $subject = "New Callback Request from $name";

    // Email body (HTML)
    $body = "
        <html>
        <body>
            <h2>New Callback Request</h2>
            <p><strong>Full Name:</strong> {$name}</p>
            <p><strong>Email:</strong> {$email}</p>
            <p><strong>Phone Number:</strong> {$phone}</p>
            <p><strong>Country:</strong> {$country}</p>
            <p><strong>interested:</strong> {$service}</p>
            <p><strong>Message:</strong> {$messageText}</p>
        </body>
        </html>
    ";

    // Email headers
    $headers  = "MIME-Version: 1.0\r\n";
    $headers .= "Content-type: text/html; charset=UTF-8\r\n";
    $headers .= "From: {$name} <{$email}>\r\n";
    $headers .= "Reply-To: {$email}\r\n";

    // Send email
    if (mail($to, $subject, $body, $headers)) {
        include 'thanku-page.php';
    } else {
        echo "<h3>❌ Email sending failed. Please contact support.</h3>";
    }
}
?>
