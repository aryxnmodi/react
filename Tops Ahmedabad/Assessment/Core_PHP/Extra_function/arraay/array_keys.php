<?php
$a=array("name"=>"KEYUR","email"=>"raj@gmail.com","mobile"=>"124567891"); // saprate key and value 1 to make it 2 array


print_r($a);

echo "<br>";
print_r(array_keys($a));

echo "<br>";

$key=array_keys($a);

foreach($key as $k)
{
	echo $k."<br>";
}

echo "<br>";
print_r(array_values($a));

echo "<br>";

$value=array_values($a);

foreach($value as $v)
{
	echo $v."<br>";
}






?>