<?php
$password = "1234";

$hash_pass = password_hash($password, PASSWORD_DEFAULT);

if(password_verify("12343", $hash_pass)){
    echo "This password is true <br>";
}
else{
    echo "This password is not true <br>";
}

?>