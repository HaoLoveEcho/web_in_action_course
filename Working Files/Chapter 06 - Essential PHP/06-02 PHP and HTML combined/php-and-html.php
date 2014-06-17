<?php

$day = date('l');
$date = date('d');
$month = date('M');
$year = date('Y');
$hours = date('H');
$minutes = date('i');
$seconds = date('s');

echo "<p>Today is $day</p>";

echo "<p>Today is " . $day . "</p>";

$x = 5;

echo "5 + 1 is $x + 1";


?>

<p>Today is <?php echo $day; ?></p>