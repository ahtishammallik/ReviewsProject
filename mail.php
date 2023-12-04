<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $to = "ahtishaamm@gmail.com";
    $subject = "Restaurant Review Form Submission";
    
    $email = $_POST["email"];
    $overallRating = $_POST["overallRating"];
    $foodRating = $_POST["foodRating"];
    $serviceRating = $_POST["serviceRating"];
    $atmosphereRating = $_POST["atmosphereRating"];
    $comments = $_POST["comments"];
    
    $message = "Email: $email\n";
    $message .= "Overall Rating: $overallRating\n";
    $message .= "Food Rating: $foodRating\n";
    $message .= "Service Rating: $serviceRating\n";
    $message .= "Atmosphere Rating: $atmosphereRating\n";
    $message .= "Comments: $comments\n";
    
    $headers = "From: $email";

    if (mail($to, $subject, $message, $headers)) {
        echo "Email sent successfully!";
    } else {
        echo "Failed to send email.";
    }
}
?>
