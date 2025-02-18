<?php
include('database.php');

if(isset($_GET['id'])){
    $id = $_GET['id'];
    $sql = "DELETE FROM user_tbl WHERE user_id = '$id'";
    mysqli_query($conn, $sql);

    header("Location: query.php");
}
else{
    die("Something was wrong");
}

?>