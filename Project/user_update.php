<?php
  $connection = new mysqli("localhost", "root", "", "users");
  $username = $_COOKIE["username"];
 
  if(!empty($_POST["password"]))
  {
     $password = $_POST["password"];
     $sql = "UPDATE users SET PASSWORD='$password' WHERE USERNAME='$username'";
     mysqli_query($connection,$sql);
  }
  if(!empty($_POST["email"]))
   {
     $email = $_POST["email"];
     $sql = "UPDATE users SET EMAIL='$email' WHERE USERNAME='$username'";
     mysqli_query($connection,$sql);    
   }
  $gender = $_POST["gender"];
  $sql = "UPDATE users SET GENDER='$gender' WHERE USERNAME='$username'";
  mysqli_query($connection,$sql);
?>
<script>

window.open("home.php?delete=true", "_self");
</script>