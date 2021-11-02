<?php
//More on variables
$a = '20';
$b = '30';
$c = $a + $b;
echo $c;
echo '<br>';

$a = '700';
$b = '330';
$c = $a - $b;
echo $c;
echo '<br>';

$a = '50';
$b = '5';
$c = $a * $b;
echo $c;
echo '<br>';

$money = 100;
$money /= 7;
echo $money;
echo '<br>';

$money = 100;
$money /= 7;
$friendly_money = number_format($money, 2);
echo $friendly_money;
echo '<br>';

//rounds down
$friendly_money = floor($money);
echo $friendly_money;
echo '<br>';

//rounds up
$friendly_money = ceil($money);
echo $friendly_money;
echo '<br>';

//logic and calculations
//circumference of a circle = 2pi(r)
$pi = 3.14159;
$rad = '10';
$circ = (2 * $pi) * $rad;
$format_circ = number_format($circ, 1);
echo $format_circ;
echo '<br>';

//always think logic first
// 22 degrees celcius = ??? farenheit
$celcius = 14;
$farenheit = ($celcius * 9 / 5) + 32;
$friendly_far = floor($farenheit);
echo '' . $friendly_far . ' degrees';
echo '<br>';

//logic and the exchange rate.
// canadian = 100
// exchange rate = .79

$canada = 1433;
$canada *= .79;
echo $canada;
echo '<br>';
echo '<p>I have <b style = "color:indigo;">$' . $canada . '</b> American!</p> ';
echo '<br>';

$canada = 1433;
$canada *= .79;
$friendly_canada = floor($canada);
echo '<p>I have <b style = "color:cornflowerblue;">$' . $friendly_canada . '</b> American!</p> ';