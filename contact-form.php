<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Retrieve form data
    $name = htmlspecialchars($_POST['name']);
    $email = htmlspecialchars($_POST['email']);
    $phone = htmlspecialchars($_POST['phone']);
    $message = htmlspecialchars($_POST['message']);

    // Your email address where the form data will be sent
    $to = "sterling.spear@gmail.com"; 
    $subject = "New Contact Form Submission from SterFlies";
    $body = "Name: $name\nEmail: $email\nPhone: $phone\nMessage:\n$message";

    // Headers
    $headers = "From: noreply@sterflies.com\r\n"; 
    $headers .= "Reply-To: $email\r\n";

    // Send email
    if (mail($to, $subject, $body, $headers)) {
        echo "Message sent successfully!";
    } else {
        echo "Failed to send message. Please try again later.";
    }
} else {
    echo "Invalid request method.";
}
?>
