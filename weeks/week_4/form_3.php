<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form 3 with HTML and CSS</title>
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
    input[type=email],
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
            <label for="lname">Last Name: </label>
            <input type="text" name="lname">
            <label for="email">Email: </label>
            <input type="email" name="email">
            <label for="comments">Comments: </label>
            <textarea name="comments"></textarea>
            <input type="submit" value="Send It!!!">
        </fieldset>
    </form>
    <?php

if (isset($_POST['fname'],
    $_POST['lname'],
    $_POST['email'],
    $_POST['comments'])) {

    $fname = $_POST['fname'];
    $lname = $_POST['lname'];
    $email = $_POST['email'];
    $comments = $_POST['comments'];
    //nesting an if else statement
    if (empty($fname && $lname && $email && $comments)) {
        echo '<h3>Please fill out the input fields</h3>';
    } else {
        // echo $fname;
        // echo $lname;
        // echo $email;
        // echo $comments;

        echo '
        <div class="box">
        <ul>
        <li><b>First Name: ' . $fname . '</b></li>
        <li><b>Last Name: ' . $lname . '</b></li>
        <li><b>Email: ' . $email . '</b></li>
        <li><b>Comments: ' . $comments . '</b></li>
        </ul>

        </div>

        ';
    }
    //end else
}
//end isset
?>

</body>

</html>