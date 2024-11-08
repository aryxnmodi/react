<html>
<body>
<?php
$BookPrice = 15;
do   {
echo "The book price is " . $BookPrice . ". Students can buy this book. <br>";
$BookPrice = $BookPrice + 1;
}
while ($BookPrice <= 10);
echo "The book price is " . $BookPrice . ". Student cannot afford this costly book!";
?>
</body>
</html>