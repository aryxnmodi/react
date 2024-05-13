<html>
<title> Grade </title>
<body>
<?php
/*
Index array:
$cars = array("Volvo", "BMW", "Toyota");
var_dump($cars);
*/

/*
Assocoative array:
$car = array("brand"=>"Ford", "model"=>"Mustang", "year"=>1964);
var_dump($car);
*/

/*
Multidimentional:
echo $cars[0][0].": In stock: ".$cars[0][1].", sold: ".$cars[0][2].".<br>";
echo $cars[1][0].": In stock: ".$cars[1][1].", sold: ".$cars[1][2].".<br>";
echo $cars[2][0].": In stock: ".$cars[2][1].", sold: ".$cars[2][2].".<br>";
echo $cars[3][0].": In stock: ".$cars[3][1].", sold: ".$cars[3][2].".<br>";

*/
// JSON string in PHP Array

$jsonString = '{"Lion":1,"Tiger":2,"Crocodile":3,"Elephant":4}';
$phpArray = json_decode($jsonString, true);

// display the converted PHP array
var_dump($phpArray);
?>