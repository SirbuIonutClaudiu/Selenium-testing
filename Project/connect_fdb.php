<?php
 session_start();
 
 $servername = "localhost";
 $username = "root";
 $password = "";
 $database = "FILME";

// Create connection
 $connection = new mysqli($servername, $username, $password);
// Check connection
 if(!$connection) echo "Connection to database couldn't be established !";
// Create database
 $sql = "CREATE DATABASE $database";
 $connection->query($sql);
// Save sessions
 $_SESSION["connection"] = $connection;
 $_SESSION["database"] = $database;

?> 