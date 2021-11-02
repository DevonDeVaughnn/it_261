<?php
// understanding the logic!!!
//1 ruble = 0.013 dollars
//1 pound sterling = 1.28 dollars
//1 canadian = 0.79 dollars
//1 euro = 1.18 dollars
//1 yen = .0094 dollars

//conversions
$ruble = 10007;
$ruble *= .013;
$friendly_ruble = number_format($ruble, 2);

$canada = 5000;
$canada *= .79;
$friendly_canada = number_format($canada, 2);

$sterling = 500;
$sterling *= 1.28;
$friendly_sterling = number_format($sterling, 2);

$euro = 1200;
$euro *= 1.18;
$friendly_euro = number_format($euro, 2);

$yen = 2000;
$yen *= .0094;
$friendly_yen = number_format($yen, 2);

$total = $euro + $yen + $sterling + $canada + $ruble;
$friendly_total = number_format($total, 2);
// ?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Currency</title>
    <style>
    table {
        width: 400px;
        margin: 20px auto;
        background: black;
        border: 2px solid maroon;
        color: gray;


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
            <td><?php echo '$ ' . $friendly_ruble . '' ?></td>
        </tr>
        <tr>
            <th>Pounds</th>
            <td><?php echo '$ ' . $friendly_sterling . '' ?></td>
        </tr>
        <tr>
            <th>Canada</th>
            <td><?php echo '$ ' . $friendly_canada . '' ?></td>
        </tr>
        <tr>
            <th>Euros</th>
            <td><?php echo '$ ' . $friendly_euro . '' ?></td>
        </tr>
        <tr>
            <th>Yen</th>
            <td><?php echo '$ ' . $friendly_yen . '' ?></td>
        </tr>
        <tr>
            <th>Total</th>
            <td><strong><?php echo '$ ' . $friendly_total . '' ?></strong></td>
        </tr>



    </table>

    <!--
           <table>
        <tr>
            <th>Rubles</th>
            <td><?php echo '$ ' . $friendly_ruble . '' ?></td>
        </tr>
        <tr>
            <th>Pounds</th>
            <td><?php echo '$ ' . $friendly_sterling . '' ?></td>
        </tr>
        <tr>
            <th>Canada</th>
            <td><?php echo '$ ' . $friendly_canada . '' ?></td>
        </tr>
        <tr>
            <th>Euros</th>
            <td><?php echo '$ ' . $friendly_euro . '' ?></td>
        </tr>
        <tr>
            <th>Yen</th>
            <td><?php echo '$ ' . $friendly_yen . '' ?></td>
        </tr>
        <tr>
            <th>Total</th>
            <td><strong><?php echo '$ ' . $friendly_total . '' ?></strong></td>
        </tr>



    </table>
-->

</body>

</html>