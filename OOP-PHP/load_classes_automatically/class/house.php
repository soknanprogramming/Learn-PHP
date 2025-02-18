<?php

class House{
    private $city;
    private $number;

    public function __construct(string $city, int $number=10){
        $this->city = $city;
        $this->number = $number;
    }

    public function getAddress(){
        $address = $this->city . " " . $this->number;
        return $address;
    }
}

?>