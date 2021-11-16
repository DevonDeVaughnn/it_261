<?php

$dice = rand(1, 6);

echo $dice;

echo '<br>';

$dice1 = rand(1, 6);
$dice2 = rand(1, 6);

echo $dice1;
echo '<br>';
echo $dice2;
echo '<br>';

if ($dice1 == $dice2) {
    echo 'I won!';
} else {
    echo 'SORRY YOU\'RE NOT! . . . . a winner with... the air so cold and.... a mind so bitter.';
}

$i = rand(1, 20);
echo $i;

$photos = array(
    'photo_1',
    'photo_2',
    'photo_3',
    'photo_4',
    'photo_5',
    'photo_6',
    'photo_7',
);

// $photos[0] = 'photo_1';
// $photos[1] = 'photo_2';
// $photos[2] = 'photo_3';
// $photos[3] = 'photo_4';
// $photos[4] = 'photo_5';
// $photos[5] = 'photo_5';
// $photos[6] = 'photo_5';

$i = rand(0, 6);
$selected_image = '' . $photos[$i] . '.jpg';
echo '<img class="photo" src="images/' . $selected_image . '"   alt=" ' . $photos[$i] . '"/>';