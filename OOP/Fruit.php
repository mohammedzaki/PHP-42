<?php
/**
 * Created by PhpStorm.
 * User: mohamedzaki
 * Date: 12/19/20
 * Time: 3:58 PM
 */

class Fruit {

    //Constants

    const TYPE = 'Fruit';

    public static $f_name = "W3Schools";
    private static $s_name = "W3Schools";

    // public , private, protected
    // Properties or Fields
    protected $_name;
    private $_color;
    private $_weight;

    // Constructor
    public function __construct($name, $color = "") {
        $this->_name = $name;
        $this->_weight = 5;
        $this->_color = $color;
    }

    // Destructor
    public function __destruct()
    {
        // echo "Destruct The fruit is {$this->_name}. <br>";
    }

    // Methods or Functions
    function set_name($name) {
        $this->_name = $name;
    }
    function get_name() {
        return $this->_name;
    }

    function set_color($color) {
        $this->_color = $color;
    }
    function get_color() {
        return $this->_color;
    }

    function set_weight($weight) {
        $this->_weight = $weight;
    }
    function get_weight() {
        return $this->_weight;
    }

    public function intro() {

        echo "The fruit is {$this->_name} and the color is {$this->_color}. <br>";
    }
}


$apple = new Fruit('Apple');
$mango = new Fruit('Mango');


echo  Fruit::TYPE;

//
$apple->set_name('Apple');

$mango->set_name('Mango');


echo "Fruit name is " . $apple->get_name() . " <br> ";
echo "weight is " . $apple->get_weight() . " <br> ";

echo "Fruit name is " . $mango->get_name() . " <br> ";
echo "weight is " . $mango->get_weight() . " <br> ";


