<?php

//implode and my wines function
// cab, merlot, malbec, syrah and blend

$song = array(
    'Song 1',
    'Song 2',
    'Song 3',
    'Song 4',
    'Song 5',
);

$my_songs = implode(', ', $song);
echo $my_songs;