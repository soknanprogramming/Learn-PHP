<?php
include 'dbh.php';

class Test extends Dbh{
    public static function getUsers(){
        $query = "SELECT * FROM user_tbl";
        //$fakethis = new self();
        $fakethis = new parent();
        $stmt = $fakethis->connect()->query($query);
        while($row = $stmt->fetch()){
            foreach($row as $key => $value){
                echo "{$key} => {$value} <br>";
            }
            echo "<hr>";
        }
    }
}

Test::getUsers();

?>