SELECT * FROM movies;
 
SELECT * FROM movies ORDER BY title ASC;
 
SELECT * FROM movies ORDER BY title DESC;
 
SELECT title FROM movies;

SELECT firstname, lastname FROM movie_goers;

SELECT title FROM movies WHERE title = 'Life of Pie';

SELECT * FROM movies WHERE title LIKE '%cheese%';