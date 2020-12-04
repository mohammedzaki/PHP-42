<?php
/**
 * Created by PhpStorm.
 * User: mohamedzaki
 * Date: 12/4/20
 * Time: 4:42 PM
 */

// DataTypes

$first_num = 5;
$second_num = 6;

$result = $first_num + $second_num;

echo "Sum is: " . $result;

echo "<br>";

echo "Sum plus 5: " . ($result + 5);

echo "<br>";

// Local variables

echo "Local variables <br>";
$x = 4;

function assignx() {

    $x = 0;

    print "X inside function is " . $x;

}

assignx();
echo "<br>";

print "X outside function is " . $x;

echo "<br>";

// Function parameters

echo "Function parameters <br>";

function multiply($value) {

    return $value * 10;
}

$retval = multiply(15);

Print "Return value is $retval\n";

echo "<br>";

// =======

function multiply_two($fn, $sn) {

    return $fn * $sn;
}

$retval_two = multiply_two(15, 5);

Print "Return value is $retval_two\n";

echo "<br>";
// Global variables

echo "=> Global variables <br>";

$somevar = 15;

function addit() {
    global $somevar;

    $somevar = $somevar + 1;

    echo "Somevar is $somevar <br>";
}

addit();
addit();
addit();

//Static variables

echo "=> Static variables <br>";

function keep_track() {
    STATIC $count = 10;

    $count++;

    $count = $count + 2;

    echo "Count is $count <br>";
}

keep_track(); // 10
keep_track(); // 11
keep_track(); // 3
keep_track(); // 4
keep_track(); // 5
