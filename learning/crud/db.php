<?php
    $hostName = 'localhost';
    $userDB = 'root';
    $passwordDB = '';
    $dbName = 'test';
    $conn = '';
    try{
        $conn = mysqli_connect($hostName, $userDB, $passwordDB, $dbName);
    }
    catch(mysqli_sql_exception){
        echo "Something error! <br>";
    }
    
?>