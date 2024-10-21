<?php
// data read or fetch API

error_reporting(E_ALL);
ini_set('display_errors', 1);
header("Access-Control-Allow-Origin: *");
header("Access-Control-Allow-Headers: *");
header("Access-Control-Allow-Methods: *");

require_once "dbconfig.php";

$query = "SELECT * FROM tbl_product";

$result = mysqli_query($conn, $query);

$count = mysqli_num_rows($result);

if($count > 0)
{	
	$output = mysqli_fetch_all($result, MYSQLI_ASSOC);
	echo json_encode($output);
}
else
{	
	
	echo json_encode(array("message" => "No Product Found.", "status" => false));
}

?>