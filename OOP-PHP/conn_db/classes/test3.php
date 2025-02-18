<?php
include 'dbh.php';

class Test extends Dbh{
    public function getUsers(){
        $query = "SELECT * FROM user_tbl";
        $stmt = $this->connect()->query($query);
        while($row = $stmt->fetch()){
            foreach($row as $key => $value){
                echo "{$key} => {$value} <br>";
            }
            echo "<hr>";
        }
    }
}

(new Test())->getUsers();

?>