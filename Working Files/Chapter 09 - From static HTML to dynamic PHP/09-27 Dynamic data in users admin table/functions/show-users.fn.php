<?php

// Called in navigation.inc.php and main.inc.php

function showUsers($data) {
    global $db, $userID;
    
    switch($data) {
        
        case "all":
            $stmt = $db->prepare("SELECT * FROM `movie_goers` ORDER BY `firstname`");
            $tag = "li";
            break;
        
        case "current":
            $stmt = $db->prepare("SELECT * FROM `movie_goers` WHERE `user_id` = ?");
            $stmt->bind_param('i', $userID);
            $tag = "h2";
            break;
        
        case "others":
            $stmt = $db->prepare("SELECT * FROM `movie_goers`
                                 WHERE `user_id` != ? ORDER BY `firstname`");
            $stmt->bind_param('i', $userID);
            $tag = "li";
            break;
        
        case "get_name":
            $stmt = $db->prepare("SELECT * FROM `movie_goers` WHERE `user_id` = ?");
            $stmt->bind_param('i', $userID);
            $tag = "h2";
            break;
        
        case "admin":
            $stmt = $db->prepare("SELECT * FROM `movie_goers`");
            $tag = "";
            break;
        
    }
    
    $stmt->bind_result($id, $firstname, $lastname);
    $stmt->execute();
    
    if ($tag=="li") {
        $output = "<ul class='users_menu'>";
    } else {
        $output = "";
    }
    
    
    while ($stmt->fetch()) {
        $firstname = htmlentities($firstname, ENT_QUOTES, "UTF-8");
        $lastname = htmlentities($lastname, ENT_QUOTES, "UTF-8");
        
        switch($data) {
            case "get_name":
                $output .= "<$tag>";
                $output .= "Hi, $firstname $lastname";
                $output .= "</$tag>";
                break;
            
            case "all"; case "current"; case "others":
                $output .= "<$tag>";
                $output .= "<a href='index.php?user_id=$id'>$firstname $lastname</a>";
                $output .= "</$tag>";
                break;
            
            case "admin":
                $output .= "<tr class='datarow'>";
                $output .= "<td><input class='data' type='text' name='firstname' value='$firstname'></td>";
                $output .= "<td><input class='data' type='text' name='lastname' value='$lastname'></td>";
                $output .= "<td class='deletecell'><div class='delete'></div></td>";
                $output .= "</tr>";
                break;
        }
    }
    
    if ($data=="others") {
        $output .= "<$tag class='logout'>";
        $output .= "<a href='index.php'>Logout</a>";
        $output .= "</$tag>";
    }
    
    if ($tag=="li") {
        $output .= "</ul>";
    }
    
    $stmt->close();
    return($output);
}

?>