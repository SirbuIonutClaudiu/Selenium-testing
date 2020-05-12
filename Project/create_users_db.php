<?php

 $server = "localhost";
 $user = "root";
 $pass = "";
 $db = "Users";

 $connection = new mysqli($server, $user, $pass, $db);

 $sql = "CREATE TABLE Users (
               username VARCHAR(30) PRIMARY KEY,
			   password VARCHAR(30) NOT NULL,
			   email VARCHAR(30),
			   gender VARCHAR(30) NOT NULL)";
 mysqli_query($connection,$sql);
			   
?>