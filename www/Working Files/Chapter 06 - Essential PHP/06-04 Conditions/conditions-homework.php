<?php

$hour = date('H');

if ($hour < 6) {
    echo "You should be in bed and fast asleep!";
}

if ($hour >= 6 && $hour < 12) {
    echo "Good morning!";
}

if ($hour >= 12 && $hour < 18) {
    echo "Good afternoon!";
}

if ($hour >= 18 && $hour < 22) {
    echo "Good evening";
} 
   
if ($hour >= 22 && $hour < 23) {
    echo "Good night";
} 

if ($hour >= 23) {    
    echo "Go to bed!";
}

?>