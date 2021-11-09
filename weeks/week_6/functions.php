<?php //functions

function sayHello()
{
    echo 'This is my say hello content!';
}

sayHello();

echo '<br>';

function sayHello2($name)
{
    echo 'Hello' . $name . '';
}

sayHello2(' Devvy');

echo '<br>';

sayHello2(' Brittney');

echo '<br>';

sayHello2(' Brittny');

echo '<br>';

sayHello2(' Bean');

echo '<br>';

function sayHello3($name, $age)
{
    echo 'My name is ' . $name . ' and I am ' . $age . ' years old.';
}

sayHello3('Devvy', 30);

echo '<br>';

sayHello3('Brittney', 29);

echo '<br>';

sayHello3('Bean', 4);

echo '<br>';

function cube($n)
{
    $cubing = pow($n, 3);
    echo '' . $n . ' cubed is ' . $cubing . '.';
}
cube(53);

echo '<br>';

function celc_conv($temp)
{
    $faren = ($temp * 9 / 5) + 32;
    return $faren;
}

$faren = celc_conv(100);
echo '' . $faren . ' degrees farenheit.';
echo '<br>';

function area_volume($l, $w, $h)
{
    $area = $l * $w;
    $volume = $l * $w * $h;
    return array($area, $volume);
}
// $my_return = area_volume(10, 5, 10);
// echo '<b>Area:</b> ' . $my_return[0] . '<br>';

// echo '<b>Volume:</b> ' . $my_return[1] . '<br>';
list($my_area, $my_volume) = area_volume(12, 10, 6);
echo '<b>Area:</b> ' . $my_area . '<br>';

echo '<b>Volume:</b> ' . $my_volume . '<br>';