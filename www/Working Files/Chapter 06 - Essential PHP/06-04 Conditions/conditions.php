<?php

$day = date('l');
$hour = date('H');

if ($hour > 12) {
    echo "<p>Good afternoon</p>";
}

if ($hour >= 18) {
    echo "<p>Good evening</p>";
}

if ($day == "Saturday" || $day == "Sunday") {
    echo "<p>I hope you're having a good weekend!</p>";
}

?>