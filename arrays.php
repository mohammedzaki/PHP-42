<?php
/**
 * Created by PhpStorm.
 * User: mohamedzaki
 * Date: 12/5/20
 * Time: 4:04 PM
 */

echo "<br> <br> Numeric Arrays <br> <br>";

//             0,         1,         2,         3       4
$names    = array('Mohamed', 'Ibrahim', 'Mamdouh', 'Alaa', 'Zaki'); // count is 4 items
$names[5] = "Zafff";

$max = count($names);

for ($i = 0; $i < $max; $i++) {

    echo "Hello World, {$names[$i]} <br>";
}

echo " ===> foreach start <=== <br>";

foreach ($names as $item) {

    echo "Hello World, {$item} <br>";
}

$numbers = [];

$numbers[0] = "one";
$numbers[1] = "two";
$numbers[2] = "three";
$numbers[3] = "four";
$numbers[4] = "five";
foreach ($numbers as $value) {
    echo "Value is $value <br />";
}

echo "<br> <br> Associative Arrays <br> <br>";

$salaries = [
    // key    => Value
    'mohamed' => 2000,
    'ibrahim' => 1000,
    'ahmed'   => 1500,
    9         => 3000
];

$salaries['ahmed'] = 3000;

echo "Salary of Mohammad is " . $salaries['mohamed'] . "<br />";
echo "Salary of Ibrahim is " . $salaries['ibrahim'] . "<br />";
echo "Salary of Ahmed is " . $salaries['ahmed'] . "<br />";

echo "<br> <br> Associative Arrays Loop <br> <br>";

foreach ($salaries as $key => $salary) {
    echo "Salary of {$key} is {$salary}<br />";
}

echo "<br> <br> Multidimensional Arrays <br> <br>";

$marks_num  = [
    [
        "physics"   => 35,
        "maths"     => 30,
        "chemistry" => 39
    ],
    [
        "physics"   => 30,
        "maths"     => 32,
        "chemistry" => 29
    ],
    [
        "physics"   => 31,
        "maths"     => 22,
        "chemistry" => 39
    ]
];

$marks_assc = [
    "mohammed" => [
        "physics"   => 35,
        "maths"     => 30,
        "chemistry" => 39
    ],
    "qadir"    => [
        "physics"   => 30,
        "maths"     => 32,
        "chemistry" => 29
    ],
    "zara"     => [
        "physics"   => 31,
        "maths"     => 22,
        "chemistry" => 39
    ]
];

echo "Marks for mohammad in physics : " ;
echo $marks_assc['mohammed']['physics'] . "<br />";


echo "Numeric Array Marks for qadir in maths : ";
echo $marks_num[1]['maths'] . "<br />";


echo "Marks for zara in chemistry : " ;
echo $marks_assc['zara']['chemistry'] . "<br />";