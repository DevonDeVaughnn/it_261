<?php
//for every number from 1 - 21, count by 3
for ($x = 0; $x <= 21; $x += 3) {
    echo "The number is: $x <br>";
}
echo '<br>';
// for loop for our famous celcius - farenheit converter

// dont call celcius outside of loop
for ($celcius = 0; $celcius <= 100; $celcius += 5) {
    $faren = ($celcius * 9 / 5) + 32;
    $friendly_faren = floor($faren);
    echo '<b style="color: maroon; ">Farenheit: </b><span style ="font-weight: bold;">' . $friendly_faren . '</span> = <b style="color: cornflowerblue;">  Celcius: </b> <span style="font-weight: bold">' . $celcius . '</span><hr>';
}

// kilometers and miles
for ($miles = 0; $miles <= 100; $miles += 5) {
    $km = $miles * 1.609344;
    $friendly_km = number_format($km, 1);
    echo '<b>Miles: </b>' . $miles . '  <b>= Kilometers: </b>' . $friendly_km . '<hr>';

}