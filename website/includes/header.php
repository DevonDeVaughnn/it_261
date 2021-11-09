<!DOCTYPE html>
<html class="<?php
if (basename($_SERVER['PHP_SELF']) !== 'daily.php') {
    echo 'none';
} else {
    echo $color;
}

?>" lang="en">

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
                <ul>
                    <?php echo my_nav($nav); ?>
                </ul>
            </nav>
        </div>
        <!--End header-inner -->
    </header>