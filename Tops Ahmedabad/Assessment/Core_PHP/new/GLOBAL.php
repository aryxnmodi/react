<html>
<head>
</head>
<body>
<?php
//global variables
$num1 = 36;
$num2 = 24;
function add2Numbers()
{
    $GLOBALS["sum"] = $GLOBALS["num1"] + $GLOBALS["num2"];
}
add2Numbers();
echo $sum;
?>
</body>
</html>