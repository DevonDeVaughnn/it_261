<?php
include 'config.php';
include 'includes/header.php';
$headline = 'Welcome to my Contact Page';
$image = 'enigma_cover.jpg';

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

<div id="wrapper">
    <main>
        <div>
            <h2><?php echo $headline; ?></h2>
            <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Exercitationem, rem?
                Nihil quisquam, culpa aliquam
                officiis laudantium ad, molestias eligendi
                provident sapiente sunt at deleniti architecto repellendus vero.
                Earum, repellat? Eaque ex accusantium impedit vero facilis deleniti
                similique aut nulla explicabo!
            </p>
            <img style="width:300px; height:300px; margin:5px auto; padding:2px; border:4px solid brown;"
                src="images/<?php echo $image; ?>" alt="<?php echo $alt; ?>">
        </div>


        <div><?php include 'includes/form.php';?></div>
    </main>
    <aside>
        <h3>Aside for our Form</h3>
        <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit.
            Nemo, aut perferendis error aspernatur ex nobis
            consectetur facilis quae magnam natus a totam
            ullam magni accusamus placeat illo modi quisquam. Aliquam.
        </p>
    </aside>
    <?php include 'includes/footer.php';?>
</div>


</html>