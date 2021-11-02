<?php
define('THIS_PAGE', basename($_SERVER['PHP_SELF']));

$nav['index.php'] = 'Home';
$nav['about.php'] = 'About';
$nav['daily.php'] = 'Daily';
$nav['project.php'] = 'Project';
$nav['contact.php'] = 'Contact';
$nav['gallery.php'] = 'Gallery';

switch (THIS_PAGE) {
    case 'index.php':
        $title = 'Home Page';
        $body = 'home';
        $headline = 'Welcome to my Home Page!';
        break;
    case 'about.php':
        $title = 'About';
        $body = 'about inner';
        $headline = 'More about me!';
        break;
    case 'daily.php':
        $title = 'Daily Bowie Quotes';
        $body = 'daily inner';
        $headline = 'Enjoy some daily Bowie quotes!';
        break;
    case 'project.php':
        $title = 'Project Page';
        $body = 'project inner';
        $headline = 'Welcome to my Project Page!';
        break;
    case 'contact.php':
        $title = 'Contact';
        $body = 'contact inner';
        $headline = 'Welcome to my Contact Page!';
        break;
    case 'gallery.php':
        $title = 'My Gallery';
        $body = 'gallery inner';
        $headline = 'Welcome to my Gallery Page!';
        break;
}

if (isset($_GET['today'])) {
    $today = $_GET['today'];
} else {
    $today = date('l');
}
//switch

?>
<!DOCTYPE html>
<html class="<?php echo $color; ?>" lang="en">

<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title><?php echo $title; ?></title>
    <link rel="stylesheet" href="css/styles.css" type="text/css" />
</head>

<body class="<?php echo $body; ?>">
    <header class="header">
        <div class="header-inner">
            <a href="index.html"><img src="images/logo.png" alt="logo" id="logo" /></a>
            <nav>
                <!-- <ul>
                    <li><a href="">Home</a></li>
                    <li><a href="">About</a></li>
                    <li><a href="">Daily</a></li>
                    <li><a href="">People</a></li>
                    <li><a href="">Gallery</a></li>
                    <li><a href="">Project</a></li>
                    <li><a href="">Contact</a></li>
                </ul> -->
                <ul>
                    <?php
foreach ($nav as $key => $value) {
    if (THIS_PAGE == $key) {
        echo '<li><a class="current" href="' . $key . '">' . $value . '</a></li>';
    } else {
        echo '<li><a href="' . $key . '">' . $value . '</a></li>';
    }
}

?>
                </ul>
            </nav>
        </div>
        <!--End header-inner -->
    </header>