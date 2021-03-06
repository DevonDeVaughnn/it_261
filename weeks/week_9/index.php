<?php

session_start();

include 'config.php';

if (!isset($_SESSION['username'])) {
    $_SESSION['msg'] = 'You must login first!';
    header('Location:login.php');
}
if (isset($_GET['logout'])) {
    session_destroy();
    unset($_SESSION['username']);
    header('Location:login.php');
}

include 'includes/header.php';

if (isset($_SESSION['success'])): ?>

<div class="success">
    <h3><?php echo $_SESSION['success'];
unset($_SESSION['success']) ?></h3>
</div>
<?php endif;

if (isset($_SESSION['username'])): ?>
<header>
    <div class="welcome-logout">
        <h3>Hello <?php echo $_SESSION['username']; ?>!</h3>
        <p><a href="index.php?logout='1'">Logout</a></p>
    </div>
    <!-- end welcome-logout div -->
    <?php endif;?>
</header>
<div id="wrapper">
    <h1>Welcome to the home page!</h1>
    <h2><a style="color:cornflowerblue;" href="https://github.com/DevonDeVaughnn/it_261">GitHub
            Link</a></h2>
</div>
<?php include 'includes/footer.php';?>