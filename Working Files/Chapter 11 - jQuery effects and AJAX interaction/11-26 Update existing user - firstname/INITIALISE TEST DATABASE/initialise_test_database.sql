DROP DATABASE IF EXISTS movies;

CREATE DATABASE IF NOT EXISTS movies;

USE movies;

CREATE TABLE movies (
  movie_id INT(11)
  NOT NULL AUTO_INCREMENT,
  PRIMARY KEY(movie_id),
  title VARCHAR(250),
  description VARCHAR(2500)
 ) ENGINE=InnoDB
  COLLATE utf8_general_ci;  


INSERT INTO movies (movie_id, title, description) VALUES
  (NULL, "Title 1","Description 1"),
  (NULL, "Title 2","Description 2"),
  (NULL, "Title 3","Description 3"),
  (NULL, "Title 4","Description 4"),
  (NULL, "Title 5","Description 5")
;

CREATE TABLE movie_goers (
  user_id INT(11)
  NOT NULL AUTO_INCREMENT,
  PRIMARY KEY(user_id),
  firstname VARCHAR(250),
  lastname VARCHAR(250)
 ) ENGINE=InnoDB
  COLLATE utf8_general_ci;   
  
INSERT INTO movie_goers (user_id, firstname, lastname) VALUES
  (NULL, "Firstname 1", "Lastname 1"),
  (NULL, "Firstname 2", "Lastname 2"),
  (NULL, "Firstname 3", "Lastname 3"),
  (NULL, "Firstname 4", "Lastname 4"),
  (NULL, "Firstname 5", "Lastname 5")
;
