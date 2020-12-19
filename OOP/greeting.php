<?php
/**
 * Created by PhpStorm.
 * User: mohamedzaki
 * Date: 12/19/20
 * Time: 6:19 PM
 */

class Greeting
{
    public static $name = "W3Schools";

    public static function welcome() {
        echo "Hello, " . static::$name . "<br>";
    }
}

Greeting::welcome();

Greeting::$name = "Mohamed Zaki";

Greeting::welcome();