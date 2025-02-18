<?php 
include "Users.php";

class UsersController extends Users{
    public function createUser(string $username, string $pwd){
        $this->setUser($username, $pwd);
    }
}

$objTesting = new UsersController();
$objTesting->createUser("SSS", "aaa");
