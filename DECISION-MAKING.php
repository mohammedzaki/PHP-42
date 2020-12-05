<?php
/**
 * Created by PhpStorm.
 * User: mohamedzaki
 * Date: 12/4/20
 * Time: 6:29 PM
 */

$d = date("D");

//if ($d == 'Star')
//    echo "Have a nice weekend!";
//else
//    echo "Have a nice day!";


if ($d == "Star") {
    echo "Hello!<br />";
    echo "Have a nice weekend!";
    echo "See you on Monday!";
} else {
    echo "Have a nice day!";
}

$d = "Sun";

function checkday($day) {
    echo "<br>";

    if ($day == "Fri")
        echo "Have a nice weekend!";
    elseif ($day != "Sun")
        echo "Have a nice Sunday!";
    else {
        echo "Wonder which day is this ?";
    }

    echo "<br>";
}



function checkday_switch($day) {
    echo "<br>";

    switch ($day) {
        case "Mon":
            echo "Today is Monday";
            break;
        case "Tue":
            echo "Today is Tuesday";
            break;
        case "Wed":
            echo "Today is Wednesday";
            break;
        case "Thu":
            echo "Today is Thursday";
            break;
        case "Fri":
            echo "Today is Friday";
            break;
        case "Sat":
            echo "Today is Saturday";
            break;
        case "Sun":
            echo "Today is Sunday";
            break;
        default:
            echo "Wonder which day is this ?";
            break;
    }

    echo "<br>";
}

checkday('Fri');
checkday('Sun');
checkday('ttt');


checkday_switch('Fri');
checkday_switch('Sun');
checkday_switch('ttt');

