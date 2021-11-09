<?php
include 'config.php';
include 'includes/header.php';
?>

<div id="wrapper">
    <main>
        <div class="content">
            <h3 class="quote-headline"><?php echo $quote_headline; ?></h3>
            <img class="image" src="images/<?php echo $pic; ?>" alt="<?php echo $alt; ?>">

            <h4><?php echo $content; ?></p>
        </div>
    </main>
    <aside class="aside">
        <div>
            <ul>
                <?php
my_day($day);

?>
            </ul>
        </div>
    </aside>
    <div class="footer"><?php include 'includes/footer.php';?></div>