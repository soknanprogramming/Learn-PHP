<?php
include 'Dbh.php';

class Test extends Dbh{
    public function getUsers(){
        $sql = "SELECT * FROM user_tbl";
        $stmt = $this->connect()->query($sql);

        while($row = $stmt->fetch()){
            foreach($row as $key => $value){
                echo "{$key} => {$value} <br>";
            }
            echo "<hr>";
        }
    }

    public function getUserStmt($userName){
        $sql = "SELECT * FROM user_tbl WHERE user_name = ?";
        $stmt = $this->connect()->prepare($sql);
        $stmt->execute([$userName]);
        $names = $stmt->fetchAll();

        foreach ($names as $name){
            foreach($name as $key => $value){
                echo "{$key} => {$value} <br>";
            }
            echo "<hr>";
        }
    }

    public function setUserStmt($userName, $userPwd){
        $sql = "INSERT INTO user_tbl(user_name, user_password) VALUE(?,?)";
        $stmt = $this->connect()->prepare($sql);
        $stmt->execute([$userName, $userPwd]);
    }
}

 $test = new Test();
//$test->setUserStmt("sreypin", "lkjhgfdsa");
$test->getUserStmt('sreypin');
