<html>  
<body>  
 <form method="post">   
  </form>  
</body>  
</html>  
<?php
for($loop=1; $loop<=6; $loop++)
{
 echo $loop . " ";
 $m = 4;
 $loop3 = $loop + $m;
 for($InnerLoop=1; $InnerLoop<$loop; $InnerLoop++)
 {
  echo $loop3 . " ";
  $m--;
  $loop3 = $loop3 + $m;
 }
 echo "<br>";
}
?>
</body>
</html>