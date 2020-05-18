<?php

 $list_nr = $_POST["list_number"];
 
 $server = "localhost";
 $user = "root";
 $pass = "";
 $db = "movies";
 $connection = new mysqli($server, $user, $pass, $db);
 
 $sql = "SELECT * FROM `movies` WHERE `list_nr`='$list_nr'";
 $result = mysqli_query($connection,$sql);
 $row = mysqli_fetch_assoc($result);
 $title = $row["title"];
 $yor = $row["yor"];
 $description = $row["description"];
 $runtime = $row["runtime"];
 $uploader = $row["uploader"];
 $movie_image = "'../Project/images/" .$row["movie_image"]. "'";
 $movie_trailer = "'http://www.youtube.com/embed/" .$row["movie_url_code"]. "'";

 $sql="SELECT actors.name, actors.actor_image, actors.list_nr
       FROM MOVIES,MOVIE_ACTORS,ACTORS
	   WHERE movies.list_nr=movie_actors.movie_list_nr AND actors.list_nr=movie_actors.actor_list_nr AND movies.list_nr='$list_nr'
	   ORDER BY actors.list_nr";
 $result = mysqli_query($connection, $sql);
 $actors_nr = 0;
 $actors_names = array();
 $actors_posters = array();
 $actors_list_nr = array();
 while($row = $result->fetch_assoc())
  {
     $actors_nr++;
	 $actors_names[$actors_nr] = $row["name"];
	 $actors_list_nr[$actors_nr] = $row["list_nr"];
	 if(!$row["actor_image"]) $actors_posters[$actors_nr] = "thumbnails/Undefined.png";
	 else $actors_posters[$actors_nr] = "thumbnails/".$row["actor_image"];	  
  }
  
 $sql = "SELECT genres.name 
         FROM MOVIES,MOVIE_GENRES,GENRES 
		 WHERE movies.list_nr=movie_genres.movie_list_nr AND genres.name=movie_genres.genre_name AND movies.list_nr='$list_nr' ";
 $result = mysqli_query($connection, $sql);
 $genres_nr = 0;
 $genres = array();
 while($row = $result->fetch_assoc())
  {
     $genres_nr++;
	 $genres[$genres_nr] = $row["name"];  
  }
 
?>


<script type="text/javascript">

 function showMovie(list_nr)
  {
    input = document.getElementById("list_number");
    input.setAttribute("value" , list_nr);
    document.forms["toMovie"].submit(); 	 
  } 

 function createTable()
  {
	var actors_posters = <?php echo json_encode($actors_posters); ?>;
	var actors_names = <?php echo json_encode($actors_names); ?>;
	var actors_list_nr = <?php echo json_encode($actors_list_nr); ?>;
	
	for(var i = 1; i <= <?php echo $actors_nr; ?>; i++)
     {	 
	   var tr = document.createElement("tr");
       tr.setAttribute("id", "tr"+i);
	    var td0 = document.createElement("td");
	    td0.setAttribute("id", "td"+i+0);
	     var image = document.createElement("img");
		 image.setAttribute("src", actors_posters[i]);
	     image.setAttribute("height", "70");
         image.setAttribute("width", "70");
	    td0.appendChild(image);		
	    var td1 = document.createElement("td");
	    td1.setAttribute("id", "td"+i+1);
	     var p1 = document.createElement("p");
		 p1.innerHTML = actors_names[i];
	     p1.setAttribute("id", "p"+i+1);
		 p1.style.cursor = "pointer";
		 p1.onclick = function(index) { showMovie(actors_list_nr[index]); }.bind(null,i);
	    td1.appendChild(p1);	
	   tr.appendChild(td0);
	   tr.appendChild(td1);
	   document.getElementById("cast_container").appendChild(tr);
	 }
  }

</script>


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
			document.cookie="username=username; expires=Thu, 18 Dec 2013 12:00:00 UTC;";
			window.open("sign_in.php", "_self");
		  }
		 checkLog();
		</script>
        		 
		<script src="js/jquery-1.9.1.min.js" type="text/javascript"> </script>
        <link href="movie.css" rel="stylesheet" type="text/css" media="screen">


</head>


<body>

	  <div id="wrapper">
      
      <div id="top"><img src="bb.jpg" width="899" height="213"></div>
      
      <div id="cssmenu">
      <ul>
   <li class='active'><a href="home.php"><span>Home</span></a></li>
   <li class='has-sub'><a href='#'><span>Browse</span></a>
   <ul>
         <li><a href="browse.php"><span>Movies</span></a></li>
         <li class='last'><a href="browse_actors.php"><span>Actors</span></a></li>
      </ul>
   </li>
   <li class='has-sub'><a href="Profile_Update.php"><span>Profile</span></a></li>
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
      
      <div id="content-wrapper">
      
      <div id="content">
      
      <div id="poster"><img src=<?php echo $movie_image; ?> width="200" height="265"></div>
      
      <div id="trailer">
        <iframe width="500" height="250" src=<?php echo $movie_trailer ?> frameborder="0" allowfullscreen></iframe>
      </div>
      
      <div id="general-info">
      <span> Title  : </span>
      <span class="text">  <?php echo $title; ?> </span>
      <br>  
      <span>Year of Release  :  </span>
      <span class="text">  <?php echo $yor; ?>  </span>
      <br>   
      <span> Runtime  : </span>
      <span class="text">  <?php echo $runtime; ?> min</span>
      <br>  
      <span>  Genres  : </span>
	 <span class="text"> <?php for( $i=1;$i<$genres_nr;$i++ ) echo " &nbsp $genres[$i]  &nbsp , "; echo " &nbsp $genres[$genres_nr]";?> </span>
      <br>
      <span> Synopsis  : </span>
      <span class="text"> &nbsp;  <?php echo $description; ?> </span>
      <br>  
     
      </div>
      
      <div id="cast">
       
        <table id = "cast_container">
          <tr>
            <th width="16%">Poster</th>
            <th width="84%">Name</th>
          </tr>
        </table>
        
        <script> createTable(); </script>
           
      </div>
      
      </div>
      
      </div>
      
      <div id="footer">
      
      <p> &copy;&copy;Copyright 201X | All Rights Reserved | Company Name 1234 Main Street Los Angeles California 90022 | 555.555.5555</p>
      
      </div>
      
      </div>

  <form action = "Actor.php" method = "post" id = "toMovie"> </form>
  <input type = "hidden" name = "list_number" id = "list_number" form = "toMovie">

</body>




</html>