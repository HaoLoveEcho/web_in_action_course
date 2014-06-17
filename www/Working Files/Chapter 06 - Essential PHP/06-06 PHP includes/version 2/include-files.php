<?php

require_once 'includes/file1.php';
require_once 'includes/file2.php';
require_once 'includes/file3.php';

// There are at least three possible ways of outputting the same string/variables.

// 1) With double quotes (the easiest in this case):
echo "My three favourite fruits are $fruit1, $fruit2, and $fruit3.<br>";

// 2) With the dot concatenator:
echo "My three favourite fruits are " . $fruit1 . ", " . $fruit2 . ", and " . $fruit3 .".<br>"; 

// 3) With dot-equals (the longest but can be the clearest way of building a long string as it
//    separates the dynamic variables from the static text):
$string = "My three favourite fruits are ";
$string .= $fruit1;
$string .= ", ";
$string .= $fruit2;
$string .= ", and ";
$string .= $fruit3;
$string .= ".<br>";

echo $string;

?>