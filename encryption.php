<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
 <?php
    if(isset($_POST['submit'])){
        $data = $_POST['data'];
        //string openssl_encrypt( string $data, string $method, string $key,
        // $options = 0, string $iv, string $tag= NULL,
        // string $aad, int $tag_length = 16  )
        $method = 'AES-256-CBC';
        $key = 'saisoesan';
        $iv_length = openssl_cipher_iv_length($method);
        $options = 0;
        $encrypted_data = openssl_encrypt($data, $method, $key, $options, $encryption_iv);
        echo "Encrypted String: " . $encrypted_data . "\n";

        echo "<br>";
        $decrypted_data = openssl_decrypt($encrypted_data, $method, $key, $options, $encryption_iv);
        echo "Decrypted String: " . $decrypted_data . "\n";
    }

?>
    <h2>Encryption</h2>
    <form action="" method="post">
        <input type="text" name="data">
        <input type="submit" name="submit" value="Submit">
    </form>
</body>
</html>