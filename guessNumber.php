<?php

if(!isset($_COOKIE['target'])){
    setcookie('target', rand(0, 10), time() + 3600);
}else{
    if(isset($_POST['submit'])){
        $guess = $_POST['guess'];
        $target = $_COOKIE['target'];
        if($guess == $target){
            echo "Congratulations! You guessed the correct number";
            $gameOver = true;
            setcookie('target', '', time() - 3600);
        }else if($guess < $target){
            echo "Your guess is too low";
        }else{
            echo "Your guess is too high";
        }
    }
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<?php if (!isset($gameOver)): ?>
    <h2>Guess the number</h2>
    <p>I have a number between 0 and 10. Can you guess it?</p>
    <p>Enter your guess and click submit</p>
    <form action="" method="post">
    <label for="">Enter your guess</label><br>
    <input type="text" name="guess">
    <input type="submit" name="submit" value="Submit">
    </form>
<?php else: ?>
    <p>Game over. Please refresh the page to play again</p>
<?php endif; ?>

</body>
</html>