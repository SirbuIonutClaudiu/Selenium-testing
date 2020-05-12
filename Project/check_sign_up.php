<?php

 $server = "localhost";
 $user = "root";
 $pass = "";
 $db = "Users";

 $connection = new mysqli($server, $user, $pass, $db);

 $username = $_POST["username"];
 $password = $_POST["password"];
 $gender = $_POST["gender"];
 if(!empty($_POST["email"])) $email=$_POST["email"]; else $email=0;
 
 $sql = "SELECT `username` FROM `$db` WHERE `username` = '$username'";
 $result = mysqli_query($connection, $sql);
 $rowcount = mysqli_num_rows($result);
 if ($rowcount < 1 ) $register = 1;
 else $register = 0;
 
?>

<html>
 <body>
  <form action="introduce_user.php" id="insert" name="insert" method="post">
   <input type="hidden" name="username" value="<?php echo $username;?>">
   <input type="hidden" name="password" value="<?php echo $password;?>">
   <input type="hidden" name="email" value="<?php echo $email;?>">
   <input type="hidden" name="gender" value="<?php echo $gender;?>">
  </form>
  <form action="sign_up.php" id="register" name="register"></form>
  <script type="text/javascript">
   var register = "<?php Print($register); ?>";
   if(register != 0) document.forms["insert"].submit();
   else 
    {
	  window.alert("Username is alredy taken! Please try again!");
	  document.forms["register"].submit();
	}
  </script>
 </body>
</html> 
