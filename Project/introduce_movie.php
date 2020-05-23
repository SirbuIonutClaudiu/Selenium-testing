<?php
 include 'resize_image.php';
 
 $target_dir = "images/";
 $current_file = $_FILES["poster"]["tmp_name"];
 $target_file = $target_dir . basename($_FILES["poster"]["name"]);
 move_uploaded_file($current_file, $target_file);
 $imageFileType = pathinfo($target_file,PATHINFO_EXTENSION);
 $fileName = $_POST["title"];
 $result_file = $target_dir . $fileName . '.' . $imageFileType;
 rename($target_file, $result_file);
 
 $final_dir = "thumbnails/";
 $resizedFile =  $final_dir . $fileName . '.' . $imageFileType;
 smart_resize_image($result_file , null, 128 , 128 , false , $resizedFile , false , false ,100 );

 $title = $_POST["title"];
 $release_date = $_POST["release_date"];
 $runtime = $_POST["runtime"];
 $description = addslashes($_POST["description"]);
 $actors_nr = $_POST["actors_nr"];
 $poster = $fileName . '.' . $imageFileType;
 $uploader = $_COOKIE["username"];
 $trailer = $_POST["trailer"];
 $trailer_code = "";
 for($i = strlen($trailer)-1 ; $trailer[$i] != "=" ; $i--)
  {
    $trailer_code .= $trailer[$i];	  
  }
 $trailer_code = strrev($trailer_code); 
 $actor = array();
 for($i = 1; $i <= $actors_nr; $i++) $actor[$i] = $_POST["actor$i"];
 $genres_nr = 0;
 $genre = array();
 foreach($_POST['genre'] as $selected)
 {
   $genres_nr++;
   $genre[$genres_nr] = $selected;	 
 }
 
 
 $server = "localhost";
 $user = "root";
 $pass = "";

 $connection = new mysqli($server, $user, $pass, "movies");
 
 $sql = "INSERT INTO `movies`.`movies` (`list_nr`, `title`, `yor`, `description`, `runtime`, `uploader`, `movie_image`, `movie_url_code`)
          VALUES (NULL,'".$title."', '".$release_date."', '".$description."', '".$runtime."', '".$uploader."', '".$poster."', '".$trailer_code."');";
 mysqli_query($connection,$sql);
 $sql = "SELECT * FROM `movies` WHERE `title` = '$title' AND `yor` = '$release_date' AND `description` = '$description'
                                AND `runtime` = '$runtime' AND `uploader` = '$uploader' AND `movie_image` = '$poster'
	 						   AND `movie_url_code` = '$trailer_code'";
 $result = mysqli_query($connection,$sql);
 $row = mysqli_fetch_assoc($result);
 $mln = $row["list_nr"]; 
 
 for($i = 1; $i <= $actors_nr; $i++)
  {
    $sql = "SELECT * FROM `actors` WHERE `name` = '$actor[$i]'";
	$result = mysqli_query($connection,$sql);
	$rowcount = mysqli_num_rows($result);
    if ($rowcount < 1 ) $aln = 0;
	else $aln = 1;

	if(!$aln)    
      {
	    $sql = "INSERT INTO `movies`.`actors` (`list_nr`, `name`, `yob`, `awards_nr`, `uploader`, `actor_image`)
                VALUES (NULL, '".$actor[$i]."', NULL, NULL, '".$uploader."', NULL);";
        mysqli_query($connection,$sql);
	  }
	
	$sql = "SELECT * FROM `actors` WHERE `name` = '$actor[$i]' AND `uploader` = '$uploader'";
	$result = mysqli_query($connection,$sql);
	$row = mysqli_fetch_assoc($result);
	$aln = $row["list_nr"];

	$sql = "INSERT INTO `movies`.`movie_actors` (`actor_list_nr`, `movie_list_nr`) VALUES ('$aln','$mln')";
	mysqli_query($connection,$sql);
  }
  
 for($i = 1; $i <= $genres_nr; $i++)
  {
    $sql = "INSERT INTO `movies`.`genres` (`name`) VALUES ('$genre[$i]')";
	mysqli_query($connection,$sql);
	
	$sql = "INSERT INTO `movies`.`movie_genres` (`movie_list_nr`, `genre_name`) VALUES ('$mln','$genre[$i]')";
	mysqli_query($connection,$sql);
  }
 
?>

<script>
	window.open("movie_succesful.php" , "_self");
</script>