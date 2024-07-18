<html>
<head>
</head>
<body>
<?php  
$num = 12;  
echo "<h3>Fibonacci series using recursive function:</h3>";  
echo "\n";  
function series($num){  
    if($num == 0){  
    return 0;  
    }else if( $num == 1){  
return 1;  
}  else {  
return (series($num-1) + series($num-2));  
}   
}   
for ($i = 0; $i < $num; $i++){  
echo series($i);  
echo "\n";  
}  
?>
</body>
</html>