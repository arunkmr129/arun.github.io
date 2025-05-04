<?php
if ($_SERVER["REQUEST_METHOD"] === "POST") {
    $name    = $_POST['name'] ?? '';
    $phone   = $_POST['phone'] ?? '';
    $email   = $_POST['email'] ?? '';
    $subject = $_POST['subject'] ?? '';
    $message = $_POST['message'] ?? '';

    $to      = "arunbhardwaj129@gmail.com";
    $headers = "From: $email";
    $body    = "Name: $name\nPhone: $phone\nEmail: $email\nSubject: $subject\nMessage:\n$message";

    if (mail($to, "Contact Form: $subject", $body, $headers)) {
        echo "Message sent successfully.";
    } else {
        echo "Failed to send message.";
    }
}
?>
