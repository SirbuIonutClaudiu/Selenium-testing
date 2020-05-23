<?php

 $server = "localhost";
 $user = "root";
 $pass = "";
 $db = "Users";

 $connection = new mysqli($server, $user, $pass, $db);

 $username = $_POST["username"];
 $password = $_POST["password"];
 $gender = $_POST["gender"];
 $email=$_POST["email"];

 if($email) 
  {
	$sql = "INSERT INTO Users (username, password, email, gender) VALUES ('".$username."', '".$password."', '".$email."', '".$gender."')";
    mysqli_query($connection,$sql);
  }
 else
  { 
  	$sql = "INSERT INTO Users (username, password, gender) VALUES ('".$username."', '".$password."', '".$gender."')";
    mysqli_query($connection,$sql);
  }
 
?>

<html>
 <body>
  <form action="successfull_sign_up.php" id="succ" name="succ"></form>
  <script type="text/javascript">
   document.forms["succ"].submit();
  </script>
 </body>
</html>