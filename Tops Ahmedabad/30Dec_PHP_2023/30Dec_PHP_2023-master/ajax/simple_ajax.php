

<!--

Ajax stands for Asynchronous Javascript And Xml. 

Ajax is just a means of loading data from the server and selectively updating 
parts of a web page without reloading the whole page.

Basically, what Ajax does is make use of the browser's built-in 
XMLHttpRequest (XHR) object to send and receive information to and 
from a web server asynchronously, in the background, without blocking the page 
or interfering with the user's experience.

Ajax has become so popular that you hardly find an application that doesn't use Ajax 
to some extent. 

The example of some large-scale Ajax-driven online applications are: 
Gmail, 
Google Maps, 
Google Docs, 
YouTube, 
Facebook, 
Flickr, and so many other applications.
-->



<!DOCTYPE html>
<html>

<head>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js">
</script>
</head>

<body>

<h2>The XMLHttpRequest Object</h2>

<p id="demo"></p>

<button type="button" onclick="loadDoc()">Change Content</button>
<script>


//setTimeout(loadDoc, 5000);

/*
function loadDoc() 
{
  var xhttp;
  if (window.XMLHttpRequest) // create object for request
  {
    // code for modern browsers
    xhttp = new XMLHttpRequest();
  } 
  else 
  {
    // code for IE6, IE5
    xhttp = new ActiveXObject("Microsoft.XMLHTTP");
  }
 
   xhttp.onreadystatechange = function() 
   {  
	   if(xhttp.readyState==4 || xhttp.status==200)
	   {
		  
		   document.getElementById("demo").innerHTML=this.responseText;
	   }
   }
  xhttp.open("GET", "data.php", true);
  xhttp.send();
}
*/

//===========================================================================================================
// Jquery ajax


/*
$(document).ready(function()
{
  $("button").click(function()
  {
    $.ajax({url: "data.php", success: function(response){
      $("#demo").html(response);
    }});
  });
});
*/


/*

 $(document).ready(function(){
  $("button").click(function(){
    $("#demo").load("data.php");
  });
});
*/





</script>


</body>
</html>
