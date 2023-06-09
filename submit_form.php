<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Get the form data
    $companyFullName = $_POST["companyFullName"];
    $address = $_POST["address"];
    $nip = $_POST["nip"];
    // ... (get other form fields)

    // Compose the email message
    $to = "danialsohail733@gmail.com";
    $subject = "Membership Form Submission";
    $message = "Company Full Name: " . $companyFullName . "\n";
    $message .= "Address: " . $address . "\n";
    $message .= "NIP: " . $nip . "\n";
    // ... (compose the rest of the message)

    // Send the email
    $headers = "From: your-email@gmail.com"; // Replace with your Gmail email address
    if (mail($to, $subject, $message, $headers)) {
        echo "Form submitted successfully!";
    } else {
        echo "Error sending the form.";
    }
}
?>