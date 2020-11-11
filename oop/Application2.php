<?php


class Application2{

    private static $instance;
    public static function getInstance(){
        if (self::$instance === null){
            self::$instance = new Application2();
        }
        return self::$instance;
    }

}
$app1 = Application2::getInstance();
$app2 = Application2::getInstance();