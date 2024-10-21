<html>
<head>
</head>
<body>
<?php
// for loop
for ($i = 0; $i < 10; $i++){

$product = 10 * $i;

echo "The product of 10 * $i is $product <br/>";
}

// for each

$animals_list = array("Lion","Wolf","Dog","Leopard","Tiger");

foreach($animals_list as $array_values){

echo $array_values . "<br>";

}
?>
</body>
</html>