function validName()
{
  var name = document.getElementById("name").value;
  var denied = "1234567890!@#$%^&*()_+=-/><.,:;";
  for(var c = 0; c < denied.length; c++)
  for(var j = 0; j < name.length; j++)
  if(denied[c] == name[j]) 
   {
     alert("Please insert a valid name for actor " + " ! \n No numbers or special characters");
	 return false;	   
   } 
  return true;   	
}

function validBirth()
{ 
  var birth = document.getElementById("birth_year").value;
  if(isNaN(birth) || birth < 1800 || birth > 2100) 
   {
     alert("Please insert a valid value in Birth ! \n Values between 1800 and 2100");
	 return false;
   }
  return true;
}

function validAwards()
{ 
  var awards = document.getElementById("awards").value;
  if(isNaN(awards) || awards < 0 || awards > 100) 
   {
     alert("Please insert a valid value in Awards ! \n Values between 0and 100");
	 return false;
   }
  return true;
}

function rightData()
{
  return (validName() && validBirth() && validAwards());	
}