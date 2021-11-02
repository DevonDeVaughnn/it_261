<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link type="text/css" rel="stylesheet" href="css/style.css" />
    <title>Celcius Assignment</title>
</head>

<body>
    <form action="
    <?php echo htmlspecialchars($_SERVER['PHP_SELF']); ?>" method="POST">
        <fieldset>
            <legend for="">Our Celcius Converter</legend>
            <label for="cel">Enter your Celcius Value: </label>
            <input type="number" name="cel">
            <input type="submit" value="Convert it!">
            <p><a href="">Reset</a></p>
        </fieldset>
    </form>
    <?php
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    if (isset($_POST['cel'])) {
        $cel = $_POST['cel'];
        $far = ($cel * 9 / 5) + 32;
        $friendly_far = number_format($far, 0);
        if ($cel == null) {
            echo '<h2>Please fill out your Celcius value.</h2>';
        } elseif ($friendly_far <= 32) {
            echo '<p> ' . $friendly_far . ' degrees and it is pretty cold.</p>';
        } elseif ($friendly_far <= 40) {
            echo '<p> ' . $friendly_far . ' degrees and it is not as cold.</p>';
        } elseif ($friendly_ <= 50) {
            echo '<p> ' . $friendly_far . ' degrees and it is getting warmer.</p>';
        } elseif ($friendly_far <= 60) {
            echo '<p> ' . $friendly_far . ' degrees and I\'m liking it.</p>';
        } elseif ($friendly_far <= 70) {
            echo '<p> ' . $friendly_far . ' degrees and I\'m really liking it.</p>';
        } elseif ($friendly_far <= 80) {
            echo '<p> ' . $friendly_far . ' degrees and I\'m going swimming.</p>';
        } elseif ($friendly_far >= 90) {
            echo '<p> ' . $friendly_far . ' degrees and it is getting hot.</p>';
        }
    }
    //End isset
}
//END SERVER POST

?>
</body>

</html>