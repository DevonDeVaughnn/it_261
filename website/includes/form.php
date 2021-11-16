<form action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']); ?>" method="POST">
    <h4>Please fill out the form</h4>
    <fieldset id="contact-fieldset">
        <label for="username">Username</label>
        <input type="text" name="username" value="<?php if (isset($_POST['username'])) {
    echo htmlspecialchars($_POST['username']);
}

?>">


        <!-- sticky -->

        <span class="error">
            <?php echo $username_error; ?>
        </span>

        <label for="email">Email</label>
        <input type="email" name="email" value="<?php if (isset($_POST['email'])) {
    echo htmlspecialchars($_POST['email']);
}

?>">

        <span class="error">
            <?php echo $email_error; ?>
        </span>

        <label for="phone">Phone Number</label>
        <input type="text" name="phone" placeholder="xxx-xxx-xxxx" value="<?php if (isset($_POST['phone'])) {
    echo htmlspecialchars($_POST['phone']);

}

?>">


        <span class="error">
            <?php echo $phone_error; ?>
        </span>



        <span class="error">
            <?php echo $age_error; ?>
        </span>

        <label for="song">Favorite Songs</label>


        <ul>
            <li><input type="checkbox" name="song[]" value="song_1" <?php if (isset($_POST['song']) && in_array('song_1', $song)) {
    echo 'checked="checked"';
}
?>>Song 1</li>
            <li><input type="checkbox" name="song[]" value="song_2" <?php if (isset($_POST['song']) && in_array('song_2', $song)) {
    echo 'checked="checked"';
}?>>Song 2</li>
            <li><input type="checkbox" name="song[]" value="song_3" <?php if (isset($_POST['song']) && in_array('song_3', $song)) {
    echo 'checked="checked"';
}?>>Song 3</li>
            <li><input type="checkbox" name="song[]" value="song_4" <?php if (isset($_POST['song']) && in_array('song_4', $song)) {
    echo 'checked="checked"';
}?>>Song 4</li>
            <li><input type="checkbox" name="song[]" value="song_5" <?php if (isset($_POST['song']) && in_array('song_5', $song)) {
    echo 'checked="checked"';
}?>>Song 5</li>
        </ul>

        <span class="error">
            <?php echo $song_error; ?>
        </span>
        <label for="age">Age</label>
        <select name="age" id="">
            <option value="" NULL <?php if (isset($_POST['age']) && $_POST['age'] == null) {
    echo 'selected="unselected"';
}?>>Select One</option>
            <option value="12-18" <?php if (isset($_POST['age']) && $_POST['age'] == '12-18') {
    echo 'selected="unselected"';
}?>> 12-18</option>
            <option value="18-24" <?php if (isset($_POST['age']) && $_POST['age'] == '18-24') {
    echo 'selected="unselected"';
}?>> 18-24</option>
            <option value="25-34" <?php if (isset($_POST['age']) && $_POST['age'] == '25-34') {
    echo 'selected="unselected"';
}?>> 25-34</option>
            <option value="35-49" <?php if (isset($_POST['age']) && $_POST['age'] == '35-49') {
    echo 'selected="unselected"';
}?>>50+</option>
            <span class="error">
                <?php echo $age_error; ?>
            </span>
            <label for="comments"></label>
            <textarea name="comments"
                placeholder="Leave a comment"><?php if (isset($_POST['comments'])) {echo htmlspecialchars($_POST['comments']);}?></textarea>
            <span class="error">
                <?php echo $comments_error; ?>
            </span>
            <label for="privacy">Privacy</label>
            <ul>
                <li><input type="radio" name="privacy" value="agree" <?php if (isset($_POST['privacy']) && $_POST['privacy'] == 'agree') {
    echo 'checked="checked"';
}
?>>I agree!</li>
            </ul>
            <span class="error">
                <?php echo $privacy_error; ?> </span>
            <input type="submit" value="Send It">
            <p><a href="">Reset</a></p>

        </select>
    </fieldset>
</form>