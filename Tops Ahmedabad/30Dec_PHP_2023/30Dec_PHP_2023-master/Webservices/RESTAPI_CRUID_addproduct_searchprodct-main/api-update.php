<?php

header("Content-Type: application/json");
header("Acess-Control-Allow-Origin: *");
header("Acess-Control-Allow-Methods: PUT");
header("Access-Control-Allow-Headers: Content-Type, Access-Control-Allow-Headers, Authorization, X-Requested-With");

$data = json_decode(file_get_contents("php://input"), true);

$product_id = $data["product_id"];
$product_name =$data["product_name"];
$product_price =$data["product_price"];

require_once "dbconfig.php";

$query = "UPDATE tbl_product SET product_name= '".$product_name."' , 
                                 product_price= '".$product_price."' 
                           WHERE product_id='".$product_id."' ";

if(mysqli_query($conn, $query) or die("Update Query Failed"))
{	
	echo json_encode(array("message" => "Product Update Successfully", "status" => true));	
}
else
{	
	echo json_encode(array("message" => "Failed Product Not Updated", "status" => false));	
}

?>