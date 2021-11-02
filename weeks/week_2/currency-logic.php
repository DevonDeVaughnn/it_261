<?php
// understanding the logic!!!
//1 ruble = 0.013 dollars
//1 pound sterling = 1.28 dollars
//1 canadian = 0.79 dollars
//1 euro = 1.18 dollars
//1 yen = .0094 dollars

// $ruble = 10007;
// $amount
// $canada = 5000;
// $sterling = 500;
// $euro = 1200;
// $yen = 2000;
// ?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Currency Logic</title>
    <style>
    table {
        width: 400px;
        margin: 20px auto;
        background: black;
        border: 2px solid maroon;
        color: gold;

    }

    td,
    th {
        border: 1px solid cornflowerblue;
        border-collapse: collapse;
        text-align: left;
        padding: 5px;
    }

    tr {
        border: 2px solid cornflowerblue;
        border-collapse: collapse;
    }
    </style>
</head>

<body>
    <table>
        <tr>
            <th>Rubles</th>
            <td>$130.09</td>
        </tr>
        <tr>
            <th>Pounds</th>
            <td>$640.00</td>
        </tr>
        <tr>
            <th>Canada</th>
            <td>$3950.00</td>
        </tr>
        <tr>
            <th>Euros</th>
            <td>1416.00</td>
        </tr>
        <tr>
            <th>Yen</th>
            <td>18.00</td>
        </tr>
        <tr>
            <th>Total</th>
            <td><strong>$6154.89</strong></td>
        </tr>



    </table>

</body>

</html>