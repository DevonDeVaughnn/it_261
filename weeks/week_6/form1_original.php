<?php

$first_name = '';
$last_name = '';
$email = '';
$gender = '';
$wines = '';
$phones = '';
$regions = '';
$comments = '';
$privacy = '';

$first_name_error = '';
$last_name_error = '';
$email_error = '';
$gender_error = '';
$wines_error = '';
$comments_error = '';
$regions_error = '';
$phone_Err = '';
$privacy_error = '';

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    if (empty($_POST['first_name'])) {
        $first_name_error = 'Please fill out your First Name.';
    } else {
        $first_name = $_POST['first_name'];
    }

    if (empty($_POST['last_name'])) {
        $last_name_error = 'Please fill out your Last Name.';
    } else {
        $last_name = $_POST['last_name'];
    }

    if (empty($_POST['email'])) {
        $email_error = 'Please enter your email.';
    } else {
        $email = $_POST['email'];
    }

    if (empty($_POST['gender'])) {
        $gender_error = 'Please select your gender.';
    } else {
        $gender = $_POST['gender'];
    }

    if (empty($_POST['wines'])) {
        $wines_error = 'Please select your favorite wines.';
    } else {
        $wines = $_POST['wines'];
    }

    if ($_POST['regions'] == null) {
        $regions_error = 'Please select your region.';
    } else {
        $regions = $_POST['regions'];
    }
    if (empty($_POST['comments'])) {
        $comments_error = 'Please share your comments with us!';
    } else {
        $comments = $_POST['comments'];
    }

    if (empty($_POST['phone'])) {
        // if empty, type in your number
        $phone_Err = 'Your phone number please!';
    } elseif (array_key_exists('phone', $_POST)) {
        if (!preg_match('/^[0-9]{3}-[0-9]{3}-[0-9]{4}$/', $_POST['phone'])) {
            // if you are not typing the requested format of xxx-xxx-xxxx, display Invalid format
            $phone_Err = 'Invalid format!';
        } else {
            $phone = $_POST['phone'];
        }
    }

    if (empty($_POST['privacy'])) {
        $privacy_error = 'YOU MUST AGREE!';
    } else {
        $privacy = $_POST['privacy'];
    }

    function my_wines()
    {
        $my_return = '';
        if (!empty($_POST['wines'])) {
            $my_return = implode(', ', $_POST['wines']);
        }
        return $my_return;
    }
    //end of function

    if (isset(
        $_POST['first_name'],
        $_POST['last_name'],
        $_POST['email'],
        $_POST['gender'],
        $_POST['wines'],
        $_POST['regions'],
        $_POST['comments'],
        $_POST['phone'],
        $_POST['privacy'],
    )) {
        $to = 'devondevaughnn@gmail.com';
        $subject = 'Test Email,' . date('m/d/y');
        $body = '
        The first name is: ' . $first_name . '' . PHP_EOL . '
        The last name is: ' . $last_name . '' . PHP_EOL . '
        Gender: ' . $gender . '' . PHP_EOL . '
        Wines: ' . my_wines() . '' . PHP_EOL . '
        Region: ' . $regions . '' . PHP_EOL . '
        Phone: ' . $phone . '' . PHP_EOL . '
        Email: ' . $email . '' . PHP_EOL . '
        Comments: ' . $comments . '' . PHP_EOL . '
        ';
        $headers = array(
            'From' => 'noreply@vanfloghrecords.com',
            'Reply-To' => '' . $email . '',
        );
        mail($to, $subject, $body, $headers);
        header('Location: thx.php');
    }
}
// End Server method

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Emailable Form Number 1</title>
    <link href="css/style.css" rel="stylesheet" type="text/css">
    </link>
</head>

<body>
    <form action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']); ?>" method="POST">
        <fieldset>
            <label for="first_name">First Name</label>
            <input type="text" name="first_name" value="<?php if (isset($_POST['first_name'])) {
    echo htmlspecialchars($_POST['first_name']);
}

?>">
            <!-- sticky -->

            <span class="error">
                <?php echo $first_name_error; ?>
            </span>

            <label for="last_name">Last Name</label>
            <input type="text" name="last_name" value="<?php if (isset($_POST['last_name'])) {
    echo htmlspecialchars($_POST['last_name']);
}

?>">
            <span class="error">
                <?php echo $last_name_error; ?>
            </span>

            <label for="email">Email</label>
            <input type="email" name="email" value="<?php if (isset($_POST['email'])) {
    echo htmlspecialchars($_POST['email']);
}

?>">
            <span class="error">
                <?php echo $email_error; ?>
            </span>

            <label for="phone">Phone Number</label>
            <input type="text" name="phone" placeholder="xxx-xxx-xxxx" value="<?php if (isset($_POST['phone'])) {
    echo htmlspecialchars($_POST['phone']);

}

?>">
            <span class="error">
                <?php echo $phone_Err; ?>
            </span>

            <label for="gender">Gender</label>
            <input type="radio" name="gender" value="male" <?php if (isset($_POST['gender']) && $_POST['gender'] == 'male') {
    echo 'checked="checked"';
}
?>> Male
            <ul>
                <li><input type="radio" name="gender" value="female" <?php if (isset($_POST['gender']) && $_POST['gender'] == 'female') {
    echo 'checked="checked"';
}
?>> Female</li>
                <li><input type="radio" name="gender" value="trans" <?php if (isset($_POST['gender']) && $_POST['gender'] == 'trans') {
    echo 'checked="checked"';
}
?>> Transgender</li>
                <li><input type="radio" name="gender" value="other" <?php if (isset($_POST['gender']) && $_POST['gender'] == 'other') {
    echo 'checked="checked"';
}
?>> Other</li>
            </ul>
            <span class="error">
                <?php echo $gender_error; ?>
            </span>

            <label for="wines">Favorite Wines</label>

            <ul>
                <li><input type="checkbox" name="wines[]" value="cab" <?php if (isset($_POST['wines']) && in_array('cab', $wines)) {
    echo 'checked="checked"';
}
?>>Cabernet</li>
                <li><input type="checkbox" name="wines[]" value="merlot" <?php if (isset($_POST['wines']) && in_array('merlot', $wines)) {
    echo 'checked="checked"';
}?>>Merlot</li>
                <li><input type="checkbox" name="wines[]" value="malbec" <?php if (isset($_POST['wines']) && in_array('malbec', $wines)) {
    echo 'checked="checked"';
}?>>Malbec</li>
                <li><input type="checkbox" name="wines[]" value="syrah" <?php if (isset($_POST['wines']) && in_array('syrah', $wines)) {
    echo 'checked="checked"';
}?>>Syrah</li>
                <li><input type="checkbox" name="wines[]" value="blend" <?php if (isset($_POST['wines']) && in_array('blend', $wines)) {
    echo 'checked="checked"';
}?>>Red Blend</li>
            </ul>
            <span class="error">
                <?php echo $wines_error; ?>
            </span>
            <label for="regions">Favorite regions</label>
            <select name="regions" id="">
                <option value="" NULL <?php if (isset($_POST['regions']) && $_POST['regions'] == null) {
    echo 'selected="unselected"';
}?>>Select One</option>
                <option value="nw" <?php if (isset($_POST['regions']) && $_POST['regions'] == 'nw') {
    echo 'selected="unselected"';
}?>>Northwest</option>
                <option value="sw" <?php if (isset($_POST['regions']) && $_POST['regions'] == 'sw') {
    echo 'selected="unselected"';
}?>>Southwest</option>
                <option value="mw" <?php if (isset($_POST['regions']) && $_POST['regions'] == 'mw') {
    echo 'selected="unselected"';
}?>>Midwest</option>
                <option value="ne" <?php if (isset($_POST['regions']) && $_POST['regions'] == 'ne') {
    echo 'selected="unselected"';
}?>>Northeast</option>
                <option value="se" <?php if (isset($_POST['regions']) && $_POST['regions'] == 'se') {
    echo 'selected="unselected"';
}?>>Southeast</option>
                <option value="so" <?php if (isset($_POST['regions']) && $_POST['regions'] == 'so') {
    echo 'selected="unselected"';
}?>>Southern</option>
                <option value="no" <?php if (isset($_POST['regions']) && $_POST['regions'] == 'no') {
    echo 'selected="unselected"';
}?>>Northern</option>

                <span class="error">
                    <?php echo $regions_error; ?>
                </span>
                <label for="comments"></label>
                <textarea
                    name="comments"><?php if (isset($_POST['comments'])) {echo htmlspecialchars($_POST['comments']);}?></textarea>
                <span class="error">
                    <?php echo $comments_error; ?>
                </span>
                <label for="privacy">Privacy</label>
                <ul>
                    <li><input type="radio" name="privacy" value="agree" <?php if (isset($_POST['privacy']) && $_POST['privacy'] == 'agree') {
    echo 'checked="checked"';
}
?>>I agree!</li>
                </ul>
                <span class="error">
                    <?php echo $privacy_error; ?> </span>
                <input type="submit" value="Send It">
                <p><a href="">Reset</a></p>
            </select>
        </fieldset>
    </form>
</body>

</html>