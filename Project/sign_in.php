<!DOCTYPE html>

<html>

<head>
 <title>Sign In</title>
 <link rel="stylesheet" href="sign_in.css">
</head>

<body>

<div id="banner" class="centerer">

<img src="Banner2.0.png">

</div>

 <form action="check_sign_in.php" method="post" id="login"></form>
 <div class="center">
   <table border="0" cellspacing="0">
     <tr>
       <td class="back1"><img src="user_icon.png"></td>
       <td class="input1"><input type="text" size=30 name="username" placeholder="Username" class="text" form="login" required/></td>
     </tr>
     <tr>
       <td class="back2"><img src="pass_icon.png"></td>
       <td class="input2"><input type="password" size=30 name="password" placeholder="Password" class="text" form="login" required/></td>
     </tr>
     <tr>
       <td colspan="2" align="center" class="submit"><input type="submit" name="submit" value="SIGN IN" class="submit" width="300" form="login"></td>
     </tr>
     <tr>
       <td colspan="2" align="center" class="bottom">Not a member yet ?&nbsp;&nbsp;&nbsp;&nbsp; <a href="sign_up.php">Sign up now</a></td>
     </tr>
   </table>
 </div>

</body>
    
</html>
