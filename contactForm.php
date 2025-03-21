<?php

error_reporting(E_ALL);
ini_set('display_errors', 'On');
function process_form(){
    foreach($_POST as $key => $value){
        if($key !== 'submit'){
            if($key === 'multiple_select'){
                echo "Multiple select: ". implode(", ", $value) . "<br>";
            }else{
                echo "$key: $value <br>";
            }
        }
    }
    // $name = $_POST['name'];
    // $email = $_POST['email'];
    // $message = $_POST['message'];
    // $how_did_you_hear = $_POST['how_did_you_hear'];
    // $multiple_select = $_POST['multiple_select'];

    // echo "Name: $name <br>";
    // echo "Email: $email <br>";
    // echo "Message: $message <br>";
    // echo "How did you hear: $how_did_you_hear <br>";
    // echo "Multiple select: ";
    // foreach($multiple_select as $value){
    //     echo $value . " ";
    // }
}
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=C, initial-scale=1.0">
    <title>Contact Form</title>
</head>
<body>
    <?php
        if(isset($_POST['submit'])){
            process_form();

            if(isset($_POST['name'])){
                $options = [
                    'expires' => time() + 60,
                ];
                setcookie('name',$_POST['name'],$options);
                $_COOKIE['name'] = $_POST['name'];
            }
        }
    ?>
     <form action="" method="post">
        <h2>Contact Us</h2>
        <label for="name">Name:</label>
        <input type="text" id="name" name="name" value="<?php echo isset($_COOKIE['name'])  ? $_COOKIE['name'] : "" ?>"><br><br>
        <label for="email">Email:</label>
        <input type="text" id="email" name="email"><br><br>
        <label for="message">Message:</label>
        <textarea id="message" name="message"></textarea><br><br>
        <label for="">How did you hear from us</label><br>
        <input
        type="radio" value="google" name="how_did_you_hear">Google<br>
        <input
        type="radio" value="friend" name="how_did_you_hear">Friend<br>
        <input
        type="radio" value="other" name="how_did_you_hear">Other
        <br>
        <label for="">Multiple select</label><br>
        <input type="checkbox" value="email" name="multiple_select[]">Email<br>
        <input type="checkbox" value="phone" name="multiple_select[]">Phone<br>
        <input type="checkbox" value="mail" name="multiple_select[]">Mail<br>
        <input type="submit" value="Submit" name="submit">
     </form>
</body>
</html>