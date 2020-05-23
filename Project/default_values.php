<?php

 include 'import.php';
 IMPORT_TABLES("localhost", "root", "", "users", "users.sql");
 IMPORT_TABLES("localhost", "root", "", "movies", "movies.sql");

?>