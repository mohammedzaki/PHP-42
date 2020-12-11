<?php
/**
 * Created by PhpStorm.
 * User: mohamedzaki
 * Date: 12/11/20
 * Time: 4:09 PM
 */

$fname = '';
$sname = '';

if (isset($_REQUEST['fname'])) {
    $fname = $_REQUEST['fname'];
}
if (isset($_REQUEST['sname'])) {
    $sname = $_REQUEST['sname'];
}


function writeName($fn, $sn = "fggf") {
    echo "Welcome $fn $sn";
}

function addFunction($num1, $num2): int
{
    $sum = $num1 + $num2;
    return $sum;
}

writeName($fname, $sname);

   echo  "<br />";

writeName($fname);

$res = addFunction(4 , 5);

echo "<br/> 4 + 5 = " . $res;

// ==================================

echo "<br/><br/><br/><br/><br/>";

function sayHello($name)
{
    echo "Hello, $name";
}

$function_handler = "sayHello";
$function_handler("dadas dsada");
