<?php
include 'config.php';
include 'includes/header.php';

// if isset $GET['today']

if (isset($_GET['id'])) {
    $id = (int) $_GET['id'];
} else {
    header('Loacation: project.php');
}

$sql = 'SELECT * FROM Cars WHERE car_id = ' . $id . '';

$iConn = mysqli_connect(DB_HOST, DB_USER, DB_PASSWORD, DB_NAME) or
die(myError(__FILE__, __LINE__, mysqli_connect_error()));

//create variable $result

$result = mysqli_query($iConn, $sql) or die(myError(__FILE__, __LINE__, mysqli_error($iConn)));

if (mysqli_num_rows($result) > 0) {
    // while loop --- while loop will return array
    while ($row = mysqli_fetch_assoc($result)) {
        //do not echo here, assign row to new variable
        $car_year = stripslashes($row['car_year']);
        $car_manufac = stripslashes($row['car_manufac']);
        $car_name = stripslashes($row['car_name']);
        $car_description = stripslashes($row['car_description']);
        $car_hp = stripslashes($row['car_hp']);
        $blurb = stripslashes($row['blurb']);
        $feedback = '';
    } //ending while
} else {
    $feedback = 'Something is not working!!!!!';
} //ending if
// for the big assignment, call out the header include here

?>
<div id="wrapper">
    <main>

        <div class="car-list"> <span>
                <h2><?php echo $car_manufac; ?> <?php echo $car_name;
?> </h2>
            </span><?php
if ($feedback == '') {
    echo '<ul>';
    echo '<li><b>Year: </b>' . $car_year . '</li>';
    echo '<li><b>Model: </b>' . $car_name . '</li>';
    echo '<li><b>Horsepower: </b>' . $car_hp . '</li>';
    echo '</ul>';
    echo '<p>' . $car_description . '</p>';
    echo '<div><h3>Return back to the <a href="project.php">Project page</a></h3></div>';
}

?></div>
    </main>
    <aside>
        <?php
if ($feedback == '') {
    echo '<img id="car-photo" src="images/cars/car-' . $id . '.jpg" alt="' . $car_manufac . ' ' . $car_name . '">';
    echo '<p class="blurb">' . $blurb . '</p>';
}
?>
    </aside>
    <?php include 'includes/footer.php';?>
</div>


<!--end wrapper-->

<?php
mysqli_free_result($result);
mysqli_close($iConn);