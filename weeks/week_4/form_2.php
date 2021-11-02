<?php
//our first form
//don't care about the html
//the form elements are important
//the form atributes and values are important!!!
//use the global variable of $_POST
// the two items - the two input fields will be name and email

if (isset($_POST['fname'],
    $_POST['lname'],
    $_POST['comments'],
    $_POST['email'])) {
    $fname = $_POST['fname'];
    $lname = $_POST['lname'];
    $email = $_POST['email'];
    $comments = $_POST['comments'];
    if (empty($_POST['fname'] && $_POST['lname'] && $_POST['email'] && $_POST['comments'])) {
        echo 'Please fill out the fields';
    } else {
        echo $fname;
        echo '<br>';
        echo $lname;
        echo '<br>';
        echo $email;
        echo '<br>';
        echo $comments;
    }

} else {
    echo '
    <form action="" method="POST">
    <label for="firstname">First Name: </label>
    <input type="text" name="fname"/>
    <label for="lastname">Last Name: </label>
    <input type="text" name="lname"/>
    <label for="user_email">Email: </label>
    <input type="email" name="email"/>
    <label for="user_email">Comments: </label>
    <textarea name="comments"></textarea>
    <input type="submit" value="Send it!!!">
    </form>
    ';
}