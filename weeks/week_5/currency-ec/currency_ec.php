<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Currency Extra Credit</title>
    <link href="css/style.css" rel="stylesheet" type="text/css" />

</head>

<body>
    <form action="
    <?php echo htmlspecialchars($_SERVER['PHP_SELF']); ?>" method="POST">
        <fieldset>
            <legend>Currency 2</legend>
            <label for="name">Name: </label>
            <input type="text" name="name" value="
    <?php if (isset($_POST['name'])) {
    echo htmlspecialchars($_POST['name']);
}

?>">
            <label for="email">Email: </label>
            <input type="email" name="email" value="
    <?php if (isset($_POST['email'])) {
    echo htmlspecialchars($_POST['email']);
}
?>">
            <label for="amount">How much money do you have? </label>
            <input type="number" name="amount" value="<?php if (isset($_POST['amount'])) {
    echo htmlspecialchars($_POST['amount']);
}
?>">
            <label for="currency">Choose your currency</label>
            <ul>
                <li><input type="radio" name="currency" value="0.013" <?php if (isset($_POST['currency']) && $_POST['currency'] == '0.013') {
    echo 'checked="checked"';
}?>> Rubles</input></li>
                <li><input type="radio" name="currency" value="0.76" <?php if (isset($_POST['currency']) && $_POST['currency'] == '0.76') {
    echo 'checked="checked"';
}?>> Canadian</input></li>
                <li><input type="radio" name="currency" value="1.28" <?php if (isset($_POST['currency']) && $_POST['currency'] == '1.28') {
    echo 'checked="checked"';
}?>> Pounds</input></li>
                <li><input type="radio" name="currency" value="1.18" <?php if (isset($_POST['currency']) && $_POST['currency'] == '1.18') {
    echo 'checked="checked"';
}?>> Euros</input></li>
                <li><input type="radio" name="currency" value="0.0094" <?php if (isset($_POST['currency']) && $_POST['currency'] == '0.0094') {
    echo 'checked="checked"';
}?>> Yen</input></li>
            </ul>

            <label for="bank">Choose your Banking Institute</label>
            <select name="bank" id="bank">
                <option value="" NULL <?php if (isset($_POST['bank']) && $_POST['bank'] == null) {
    echo 'selected="unselected"';
}?>>Select one.</option>

                <option value="BOA" <?php if (isset($_POST['bank']) && $_POST['bank'] == 'BOA') {
    echo 'selected="selected"';
}?>>Bank of America</option>
                <option value="chase" <?php if (isset($_POST['bank']) && $_POST['bank'] == 'chase') {
    echo 'selected="selected"';
}?>>Chase</option>

                <option value="TSCU" <?php if (isset($_POST['bank']) && $_POST['bank'] == 'TSCU') {
    echo 'selected="selected"';
}?>>Twinstar Credit Union</option>

                <option value="NFCU" <?php if (isset($_POST['bank']) && $_POST['bank'] == 'NFCU') {
    echo 'selected="selected"';
}?>>Navy Federal Credit Union</option>

                <option value="mattress" <?php if (isset($_POST['bank']) && $_POST['bank'] == 'mattress') {
    echo 'selected="selected"';
}?>>Mattress</option>

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
    } elseif (isset($_POST['name'],
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
        $friendly_dollars = floor($dollarss);

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