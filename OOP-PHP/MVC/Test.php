<?php

include 'Dbh.php';

class Test extends Dbh{
    public function getUsers(){
        $sql = "SELECT * FROM user_tbl";
        $stmt = $this->connect()->query($sql);
        while($row = $stmt->fetch()){
            echo $row['user_name'] . "<br>";
        }
    }
    public function getUsersStmt(int $userID){
        $sql = "SELECT * FROM user_tbl WHERE user_id = ?";
        $stmt = $this->connect()->prepare($sql);
        $stmt->execute([$userID]);
        $names = $stmt->fetchAll();

        foreach($names as $name){
            foreach($name as $key => $value){
                echo "{$key} => {$value} <br>";
            }
            echo "<hr>";
        }
    }
}

// $objTest = new Test();
// $objTest->getUsersStmt(12);