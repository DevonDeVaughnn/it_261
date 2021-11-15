<?php
include 'config.php';
include 'includes/header.php';

$username = '';
$email = '';
$phones = '';
$age = '';
$song = '';
$comments = '';
$privacy = '';

$username_error = '';
$last_name_error = '';
$email_error = '';
$age_error = '';
$song_error = '';
$comments_error = '';
$phone_error = '';
$privacy_error = '';

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    if (empty($_POST['username'])) {
        $username_error = 'Please fill out your username.';
    } else {
        $username = $_POST['username'];
    }

    if (empty($_POST['email'])) {
        $email_error = 'Please enter your email.';
    } else {
        $email = $_POST['email'];
    }

    if (empty($_POST['age'])) {
        $age_error = 'Please select your age demographic.';
    } else {
        $age = $_POST['age'];
    }

    if (empty($_POST['song'])) {
        $song_error = 'Please select your favorite song from the project.';
    } else {
        $song = $_POST['song'];
    }
    if (empty($_POST['comments'])) {
        $comments_error = 'Please share your comments with us!';
    } else {
        $comments = $_POST['comments'];
    }
    if (empty($_POST['phone'])) {
        // if empty, type in your number
        $phone_error = 'Your phone number please!';
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

    function my_songs()
    {
        $my_return = '';
        if (!empty($_POST['song'])) {
            $my_return = implode(', ', $_POST['song']);
        }
        return $my_return;
    }
    //end of function

    if (isset(
        $_POST['username'],
        $_POST['email'],
        $_POST['phone'],
        $_POST['age'],
        $_POST['song'],
        $_POST['comments'],
        $_POST['privacy'],
    )) {
        $to = 'devondevaughnn@gmail.com';
        $subject = 'Test Email,' . date('m/d/y');
        $body = '
        Username: ' . $username . '' . PHP_EOL . '
        Email: ' . $email . '' . PHP_EOL . '
        Age Demographic: ' . $age . '' . PHP_EOL . '
        Favorite Songs: ' . my_songs() . '' . PHP_EOL . '
        Phone: ' . $phone . '' . PHP_EOL . '

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
    <title>Devvy Contact Page</title>
    <link href="css/styles.css" rel="stylesheet" type="text/css">
    </link>
</head>

<body id="contact-body">
    <form action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']); ?>" method="POST">
        <fieldset id="contact-fieldset">
            <div><label for="username">Username</label>
                <input type="text" name="username" value="<?php if (isset($_POST['username'])) {
    echo htmlspecialchars($_POST['username']);
}

?>">
            </div>

            <!-- sticky -->

            <span class="error">
                <?php echo $username_error; ?>
            </span>

            <div><label for="email">Email</label>
                <input type="email" name="email" value="<?php if (isset($_POST['email'])) {
    echo htmlspecialchars($_POST['email']);
}

?>">
            </div>
            <span class="error">
                <?php echo $email_error; ?>
            </span>

            <div><label for="phone">Phone Number</label>
                <input type="text" name="phone" placeholder="xxx-xxx-xxxx" value="<?php if (isset($_POST['phone'])) {
    echo htmlspecialchars($_POST['phone']);

}

?>">
            </div>

            <span class="error">
                <?php echo $phone_error; ?>
            </span>



            <span class="error">
                <?php echo $age_error; ?>
            </span>

            <div><label for="song">Favorite Songs</label>


                <ul>
                    <li><input type="checkbox" name="song[]" value="song_1" <?php if (isset($_POST['song']) && in_array('song_1', $song)) {
    echo 'checked="checked"';
}
?>>Song 1</li>
                    <li><input type="checkbox" name="song[]" value="song_2" <?php if (isset($_POST['song']) && in_array('song_2', $song)) {
    echo 'checked="checked"';
}?>>Song 2</li>
                    <li><input type="checkbox" name="song[]" value="song_3" <?php if (isset($_POST['song']) && in_array('song_3', $song)) {
    echo 'checked="checked"';
}?>>Song 3</li>
                    <li><input type="checkbox" name="song[]" value="song_4" <?php if (isset($_POST['song']) && in_array('song_4', $song)) {
    echo 'checked="checked"';
}?>>Song 4</li>
                    <li><input type="checkbox" name="song[]" value="song_5" <?php if (isset($_POST['song']) && in_array('song_5', $song)) {
    echo 'checked="checked"';
}?>>Song 5</li>
                </ul>
            </div>
            <span class="error">
                <?php echo $song_error; ?>
            </span>
            <label for="age">Age</label>
            <select name="age" id="">
                <option value="" NULL <?php if (isset($_POST['age']) && $_POST['age'] == null) {
    echo 'selected="unselected"';
}?>>Select One</option>
                <option value="12-18" <?php if (isset($_POST['age']) && $_POST['age'] == '12-18') {
    echo 'selected="unselected"';
}?>> 12-18</option>
                <option value="18-24" <?php if (isset($_POST['age']) && $_POST['age'] == '18-24') {
    echo 'selected="unselected"';
}?>> 18-24</option>
                <option value="25-34" <?php if (isset($_POST['age']) && $_POST['age'] == '25-34') {
    echo 'selected="unselected"';
}?>> 25-34</option>
                <option value="35-49" <?php if (isset($_POST['age']) && $_POST['age'] == '35-49') {
    echo 'selected="unselected"';
}?>>50+</option>
                <span class="error">
                    <?php echo $age_error; ?>
                </span>
                <label for="comments"></label>
                <textarea name="comments"
                    placeholder="Leave a comment"><?php if (isset($_POST['comments'])) {echo htmlspecialchars($_POST['comments']);}?></textarea>
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
                <div id="send"> <input type="submit" value="Send It">
                    <p><a href="">Reset</a></p>
                </div>
            </select>
        </fieldset>
    </form>
</body>

</html>