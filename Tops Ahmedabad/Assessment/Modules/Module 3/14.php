<html>  
<body>  
<?php 

// PHP program to creating two 
// dimensional associative array 
$marks = array( 
	
	// Ankit will act as key 
	"Ankit" => array( 
		
		// Subject and marks are 
		// the key value pair 
		"C" => 95, 
		"DCO" => 85, 
		"FOL" => 74, 
	), 
		
	// Ram will act as key 
	"Ram" => array( 
		
		// Subject and marks are 
		// the key value pair 
		"C" => 78, 
		"DCO" => 98, 
		"FOL" => 46, 
	), 
	
	// Anoop will act as key 
	"Anoop" => array( 
		
		// Subject and marks are 
		// the key value pair 
		"C" => 88, 
		"DCO" => 46, 
		"FOL" => 99, 
	), 
); 

echo "Display Marks: \n"; 
	
print_r($marks); 
?> 

</body>  
</html>  