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
		
    case "no_id":
        $greeting = showUsers('get_name');
        break;   		
        
    case "id_set":
        $singleMovie = showMovies('single');
        break;

}

if ($testMovies == "no_data") {
	echo "<div class='message alert'>";
    echo "<h2>No movies in database: Add movies below</h2>";
    echo "</div>";
    include 'admin-movies.inc.php';
	include 'footer.inc.php';
    exit;	
} else {
	echo "<nav class='favs_list'>";
    echo "<h2>Favourites</h2>";
    echo "<ul class='favs'>";
	echo $favsList;
    echo "</ul>";
	echo "<div class='trash'></div>";
    echo "</nav>";
}
 
if (!isset($movieID)) { // show movie list
    echo "<section class='movie_list'>";
    echo $greeting;
    echo "<p class='welcome'>Here are some movies you might like.";
    echo "Click on the heart icon to add them to your favourites list.</p>";
    echo "<ul>";
    echo $nonfavsList;
    echo "</ul>";
    echo "</section>";
} else { //show single movie
    echo "<section class='movie_single'>";
    echo $singleMovie;
    echo "</section>";
}

?>