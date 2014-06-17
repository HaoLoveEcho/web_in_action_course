<?php
$favsList = showMovies('favs');
$nonfavsList = showMovies('non_favs');
$testMovies = testMovies();

switch($testMovies) {
    case "invalid_id":
        echo "<div class='message alert'>";
        echo "<h2>Invalid movie ID: Choose a movie-goer from the menu on the right</h2>";
        echo "</div>";
        include 'footer.inc.php';
        exit;
}

echo "<nav class='favs_list'>";
echo "<h2>Favourites</h2>";
echo "<ul class='favs'>";
echo $favsList;
echo "</ul>";
echo "<div class='trash'></div>";
echo "</nav>";
        
switch($testMovies) {
	case "no_id":
		echo "<section class='movie_list'>";
		$greeting = showUsers('get_name');
		echo $greeting;
		echo "<p class='welcome'>Here are some movies you might like.";
		echo "Click on the heart icon to add them to your favourites list.</p>";
		echo "<ul>";
		echo $nonfavsList;
		echo "</ul>";
		echo "</section>";
		break;
	
	case "id_set":
		echo "<section class='movie_single'>";
		$singleMovie = showMovies('single');
		echo $singleMovie;
		echo "</section>";
		break;
}

?>