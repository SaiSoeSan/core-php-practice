<?php
error_reporting(E_ALL);
ini_set('display_errors', 'On');

function storeData($data) {
    $filePath = '/Applications/XAMPP/xamppfiles/htdocs/phpInterview/data.txt';
    if (!file_put_contents($filePath, $data, FILE_APPEND)) {
        echo "Failed to write to file";
    } else {
        echo "Data written to file successfully";
    }
}
function process_form() {
    $name = $_POST['name'];
    $email = $_POST['email'];
    $message = $_POST['message'];

    $file_content = date('Y-m-d H:i:s') . "\n";
    $file_content .= "Name: " . $name . "\n";
    $file_content .= "Email: " . $email . "\n";
    $file_content .= "Message: " . $message . "\n";
    $file_content .= "-----------------------------------\n";

    storeData($file_content);
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
    <form action="" method="post">
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