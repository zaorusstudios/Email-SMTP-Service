<?php
    // Include PHPMailer's files
    require 'PHPMailer/src/PHPMailer.php';
    require 'PHPMailer/src/SMTP.php';
    require 'PHPMailer/src/Exception.php';
    
    // Receive email data through GET parameters from the URL
    $content = isset($_REQUEST["content"]) ? $_REQUEST["content"] : ''; // Email content
    $email = isset($_REQUEST["email"]) ? $_REQUEST["email"] : ''; // Recipient
    $subject = isset($_REQUEST["subject"]) ? $_REQUEST["subject"] : ''; // Subject
    $is_html = isset($_REQUEST["is_html"]) ? $_REQUEST["is_html"] : 'true'; // If it is HTML or plain text
    $from_email = isset($_REQUEST["from_email"]) ? $_REQUEST["from_email"] : ''; // Sender email
    $from_name = isset($_REQUEST["from_name"]) ? $_REQUEST["from_name"] : ''; // Sender name
    
    // Validate that the necessary data is present
    if (empty($content) || empty($email) || empty($subject)) {
        die("Required parameters for sending the email are missing.");
    }
    
    // Initialize PHPMailer
    $mail = new PHPMailer\PHPMailer\PHPMailer();
    
    // SMTP configuration
    $mail->isSMTP();
    $mail->Host = 'mail.example.com'; // Your SMTP server
    $mail->SMTPAuth = true;
    $mail->Username = 'youremail@example.com'; // Your email address
    $mail->Password = 'youremailpassword'; // Your password
    $mail->SMTPSecure = PHPMailer\PHPMailer\PHPMailer::ENCRYPTION_STARTTLS; // Or 'ssl' if necessary
    $mail->Port = 587; // SMTP port for TLS
    
    // Email configuration
    $mail->setFrom($from_email, $from_name); // Sender received from Unreal Engine
    $mail->addAddress($email); // Recipient
    
    // Set the email content
    if ($is_html === 'true') {
        $mail->isHTML(true); // Set as HTML
        $mail->Subject = $subject;
        $mail->Body    = $content; // Email body in HTML
    } else {
        $mail->isHTML(false); // Set as plain text
        $mail->Subject = $subject;
        $mail->Body    = strip_tags($content); // Remove HTML tags if it's plain text
    }
    
    // Try to send the email
    if ($mail->send()) {
        echo "Email sent successfully!";
    } else {
        echo "Error sending the email: " . $mail->ErrorInfo;
    }
?>
