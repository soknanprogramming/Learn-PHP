<?php
include 'Users.php';

class UsersView extends Users{
    public function showUser(int $userId){
        $result = $this->getUser($userId);
        echo "Username is {$result[0]['user_name']} <br>";
    }
}

// $objUsersView = new UsersView();
// $objUsersView->showUser(12);