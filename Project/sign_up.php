<!DOCTYPE html>

<html>

<head>
 <title>Sign Up</title>
 <link rel="stylesheet" href="sign_up.css">
</head>

<body>
<div id="banner" class="centerer">

<img src="Banner2.0.png">

</div>
 <form action="check_sign_up.php" method="post" id="login"></form>
 <div class="center">
  <table border="0" cellspacing="0">
   <tr>
    <td class="back1"><img src="user_icon.png"></td>
    <td class="input1"><input type="text" size=30 name="username" placeholder="Username*" class="text" form="login" required/></td>
   </tr>
   <tr>
    <td class="back2"><img src="pass_icon.png"></td>
    <td class="input2"><input type="password" size=30 name="password" placeholder="Password*" class="text" form="login" required/></td>
   </tr>
   <tr>
    <td class="back3"><img src="mail_icon.png"></td>
    <td class="input3"><input type="text" size=30 name="email" placeholder="Email" class="text" form="login"></td>
   </tr>
   <tr>
    <td class="back4"><img src="gender_icon.png"></td>
    <td> 
     <select name="gender" form="login" required>
       <option value="">Choose your gender*</option>
       <option value="male">male</option>
       <option value="female">female</option>
     </select>   
    </td>
   </tr>
   <tr>
    <td colspan="2" align="center" class="submit"><input type="submit" value="SIGN UP" class="submit" width="300" form="login"></td>
   </tr>
  </table>
 </div>

</body>
    
</html>
