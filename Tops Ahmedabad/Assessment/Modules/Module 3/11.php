<html>
<head>
</head>
<body>
<?php
   $arr = array( "p"=>"150", "q"=>"100", "r"=>"120", "s"=>"110", "t"=>"115", "u"=>"103", "v"=>"105", "w"=>"125" );
   echo "Array values ...
";
   echo "Value 1 = " . $arr["p"], "
";
   echo "Value 2 = " . $arr["q"], "
";
   echo "Value 3 = " . $arr["r"], "
";
   echo "Value 4 = " . $arr["s"], "
";
   echo "Value 5 = " . $arr["t"], "
";
   echo "Value 6 = " . $arr["u"], "
";
   echo "Value 7 = " . $arr["v"], "
";
   echo "Value 8 = " . $arr["w"], "
";
   echo "Random value from arary = ".$arr[array_rand($arr)];
?>
</body>
</html>