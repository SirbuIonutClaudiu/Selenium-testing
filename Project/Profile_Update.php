<?php
 function delete_cookie()
 {
   setcookie("username", "", time() - 60*60*24, "/");
 }
 if (isset($_GET['delete'])) delete_cookie();
?>

<html>

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
        
        <link href='https://fonts.googleapis.com/css?family=Open+Sans+Condensed:300,700' rel='stylesheet' type='text/css'>
        <link rel="stylesheet" type="text/css" href="Profile_Update.css" media="screen">
        
        </head>

<body>

	<div id="wrapper">
    
    <div id="top">
        	
                  <div id="logo">
                  
                  <img src="Logo.jpg">
                
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
   <li class='active'><a href="Profile_Update.php"><span>Profile</span></a></li>
   <li class='has-sub'><a href='#'><span>Upload</span></a>
      <ul>
         <li><a href="movie_upload.php"><span>Movie</span></a></li>
         <li class='last'><a href="actor_upload.php"><span>Actor</span></a></li>
      </ul>
   </li>
   <li class='has-sub'><a href='#'><span>Contact</span></a>
   <ul> 
   		<li><a href='FAQ.php'><span> FAQ </span></a> </li>
        <li><a href="about.php" class='last'><span> About </span></a> </li>
    </ul>
    </li>
    <li class='has-sub'><a onClick="logOut()" style = "cursor:pointer;"><span>Logout</span></a></li>
</ul>
</div>
    	
        <div id="content">
		
        <form action="user_update.php" method="post">
		
        <ol>
        
        
        <li> New Password : </li> 
        <li><input type="password" name="password" class="box"> </li>
        <li> Email : </li>
        <li><input type="text" name="email" class="box"> </li>
        <li> Gender :
        			<select id="select" name="gender">
                    
                    <option value="Male"> Male </option>
                    <option value="Female"> Female </option>
                    
                    </select>
                    
          </li> 
      <li> <input type="submit" value="Update" class="submit"> </li>
           
    </ol>
  </form>
  </div>
  
  <div id="footer">
  
   <p> &copy;Copyright 201X | All Rights Reserved | Company Name 1234 Main Street Los Angeles California 90022 | 555.555.5555 </p>
  
  </div>
  
</div>

</body>

</html>