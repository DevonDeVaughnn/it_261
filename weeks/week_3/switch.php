<?php
//Class Coffee Excercise
// if today is Thursday, it will be pumpkin latte day
// we will start with the isset() function
//then we will introduce our first GLOBAL variable

// $variable = 'Life is good!';
// if (isset($variable)) {
//     echo 'Yippy-Skippy. ' . $variable . '';
// } else {
//     echo 'Not so Yippy-Skippy';
// }

//starting switch
// if something is set, $today, then all is well
// else, today is TODAY

// GLOBAL VARIABLES are capitalized and start with $_

if (isset($_GET['today'])) {
    $today = $_GET['today'];
} else {
    $today = date('l');
}
//switch
switch ($today) {
    case 'Saturday':
        $coffee = '<h2>Saturday is our Pumpkin Spice Latte Day!</h2>';
        $pic = 'pumpkin.jpg';
        $alt = 'Pumpkin Spice';
        $content = 'The Pumpkin Spice Latte is a coffee drink made with a mix of
        traditional autumn spice flavors, steamed milk, espresso, and often sugar,
        topped with whipped cream and pumpkin pie spice.';
        break;

    case 'Sunday':
        $coffee = '<h2>Sunday is our Americano Day!</h2>';
        $pic = 'americano.jpg';
        $alt = 'Americano';
        $content = 'Caffè Americano is a type of coffee drink prepared by diluting an espresso with hot water,
        giving it a similar strength to, but different flavor from, traditionally brewed coffee.
        The strength of an Americano varies with the number of shots of espresso and the amount of water added.';
        break;

    case 'Monday':
        $coffee = '<h2>Monday is our Regular Joe Day!</h2>';
        $pic = 'coffee.jpg';
        $alt = 'Regular Joe';
        $content = 'Normal Coffee';
        break;

    case 'Tuesday':
        $coffee = '<h2>Tuesday is our Green Tea Day!</h2>';
        $pic = 'green-tea.jpg';
        $alt = 'Green Tea';
        $content = 'Green tea is a type of tea that is made from Camellia sinensis leaves and
        buds that have not undergone the same withering and oxidation process used to make oolong teas
        and black teas. Green tea originated in China,and since then
        its production and manufacture has spread to other countries in East Asia.';
        break;

    case 'Wednesday':
        $coffee = '<h2>Wednesday is our Cappuccino Day!</h2>';
        $pic = 'cap.jpg';
        $alt = 'Cappuccino';
        $content = 'A cappuccino is an espresso-based coffee drink that originated in Italy,
        and is prepared with steamed milk foam. Variations of the drink involve
        the use of cream instead of milk, using non-dairy milk substitutes
        and flavoring with cinnamon or chocolate powder.';
        break;

    case 'Thursday':
        $coffee = '<h2>Thursday is our Salted Caramel Latte Day!</h2>';
        $pic = 'saltcarm.jpg';
        $alt = 'Salted Caramel';
        $content = 'A salted caramel mocha latte is made of espresso,
        milk, caramel sauce, and chocolate syrup.';
        break;

    case 'Friday':
        $coffee = '<h2>Friday is our Breakfast Sandwich Day!</h2>';
        $pic = 'breakfast.jpg';
        $alt = 'Breakfast Sandwich';
        $content = 'Hot and made to order bacon, egg,
        and cheese sandwich with our special "Saucy Sauce&#8482;". <p style="text-decoration: underline;">Limited supply so hurry in....</p>';

        break;
}
?>

<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Coffee Assignment</title>
    <style>
    @font-face {
        font-family: devvyFont;
        src: url("fonts/stalemate.ttf");
    }

    html,
    body {
        height: 100%;
        background: #8C4843;
        font-family: devvyFont;
        font-size: 1.4em;
    }

    body {
        margin: 0 auto;
        background: url("images_video/enjoy.jpg");
        background-position: center;
        background-size: cover;
        background-repeat: no-repeat;
        max-height: 100%;
        max-width: 100%;
        opacity: 99%;
        color: rgba(252, 177, 166, 0.84);
        -webkit-text-stroke-width: .01px;
        -webkit-text-stroke-color: rgba(210, 191, 85, 0.84);


    }

    /* end html body */
    #wrapper {
        width: 948px;
        margin: 20px auto;
        margin-bottom: 138px;
        text-align: center;
        padding: 10px;
        opacity: 90%;
        border-radius: 5px;
        border: 4px solid #75B9BE;
        background: rgba(140, 72, 67, .7)
    }

    /* end wrapper */
    nav {
        margin: 0 auto;
        border-radius: 5px;
        width: 100%;
        background: cornflowerblue;

    }

    nav ul {
        text-align: center;
    }

    nav li {
        display: inline;
        list-style-type: none;

    }

    nav a {
        text-decoration: none;
        color: #D2BF55;
        margin: 2px;
        font-weight: bold;

        text-decoration: underline;
    }

    nav a:hover {
        text-decoration: line-through;
        color: #D2BF55;
        background: #75B9BE;
        padding: 5px;
    }

    nav a:active {
        background-color: yellow;
    }

    /* end nav */
    img {
        width: 600px;
        height: 400px;
        padding: 2px;
        border: 2px solid #75B9BE;
        border-radius: 5px;

    }

    /* end img */

    footer {
        clear: both;
        height: 50px;
        border-top: 1px dotted #333;
    }

    footer ul {
        margin-top: 0;
        text-align: center;
        background: rgba(140, 72, 67, 1);
        padding: 5px;
    }

    footer li {
        display: inline-table;
        margin-top: 20px;
        margin-right: 49px;
        list-style-type: none;
    }

    footer a {
        color: #D2BF55;
        text-decoration: none;

    }

    footer a:hover {
        text-decoration: line-through;
        color: rgba(140, 72, 67, .7);
        background: #75B9BE;
        padding: 7px;
        font-size: 1.25em;

    }

    footer a:active {
        background-color: yellow;
    }

    /* end footer */

    h4,
    p {
        font-size: 1.45em;
        color: #75B9BE;
        font-weight: bold;
    }
    </style>
</head>

<body>
    <div id="wrapper">
        <h2>Check out our Daily Specials!!!</h2>
        <nav>
            <ul>
                <li><a href="switch.php?today=Saturday">Saturday</a></li>
                <li><a href="switch.php?today=Sunday">Sunday</a></li>
                <li><a href="switch.php?today=Monday">Monday</a></li>
                <li><a href="switch.php?today=Tuesday">Tuesday</a></li>
                <li><a href="switch.php?today=Wednesday">Wednesday</a></li>
                <li><a href="switch.php?today=Thursday">Thursday</a></li>
                <li><a href="switch.php?today=Friday">Friday</a></li>
            </ul>
        </nav>
        <?php echo $coffee; ?>

        <img src="images_video/<?php echo $pic; ?>" alt="<?php echo $alt; ?>">
        <p><?php echo $content; ?></p>

    </div>
    <footer>
        <ul>

            <li><a href="">Terms of use </a></li>
            <li><a href="../../index.php"> Web Design by Devvy</a></li>
            <li>Copyright &copy; 2021</li>
            <li>All Rights Reserved </li>
            <li><a
                    href="https://validator.w3.org/nu/?doc=https%3A%2F%2Fofr.cgc.mybluehost.me%2FIT_261%2Fweeks%2Fweek_3%2Fswitch.php">
                    HTML Validation</a></li>
        </ul>
    </footer>


</body>

</html>