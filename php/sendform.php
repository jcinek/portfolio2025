<?php

// ------------------------------------------------
// Php script to send contact form input to email
// ------------------------------------------------

// No XXS bbcakes :)
function test_input($data) {
    $data = trim($data);
    $data = stripslashes($data);
    $data = htmlspecialchars($data);
    return $data;
}

// Declares variables
$name = $email = $message = "";
$name_error = $email_error = $message_error = "";

// Loads phpmailer package
require "vendor/autoload.php";
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;


// Form submission script start
if (isset($_POST['name']) && isset($_POST['email']) && isset($_POST['message'])) {

    // Gets sender's name, email address, and message from form input
    $name = test_input($_POST["name"]);
    $email = test_input($_POST["email"]);
    $message = test_input($_POST["message"]);
    
    // Form validation
    if (empty($name)) {
        $name_error = "Please Enter Your Name";
    }
    if (!preg_match("/^[a-zA-Z ]*$/",$name)) {
        $name_error = "Please Only Use Letters and White Space";
    }
    if (empty($email)) {
        $email_error = "Please Enter A Valid Email";
    }
    if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
        $email_error = "Please Enter A Valid Email";
    }
    if (empty($message)) {
        $message_error = "Please Write A Message";
    }

    // Creates new phpmailer instance
    $mail = new PHPMailer(true);

    if ($name_error === "" && $email_error === "" && $message_error === "") {
        // Attempts to run phpmailer and submit form
        try {
            // Tells phpmailer to use SMTP protocol
            $mail->isSMTP();
            // Enables SMTP authentication
            $mail->SMTPAuth = true;

            // SMTP server
            $mail->Host = "smtp.gmail.com";
            $mail->SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS;
            $mail->Port = 587;

            // Links SMTP server
            $mail->Username = "cinek.john@gmail.com";
            $mail->Password = "nkkb glmc tgnf bmpg";

            // Sets recipient email address and sender's reply email
            $mail->addAddress("cinek.john@gmail.com");
            $mail->addReplyTo($email);

            // Generates email message body from user form input
            $mail->Subject = "New Portfolio Message!";
            $mail->Body = "From: " . $name . "\r\n\r\n" . "Sender Email: " . $email . "\r\n\r\n" . "Message: " . "\r\n\r\n" . $message;

            // sends message
            $mail->send();

            // Navigates to form sent successfully page upon successful form submission
            // Prevents form resubmission upon refreshing once sent successfully page loads
            header("Location: formsent.html");
        }

        // Critical error
        catch (Exception $e) {
            echo "ZOINKS! I'm afraid something went wrong, please try again later :(";
        }
    }
}

?>

