<?php

echo "Today's date is " . date('d F Y'); // Double quotes as string delimiters
echo "<br>";

echo 'Today\'s date is ' . date('d F Y');  // Single quotes as string delimiters - escape single quotes
echo "<br>";

echo "\"Step outside\", he said threateningly<br>"; // Double quotes as delimiters - escape double quotes
echo '"Step aside", he said threateningly'; // Single quotes as delimiters
echo "<br>";

$number = 100;
echo "\$number"; // Escaped dollar sign - no longer a variable

?>