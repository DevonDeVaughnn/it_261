<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Currency 1</title>
    <link href="css/style.css" rel="stylesheet" type="text/css" />

</head>

<body>
    <form action="
    <?php echo htmlspecialchars($_SERVER['PHP_SELF']); ?>" method="POST">
        <fieldset>
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
            <input type="submit" value="Convert it">
            <p><a href="">Reset</a></p>
        </fieldset>
    </form>

    <?php

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    if (empty($_POST['name'] &&
        $_POST['email'] &&
        $_POST['amount'] &&
        $_POST['currency']
    )) {
        echo 'Please fill out the fields';

    } elseif (isset($_POST['name'],
        $_POST['email'],
        $_POST['amount'],
        $_POST['currency']
    )) {
        $name = $_POST['name'];
        $email = $_POST['email'];
        $amount = $_POST['amount'];
        $currency = $_POST['currency'];

//When it comes to converting our rubles etc. to dollars what is the logic?

        $dollars = $amount * $currency;
        $friendly_dollars = number_format($dollars, 2);

        echo '
        <div class="box">
        <h2>Hello, ' . $name . '</h2>
        <p>You now have $ ' . $friendly_dollars . ' American Dollars.</p>
        <p>We will send you an email at: ' . $email . '</p>



        </div>
        ';

    }

    //else if

} //server request

?>

</body>




<?php ?>

</html>