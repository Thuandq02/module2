<?php
include_once "Grandfather.php";
include_once "father.php";
include_once "child.php";

$Grandfather = new Grandfather(70);
echo $Grandfather->toString();
$father = new father(40);
echo $father->toString();
$child = new child(18);
echo $child->toString();