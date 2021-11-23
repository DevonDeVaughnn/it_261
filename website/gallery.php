<?php
$character['Alucard'] = 'aluca2_Character from Hellsing.';
$character['Black_Dynamite'] = 'bdyna2_Character from Black Dynamite.';
$character['Huey_Freeman'] = 'hueyf2_Character from The Boondocks';
$character['Lucas_Brothers'] = 'lucas2_Character from Lucas Bros Moving Co.';
$character['Mr._Oliva'] = 'oliva2_Character from Baki.';
$character['Mugen'] = 'mugen2_Character from Samurai Champloo.';
$character['Saiki Kusuo'] = 'saiki2_Character from The Disastrous Life of Saiki K.';
$character['Saitama'] = 'saita2_Character from One Punch Man';
$character['Afro_Samurai'] = 'afros2_Character from Afro Samurai';
$character['Terry_McGinnis'] = 'mcgin2_Batman from Batman Beyond';

//$name                           $image
// $key                            $value

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="css/styles.css" type="text/css" rel="stylesheet">
    <title>Table of Images</title>
</head>

<body>
    <h2 style="text-align:center; padding-top: 15px;">Table of my Favorite Characters</h2>
    <table>
        <?php foreach ($character as $name => $image): ?>
        <tr>
            <td><img style="display:block;" width="300px" height="300px"
                    src="images/<?php echo substr($image, 0, 5); ?>.jpg"
                    alt="<?php echo str_replace('_', ' ', $name); ?>"></td>
            <td><?php echo '<h3> ' . str_replace('_', ' ', $name) . '</h3>'; ?></td>
            <td>
                <?php echo '<h3> ' . substr($image, 7) . '</h3>'; ?></td>
            <td><img style="display:block;" width="300px" height="300px"
                    src="images/<?php echo substr($image, 0, 6); ?>.jpg"
                    alt="<?php echo str_replace('_', ' ', $name); ?>"></td>
        </tr>
        <?php endforeach;?>
    </table>

</body>

</html>