<?php
 
 $servername = "localhost";
 $username = "root";
 $password = "";
 $database1 = "users";
 $database2 = "movies";

// Create connection
 $connection = new mysqli($servername, $username, $password);
// Check connection
 if(!$connection) echo "Connection to database couldn't be established !";
// Create database 1
 $sql = "CREATE DATABASE $database1";
 $connection->query($sql);
 // Create database 2
 $sql = "CREATE DATABASE $database2";
 $connection->query($sql);

?> 