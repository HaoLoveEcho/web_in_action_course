<?php
$nonfavsList = showMovies('non_favs');
$fullname = showUsers('get_name');
?>

        <section class="movie_list">
            <?php echo $fullname; ?>
            <p class="welcome">Here are some movies you might like.
            Click on the heart icon to add them to your favourites list.</p>
            <ul>
                <?php echo $nonfavsList; ?>
            </ul>
        </section>
        