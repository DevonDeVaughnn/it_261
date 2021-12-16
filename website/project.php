<?php
include 'config.php';
include 'includes/header.php';
$headline = 'Welcome to my Favorite Cars!';
?>
<div id="wrapper">
    <main>
        <div>
            <h2><?php echo $headline; ?></h2>

            <?php
$sql = 'SELECT * FROM Cars';
// connect to db using mysqli_connect() function
$iConn = mysqli_connect(DB_HOST, DB_USER, DB_PASSWORD, DB_NAME) or
die(myError(__FILE__, __LINE__, mysqli_connect_error()));
//create variable $result
$result = mysqli_query($iConn, $sql) or die(myError(__FILE__, __LINE__, mysqli_error($iConn)));
//if statement --- if rows > 0 ... yippy skippy

if (mysqli_num_rows($result) > 0) {
    // while loop --- while loop will return array
    while ($row = mysqli_fetch_assoc($result)) {
        echo '<div class="project-car"><h3>' . $row['car_year'] . ' ' . $row['car_manufac'] . ' ' . $row['car_name'] . '';
        echo '</h3>';
        echo '<p>For more information about the ' . $row['car_name'] . ', please
        click <a href="project-view.php?id=' . $row['car_id'] . '"> here </a>!</p>';
        echo '</div>';

    }
} else {
    echo 'Houston, we have a problem!!!';
}

mysqli_free_result($result);
mysqli_close($iConn);
?>
        </div>



    </main>
    <aside>
        <h3>Aside for Project</h3>
        <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Soluta deserunt consectetur amet earum in
            perferendis
            corporis minus dolorem, totam eveniet aliquid praesentium commodi repudiandae, sint repellat. Fugit dicta id
            ipsam iure quis, unde non quam sunt animi qui, itaque earum mollitia aspernatur laboriosam omnis
            perspiciatis
            voluptates est odio! Cupiditate quibusdam enim molestias. Impedit sapiente voluptatum dolor saepe! Enim sit
            ipsa
            animi vel quibusdam corrupti impedit. Molestias quasi pariatur asperiores ratione similique ea itaque,
            beatae
            quia labore atque quos minima facere blanditiis dicta commodi sapiente cumque optio veniam, soluta
            consequuntur
            est corporis! Velit laudantium delectus odio repellat, tempore deleniti officiis, assumenda fugit corporis
            ipsa,
            cum molestias porro nihil itaque suscipit iure placeat? Iste impedit pariatur dolore deserunt, molestiae ex
            numquam itaque ea esse iure saepe quod at perspiciatis id vero ducimus aut, optio aliquam. Quasi omnis
            beatae
            excepturi dicta eaque iusto tempora consequuntur dolorum magni?
        </p>
    </aside>
    <?php include 'includes/footer.php';?>
</div>


</html>