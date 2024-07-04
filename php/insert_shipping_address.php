<?php
session_start();
include('../db/db.php');

$email = $_POST['email'];
$country = $_POST['country'];
$first_name = $_POST['first_name'];
$last_name = $_POST['last_name'];
$address = $_POST['address'];
$apartment = $_POST['apartment'];
$city = $_POST['city'];
$state = $_POST['state'];
$pin_code = $_POST['pin_code'];
$mobile_number = $_POST['mobile_number'];
$user_id = $_COOKIE['user_id'];

$sql_insert_shipping_address = "INSERT INTO `shipping_address`(`user_id`, `email_id`, `country/region`, `first_name`, `last_name`, `address`, `apartment`, `city`, `state`, `pin_code`, `phone_number`) VALUES ('$user_id','$email','$country','$first_name','$last_name','$address','$apartment','$city','$state','$pin_code','$mobile_number')";
if(mysqli_query($connection , $sql_insert_shipping_address)){

}
?>