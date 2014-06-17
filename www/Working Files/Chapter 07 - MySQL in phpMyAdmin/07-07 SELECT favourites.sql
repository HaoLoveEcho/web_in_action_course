SELECT * FROM movies
    WHERE movie_id IN (
        SELECT movie_id FROM favorites
            WHERE favorites.user_id = 9
    )
ORDER BY title;


SELECT * FROM movies
    WHERE movie_id NOT IN (
        SELECT movie_id FROM favorites
            WHERE favorites.user_id = 3
    )
ORDER BY title
