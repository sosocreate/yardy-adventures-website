<?php

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $name = htmlspecialchars($_POST['name']);
    $email = htmlspecialchars($_POST['email']);
    $subject = htmlspecialchars($_POST['subject']);
    $message = htmlspecialchars($_POST['message']);

    // Validate inputs (you can add more validation as needed)
    if (empty($name) || empty($email) || empty($subject) || empty($message)) {
        http_response_code(400);
        echo json_encode(['error' => 'All fields are required.']);
        exit;
    }

    // Prepare the email
    $to = 'info@yardyadventures.com';
    //$to = 'goliveja75@gmail.com';
    
    $email_subject = "New message from: $name";
    $email_body = "You have received a new message from the contact form.\n\n".
                  "Name: $name\n".
                  "Email: $email\n".
                  "Subject: $subject\n".
                  "Message:\n$message";

    // Send the email
    if (mail($to, $email_subject, $email_body)) {
        echo json_encode(['success' => 'Message sent successfully!']);
    } else {
        http_response_code(500);
        echo json_encode(['error' => 'Failed to send message.']);
    }
}
?>
