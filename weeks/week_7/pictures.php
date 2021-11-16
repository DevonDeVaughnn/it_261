<?php
$character['Alucard'] = 'aluca_Character from Hellsing.';
$character['Black_Dynamite'] = 'bdyna_Character from Black Dynamite.';
$character['Huey_Freeman'] = 'hueyf_Character from The Boondocks';
$character['Lucas_Brothers'] = 'lucas_Character from Lucas Bros Moving Co.';
$character['Mr._Oliva'] = 'oliva_Character from Baki.';
$character['Mugen'] = 'mugen_Character from Samurai Champloo.';
$character['Saiki Kusuo'] = 'saiki_Character from The Disastrous Life of Saiki K.';
$character['Saitama'] = 'saita_Character from One Punch Man';
$character['Afro_Samurai'] = 'afros_Character from Afro Samurai';
$character['Terry_McGinnis'] = 'mcgin_Batman from Batman Beyond';

//$name                           $image
// $key                            $value

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Week 7 Picture Gallery</title>
</head>

<body>
    <table>
        <?php foreach ($character as $name => $image): ?>
        <tr>
            <td><img style="width:400px;
            height:400px;
            margin-right:20px;" src="images/<?php echo substr($image, 0, 5); ?>.jpg"
                    alt="<?php echo str_replace('_', ' ', $name); ?>"></td>
            <td style="text-align:left;"> <?php echo str_replace('_', ' ', $name); ?></td>
            <td style="text-align:right;"><?php echo '<h3> ' . substr($image, 6) . '</h3>'; ?></td>
        </tr>
        <?php endforeach;?>
    </table>

</body>

</html>