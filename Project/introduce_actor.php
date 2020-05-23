<?php
 include 'resize_image.php';
 
 $target_dir = "images/";
 $current_file = $_FILES["image"]["tmp_name"];
 $target_file = $target_dir . basename($_FILES["image"]["name"]);
 move_uploaded_file($current_file, $target_file);
 $imageFileType = pathinfo($target_file,PATHINFO_EXTENSION);
 $fileName = $_POST["name"];
 $result_file = $target_dir . $fileName . '.' . $imageFileType;
 rename($target_file, $result_file);
 
 $final_dir = "thumbnails/";
 $resizedFile =  $final_dir . $fileName . '.' . $imageFileType;
 smart_resize_image($result_file , null, 128 , 128 , false , $resizedFile , false , false ,100 );
 
 $name = $_POST["name"];
 $birth_year = $_POST["birth_year"];
 $awards = $_POST["awards"];
 $poster = $fileName . '.' . $imageFileType;
 $uploader = $_COOKIE["username"];
 $details = addslashes($_POST["details"]);

 $server = "localhost";
 $user = "root";
 $pass = "";

 $connection = new mysqli($server, $user, $pass, "movies");
 
 $sql = "SELECT * FROM `actors` WHERE `name` = '$name' ";
 $result = $connection->query($sql);
 $rowcount = mysqli_num_rows($result);
 
 if($rowcount < 1)
  {
    $sql = "INSERT INTO `movies`.`actors` (`list_nr`, `name`, `yob`, `awards_nr`, `uploader`, `actor_image`, `actor_biography`)
            VALUES (NULL, '".$name."', '".$birth_year."', '".$awards."', '".$uploader."', '".$poster."', '".$details."');";
    mysqli_query($connection,$sql);     
  }
 else
 {
   $sql = "UPDATE actors SET `yob`='$birth_year', `awards_nr`='$awards', `actor_image`='$poster', `actor_biography`='$details' WHERE `name`='$name'";
   mysqli_query($connection,$sql);     
 }
?>

<script>
  window.open("actor_succesful.php" , "_self");
</script>