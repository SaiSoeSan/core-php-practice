<?php

error_reporting(E_ALL);
ini_set('display_errors', 'On');


function process_form(){
    $numbers = explode(",",trim($_POST['num1']));

    switch($_POST['submit']){
        case "Add":
            $result = array_sum($numbers);
            break;
        case "Multiply":
            $result = array_product($numbers);
            break;
        case "Average":
            $result = array_sum($numbers)/count($numbers);
            break;
        case "Clear":
            $result = "";
            break;
    }
    setCustomCookie("result", $result);
}

function setCustomCookie($name, $value){
    $options = [
        'expires' => time() + 60,
    ];
    setcookie($name,$value,$options);
    $_COOKIE[$name] = $value;
}   
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Calculator Form</title>
</head>
<body>
    <?php 
    if(isset($_POST['submit'])){
        process_form();
    }
    ?>
    <form action="" method="post">
        <h2>Calculator</h2>
        <label for="num1">Input values separated by comma:</label><br>
        <input type="text" id="num1" name="num1" value="<?php echo isset($_COOKIE['result']) ? $_COOKIE['result'] : "" ?>"><br><br>
        <input type="submit" name="submit" value="Add">
        <input type="submit" name="submit" value="Multiply">
        <input type="submit" name="submit" value="Average">
        <input type="submit" name="submit" value="Clear">
    </form>
</body>
</html>