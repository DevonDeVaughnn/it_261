<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Travel Calculator</title>
    <link href="css/style.css" rel="stylesheet" type="text/css" />

</head>

<body>
    <form action="
    <?php echo htmlspecialchars($_SERVER['PHP_SELF']); ?>" method="POST">
        <fieldset>
            <legend>Travel Calculator</legend>
            <label for="name">Name: </label>
            <input type="text" name="name" value="
    <?php if (isset($_POST['name'])) {
    echo htmlspecialchars($_POST['name']);
}

?>">
            <label for="miles">How Many Miles?</label>
            <input type="text" name="miles" value="
    <?php if (isset($_POST['miles'])) {
    echo htmlspecialchars($_POST['miles']);
}
?>">
            <label for="hours">How many hours per day?</label>
            <input type="number" name="hours" value="<?php if (isset($_POST['hours'])) {
    echo htmlspecialchars($_POST['hours']);
}
?>">
            <label for="gas">How much is gas?</label>
            <ul>
                <li><input type="radio" name="gas" value="3.00" <?php if (isset($_POST['gas']) && $_POST['gas'] == '3.00') {
    echo 'checked="checked"';
}?>> $3.00</input></li>
                <li><input type="radio" name="gas" value="3.50" <?php if (isset($_POST['gas']) && $_POST['gas'] == '3.50') {
    echo 'checked="checked"';
}?>> $3.50</input></li>
                <li><input type="radio" name="gas" value="4.00" <?php if (isset($_POST['gas']) && $_POST['gas'] == '4.00') {
    echo 'checked="checked"';
}?>> $4.00</input></li>

            </ul>

            <label for="efficiency">Select your Efficiency</label>
            <select name="efficiency" id="efficiency">
                <option value="" NULL <?php if (isset($_POST['efficiency']) && $_POST['efficiency'] == null) {
    echo 'selected="unselected"';
}?>>Select one.</option>

                <option value="10" <?php if (isset($_POST['efficiency']) && $_POST['efficiency'] == '10') {
    echo 'selected="selected"';
}?>>Terrible</option>
                <option value="20" <?php if (isset($_POST['efficiency']) && $_POST['efficiency'] == '20') {
    echo 'selected="selected"';
}?>>Getting Better</option>

                <option value="30" <?php if (isset($_POST['efficiency']) && $_POST['efficiency'] == '30') {
    echo 'selected="selected"';
}?>>Good</option>

                <option value="40" <?php if (isset($_POST['efficiency']) && $_POST['efficiency'] == '40') {
    echo 'selected="selected"';
}?>>Great</option>

            </select>
            <input type="submit" value="Calculate">
            <p><a href="">Reset</a></p>
        </fieldset>
    </form>

    <?php

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    if (empty($_POST['name'])) {
        echo '<span class="error">Please fill out your name.</span>';
    }
    if (empty($_POST['miles'])) {
        echo '<span class="error">Please fill out your miles.</span>';
    }
    if (empty($_POST['hours'])) {
        echo '<span class="error">Please fill out the hours.</span>';
    }
    if (empty($_POST['gas'])) {
        echo '<span class="error">Please select out your gas.</span>';
    }
    if ($_POST['efficiency'] == null) {
        echo '<span class="error">Please choose your efficiency.</span>';
    } elseif (isset($_POST['name'],
        $_POST['miles'],
        $_POST['hours'],
        $_POST['gas'],
        $_POST['efficiency']
    )) {
        $name = $_POST['name'];
        $miles = $_POST['miles'];
        $hours = $_POST['hours'];
        $gas = $_POST['gas'];
        $efficiency = $_POST['efficiency'];
        $gallons_used = $miles * (1 / $efficiency);
        $gas_cost = $gallons_used * $gas;
        $length = ($miles / (65 * $hours));
        $friendly_length = (number_format($length, 2));
        $friendly_cost = floor($gas_cost);
        $friendly_gallons_used = floor($gallons_used);

        echo '
        <div class="box">
        <h2>Calculator Results</h2>
        <p>' . $name . ', you will be driving <b>' . $miles . '</b> miles. </p>

        <p>Your vehicle has an efficiency rating of <b>' . $efficiency . ' miles per gallon</b>.</p>
        <p>You will need <b>' . $friendly_gallons_used . '</b> gallons of fuel.</p>
        <p>Your total cost for gas will be  <b>$' . $friendly_cost . '</b>.</p>
        <p>You will be driving a total of : <b>' . $hours . ' hour(s) per day, equating to ' . $friendly_length . ' days.</b></p>



        </div>
        ';
    }

    //else if

} //server request

?>

</body>




<?php ?>

</html>