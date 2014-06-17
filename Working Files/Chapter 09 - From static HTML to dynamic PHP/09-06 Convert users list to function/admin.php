<?php

// Functions
require_once 'functions/show-users.fn.php';

// Includes
require_once 'php-includes/connect.inc.php';
require_once 'php-includes/connect.inc.php';
require_once 'php-includes/get-variables.inc.php';
require_once 'php-includes/head.inc.php';
require_once 'php-includes/header.inc.php';
require_once 'php-includes/navigation.inc.php';

if ($page=="users") {
    require_once 'php-includes/admin-users.inc.php';
} else {
    if ($page=="movies") {
        require_once 'php-includes/admin-movies.inc.php';
    } else {
        echo "<div class='message'>";
        echo "<h2 class='alert'>Please use the admin menus to navigate</h2>\n";
        echo "</div>";
		require_once 'php-includes/footer.inc.php'; 
		exit;
    }
}

require_once 'php-includes/footer.inc.php';
?>