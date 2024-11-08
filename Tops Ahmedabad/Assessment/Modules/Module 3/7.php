<html>
<title> Grade </title>
<body>
<?php
/*
Index array:
$cars = array("Volvo", "BMW", "Toyota");
var_dump($cars);
*/

// JSON string in PHP Array
$jsonString = '{"Lion":1,"Tiger":2,"Crocodile":3,"Elephant":4}';
$phpArray = json_decode($jsonString, true);

// display the converted PHP array
var_dump($phpArray);
?>