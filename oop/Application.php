<?php

class application
{
    private $name;
    public static $count = 0;

    public function __construct($name)
    {
        $this->name = $name;
        self::$count++;
    }
    public function __toString()
    {
        return "application name: ".$this->name;
        // TODO: Implement __toString() method.
    }

}
echo "total objects count: ".application::$count."<br>";
$app1 = new application("App pne");
echo "total objects count: ".application::$count."<br>";
$app2 = new application("App two");
echo "total objects count: ".application::$count."<br>";
echo $app1."<br>";
echo $app2."<br>";
