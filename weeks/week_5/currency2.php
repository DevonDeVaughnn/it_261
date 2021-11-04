<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Currency 2 w/ drop down - select option</title>
    <link href="css/style.css" rel="stylesheet" type="text/css" />

</head>

<body>
    <form action="
    <?php echo htmlspecialchars($_SERVER['PHP_SELF']); ?>" method="POST">
        <fieldset>
            <legend>Currency 2</legend>
            <label for="name">Name: </label>
            <input type="text" name="name">
            <label for="email">Email: </label>
            <input type="email" name="email">
            <label for="amount">How much money do you have? </label>
            <input type="number" name="amount">
            <label for="currency">Choose your currency</label>
            <ul>
                <li><input type="radio" name="currency" value="0.013"> Rubles</input></li>
                <li><input type="radio" name="currency" value="0.76"> Canadian</input></li>
                <li><input type="radio" name="currency" value="1.28"> Pounds</input></li>
                <li><input type="radio" name="currency" value="1.18"> Euros</input></li>
                <li><input type="radio" name="currency" value="0.0094"> Yen</input></li>
            </ul>
            <label for="bank">Choose your Banking Institute</label>
            <select name="bank" id="bank">
                <option value="" NULL>Select one.</option>
                <option value="BOA">Bank of America</option>
                <option value="chase">Chase</option>
                <option value="TSCU">Twinstar Credit Union</option>
                <option value="NFCU">Navy Federal Credit Union</option>
                <option value="mattress">Mattress</option>
            </select>
            <input type="submit" value="Convert it">
            <p><a href="">Reset</a></p>
        </fieldset>
    </form>

    <?php

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    if (empty($_POST['name'])) {
        echo '<span class="error">Please fill out your name.</span>';
    }
    if (empty($_POST['email'])) {
        echo '<span class="error">Please fill out your email.</span>';
    }
    if (empty($_POST['amount'])) {
        echo '<span class="error">Please fill out the amount.</span>';
    }
    if (empty($_POST['currency'])) {
        echo '<span class="error">Please select out your currency.</span>';
    }
    if ($_POST['bank'] == null) {
        echo '<span class="error">Please choose your Banking Institution.</span>';

    }

    if (isset($_POST['name'],
        $_POST['email'],
        $_POST['amount'],
        $_POST['bank'],
        $_POST['currency']
    )) {
        $name = $_POST['name'];
        $email = $_POST['email'];
        $amount = $_POST['amount'];
        $bank = $_POST['bank'];
        $currency = $_POST['currency'];
        $dollars = $amount * $currency;
        $friendly_dollars = number_format($dollars, 2);

        echo '
        <div class="box">
        <h2>Hello, ' . $name . '</h2>
        <p>You now have $' . $friendly_dollars . ' American Dollars. </p>
        <p>It will be deposited into your <b>' . $bank . '</b> account.</p>
        <p>We will send you an email at: <b>' . $email . '</b></p>



        </div>
        ';
    }

    //else if

} //server request

?>

</body>




<?php ?>

</html>