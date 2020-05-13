<?php
 $movie_table = array(array());
 
 $con=mysqli_connect("localhost","root","","movies");
 if(empty($_POST["search"])) $search = 0;
 else $search = $_POST["search"];
 if(!$search) $sql="SELECT * FROM `movies` ORDER BY `list_nr`";
 else $sql="SELECT * FROM `movies` WHERE title LIKE '%$search%' ORDER BY `list_nr`";
 $result=mysqli_query($con,$sql);
 $total = 0;
 if ($result->num_rows > 0)
  while($row = $result->fetch_assoc()) 
  {
    $total++;
	$movie_table[1][$total] = $row["title"];
	$movie_table[2][$total] = $row["yor"];
	$movie_table[3][$total] = $row["runtime"];
	$movie_table[4][$total] = $row["uploader"];
	$movie_table[5][$total] = $row["movie_image"];
	$movie_table[6][$total] = $row["list_nr"];
  }
?>

<script type="text/javascript">

 var total_elements = <?php echo $total; ?>;
 var movie_title = <?php echo json_encode($movie_table[1]); ?>;
 var movie_yor = <?php echo json_encode($movie_table[2]); ?>;
 var movie_runtime = <?php echo json_encode($movie_table[3]); ?>;
 var movie_uploader = <?php echo json_encode($movie_table[4]); ?>;
 var movie_image = <?php echo json_encode($movie_table[5]); ?>;
 var movie_list_nr = <?php echo json_encode($movie_table[6]); ?>; 
 
 function createTable(page)
  {
	var tr = document.createElement("tr");  
	tr.setAttribute("id", "ths");
	 var td0 = document.createElement("th");
	 td0.setAttribute("width" , "1");
	 var p0 = document.createElement("p");
	 var p0_cont = document.createTextNode("");
	 p0.appendChild(p0_cont);
	 td0.appendChild(p0);
	 var td1 = document.createElement("th");
	 var p1 = document.createElement("p");
	 var p1_cont = document.createTextNode("Title");
	 p1.appendChild(p1_cont);
	 td1.appendChild(p1);
	 var td2 = document.createElement("th");
	 var p2 = document.createElement("p");
	 var p2_cont = document.createTextNode("Release");
	 p2.appendChild(p2_cont);
	 td2.appendChild(p2);
	 var td3 = document.createElement("th");
	 var p3 = document.createElement("p");
	 var p3_cont = document.createTextNode("Runtime");
	 p3.appendChild(p3_cont);
	 td3.appendChild(p3);
	 var td4 = document.createElement("th");
	 var p4 = document.createElement("p");
	 var p4_cont = document.createTextNode("Uploader");
	 p4.appendChild(p4_cont);
	 td4.appendChild(p4);
	tr.appendChild(td0);
	tr.appendChild(td1);
	tr.appendChild(td2);
	tr.appendChild(td3);
    tr.appendChild(td4);
	document.getElementById("table_container").appendChild(tr);
    
	var elements = (total_elements-(page-1)*10 > 10)?10:total_elements-(page-1)*10;
	for(var i = 1; i <= elements; i++)
     {	 
	   var tr = document.createElement("tr");
       tr.setAttribute("id", "tr"+i);
	    var td0 = document.createElement("td");
	    td0.setAttribute("id", "td"+i+0);
	     var image = document.createElement("img");
		 image.setAttribute("src", "Pop.png");
	     image.setAttribute("height", "70");
         image.setAttribute("width", "70");
	    td0.appendChild(image);		
	    var td1 = document.createElement("td");
	    td1.setAttribute("id", "td"+i+1);
	     var p1 = document.createElement("p");
	     p1.setAttribute("id", "p"+i+1);
		 p1.style.cursor = "default";
	    td1.appendChild(p1);	
	    var td2 = document.createElement("td");
	    td2.setAttribute("id", "td"+i+2);
	     var p2 = document.createElement("p");
	     p2.setAttribute("id", "p"+i+2);
		 p2.style.cursor = "default";
	    td2.appendChild(p2);
	    var td3 = document.createElement("td");
	    td3.setAttribute("id", "td"+i+3);
	     var p3 = document.createElement("p");
	     p3.setAttribute("id", "p"+i+3);
		 p3.style.cursor = "default";
	    td3.appendChild(p3);
	    var td4 = document.createElement("td");
	    td4.setAttribute("id", "td"+i+4);
	     var p4 = document.createElement("p");
	     p4.setAttribute("id", "p"+i+4);
		 p4.style.cursor = "default";
	    td4.appendChild(p4);
	   tr.appendChild(td0);
	   tr.appendChild(td1);
	   tr.appendChild(td2);
	   tr.appendChild(td3);
	   tr.appendChild(td4);
	   document.getElementById("table_container").appendChild(tr);
	 }
  }
 
 function showPages()
 {
   for(var i = 1; i <= total_elements/10+(total_elements%10!=0); i++)	 
   {
	 var td = document.createElement("td");
     var paragraph = document.createElement("p");
     var paragraph_content = document.createTextNode(i);
	 paragraph.appendChild(paragraph_content);
	 paragraph.style.cursor = "pointer";
     paragraph.onclick = function(index) { fillTable(index); }.bind(null,i);
	 td.appendChild(paragraph);
	 document.getElementById("tr_page").appendChild(td);
   }
 }

 function showPoster(list_nr) 
  { 
	var image ="url('../Project/thumbnails/" + movie_image[list_nr] + "'), auto";
	position = (list_nr%10 == 0)?10:list_nr%10;
	elemente = document.getElementById("p"+position+1);
    elemente.style.cursor = image;
  }
  
 function showMovie(list_nr)
 {
   input = document.getElementById("list_number");
   input.setAttribute("value" , list_nr);
   document.forms["toMovie"].submit(); 	 
 } 
  
 function clearOldContent()
  {
	var myNode = document.getElementById("table_container");
	while (myNode.hasChildNodes()) myNode.removeChild(myNode.firstChild);
  } 
  
 function putNewContent(page)
 {
	var elements = (total_elements-(page-1)*10 >= 10)?10:total_elements-(page-1)*10; 
	for(var i = 1; i <= elements; i++)
	 {
       document.getElementById("p"+i+1).innerHTML = movie_title[(page-1)*10+i];
	   document.getElementById("p"+i+2).innerHTML = movie_yor[(page-1)*10+i];
	   document.getElementById("p"+i+3).innerHTML = movie_runtime[(page-1)*10+i];
	   document.getElementById("p"+i+4).innerHTML = movie_uploader[(page-1)*10+i];
	   document.getElementById("p"+i+1).onmouseover = function(index) { showPoster((page - 1) * 10 + index); }.bind(null,i);
	   document.getElementById("p"+i+1).onclick = function(index) { showMovie(movie_list_nr[(page - 1) * 10 + index]); }.bind(null,i);
	 }
 } 
  
 function fillTable(page)
  {
    clearOldContent(); 	
	createTable(page);
	putNewContent(page);	  
  } 
  
</script>

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
 		<link type="text/css" rel="stylesheet" href="browse.css" media="screen">
 
 </head>

 <body>
 
 <div id="wrapper">
 
 <div id="top">
 
 <img src="bb.jpg" width="899" height="213">
 
 </div>
 <div id='cssmenu'>
<ul>
   <li><a href="home.php"><span>Home</span></a></li>
   <li class='active'><a href='#'><span>Browse</span></a>
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
    
    <div id="search">
    
    <form action="" method="post" >
    <input type="search" name="search" placeholder="Search" class="box"> 
    <input type="image"  src="search2.png" alt="Submit" style="vertical-align:bottom;" width="24" height="24" >
    
    </form>
    
    </div>
    
    <div id="content">
 
 
  <table id = "table_container">
  </table>
  <div id="pg">
  <table id = "pages_container">
   <tr id = "tr_page"></tr>
  </table>
  </div>
  
  
  
  </div>
  
  </div>
   <div id="footer">
               <p> &copy;&copy;Copyright 201X | All Rights Reserved | Company Name 1234 Main Street Los Angeles California 90022 | 555.555.5555</p>
               </div>
 </div>
  <script> showPages(); fillTable(1); </script>
  
  <form action = "Movie.php" method = "post" id = "toMovie"> </form>
  <input type = "hidden" name = "list_number" id = "list_number" form = "toMovie">

 </body>
 
</html>