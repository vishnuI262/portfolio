<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Get form data
    $fullname = $_POST['fullname'];
    $email = $_POST['email'];
    $message = $_POST['message'];
    
    // Validate email (example validation)
    if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
        die("Invalid email format");
    }
    
    // Email parameters
    $to = "717822i262@kce.ac.in"; // Replace with your email address
    $subject = "Contact Form Submission";
    $messageBody = "Name: $fullname\nEmail: $email\nMessage:\n$message";
    $headers = "From: $email";
    
    // Send email
    if (mail($to, $subject, $messageBody, $headers)) {
        echo "Email sent successfully!";
    } else {
        echo "Failed to send email.";
    }
}
?>
