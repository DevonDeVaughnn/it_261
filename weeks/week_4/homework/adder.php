<!DOCTYPE html>
<html>

<head>
    <title>My Adder Assignment</title>
    <style>
    body {
        box-sizing: border-box;
        padding: 0;
        margin: 0;
        text-align: center;
    }

    form {
        width: 400px;
        padding: 20px;
        margin: 0 auto;
        border: 1px solid cornflowerblue;

    }

    label {
        display: block;
    }
    </style>
</head>

<body>
    <h1>Adder.php</h1>
    <form action="" method="POST">
        <label>Enter the first number: </label>
        <input type="text" name="num1">
        <br>
        <label>Enter the second number: </label>
        <input type="text" name="num2">
        <br>
        <input type="submit" value="Add Em!!">
    </form>
    <?php //adder-wrong.php

if (isset($_POST['num1'], $_POST['num2'])) {
    $num1 = intval($_POST['num1']);
    $num2 = intval($_POST['num2']);
    $myTotal = $num1 + $num2;
    if (empty($num1 || $num2)) {
        echo 'Fill it out. Don\'t be lazy';
    } else {
        echo '<h2>You added ' . $num1 . ' and ' . $num2 . '</h2>';
        echo '<p style="color:red;"> and the answer is <br>' . $myTotal . '!</p>';
        echo '<p><a href="">Reset page</a>';
    }
}
;?>
    <!--PHP should be under html since we use echo-->
    <!--Improper quotations and closing tag on line 7-->
    <!--Line 8 can be added to line 7. br tag should be on next line-->
    <!--style should be added to a new p tag on line 9-->
    <!--Line 20 form bad syntax-->
    <!--Document reformatted itself-->
    <!--Line 21 label bad syntax and wrapped along wrong item-->
    <!--There should only be a closing php tag after the PHP and not the entire document-->


</body>

</html>