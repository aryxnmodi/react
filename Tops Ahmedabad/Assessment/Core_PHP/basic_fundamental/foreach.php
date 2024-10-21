<html>
<head>
</head>
<body>
<?php

$color1="red";
$color2="yellow";
$color3="green";

echo $color1;

$colors=array("red","yellow","green","blue"); 

//echo $colors; // dont't print array by echo

print_r($colors);

echo $colors[1]."<br>";


for($i=0;$i<count($colors);$i++)
{
	echo "<h1>".$colors[$i]."</h1>";
}



foreach($colors as $data)
{
	echo "<h1>".$data."</h1>";
}


?>
</body>
</html>