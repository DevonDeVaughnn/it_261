<?php
include 'config.php';

// if isset $GET['today']

if (isset($_GET['id'])) {
    $id = (int) $_GET['id'];
} else {
    header('Loacation: people.php');
}

$sql = 'SELECT * FROM people WHERE people_id = ' . $id . '';

$iConn = mysqli_connect(DB_HOST, DB_USER, DB_PASSWORD, DB_NAME) or
die(myError(__FILE__, __LINE__, mysqli_connect_error()));

//create variable $result

$result = mysqli_query($iConn, $sql) or die(myError(__FILE__, __LINE__, mysqli_error($iConn)));

if (mysqli_num_rows($result) > 0) {
    // while loop --- while loop will return array
    while ($row = mysqli_fetch_assoc($result)) {
        //do not echo here, assign row to new variable
        $first_name = stripslashes($row['first_name']);
        $last_name = stripslashes($row['last_name']);
        $email = stripslashes($row['email']);
        $occupation = stripslashes($row['occupation']);
        $description = stripslashes($row['description']);
        $birthdate = stripslashes($row['birthdate']);
        $blurb = stripslashes($row['blurb']);
        $feedback = '';
    } //ending while
} else {
    $feedback = 'Something is not working!!!!!';
} //ending if
// for the big assignment, call out the header include here
include 'includes/header.php';
?>
<main>
    <h1>Welcome to <?php echo $first_name;
?> <?php echo $last_name;
?>'s page!</h1>
    <?php
if ($feedback == '') {
    echo '<ul>';
    echo '<li><b>First Name: </b>' . $first_name . '</li>';
    echo '<li><b>Last Name: </b>' . $last_name . '</li>';
    echo '<li><b>Email: </b>' . $email . '</li>';
    echo '<li><b>Occupation: </b>' . $occupation . '</li>';
    echo '<li><b>Birthdate: </b>' . $birthdate . '</li>';
    echo '</ul>';
    echo '<p>' . $description . '</p>';
    echo 'Return back to the <a href="people.php">people page</a>';
}

?>
</main>
<aside>
    <?php
if ($feedback == '') {
    echo '<img class="center" src="images/people' . $id . '.jpg" alt="' . $first_name . ' ' . $last_name . '">';
    echo '<p class="blurb">' . $blurb . '</p>';
}
?>
</aside>

</div>
<!--end wrapper-->

<?php
mysqli_free_result($result);
mysqli_close($iConn);
include 'includes/footer.php';