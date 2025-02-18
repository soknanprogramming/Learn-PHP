<?php
include "Dbh.php";

class Users extends Dbh{
    protected function getUser(int $userID){
        $sql = "SELECT * FROM user_tbl WHERE user_id = ?";
        $stmt = $this->connect()->prepare($sql);
        $stmt->execute([$userID]);

        $result = $stmt->fetchAll();
        return $result;
    }

    protected function setUser(string $username, string $pwd){
        $sql = "INSERT INTO user_tbl(user_name, user_password) VALUE(?,?)";
        $stmt = $this->connect()->prepare($sql);
        $stmt->execute([$username, $pwd]);
    }
}