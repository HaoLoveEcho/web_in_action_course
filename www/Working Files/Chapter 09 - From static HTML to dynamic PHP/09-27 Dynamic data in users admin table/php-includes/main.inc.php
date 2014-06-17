<?php
$favsList = showMovies('favs');
$nonfavsList = showMovies('non_favs');
$testMovies = testMovies();
$testFav = testFav();

if ($favsList==""){
	$favsTitle = "You have no favourites";
	$trashClass = "hidden";
} else {
	$favsTitle = "Favourites";
	$trashClass = "";
}

if ($nonfavsList=="") {
	$welcome = "It looks like you love all the movies! ";
	$welcome .= "Drag them to the trash can to delete them from your favourites.";
	$openTag = "";
	$closeTag = "";
	$welcomeClass = "no_border_bottom";
} else {
	$welcome = "Here are some movies you might like. ";
	$welcome .= "Click on the heart icon to add them to your favourites list.";
	$openTag = "<ul>";
	$closeTag = "</ul>";
	$welcomeClass = "";
}


switch($testMovies) {
    
    case "invalid_id":
        echo "<div class='message alert'>";
        echo "<h2>Invalid movie ID: Choose a movie-goer from the menu on the right</h2>";
        echo "</div>";
        include 'footer.inc.php';
        exit;
		
	case "no_data":
		echo "<div class='message alert'>";
		echo "<h2>No movies in database: Add movies below</h2>";
		echo "</div>";
		include 'admin-movies.inc.php';
		include 'footer.inc.php';
		exit;
		
    case "no_id":
        $greeting = showUsers('get_name');
        break;   		
        
    case "id_set":
        $singleMovie = showMovies('single');
        break;

}

echo "<nav class='favs_list'>";
echo "<h2>$favsTitle</h2>";
echo "<ul class='favs'>";
echo $favsList;
echo "</ul>";
echo "<div class='trash $trashClass'></div>";
echo "</nav>";

switch($testMovies) {
	case "no_id":
		echo "<section class='movie_list'>";
		echo $greeting;
		echo "<p class='welcome $welcomeClass'>$welcome";
		echo $openTag;
		echo $nonfavsList;
		echo $closeTag;
		echo "</section>";
		break;
	
	case "id_set":
		echo "<section class='movie_single'>";
		echo $singleMovie;
		echo "</section>";
		break;
}

?>