<?php

require_once 'php-includes/connect.inc.php';
require_once 'php-includes/get-variables.inc.php';
require_once 'php-includes/head.inc.php';
require_once 'php-includes/header.inc.php';
require_once 'php-includes/navigation.inc.php';
require_once 'php-includes/favourites.inc.php';

if (isset($movieID)) {
	require_once 'php-includes/movie-single.inc.php';
} else {
	require_once 'php-includes/movie-list.inc.php';
}

require_once 'php-includes/footer.inc.php';

?>