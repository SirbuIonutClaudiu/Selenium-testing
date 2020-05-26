<?php

 $server = "localhost";
 $user = "root";
 $pass = "";
 $db = "Movies";

 $connection = new mysqli($server, $user, $pass, $db);

 $sql=array();
 $sql[1] = "CREATE TABLE IF NOT EXISTS `actors` (
            `list_nr` int(11) NOT NULL AUTO_INCREMENT,
            `name` varchar(100) NOT NULL,
            `yob` int(11),
            `awards_nr` int(11),
            `uploader` varchar(100) NOT NULL,
            `actor_image` varchar(100),
			`actor_biography` LONGTEXT,
            PRIMARY KEY (`list_nr`) )";
 $sql[2] = "CREATE TABLE IF NOT EXISTS `genres` (
            `name` varchar(100) NOT NULL,
            PRIMARY KEY (`name`) ) ";
 $sql[3] = "CREATE TABLE IF NOT EXISTS `movies` (
            `list_nr` int(11) NOT NULL AUTO_INCREMENT,
            `title` varchar(100) NOT NULL,
            `yor` int(11) NOT NULL,
            `description` LONGTEXT NOT NULL,
            `runtime` int(11) NOT NULL,
            `uploader` varchar(100) NOT NULL,
            `movie_image` varchar(100) NOT NULL,
            `movie_url_code` varchar(100) NOT NULL,
            PRIMARY KEY (`list_nr`) ) ";
 $sql[4] = "CREATE TABLE IF NOT EXISTS `movie_actors` (
            `actor_list_nr` int(11) NOT NULL,
            `movie_list_nr` int(11) NOT NULL,
            PRIMARY KEY (`actor_list_nr`,`movie_list_nr`),
            KEY `movie_actors_foreign_two` (`movie_list_nr`) ) ";
 $sql[5] = "CREATE TABLE IF NOT EXISTS `movie_genres` (
            `genre_name` varchar(100) NOT NULL,
            `movie_list_nr` int(11) NOT NULL,
            PRIMARY KEY (`genre_name`,`movie_list_nr`),
            KEY `movie_genres_foreign_two` (`movie_list_nr`) ) ";
 $sql[6] = "ALTER TABLE `movie_actors`
            ADD CONSTRAINT `movie_actors_foreign_two` FOREIGN KEY (`movie_list_nr`)
			 REFERENCES `movies` (`list_nr`) ON DELETE CASCADE ON UPDATE CASCADE,
            ADD CONSTRAINT `movie_actors_foreign_one` FOREIGN KEY (`actor_list_nr`)
			 REFERENCES `actors` (`list_nr`) ON DELETE CASCADE ON UPDATE CASCADE;";
 $sql[7] = "ALTER TABLE `movie_genres`
            ADD CONSTRAINT `movie_genres_foreign_two` FOREIGN KEY (`movie_list_nr`)
			 REFERENCES `movies` (`list_nr`) ON DELETE CASCADE ON UPDATE CASCADE,
            ADD CONSTRAINT `movie_genres_foreign_one` FOREIGN KEY (`genre_name`)
			 REFERENCES `genres` (`name`) ON DELETE CASCADE ON UPDATE CASCADE;";			 

 for($i = 1; $i <= 7; $i++) mysqli_query($connection,$sql[$i]);

?>