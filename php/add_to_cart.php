<?php 
include('../db/db.php');
$p_id = $_POST['p_id'];
$p_price = $_POST['p_price'];
$p_qty = $_POST['p_qty'];
$total = $p_price * $p_qty;

	$sql = "INSERT INTO `cart`(`p_id`, `user_id`, `p_price`, `p_qty`, `total`) VALUES ('$p_id','1','$p_price ','$p_qty','$total')";
	if(mysqli_query($connection, $sql)){
	echo "Product added!";
	}
	else{
	echo "Something went wrong!";
	}

?>