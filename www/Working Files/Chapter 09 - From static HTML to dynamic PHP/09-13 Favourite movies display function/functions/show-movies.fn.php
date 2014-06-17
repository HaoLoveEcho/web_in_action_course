<?php

// Called in favourites.inc.php

function showMovies($data) {
    global $db, $userID, $movieID;
    
    switch($data) {
        
        case "favs":
            $stmt = $db->prepare("SELECT * FROM movies
                WHERE `movie_id` IN (
                    SELECT `movie_id` FROM `favourites`
                        WHERE `favourites`.`user_id` = ?
                )
            ORDER BY `title`");
            $stmt->bind_param('i', $userID);
            break;
        
    }
    
    $stmt->bind_result($id, $title, $description);
    $stmt->execute();
    
    $output = "";
    
    while ($stmt->fetch()) {
        $title = htmlentities($title, ENT_QUOTES, "UTF-8");
        $description = htmlentities($description, ENT_QUOTES, "UTF-8");
        $output .= "<li>";
        $output .= "<a href='index.php?user_id=$userID&amp;movie_id=$movieID'>$title</a>";
        $output .= "</li>";
    }
    
    
    $stmt->close();
    return($output);
}

?>