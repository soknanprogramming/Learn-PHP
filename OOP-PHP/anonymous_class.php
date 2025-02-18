<?php

$obj = new class(){
    public function helloWord(){
        echo "Hello World! <br>"; 
    }
};


$obj->helloWord();


$objSnTest = new class("Human"){
    private string $name;
    private string $type;
    public function __construct(string $type){
        $this->type = $type;
    }
    public function setName(string $name){
        $this->name = $name;
    }
    public function getName(){
        return $this->name;
    }
    public function getType(){
        return $this->type;
        
    }
};

$objSnTest->setName("soknan");
$name = $objSnTest->getName();
$type = $objSnTest->getType();

echo "name is {$name} and type is the {$type} <br>";


?>