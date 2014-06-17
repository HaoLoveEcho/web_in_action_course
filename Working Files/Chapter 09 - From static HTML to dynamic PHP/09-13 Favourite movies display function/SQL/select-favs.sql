SELECT * FROM movies
    WHERE `movie_id` IN (
        SELECT `movie_id` FROM `favourites`
            WHERE `favourites`.`user_id` = ?
    )
ORDER BY `title`