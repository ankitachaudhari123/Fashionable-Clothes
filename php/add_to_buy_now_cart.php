<?php 
session_start();
include('../db/db.php');
$p_id = $_POST['p_id'];
$p_price = $_POST['p_price'];
$p_qty = $_POST['p_qty'];
$user_id = $_COOKIE['user_id'];
$total = $p_price * $p_qty;

	$sql = "INSERT INTO `buy_now_cart`(`p_id`, `user_id`, `p_price`, `p_qty`, `total`) VALUES ('$p_id','$user_id','$p_price','$p_qty','$total')";
	if(mysqli_query($connection, $sql)){
	echo "Product added!";
	}
	else{
	echo "Something went wrong!";
	}

?>