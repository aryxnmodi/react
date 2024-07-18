<html>
<body>
<?php
function factorial_of_a_number($n)
{
  if($n ==0)
    {
	   return 1;
    }
  else 
    {	
	   return $n * factorial_of_a_number($n-1);
    }
	}
print_r(factorial_of_a_number(4)."\n");
?>
</body>
</html>