<?php
/*

Web Service

A Web Service is can be defined by following ways:
It is a client-server application or application component for communication.
The method of communication between two devices over the network.
It is a software system for the interoperable machine to machine communication.
It is a collection of standards or protocols for exchanging information between two devices or application.


There are mainly two types of web services.

web-based application using the REST, SOAP, WSDL, and UDDI over the network. 
For example, Java web service can communicate with .Net application.


Restfull Web Services
RESTful Web Services are basically REST Architecture based Web Services. In REST Architecture everything is a resource. 
RESTful web services are lightweight, highly scalable and maintainable and are very commonly used to 
create APIs for web-based applications. 

Difine Json_encode & jason_decode func with example ?

If you need to retrieve specific information from the server and make it appear on your website, you will probably be using JSON. The name of JSON stands for JavaScript Object Notation. It is based on JavaScript, so having some basic knowledge of it would be greatly welcome here. JSON also uses JavaScript syntax.
	
	$data=array("name"=>"Rajesh","age"=>"31")   php arr to json 
	
	json={ “name”: “Rajesh” , ”age”:”31”}    all json data supported in all technologies 

JSON is anonymous data that can be translated in PHP variables.
Arrays can be converted to JSON format.
JSON is commonly used for reading data out of a web server and displaying it on a website.
There are integrated functions to manipulate JSON. Most important of them are PHP json_encode() and PHP json_decode().

*/

// it usein allways in android and iphone for
// retrive data from server & database in $arr[] and than output convert in array array("uid"=>"8") to json_encode [{"uid":"8","unm":"vihaana"}]
// than call this page on call_webserveses.php and convert in encode to decode 


	$conn=new Mysqli('localhost','root','','php28db');

	$sel="select * from customers";
	$res=$conn->query($sel);
	
	while($r=$res->fetch_object())
		{
			$arr[]=$r;                                      
		}
		
	//print_r($arr);	
	echo $json_data=json_encode($arr);  // con
	echo "<br>";
	
	
	
	
	?>                                     