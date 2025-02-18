<?php
require('db.php');
if(isset($_GET['id'])){
    $id = (int)$_GET['id'];
    $query = "DELETE FROM user_tbl WHERE user_id = $id";

    try{
        mysqli_query($conn, $query);

        header("Location: rud.php");
        exit;
    }
    catch(mysqli_sql_exception){
        // some statement
        die("Mabey wrong ID");
    }
}

?>