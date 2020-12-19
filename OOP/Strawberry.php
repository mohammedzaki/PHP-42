<?php
/**
 * Created by PhpStorm.
 * User: mohamedzaki
 * Date: 12/19/20
 * Time: 5:50 PM
 */

require_once "/Applications/mampstack-7.4.10-0/apache2/htdocs/php-42/OOP/Fruit.php";

class Strawberry extends Fruit {

    public function __construct($color) {
        $this->_name = "Strawberry";
        $this->set_color($color);
    }

    public function message() {
        echo "Am I a fruit or a berry? ";
    }
}

$strawberry = new Strawberry("red");
$strawberry->intro();