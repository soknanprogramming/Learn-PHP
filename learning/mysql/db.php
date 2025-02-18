<?php
$hostDB = "localhost";
$userDB = "root";
$passDB = "";
$dbName = "test";
$conn = "";

try{
    $conn = mysqli_connect($hostDB, $userDB, $passDB, $dbName);
}
catch(mysqli_sql_exception){
    echo "Connection is error!";
}

?>