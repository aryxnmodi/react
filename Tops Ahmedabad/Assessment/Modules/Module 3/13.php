<html>  
<body>  
<?php  
//Initialize array   
$arr = array(10, 20, 30, 40, 50);   
$sum = 0;  
   
//Loop through the array to calculate sum of elements  
for ($i = 0; $i < count($arr); $i++) {   
   $sum = $sum + $arr[$i];  
}    
print("Sum of all the elements of an array: " . $sum);  
?>  
</body>  
</html>  