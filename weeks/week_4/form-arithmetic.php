<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Arithmetic Form</title>
    <style>
    form {
        width: 400px;
        margin: 0 auto;
    }

    fieldset {
        border: 1px solid red;
        padding: 10px;
    }

    label,
    textarea {
        display: block;
        margin-bottom: 5px;
    }

    input[type=text],
    input[type=number],
    textarea {
        width: 90%
    }

    input,
    textarea {
        margin-bottom: 10px;
    }

    h3 {
        color: maroon;
        text-align: center;
    }

    .box {
        width: 400px;
        margin: 20px auto;
        padding: 15px;
        background: beige;
    }

    ul {
        list-style-type: none;
    }
    </style>
</head>

<body>
    <form action="" method="POST">
        <fieldset>
            <label for="fname">First Name: </label>
            <input type="text" name="fname">
            <label for="coffees">How many coffees? </label>
            <input type="number" name="coffees">
            <label for="lattes">How many lattes? </label>
            <input type="number" name="lattes">
            <label for="cappucinos">How many cappucinos? </label>
            <input type="number" name="cappucinos">
            <input type="submit" value="Send It!!!">
        </fieldset>
    </form>
    <?php

if (isset($_POST['fname'],
    $_POST['coffees'],
    $_POST['lattes'],
    $_POST['cappucinos'])) {
    $fname = $_POST['fname'];
    $coffees = $_POST['coffees'];
    $lattes = $_POST['lattes'];
    $cappucinos = $_POST['cappucinos'];
    $bev = $coffees + $lattes + $cappucinos;
    //nesting an if else statement
    if (empty($fname && $coffees && $lattes && $cappucinos)) {
        echo '<h3>Please fill out the input fields</h3>';
    } else {
        // echo $fname;
        // echo $coffees;
        // echo $lattes;
        // echo $cappucinos;

        echo '
        <div class="box">
        <h2>Hello ' . $fname . '</h2>
        <h3>You have ordered the following: </h3>
        <ul>
            <li><b>' . $coffees . ' Coffees </b></li>
            <li><b>' . $lattes . ' Lattes</b></li>
            <li><b>' . $cappucinos . ' Cappucinos</b></li>
        </ul>
        <p>Totalling ' . $bev . ' beverages.</p>

        </div>

        ';
    }
    //end else
}
//end isset
?>

</body>

</html>