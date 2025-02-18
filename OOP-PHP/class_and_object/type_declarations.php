<?php

class Test{
    private string $name;
    protected string $gender;
    public int $age;

    public function setValue(string $name, string $gender, int $age){
        $this->name = $name;
        $this->gender = $gender;
        $this->age = $age;
    }
}


?>