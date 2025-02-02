<?php
    $username = "Bro Code";
    $phone = "123-456-7890";

    $lowercase = strtolower($username);
    $uppercase = strtoupper($username);
    $trim = trim($username);
    // trimming is remove whitespace
    $stringpad = str_pad($username, 20, "T");
    $strreplace = str_replace("-", "", $phone);
    $strrev = strrev($username);
    $strshuffle = str_shuffle($username);
    $equals = strcmp($username, "Bro Code");
    // strcmp stand from string compare
    $count = strlen($phone);
    $index = strpos($phone, "-"); // by $phone = "123-456-7890" the value of $index is 3
    $firstname = substr($username, 0, 3); // $username = "Bro Code" the result is "Bro"
    $fullname = explode(" ", $username);

    foreach($fullname as $name){
        echo $name . "<br>";
    }
?>