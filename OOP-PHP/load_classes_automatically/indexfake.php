<?php

    include 'include/include.php';
    include 'class/person.php';
    //include 'class/house.php';
    try{
        $person1 = new Person\Person("Daniel", 28);
    echo $person1->getPerson() . "<br>";
    } catch(TypeError $e){
        echo "Erroe!: " . $e->getMessage();
    }

    $house1 = new House("kt");
    echo $house1->getAddress() . "<br>";


?>  