<?php

$hour = date('g'); // 'g' gives hour in 12 hour clock format without leading zeros
$minutes = date('i');
$am_pm = date('a'); // 'a' gives am or pm in lower case


// There are at least three methods, or any combination of them, which will
// give the same HTML output - choose whichever is easier to write & read

// Method 1, using double quotes without concatenating dots, escaping the double quotes
// and working out $hour + 2 in advance:
$hour2 = $hour + 2; // Set new variable $hour2
echo "<p>\"The time now is $hour:$minutes$am_pm. ";
echo "In two hour's time it will be $hour2:$minutes$am_pm\", said the timekeeper.</p>";


// Method 2, using single quotes as string delimiters and escaping the single quote:
echo '<p>"The time now is ' . $hour . ':' . $minutes . $am_pm . '. ';
echo 'In two hour\'s time it will be ' . ($hour + 2) . ':' . $minutes . $am_pm . '", ';
echo 'said the timekeeper.</p>';


// Method 3, using double quotes as string delimiters and escaping the double quotes:
echo "<p>\"The time now is " . $hour . ":" . $minutes . $am_pm . ". ";
echo "In two hour's time it will be " . ($hour + 2) . ":" . $minutes . $am_pm . "\", ";
echo "said the timekeeper.</p>";

?>