<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
</head>
<body>
    <?php
        if(isset($_POST['submit'])){
            $username = $_POST['username'];
            $password = $_POST['password'];
            $data = file_get_contents('/Applications/XAMPP/xamppfiles/htdocs/phpInterview/users.txt');
            $users = explode("\n", $data);
            foreach($users as $user){
                $user = explode(',', $user);
                if($user[0] == $username && password_verify($password, $user[1])){
                    $loggedInUsername = $user[0];
                    $login = true;
                    break;
                }
            }
            if(!isset($login)){
                $message = "login fail";
            }else{
                setcookie('username', $loggedInUsername, time() + 3600);
                $_COOKIE['username'] = $loggedInUsername;
            }
        }
    ?>
    <?php if(!isset($login) && !isset($_COOKIE['username'])): ?>
       <?php if(isset($message)): ?>
            <p><?php echo $message; ?></p>
        <?php endif; ?>
        <form action="" method="post">
            <h2>Login</h2>
            <label for="username">Username:</label>
            <input type="text" id="username" name="username"><br><br>
            <label for="password">Password:</label>
            <input type="password" id="password" name="password"><br><br>
            <input type="submit" name="submit" value="Login">
        </form>
    <?php else: ?>
        <p>Welcome <?php echo $_COOKIE['username'] ?></p>
    <?php endif; ?>
</body>
</html>