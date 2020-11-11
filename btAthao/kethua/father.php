<?php
include_once('Grandfather.php');

class father extends Grandfather
{
    public function __construct($age)
    {
        parent::__construct($age);
    }

    public function getRun()
    {
        return "20km/h";
    }

    public function getSing(){
        return "Hát hay";
    }

    public function toString()
    {
        return "cha chạy ".$this->getAge()." ".$this->getRun()." ".$this->getSing()."<br/>";
    }
}
