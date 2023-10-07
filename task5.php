<?php
function generatePassword($length) {
    $chars = 'abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ0123456789!@#$%^&*()_+';
    $password = '';

    for ($i = 0; $i < $length; $i++) {
        $randomIndex = rand(0, strlen($chars) - 1);
        $password .= $chars[$randomIndex];
    }

    return $password;
}

// Specify the length of the password
$passwordLength = 12;

// Generate a random password
$password = generatePassword($passwordLength);

// Print the generated password
echo "Generated Password: $password\n";
?>
