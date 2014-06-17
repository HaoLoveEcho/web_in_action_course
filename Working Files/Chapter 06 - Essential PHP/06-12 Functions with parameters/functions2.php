<?php

function area($x, $y, $format) {
    
    $area = $x * $y;
    
    $output = "<$format>$area</$format>";
    return($output);
    
}

$area = area(3,3,'blockquote');

echo $area;


?>