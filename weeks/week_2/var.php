<?php
$name = 'Devvy';
$weather = 'Today is a sunny day';
$body_temp = 98.6;

echo $name;
echo ' My name is $name';
echo '<br>';
echo "My name is $name";
echo '<br>';
//if use single quote around variable, the value will not display

echo 'My name is ' . $name . '';
echo '<br>';
echo $body_temp;
echo '<br>';
echo 'The normal body temperature is ' . $body_temp . ' and all is well!';
echo '<br>';
$name = 'DeVaughn';
echo $name;
echo '<br>';
$x = 20;
$y = 5;
echo $x;
echo '<br>';
$z = $x + $y;
echo '<br>';
echo $z;
echo '<br>';
$z = $x * $y;
echo '<br>';
echo $z;
echo '<br>';
// Continue with name
$first_name = "Devvy";
$last_name = "DeVaughn";

echo $first_name . ' ' . $last_name;
echo '<br>';
echo ' ' . $first_name . ' ' . $last_name . '';
echo '<br>';
echo 'Here are the names with a single quote! ' . $first_name . ' ' . $last_name . ' ';
//punction challenges - inside single quotes, you MUST nest the variable with the following: '.$variable.' ... use \ when you have an apostrophe
echo '<br>';
echo "Here are the names with double quotes! $first_name$last_name";
echo '<br>';
$name = 'Darrian';
$name .= 'Duke';
echo '<br>';
echo $name;
echo '<br>';
$x = 20;
$x *= 2;
echo $x;

echo '<br>';

$x = 120;
$x /= 2;
echo $x;

echo '<br>';

$x = 120;
$x *= .09;
echo $x;

echo '<br>';

//our first function - number_format()
$x = 137;
$x /= 4;
$friendly_x = number_format($x, 1);
echo $friendly_x;

//our preset second function: date function
echo '<br>';
echo date('Y');
echo '<br>';
echo date('l');

// arrays
echo '<br>';
$fruit[] = 'orange';
$fruit[] = 'banana';
$fruit[] = 'grapes';
$fruit[] = 'apples';
$fruit[] = 'cherries';
echo '<br>';
echo $fruit[3];
// another way to write arrays
$fruit = array(
    'orange',
    'banana',
    'grapes',
    'apples',
    'cherries',
);

//another way

$fruit = [
    'orange',
    'banana',
    'grapes',
    'apples',
    'cherries',
    'strawberries',
];
echo '<br>';
//CANNOT echo an array!
print_r($fruit);
echo '<br>';
var_dump($fruit);

echo '<br>';
// another array in the world of websites

$nav[] = 'Home';
$nav[] = 'About';
$nav[] = 'Daily';
$nav[] = 'Contact';
$nav[] = 'Gallery';
echo $nav[0];

echo '<br>';

// associative array
$nav['index.php'] = 'Home';
$nav['about.php'] = 'About';
$nav['daily.php'] = 'Daily';
$nav['contact.php'] = 'Contact';
$nav['gallery.php'] = 'Gallery';

//index.php is the key of the array, and Home is the value (key, value relationship)
$nav = array(
    'index.php' => 'Home',
    'about.php' => 'About',
    'daily.php' => 'Daily',
    'contact.php' => 'Contact',
    'gallery.php' => 'Gallery',
);
echo '<pre>';
var_dump($nav);
echo '</pre>';

echo '<br>';

$show = 'Atlanta';
$show_actor = 'Donald Glover';
$show_genre = 'drama';

echo 'My favorite movie during quarantine was "' . $show . '" starring, ' . $show_actor . ', and it is a ' . $show_genre . '. ';