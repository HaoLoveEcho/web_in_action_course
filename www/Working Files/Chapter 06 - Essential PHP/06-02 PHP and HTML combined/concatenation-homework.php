<?php

$day = date('l');
$date = date('j');
$month = date('M');
$year = date('Y');
$date_suffix = date('S');

//Solution 1:
$next_year = $year + 1;
echo "<p>The date today is the $date$date_suffix of $month $year. ";
echo "This time next year it will be the $date$date_suffix of $month $next_year.</p>";

//Solution 2:
echo "<p>The date today is the " . $date . $date_suffix . " of " . $month . " " . $year . ". ";
echo "This time next year it will be the " . $date . $date_suffix . " of " . $month .
     " " . ($year + 1) . ".</p>";



?>