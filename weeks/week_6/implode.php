<?php

//implode and my wines function
// cab, merlot, malbec, syrah and blend

$wines = array(
    'cab',
    'merlot',
    'syrah',
    'blend',
    'malbec',
);

$my_wine = implode(', ', $wines);
echo $my_wine;