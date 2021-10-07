<?php
$x = 14;
$y = 6;

function myTest()
{
    global $x;
    echo "<p>variable x inside function is:$x</p>";
}
myTest();
function staticfun()
{
    static $a = 30;
    echo ++$a;
}
staticfun();
echo "<br>";
staticfun();
echo "<br>";
staticfun();
echo "<br>";

$arr = ['10', 10, true, 10.5];
var_dump($arr);
echo "<br>";
//some bulting funtion
$str = "Arif Hossain";
//echo strlen($str);
//echo str_word_count($str);
//echo strrev($str);
//echo strrpos($str, "f");
//echo str_replace('Hossain', 'Khan', $str);
$num = 50;
var_dump($num);
echo "<br>";
if (is_int($num)) {
    echo "number";
} else {
    echo "Not number";
}
echo "<br>";
//casting float value
// $x = 23465.768;
// $int_cast = (int)$x;
// echo $int_cast;

// echo "<br>";

// // Cast string to int
// $x = "23465.768";
// $int_cast = (int)$x;
// echo $int_cast;


//math function
echo (pi());
//min max
echo "<br>";
// echo (min(0, 150, 30, 20, -8, -200));
// echo "<br>";
// echo (max(0, 150, 30, 20, -8, -200));

//positve value
//echo (abs(-6.7));
//root value
//echo (sqrt(64));

//random number
// echo (rand());
// echo "<br>";
// echo (rand(10, 100));
//constant. consatant can there 3 perameter
// define("MESSAGE", "Hello JavaTpoint PHP");
// echo MESSAGE;
// define("cars", [
//     "Alfa Romeo",
//     "BMW",
//     "Toyota"
// ]);
// echo cars[0];

//magic constant
//echo "Current line is " . __LINE__ . "<br>";
//echo "Current file is " . __FILE__ . "<br>";
//echo "Current path is " . __DIR__ . "<br>";

//operator


//control statement
// $x = 10;
// if ($x >= 10) {
//     echo "right";
// } else if ($x == 100) {
//     echo "100";
// } else {
//     echo "nothing";
// }
//nested if
// $a = 34;
// $b = 56;
// $c = 45;
// if ($a < $b) {
//     if ($a < $c) {
//         echo "$a is smaller than $b and $c";
//     }
// }

//loop
// for ($i = 1; $i <= 10; $i++) {
//     echo $i . "<br>";
// }
//while loop
// $i = 1;
// while ($i <= 10) {
//     echo  $i . "<br>";
//     $i++;
// }

//foreach
// $color = ['red', 'green', 'blue'];
// foreach ($color as $key => $valu) {
//     echo $valu . "<br>";
// }

//switch case
// 


//function
// function funName($pera)
// {
//     echo "Hello function" . "<br>";
// }
// funName('test');
// funName('test2');
// funName('test3');
// function returnIndexFromArray($arr, $val)
// {
//     foreach ($arr as $key => $value) {
//         if ($value == $val) {
//             return $key;
//         }
//     }
//     return -1;
// }
// $ourArray = [10, 20, 30, 40, 50];
// echo returnIndexFromArray($ourArray, 50);

// Input from user
// $a = 20
$a = (int)readline('Enter an integer: ');

// $b = 20.12
$b = (float)readline('Enter a floating'
    . ' point number: ');

// Entered integer is 20 and
// entered float is 20.12
echo "Entered integer is " . $a
    . " and entered float is " . $b;
