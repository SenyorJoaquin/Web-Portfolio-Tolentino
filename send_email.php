<?php

    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $name = htmlspecialchars(trim($_POST['name']));
        $email = filter_var(trim($_POST['email']), FILTER_SANITIZE_EMAIL);
        $message = htmlspecialchars(trim($_POST['message']));
    }

    if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
        echo "Invalid email address";
        exit;
    }

    $to = "joaquin.sison.tolentino@gmail.com";
    $subject = "New Message from" . $name;
    $body = "You have received a new message from " . $name . "(" . $email ."):\n\n". $message;
    $headers = "From: " . $email . "\r\n";
    $headers .= "Reply-To" . $email . "\r\n";


    if (mail($to, $subject, $body, $headers)) {
        echo "Email Sent Successfully"
    } else {
        echo "Failed to Send Email. Please try again."
    }
?>

