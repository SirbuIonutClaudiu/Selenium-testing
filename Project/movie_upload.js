var input_nr = 1;
  
function addNewInput()
 { 	 
   var last_input_nr_string = input_nr.toString();
   var last_input_id = "actor" + last_input_nr_string;
   
   if(!document.getElementById(last_input_id).value) 
    {
	  alert("Please insert the actor's name before adding a new one !");
	  return;
	}
     
   input_nr++;
   document.getElementById("actors_nr").setAttribute("value", input_nr);
   var string_number = input_nr.toString();
   var input_id = "actor" + string_number;
   var par_cont = "Actor" + " " + string_number;
   
   var paragraph = document.createElement("p");
   var paragraph_content = document.createTextNode(par_cont);
   paragraph.appendChild(paragraph_content);
   document.getElementById("cast_container").appendChild(paragraph);
   
   var input = document.createElement("input");
   input.setAttribute("type", "text");
   input.setAttribute("name", input_id);
   input.setAttribute("id", input_id);
   input.setAttribute("form", "upload_movie");
   input.placeholder = "Insert actor name";
   input.setAttribute("required", true);
   input.setAttribute("class", "box");
   document.getElementById("cast_container").appendChild(input);
 }

function checkedBoxes() 
 {
   var checked = 0;
   checked = checked + (document.getElementById("action").checked);	
   checked = checked + (document.getElementById("adventure").checked);	 
   checked = checked + (document.getElementById("comedy").checked);	 
   checked = checked + (document.getElementById("crime").checked);	 
   checked = checked + (document.getElementById("history").checked);	 
   checked = checked + (document.getElementById("horror").checked);	 
   checked = checked + (document.getElementById("thriller").checked);	 
   checked = checked + (document.getElementById("western").checked);	 
    
   if(!checked)  
    {
      alert("Please choose at least one genre !");
      return false;
    } 
  return true;
 }
 
function validTitle()
{
  var title = document.getElementById("title").value;
  var denied = "\/<>.:*";
  for(var c = 0; c < denied.length; c++)
  for(var j = 0; j < title.length; j++)
  if(denied[c] == title[j]) 
   {
     alert("Please insert a valid title " + " ! \n No special characters : \/<>.:*");
	 return false;	   
   } 
  return true;   	
}
 
function  validTrailer()
{
  var trailer = document.getElementById("trailer").value;
  for(var c = 0; c < trailer.length; c++)
   if (trailer[c] == "=") return true;
   alert("Please insert a valid youtube trailer !");
   return false;
}
 
function validRelease()
{
  var release_date = document.getElementById("release_date").value;
  if(isNaN(release_date) || release_date < 1900 || release_date > 2100) 
   {
     alert("Please insert a valid year in Release date ! \n Values between 1900 and 2100");
	 return false;
   }
  return true;
}

function validRuntime()
{ 
  var runtime = document.getElementById("runtime").value;
  if(isNaN(runtime) || runtime < 10 || runtime > 1000) 
   {
     alert("Please insert a valid value in Runtime ! \n Values between 10 and 1000 minutes");
	 return false;
   }
  return true;
}

function validActors()
{
  var actors_nr = document.getElementById("actors_nr").value;
  var denied = "1234567890!@#$%^&*()_+=-/><.,:;";
  for(var i = 1; i <= actors_nr ; i++)
   {
	 var string_number = i.toString();
     var element_id = "actor" + string_number; 
	 var actor = document.getElementById(element_id).value;
     
	 for(var c = 0; c < denied.length; c++)
	  for(var j = 0; j < actor.length ; j++)
	  if(denied[c] == actor[j]) 
	   {
	     alert("Please insert a valid name for actor " + i + " ! \n No numbers or special characters");
		 return false;	   
	   }
   }  
  return true;   	
}

function rightData()
{ 
  return (checkedBoxes() && validTitle() && validTrailer() && validRelease() && validRuntime() && validActors());	
}