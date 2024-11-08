<?php

// collection values 

$name1="Raj";
$name2="Raheen";
$name3="Mayank";
		
		// index 0
$students=array("Raj","Raheen","Mayank","Akash");

echo print_r($students);

echo $students[0];
echo $students[3];



for($i=0;$i<count($students);$i++)
{
	echo "<h1>". $students[$i] ."</h1>";
}


foreach($students as $data)
{
	echo "<h1>". $data ."</h1>";
}





?>
