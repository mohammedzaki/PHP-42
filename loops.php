<?php
/**
 * Created by PhpStorm.
 * User: mohamedzaki
 * Date: 12/5/20
 * Time: 3:29 PM
 */

//function display_product($id, $name, $price) {
//
//    echo "<div> products code: $id <br> name: $name <br> price: $price </div>";
//
//}

$a = 0;
$b = 0;

for ($i = 0; $i < 10; $i++) {
//    if ($b > 10) {
//        break;
//    }

    if ($i == 5) continue;

    $a += 10;
    $b += 5;
}

echo "At the end of the loop a=$a and b=$b <br>";



$i   = 0;
$num = 50;

while ($i < 10) {
    $num--;
    $i++;

}

echo("Loop stopped at i = $i and num = $num <br>");

$iX = 0;
$numX = 0;

do {
    $iX++;
    $numX += 10;
} while ($iX > 10);

echo("Loop stopped at iX = $iX and numX = $numX <br>");
