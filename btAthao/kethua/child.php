<?php
include_once('father.php');

class child extends father
{
    public function __construct($age)
    {
        parent::__construct($age);
    }
    public function getRun()
    {
        return "30km/h";
    }
    public function getSing()
    {
        return "Hát không hay";
    }
    public function toString()
    {
        return "con chạy ".$this->getAge()." ".$this->getRun()." ".$this->getSing()."<br/>";
    }
}