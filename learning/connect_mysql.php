<?php
    $host_db = "localhost";
    $user_db = "root";
    $password_db = "";
    $db_name = "test";
    $conn = "";

    try{
        $conn = mysqli_connect($host_db, $user_db, $password_db, $db_name);
    }
    catch(mysqli_sql_exception){
        echo "Could not connect!";
    }

    if($conn){
        echo "You are connected!";
    }

?>