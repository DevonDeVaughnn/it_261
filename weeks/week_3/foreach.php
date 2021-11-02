<?php
// our foreach loop

$show = array(
    'Name' => 'Training Day',
    'Actor' => 'Denzel Washington',
    'Genre' => 'Action',
    'Year' => '2001',
);

$nav = array(
    'index.php' => 'Home',
    'about.php' => 'About',
    'daily.php' => 'Daily',
    'projects.php' => 'Projects',
    'contact.php' => 'Contact',
    'gallery.php' => 'Gallery',
);

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>For Each Loop</title>
    <style>
    #wrapper {
        width: 580px;
        margin: 20px auto;
        border: 2px solid black;
    }

    nav a {
        color: purple;
        font-weight: bold;
        text-decoration: none;
        font-size: 1.2em;
        font-family: Verdana, arial, sans-serif;
        border: 2px solid indigo;
        padding: 5px;
        display: inline block;
    }
    </style>
</head>

<body>
    <div class="wrapper">
        <h1>Our Foreach Loops</h1>
        <h2>Training Day</h2>
        <ul style="list-style-type: none;">
            <?php foreach ($show as $key => $value) {
    echo '<li><b> ' . $key . '</b>: ' . $value . '</li><br>';
}
?>
        </ul>
        <!--End UL-->
        <h2>Our Navigation</h2>
        <nav>
            <ul><?php foreach ($nav as $key => $value) {
    echo '<li style="color: cornflowerblue; list-style-type:none;"><a href="' . key . '">' . $value . '</a></li><br>';
}
?>
            </ul>
        </nav>
    </div>
    <!--End wrapper-->
</body>

</html>