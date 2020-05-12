<?php

 $username = $_POST["username"];
 $password = $_POST["password"];

 $server = "localhost";
 $user = "root";
 $pass = "";
 $db = "Users";

 $connection = new mysqli($server, $user, $pass, $db);
 
 $sql = "SELECT `username`,`password` FROM `$db` WHERE `password` = '$password' AND `username` = '$username'";
 $result = mysqli_query($connection, $sql);
 $rowcount = mysqli_num_rows($result);
 if ($rowcount < 1 ) $login = 0;
 else $login = 1;
 
setcookie("username", $username, time() + 60*60*24, "/");

?>

<html>
 <body>
  <form action="home.php" id="home" name="home" method="post">
   <input type="hidden" name="username" value="<?php echo $username;?>">
  </form>
  <form action="sign_in.php" id="login" name="login"></form>
  <script type="text/javascript">
   var login = "<?php Print($login); ?>";
   if(login != 0) document.forms["home"].submit();
   else 
    {
	  window.alert("Wrong sign in data! Please try again!");
	  document.forms["login"].submit();
	}
  </script>
 </body>
</html>