<?php
include 'config.php';
include 'includes/header.php';
$pic = 'adminer.png';
$alt = 'Screenshot of Adminer Table.';
$quote_headline = 'Screenshot of Adminer Data Table';
?>

<div id="wrapper">
    <main>
        <div class="content">
            <h3 class="quote-headline"><?php echo $quote_headline; ?></h3>
            <a href="images/<?php echo $pic; ?>"><img class="image" style="height: 300px; width: 300px;"
                    src="images/<?php echo $pic; ?>" alt="<?php echo $alt; ?>"></a>
            <p>Click Image For Larger View</p>
        </div>
    </main>
</div>
<div class="footer"><?php include 'includes/footer.php';?></div>