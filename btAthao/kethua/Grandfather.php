<?php

class Grandfather
{
    public $age;

    public function __construct($age)
    {
        $this->age = $age;
    }

    public function getAge()
    {
        $this->age = $age;
    }

    public function getRun()
    {
        return "10km/h";
    }

    public function toString()
    {
        return "ông chạy  " . $this->getAge() ." ". $this->getRun() . "<br/>";
    }
}