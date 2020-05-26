<?php
 function delete_cookie()
 {
   setcookie("username", "", time() - 60*60*24, "/");
 }
 if (isset($_GET['delete'])) delete_cookie();
?>

<html><!-- InstanceBegin template="/Templates/Upload.dwt.php" codeOutsideHTMLIsLocked="false" -->

 <head>
 <script>
		 function checkLog()
		  {
            if (document.cookie.indexOf("username"))
		     {
		       alert("Session has expired");
		       window.open("sign_in.php", "_self");
		     }
		  }
               
		  function logOut()
		  {
			window.open("home.php?delete=true", "_self");
		  }
		 checkLog(); 
		</script>
 <!-- InstanceBeginEditable name="doctitle" -->
 <title></title>
 <!-- InstanceEndEditable -->
 <!-- InstanceBeginEditable name="EditRegion4" -->
  <script type="text/javascript" src="actor_upload.js"></script>
  <link rel="stylesheet" href="actor_upload.css" type="text/css" media="screen">
  <link href='https://fonts.googleapis.com/css?family=Open+Sans+Condensed:300,700' rel='stylesheet' type='text/css'>
  <!-- InstanceEndEditable -->
  <!-- InstanceBeginEditable name="head" -->
  <!-- InstanceEndEditable -->
 </head>

 <body>
 	
 
 	<div id="wrapper">
    
    <div id="top">
    
    <div id="logo">
    
    <img src="Logo.jpg">
    
    </div>
    
    <div id="user">
    
    <table>
                  	 
                     <tr>
                     	
                        <td> Welcome </td>
                  		<td> <?php  $username = $_COOKIE["username"]; echo "<font color='blue'> <b>$username</b> </font>"; ?>  </td>
                     
                      </tr>
                      
                      <tr>
                      
                      	<td> <input type = "image" src="logout.png" onclick = "logOut()"> </td>
                       <td> <p onclick = "logOut()" style = "cursor:pointer;">Log Out</p> </td>
                      
                      </tr>
                      
               		  </table>
    
    </div>
    
    
    
    </div>
    
    <div id='cssmenu'>
<ul>
   <li><a href="home.php"><span>Home</span></a></li>
   <li class='has-sub'><a href='#'><span>Browse</span></a>
   <ul>
         <li><a href="browse.php"><span>Movies</span></a></li>
         <li class='last'><a href="browse_actors.php"><span>Actors</span></a></li>
      </ul>
   </li>
   <li class='has-sub'><a href="Profile_Update.php"><span>Profile</span></a></li>
   <li class='active'><a href='#'><span>Upload</span></a>
      <ul>
         <li><a href="movie_upload.php"><span>Movie</span></a></li>
         <li class='last'><a href='actor_upload.php'><span>Actor</span></a></li>
      </ul>
   </li>
   <li class='has-sub'><a href='#'><span>Contact</span></a>
   <ul> 
   		<li><a href='FAQ.php'><span> FAQ </span></a> </li>
        <li><a href="about.php" class='last'><span> About </span></a> </li>
    </ul>
    </li>
</ul>
</div>
    <!-- InstanceBeginEditable name="EditRegion3" -->
    
    
    <div id="content-wrapper">
      <div id="general-wrapper">
  <form action = "introduce_actor.php" method = "post" id = "upload_actor" enctype="multipart/form-data" onSubmit="return rightData();"></form>
   
  <p> Name </p>
  <input type = "text" name = "name" id = "name" placeholder = "Insert complet name" form = "upload_actor" required class="box">
  
  <p> Birth Year </p>
  <input type = "text" name = "birth_year" id = "birth_year" placeholder = "YEAR" form = "upload_actor" required class="box">
  
  <p> Awards Number </p>
  <input type = "text" name = "awards" id = "awards" placeholder = "Insert the number of awards" form = "upload_actor" required class="box">
  <p> Personal Details </p>
  <textarea rows = "4" cols = "50" name = "details" id = "details" placeholder = "Insert a short summary of the actor career" form="upload_actor" required class="box2"></textarea>
  <p> Picture </p>
  <input type="file" name = "image" id = "image" form = "upload_actor" accept="image/*" required>
  <br><br> <input type = "submit" value = "Upload Actor" form = "upload_actor" class="button">
  </div>
<!-- InstanceEndEditable -->
  
  <div id="footer">
  
  <p> &copy;&copy;Copyright 201X | All Rights Reserved | Company Name 1234 Main Street Los Angeles California 90022 | 555.555.5555</p>
  
  </div>
  
  </div>
  
 </body>
 
<!-- InstanceEnd --></html>
