<?php
error_reporting(E_ALL);
ini_set('display_errors', 'On');
function process_form() {
    $name = $_POST['name'];
    $email = $_POST['email'];
    $message = $_POST['message'];

    $body = "Hey, someone contacted us from . Here is the information: \n";
    $body .= "Name: " . $name . "\n";
    $body .= "Email: " . $email . "\n";
    $body .= "Message: " . $message . "\n";

    $to = "saisoesan22@gmail.com";
    $subject = "Contact Form Submission";
    $headers = "From: " . $email . "\r\n" . "Reply-To: " . $email . "\r\n". "X-Mailer: PHP/" . phpversion();

    if(mail($to, $subject, $body, $headers)) {
        echo "Email sent successfully";
    } else {
        echo "Failed to send email";
    }
}

?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contact Form</title>
</head>
<body>
    <?php
        if(isset($_POST['submit'])){
            process_form();
        }
    ?>
    <form action="sendEmail.php" method="post">
        <h2>Contact Us</h2>
        <label for="name">Name:</label>
        <input type="text" id="name" name="name"><br><br>
        <label for="email">Email:</label>
        <input type="text" id="email" name="email"><br><br>
        <label for="message">Message:</label>
        <textarea id="message" name="message"></textarea><br><br>
        <input type="submit" name="submit" value="Submit">
    </form>
</body>
</html>