DELETE FROM movie_goers
    WHERE lastname = 'Gaits';

DELETE FROM favourites 
    WHERE user_id = 3 && movie_id = 9;

TRUNCATE TABLE favourites;

DROP DATABASE movies;
