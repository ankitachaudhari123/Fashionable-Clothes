<?php
session_start();
include('../db/db.php');
$username=$_POST['username'];
$password=$_POST['password'];


$sql_chk_email="SELECT * from user_details WHERE email_id='$username' OR mobile_number= '$username'";
$result_email=mysqli_query($connection, $sql_chk_email);
if (mysqli_num_rows($result_email)>0) {
	
	$squl_chk_password="SELECT * from user_details WHERE password='$password' AND email_id='$username'";
	$result_password=mysqli_query($connection, $squl_chk_password);
	if (mysqli_num_rows($result_password) > 0) {
		echo "1"; //Login Success
		foreach ($result_password as $row) {
			 $fullname =  $row['user_name'];

			 setcookie('name', $fullname, time() + (86400 * 30), "/");
			 setcookie('user_id', $row['user_id'], time() + (86400 * 30), "/");
		}
	}
	else{
		   $squl_chk_password="SELECT * from user_details WHERE password='$password' AND mobile_number='$username'";
			$result_password=mysqli_query($connection, $squl_chk_password);
			if (mysqli_num_rows($result_password) > 0) {
				echo "1";//Login Success
				foreach ($result_password as $row) {
					 $fullname =  $row['user_name'];

					 setcookie('name', $fullname, time() + (86400 * 30), "/");
			         setcookie('user_id', $row['user_id'], time() + (86400 * 30), "/");
				}
			}
			else{
				echo "2";//wrong is password
			}
			}
}
else{
	echo "3";//User Not Found

}

?>
