<?php
 function delete_cookie()
 {
   setcookie("username", "", time() - 60*60*24, "/");
 }
 if (isset($_GET['delete'])) delete_cookie();
?>


<html><!-- InstanceBegin template="/Templates/Main.dwt.php" codeOutsideHTMLIsLocked="false" -->

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
        		 
				 <script src="js/jquery-1.9.1.min.js" type="text/javascript"> </script>
        	
            	<link rel="stylesheet" type="text/css" href="home.css" media="screen">
                <link href='https://fonts.googleapis.com/css?family=Open+Sans+Condensed:300,700' rel='stylesheet' type='text/css'>
                  <script src="js/jssor.slider.mini.js" type="text/javascript"> </script>
                <link rel="stylesheet" type="text/css" href="slider.css" media="screen">
                <script src="js/banner.js" type="text/javascript"> </script>
        <script type="text/javascript">
function MM_preloadImages() { //v3.0
  var d=document; if(d.images){ if(!d.MM_p) d.MM_p=new Array();
    var i,j=d.MM_p.length,a=MM_preloadImages.arguments; for(i=0; i<a.length; i++)
    if (a[i].indexOf("#")!=0){ d.MM_p[j]=new Image; d.MM_p[j++].src=a[i];}}
}

function MM_swapImgRestore() { //v3.0
  var i,x,a=document.MM_sr; for(i=0;a&&i<a.length&&(x=a[i])&&x.oSrc;i++) x.src=x.oSrc;
}

function MM_findObj(n, d) { //v4.01
  var p,i,x;  if(!d) d=document; if((p=n.indexOf("?"))>0&&parent.frames.length) {
    d=parent.frames[n.substring(p+1)].document; n=n.substring(0,p);}
  if(!(x=d[n])&&d.all) x=d.all[n]; for (i=0;!x&&i<d.forms.length;i++) x=d.forms[i][n];
  for(i=0;!x&&d.layers&&i<d.layers.length;i++) x=MM_findObj(n,d.layers[i].document);
  if(!x && d.getElementById) x=d.getElementById(n); return x;
}

function MM_swapImage() { //v3.0
  var i,j=0,x,a=MM_swapImage.arguments; document.MM_sr=new Array; for(i=0;i<(a.length-2);i+=3)
   if ((x=MM_findObj(a[i]))!=null){document.MM_sr[j++]=x; if(!x.oSrc) x.oSrc=x.src; x.src=a[i+2];}
}
                </script>
                <!-- InstanceBeginEditable name="head" -->
                <!-- InstanceEndEditable -->
		</head>
        
<body onLoad="MM_preloadImages('Recomandare1C.jpg','Recomandare2C.jpg')">
		
<div id="fb-root"></div>
<script>(function(d, s, id) {
  var js, fjs = d.getElementsByTagName(s)[0];
  if (d.getElementById(id)) return;
  js = d.createElement(s); js.id = id;
  js.src = "//connect.facebook.net/ro_RO/sdk.js#xfbml=1&version=v2.5";
  fjs.parentNode.insertBefore(js, fjs);
}(document, 'script', 'facebook-jssdk')); </script>

		
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
				<!-- InstanceBeginEditable name="EditRegion3" -->
                
                
                  
  <ul>
   <li><a href="home.php"><span>Home</span></a></li>
   <li class='has-sub'><a href='browse_actors.php'><span>Browse</span></a>
   <ul>
         <li><a href="browse.php"><span>Movies</span></a></li>
         <li class='last'><a href="actor_upload.php"><span>Actors</span></a></li>
      </ul>
      </li>
   <li class='has-sub'><a href="Profile_Update.php"><span>Profile</span></a></li>
   <li class='has-sub'><a href='#'><span>Upload</span></a>
      <ul>
         <li><a href="movie_upload.php"><span>Movie</span></a></li>
         <li class='last'><a href="actor_upload.php"><span>Actor</span></a></li>
      </ul>
   </li>
   <li class='active'><a href='#'><span>Contact</span></a>
   <ul> 
   		<li><a href='FAQ.php'><span> FAQ </span></a> </li>
        <li><a href="about.php" class='last'><span> About </span></a> </li>
    </ul>
    </li>
</ul>

<!-- InstanceEndEditable -->
	
</div>  
          <div id="banner">
                
                 <div id="jssor_1" style="position: relative; margin: 0 auto; top: 0px; left: 0px; width: 900px; height: 300px; overflow: hidden; visibility: hidden;">
        <!-- Loading Screen -->
        <div data-u="loading" style="position: absolute; top: 0px; left: 0px;">
            <div style="filter: alpha(opacity=70); opacity: 0.7; position: absolute; display: block; top: 0px; left: 0px; width: 100%; height: 100%;"></div>
            <div style="position:absolute;display:block;background:url('img/loading.gif') no-repeat center center;top:0px;left:0px;width:100%;height:100%;"></div>
        </div>
        <div data-u="slides" style="cursor: default; position: relative; top: 0px; left: 0px; width: 900px; height: 300px; overflow: hidden;">
            <div data-p="150.00" style="display: none;">
                <img data-u="image" src="img/01.jpg" />
                <div data-u="thumb"></div>
            </div>
            <div data-p="150.00" style="display: none;">
                <img data-u="image" src="img/02.jpg" />
                <div data-u="thumb"></div>
            </div>
            <div data-p="150.00" style="display: none;">
                <img data-u="image" src="img/03.jpg" />
                <div data-u="thumb"></div>
            </div>
            <div data-p="150.00" style="display: none;">
                <img data-u="image" src="img/04.jpg" />
                <div data-u="thumb"></div>
            </div>
        </div>
        <!-- Thumbnail Navigator -->
        <div data-u="thumbnavigator" class="jssort09-600-45" style="position:absolute;bottom:0px;left:0px;width:900px;height:45px;">
            <div style="position: absolute; top: 0; left: 0; width: 100%; height:100%; background-color: #000; filter:alpha(opacity=40.0); opacity:0.4;"></div>
            <!-- Thumbnail Item Skin Begin -->
            <div data-u="slides" style="cursor: default;">
                <div data-u="prototype" class="p">
                    <div data-u="thumbnailtemplate" class="t"></div>
                </div>
            </div>
            <!-- Thumbnail Item Skin End -->
        </div>
        <!-- Bullet Navigator -->
        <div data-u="navigator" class="jssorb01" style="bottom:16px;right:16px;">
            <div data-u="prototype" style="width:12px;height:12px;"></div>
        </div>
        <!-- Arrow Navigator -->
        <span data-u="arrowleft" class="jssora05l" style="top:0px;left:8px;width:40px;height:40px;" data-autocenter="2"></span>
        <span data-u="arrowright" class="jssora05r" style="top:0px;right:8px;width:40px;height:40px;" data-autocenter="2"></span>
        <a href="http://www.jssor.com" style="display:none">Bootstrap Carousel</a>
    </div>
                
                </div>
                
                <div id="content-wrapper">
                	
                	<div id="content"><!-- InstanceBeginEditable name="EditRegion2" -->
                    
                    
                    
                    <h1> About Us  </h1>
                    
                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Quisque at eros a nunc rhoncus iaculis. Pellentesque varius laoreet metus tincidunt feugiat. Nulla pretium cursus nisi ut vulputate. Pellentesque sit amet rhoncus neque. Phasellus euismod nisi et vulputate convallis. Vestibulum porta aliquet malesuada. Morbi lacus magna, lobortis maximus sem at, dignissim malesuada velit.</p>
                    <h2> Project Members </h2>
                    
                    <div id="box1">
                    
                    <img src="About-Photo.png">
                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nulla sed ornare nulla. Aenean non maximus enim. Praesent dolor nunc, porttitor vitae scelerisque at, venenatis ut ante. Cras augue justo, gravida et ex pretium, fringilla hendrerit magna. Nam urna diam, imperdiet nec velit quis, ullamcorper pretium nunc. Mauris sit amet urna tristique dui rhoncus volutpat nec non nunc. Quisque congue faucibus tempor. Fusce eget molestie diam. Pellentesque ut quam non lacus ultrices feugiat vel at purus. Duis malesuada ipsum vulputate vestibulum venenatis. Phasellus sapien nisl, feugiat vel efficitur id, bibendum sit amet est. Donec congue sed justo non molestie.</p>
                    
                    </div>
                    
                    <div id="box2">
                    <img src="About-Photo.png">
                    <p> Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec a dolor suscipit, porta nunc et, finibus odio. Ut pretium, neque auctor dignissim convallis, lectus nisi consectetur quam, eu feugiat ligula arcu id nibh. Pellentesque massa risus, luctus quis tincidunt at, euismod auctor arcu. Donec imperdiet felis a velit molestie dapibus. Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas. Vivamus tincidunt orci ac fermentum fermentum. Vestibulum augue nulla, elementum vel libero ac, elementum efficitur metus. In hac habitasse platea dictumst.</p>
                    
                    </div>
                <!-- InstanceEndEditable -->
                </div>
                
                <div id="right-side">
                
                <h3> Find Us on Facebook</h3>
               <div class="fb-page" style="margin:20px 0  0 20px;"data-href="https://www.facebook.com/facebook" data-width="300" data-height="600" data-small-header="false" data-adapt-container-width="true" data-hide-cover="false" data-show-facepile="true" data-show-posts="true"><div class="fb-xfbml-parse-ignore"><blockquote cite="https://www.facebook.com/facebook"><a href="https://www.facebook.com/facebook">Facebook</a></blockquote></div></div>
                
                </div>
                
                </div>
                
                <div id="footer">
               <p> &copy;&copy;Copyright 201X | All Rights Reserved | Company Name 1234 Main Street Los Angeles California 90022 | 555.555.5555</p>
               </div>
                
</div>
     
                
                
    

</body>



<!-- InstanceEnd --></html>