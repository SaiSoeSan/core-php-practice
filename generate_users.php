<?php

error_reporting(E_ALL);
ini_set('display_errors', 'On');

generate_users(10);


function generate_users($num_users) {
    $users = [];
    for ($i = 0; $i < $num_users; $i++) {
        $user = [
            'name' => generate_name(),
            'password' => generate_password()
        ];
        $users[] = $user;
    }
    store_users($users);
}

function store_users($users) {
    $filePath = '/Applications/XAMPP/xamppfiles/htdocs/phpInterview/users.txt';
    $file_content = '';
    foreach ($users as $user) {
        $file_content .= $user['name'] . ',' . $user['password'] . "\n";
    }
    if (!file_put_contents($filePath, $file_content, FILE_APPEND)) {
        echo "Failed to write to file";
    } else {
        echo "Data written to file successfully";
    }
}

function generate_name() {
    $first_names = ['John', 'Jane', 'Alice', 'Bob', 'Charlie', 'David', 'Eve', 'Frank', 'Grace', 'Henry'];
    $name = $first_names[array_rand($first_names)];
    return strtolower($name);
}

function generate_password() {
    return password_hash("admin", PASSWORD_DEFAULT);
}  

?>