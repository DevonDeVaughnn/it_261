<?php
include 'config.php';
include 'includes/header.php';

$headline = 'Welcome back Olga! <br> I\'ve done new things!';

$photos = array(
    'photo_1',
    'photo_2',
    'photo_3',
    'photo_4',
    'photo_5',
    'photo_6',
    'photo_7',
);

$i = rand(0, 6);
$selected_image = '' . $photos[$i] . '.jpg';

$album[0] = 'Lupe Fiasco - The Cool';
$album[1] = 'Kid Cudi - Man on the Moon II';
$album[2] = 'John Legend - Get Lifted';
$album[3] = 'Omarion - O';
$album[4] = 'Raheem DeVaughn - The Love Experience';
$album[5] = 'Linkin Park - Hybrid Theory';
$album[6] = 'Sevendust - Seasons';
$j = $i;
$selected_album = '' . $album[$j] . '';
?>

<div id="wrapper">
    <div id="hero" style="text-align:center; padding:20px;">
        <h2><a style="color:cornflowerblue;" href="https://github.com/DevonDeVaughnn/it_261/tree/master/website">GitHub
                Link</a></h2>
    </div>
    <!--End hero-->

    <main>
        <div>
            <h4><?php echo $headline; ?></h4>
            <p>
                Lorem ipsum dolor sit amet, consectetur adipisicing elit. Provident repellat quidem aperiam, natus earum
                ad in magnam nobis esse rerum architecto error adipisci accusantium
                pariatur maxime ullam ipsa fugiat corporis.
            </p>
        </div>
        <div class="photo">
            <?php echo '<img class="photo" src="images/' . $selected_image . '" alt=" ' . $photos[$i] . '" /> ' . $selected_album . ''; ?>
        </div>

    </main>

    <aside></aside>
    <?php include 'includes/footer.php';?>
</div>