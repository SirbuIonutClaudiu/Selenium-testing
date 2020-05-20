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
 <!-- TemplateBeginEditable name="doctitle" -->
 <title></title>
 <!-- TemplateEndEditable -->
 <!-- TemplateBeginEditable name="EditRegion4" -->
 <script type="text/javascript" src="../movie_upload.js"></script>
  <link rel="stylesheet" href="../movie_upload.css" type="text/css" media="screen">
  <link href='https://fonts.googleapis.com/css?family=Open+Sans+Condensed:300,700' rel='stylesheet' type='text/css'>
  <!-- TemplateEndEditable -->
  <!-- TemplateBeginEditable name="head" -->
  <!-- TemplateEndEditable -->
 </head>

 <body>
 	
 
 	<div id="wrapper">
    
    <div id="top">
    
    <div id="logo">
    
    <img src="../Logo.jpg">
    
    </div>
    
    <div id="user">
    
    <table>
                  	 
                     <tr>
                     	
                        <td> Welcome </td>
                  		<td> <?php  $username = $_COOKIE["username"]; echo "<font color='blue'> <b>$username</b> </font>"; ?>  </td>
                     
                      </tr>
                      
                      <tr>
                      
                      	<td> <input type = "image" src="../logout.png" onclick = "logOut()"> </td>
                       <td> <p onclick = "logOut()" style = "cursor:pointer;">Log Out</p> </td>
                      
                      </tr>
                      
               		  </table>
    
    </div>
    
    
    
    </div>
    
    <div id='cssmenu'>
<ul>
   <li><a href="../home.php"><span>Home</span></a></li>
   <li class='has-sub'><a href='#'><span>Browse</span></a>
   <ul>
         <li><a href="browse.php"><span>Movies</span></a></li>
         <li class='last'><a href="browse_actors.php"><span>Actors</span></a></li>
      </ul>
   </li>
   <li class='has-sub'><a href="../Profile_Update.php"><span>Profile</span></a></li>
   <li class='active'><a href='#'><span>Upload</span></a>
      <ul>
         <li><a href="../movie_upload.php"><span>Movie</span></a></li>
         <li class='last'><a href='../actor_upload.php'><span>Actor</span></a></li>
      </ul>
   </li>
   <li class='has-sub'><a href='#'><span>Contact</span></a>
   <ul> 
   		<li><a href='../FAQ.php'><span> FAQ </span></a> </li>
        <li><a href="../about.php" class='last'><span> About </span></a> </li>
    </ul>
    </li>
</ul>
</div>
    <!-- TemplateBeginEditable name="EditRegion3" -->
    
    
    <div id="content-wrapper">
      <div id="general-wrapper">
  <form action = "../introduce_movie.php" method = "post" id = "upload_movie" enctype="multipart/form-data" onSubmit="return checkCheckBoxes(this);"></form>
   
  <p> Title </p>
  <input type = "text" name = "title" id = "title" placeholder = "Insert movie title" form = "upload_movie" required class="box">
  
  <p> Release date </p>
  <input type = "text" name = "release_date" id = "release_date" placeholder = "Insert year of aparition" form = "upload_movie" required class="box">
  
  <p> Runtime </p>
  <input type = "text" name = "runtime" id = "runtime" placeholder = "Insert the movies length(in minutes)" form = "upload_movie" required class="box">
  
  <p> Description </p>
  <textarea rows = "4" cols = "50" name = "description" id = "description" placeholder = "Insert description of the movie" form="upload_movie" required class="box2"></textarea>
  <p> Poster </p>
  <input type="file" name = "poster" id = "poster" form = "upload_movie" accept="image/*" required>
  <br><br> <input type = "submit" value = "Upload movie" form = "upload_movie" class="button">
  </div>
  <div id="right-side">
  <div id = "genres_container">
  <p> Genres : </p>
  <div>
   <input type = "checkbox" name = "genre[]" value = "action" id = "action" form = "upload_movie">
   <label for = "action"><span></span>Action</label> 
  </div>
  <div>
   <input type = "checkbox" name = "genre[]" value = "adventure" id = "adventure" form = "upload_movie">
   <label for = "adventure"><span></span>Adventure</label>
  </div>
  <div>
   <input type = "checkbox" name = "genre[]" value="comedy" id = "comedy" form = "upload_movie">
   <label for = "comedy"><span></span>Comedy</label>
  </div>
  <div>
   <input type = "checkbox" name = "genre[]" value = "crime" id = "crime" form = "upload_movie">
   <label for = "crime"><span></span>Crime</label>
  </div>
  <div>
   <input type = "checkbox" name = "genre[]" value = "history" id = "history" form = "upload_movie">
   <label for = "history"><span></span>History</label>
  </div>
  <div>
   <input type = "checkbox" name = "genre[]" value = "horror" id = "horror" form = "upload_movie">
   <label for = "horror"><span></span>Horror</label>
  </div>
  <div>
   <input type = "checkbox" name = "genre[]" value = "thriller" id = "thriller" form = "upload_movie">
   <label for = "thriller"><span></span>Thriller</label>
  </div>
  <div>
   <input type = "checkbox" name = "genre[]" value = "western" id = "western" form = "upload_movie">
   <label for = "western"><span></span>Western</label>
  </div>
  </div>

  <div id = "cast_container">
   <p> Cast : </p>
   <font color="#EBEBEB" onclick = "addNewInput()" style = "cursor:pointer; padding-right:8px;">Add New Actor</font> <input type = "image" src="../Plus.png"  onclick = "addNewInput()"> 
   <p> Actor 1 </p>
   <input type = "text" name = "actor1" id = "actor1" placeholder = "Insert actor name" form = "upload_movie" required class="box">
  <input type = "hidden" name = "actors_nr" id = "actors_nr" value="1" form = "upload_movie">
  
  </div>
  </div>
  
</div>
<!-- TemplateEndEditable -->
  
  <div id="footer">
  
  <p> &copy;&copy;Copyright 201X | All Rights Reserved | Company Name 1234 Main Street Los Angeles California 90022 | 555.555.5555</p>
  
  </div>
  
  </div>
  
 </body>
 
</html>
