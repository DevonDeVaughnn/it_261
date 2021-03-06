<?php
define('THIS_PAGE', basename($_SERVER['PHP_SELF']));

ob_start();
define('DEBUG', 'TRUE');

include 'credentials.php';

$nav['index.php'] = 'Home';
$nav['about.php'] = 'About';
$nav['daily.php'] = 'Daily';
$nav['project.php'] = 'Project';
$nav['contact.php'] = 'Contact';
$nav['gallery.php'] = 'Gallery';

$day['daily.php?today=Monday'] = 'Monday';
$day['daily.php?today=Tuesday'] = 'Tuesday';
$day['daily.php?today=Wednesday'] = 'Wednesday';
$day['daily.php?today=Thursday'] = 'Thursday';
$day['daily.php?today=Friday'] = 'Friday';
$day['daily.php?today=Saturday'] = 'Saturday';
$day['daily.php?today=Sunday'] = 'Sunday';

function my_nav($nav)
{
    $my_return = '';
    foreach ($nav as $key => $value) {
        if (THIS_PAGE == $key) {
            $my_return .= '<li><a class="current" href="' . $key . '">' . $value . '</a></li>';
        } else {
            $my_return .= '<li><a href="' . $key . '">' . $value . '</a></li>';
        } //end else
    } //end foreach
    return $my_return;
} //end function

function my_day($day)
{
    $my_return = '';
    foreach ($day as $key => $value) {
        echo '<li><a href="' . $key . '">' . $value . '</a></li>';
    } //end foreach
    return $my_return;
} //end function

switch (THIS_PAGE) {
    case 'index.php':
        $title = 'Home Page';
        $body = 'home';
        $headline = 'Welcome to my Home Page!';
        break;
    case 'about.php':
        $title = 'About';
        $body = 'about inner';
        $headline = 'More about me!';
        break;
    case 'daily.php':
        $title = 'Daily Bowie Quotes';
        $body = 'daily inner';
        $headline = 'Enjoy some daily Bowie quotes!';
        break;
    case 'project.php':
        $title = 'Project Page';
        $body = 'project inner';
        $headline = 'Welcome to my Project Page!';
        break;
    case 'contact.php':
        $title = 'Contact';
        $body = 'contact inner';
        $headline = 'Welcome to my Contact Page!';
        break;
    case 'gallery.php':
        $title = 'My Gallery';
        $body = 'gallery inner';
        $headline = 'Welcome to my Gallery Page!';
        break;
}

if (isset($_GET['today'])) {
    $today = $_GET['today'];
} else {
    $today = date('l');
}
//switch

switch ($today) {
    case 'Saturday':
        $quote_headline = '<h2>Bowie Quote for ' . $today . '!</h2>';
        $pic = 'bowie_1.jpg';
        $alt = 'David Bowie';
        $color = 'pink';
        $content = '<h4>My performances have got to be theatrical experiences for me as well as for the audience.
    I don\'t want to climb out of my fantasies in order to go up onstage-I want to take them on stage with me.</p>
    <h4><br><i>Rolling Stone</i></h4>';
        break;

    case 'Sunday':
        $quote_headline = '<h2>Bowie Quote for ' . $today . '!</h2>';
        $pic = 'bowie_2.jpg';
        $alt = 'David Bowie';
        $color = 'maroon';
        $content = '<h4>I\'m just an individual who doesn\'t feel that I need to
        have somebody qualify work in any particular way.
        I\'m working for me.</h4><br>
    <h4><i>60 Minutes</i></h4> ';
        break;

    case 'Monday':
        $quote_headline = '<h2>Bowie Quote for ' . $today . '!</h2>';
        $pic = 'bowie_3.jpg';
        $alt = 'Bowie Shushing';
        $color = 'black';
        $content = '<h4>I needed to sing because nobody else was singing my songs.</h4><br>
    <h4>
        <i>Fresh Air</i>
    </h4>';
        break;

    case 'Tuesday':
        $quote_headline = '<h2>Bowie Quote for ' . $today . '!</h2>';
        $pic = 'bowie_4.jpg';
        $alt = 'Older Bowie';
        $color = 'forestgreen';
        $content = '<h4>I\'ve come to the realisation that I have absolutely no idea what I\'m doing half time.</h4><br>
    <h4><i>NME</i></h4>';
        break;

    case 'Wednesday':
        $quote_headline = '<h2>Bowie Quote for ' . $today . '!</h2>';
        $pic = 'bowie_5.jpg';
        $alt = 'More Bowie';
        $color = 'gold';
        $content = '<h4>I thrive on mistakes. If I haven\'t made three good mistakes in a week,
        then I\'m not worth anything. You only learn from mistakes.</h4><br>
    <h4><b><i>NME</i></b></h4>';
        break;

    case 'Thursday':
        $quote_headline = '<h2>Bowie Quote for ' . $today . '!</h2>';
        $pic = 'bowie_6.jpg';
        $alt = 'Just a little more Bowie';
        $color = 'grey';
        $content = '<h4>As you get older the questions come down to about two or three. How long?
        And what do I do with the time I\'ve got left?</h4><br>
    <h4><i> New York Times</i></h4>';
        break;

    case 'Friday':
        $quote_headline = '<h2>Bowie Quote for ' . $today . '!</h2>';
        $pic = 'bowie_7.jpg';
        $alt = 'Friday Bowie';
        $color = 'turquoise';
        $content = '<h4>Make the best of every moment. We\'re not evolving. We\'re not going anywhere.</h4><br>
    <h4><i>Esquire</i></p>';
        break;

        function myError($myFile, $myLine, $errorMsg)
    {
            if (defined('DEBUG') && DEBUG) {
                echo 'Error in file: <b> ' . $myFile . ' </b>
                on line: <b> ' . $myLine . ' </b>';
                echo 'Error message: <b> ' . $errorMsg . '</b>';
                die();
            } else {
                echo 'Houston, we have a problem!';
                die();
            }
        }
}