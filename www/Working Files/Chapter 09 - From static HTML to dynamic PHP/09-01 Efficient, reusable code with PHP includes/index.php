<?php

require_once 'php-includes/head.inc.php';
require_once 'php-includes/header.inc.php';
require_once 'php-includes/navigation.inc.php';
require_once 'php-includes/favourites.inc.php';

?>

  
        

        

        
        <section class="movie_list">
            <h2>Hi, (username will appear here)</h2>
            <p class="welcome">Here are some movies you might like.
            Click on the heart icon to add them to your favourites list.</p>
            <ul>
                <li>
                    <figure><a href="#"><img class="thumbnail" alt="Thumbnail"
                            src="images-movies/thumbnail.png"></a>
                        <figcaption>
                            <h3><a href="#">Movie Title</a></h3>
                            <div class="description">Movie description</div>
                            <div class="add_remove favourite"></div>
                        </figcaption>
                    </figure>
                </li>
                <li>
                    <figure><a href="#"><img class="thumbnail" alt="Thumbnail"
                            src="images-movies/thumbnail.png"></a>
                        <figcaption>
                            <h3><a href="#">Movie Title</a></h3>
                            <div class="description">Movie description</div>
                            <div class="add_remove add favourite"></div>
                        </figcaption>
                    </figure>
                </li>
                <li>
                    <figure><a href="#"><img class="thumbnail" alt="Thumbnail"
                            src="images-movies/thumbnail.png"></a>
                        <figcaption>
                            <h3><a href="#">Movie Title</a></h3>
                            <div class="description">Movie description</div>
                            <div class="add_remove favourite"></div>
                        </figcaption>
                    </figure>
                </li>
            </ul>
        </section>
        
<?php
require_once 'php-includes/footer.inc.php';
?>