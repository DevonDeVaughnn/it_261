<?php
// echo date("l  jS \of  F Y h:i:s A");
// echo '<br>';
// echo date("H:i A");
// echo '<br>';
// date_default_timezone_set('America/Los_Angeles');
// echo date("Hi");
//why did I change the time from a 12 hour clock to a 24 hour clock???
//Using an if/elseif statement
//if time is less than 11, its morning
//if time time is less than 1600, its afternoon
//if time is greater than 2000, its night
//else, its evening
date_default_timezone_set('America/Los_Angeles');
$time = 2000;
$name = "Devvy";

echo $time;
echo '<br>';

if ($time <= 1100) {
    echo '<h2>Good Morning <span style="color:orange">' . $name . '</span></h2>';
} elseif ($time <= 1600) {
    echo '<h2>Good Afternoon <span style="color:cornflowerblue">' . $name . '</span></h2>';
} elseif ($time <= 2000) {
    echo '<h2>Are you having a good evening <span style="color:brown">' . $name . '</span>?</h2>';
} else {
    echo '<h2>How is your night going <span style="color:indigo">' . $name . '</span>?</h2>';
}