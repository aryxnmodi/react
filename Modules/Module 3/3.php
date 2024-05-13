<html>
<head>
</head>
<body>
<?php

$n1 = 5; $n2 = 10; $n3 = 15; $n4 = 20;

$max = ($n1 > $n2 && $n1 > $n3 && $n1 > $n4) ? 
			$n1 : (($n2 > $n3 && $n2 > $n4) ? 
			$n2 : ($n3 > $n4 ? $n3 : $n4));

echo "Largest number among ". $n1. ", ". $n2. ", ". 
				$n3. " and ". $n4. " is " .$max;
?>
</body>
</html>