<?php
/**
 * Created by PhpStorm.
 * User: mohamedzaki
 * Date: 12/4/20
 * Time: 6:11 PM
 */

$a = 43;
$b = 20;

$c = $a + $b;
echo "Addition Operation Result: $c <br/>";

$c = $a - $b;
echo "Subtraction Operation Result: $c <br/>";

$c = $a * $b;
echo "Multiplication Operation Result: $c <br/>";

$c = $a / $b;
echo "Division Operation Result: $c <br/>";

$c = $a % $b;
echo "Modulus Operation Result: $c <br/>";

$c = $a++;
echo "Increment Operation Result: $c <br/>";

$c = $a--;
echo "Decrement Operation Result: $c <br/>";



echo "<br> => Assignment Operators: <br><br>";

$a = 42;
$b = 20;
$c = $a + $b; /* Assignment operator */
echo "Addition Operation Result: $c <br/>";

$c += $a; /* c value was 42 + 20 = 62 */
echo "Add AND Assignment Operation Result: $c <br/>";
$c -= $a; /* c value was 42 + 20 + 42 = 104 */
echo "Subtract AND Assignment Operation Result: $c <br/>";
$c *= $a; /* c value was 104 - 42 = 62 */
echo "Multiply AND Assignment Operation Result: $c <br/>";
$c /= $a; /* c value was 62 * 42 = 2604 */
echo "Division AND Assignment Operation Result: $c <br/>";
$c %= $a; /* c value was 2604/42 = 62*/
echo "Modulus AND Assignment Operation Result: $c <br/>";


