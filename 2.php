<?php

$username = usernameCheck("usernam");
$password = passwordCheck("paS5word@");
echo "Username : " . $username;
echo "\nPassword : " . $password;

function usernameCheck($username){
    $status = "Tidak Cocok!";
    if (strlen($username) < 8 AND strlen($username) > 4 AND strtolower($username) == $username){
        $status = "Cocok!";
    }
    return $status;
}

function passwordCheck($pass){
    $status = "Tidak Cocok!";
    if (preg_match('/^(?=.*\d)(?=.*[@])(?=.*[a-z])(?=.*[A-Za-z])[0-9A-Za-z!@#$%]{9}$/', $pass)){
        $status = "Cocok!";
    }
    return $status;
}