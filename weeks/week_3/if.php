<?php
//if statement
//LOGIC - if the temp is less than 90 degrees, all is well. else, its going to be a cooker

$temp = 91;
if ($temp <= 90) {
    echo 'Not that hot';
} else {
    echo 'It\'s a scorcher';
}
echo '<br>';

$temp = 87;
if ($temp <= 76) {
    echo 'It is liveable';
} elseif ($temp <= 85) {
    echo 'It\s getting hotter';
} else {
    echo 'It\'s really hot';
}

// fun with logic
// if my sales > 800000, I will make 10% bonus of my base salary
// if sales >= 600000, I will make a 5% bonus
//else no bonus

$sales = 800000;
$salary = 200000;
if ($sales > 800000) {
    $salary *= 1.10;
} elseif ($sales >= 600000) {
    $salary *= 1.05;
} else {
    $salary *= 1;
}
echo '<br>';
echo '$ ' . $salary . '';