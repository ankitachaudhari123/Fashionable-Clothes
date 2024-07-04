<?php 
session_start();
$sum = $_POST['sum'];
$shipping_amount = $_POST['shipping_amount'];
$grand_total = $_POST['grand_total'];

$_SESSION['total'] = $sum;
$_SESSION['shipping_amount'] = $shipping_amount;
$_SESSION['grand_total'] = $grand_total;

?>
<!DOCTYPE html>
<html>
<head>
	<title>Shipping Address Page</title>
	<!-- Font Awesome -->
<link
  href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css"
  rel="stylesheet"
/>
<!-- Google Fonts -->
<link
  href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700&display=swap"
  rel="stylesheet"
/>
<!-- MDB -->
<link
  href="https://cdnjs.cloudflare.com/ajax/libs/mdb-ui-kit/6.3.0/mdb.min.css"
  rel="stylesheet"
/>
</head>
<style type="text/css">
	body{
		background: #fff8f7;
	}
	.shipping_address_nav_bar{
		width: 100%;
		height: 80px;
	}
	.shipping_address_nav_bar_img{
		width: 100px;
		height: 40px;
		margin-top: 20px;
		margin-left: 46%;
	}
	.address_div{
		border-right: 2px solid #EBD9D6;
	}
	.contact_div{
		width: 100%;
		height: 85px;
	}
	.text{
		font-size: 30px;
		margin-top: 20px;
	}
	.delivery_address_div{
		width: 100%;
	}
	.input_filed{
		background: #fff8f7;
		border: 2px solid #EBD9D6;
	}
</style>
<body>
<section>
	<div class="shipping_address_nav_bar">
			<a href="index.php"><img src="img/logo.avif" class="shipping_address_nav_bar_img"></a>
			<hr style="border: 1px solid #EBD9D6;">
	</div>
</section>
<div class="container">
	<div class="row">
      <div class="col-md-6 address_div">
      	<div class="contact_div">
      		<h1 class="text">Contact</h1>
      		<input type="Email" name="" class="form-control shipping_email_id" placeholder="Email" style="background: #fff8f7;border: 2px solid #C28B85;">
      	</div>
      	<div class="delivery_address_div">
      		<h1 class="text">Delivery</h1>
      		<select class="form-control shipping_country" style="background: #fff8f7;border:2px solid #EBD9D6">
      			<option>Country/Region</option>
            <option>India</option>
            <option>Italy</option>
            <option>Japan</option>
            <option>France</option>
      		</select>
      		<br>
      		<div class="row">
      			<div class="col-md-6 ">
      				<input type="text" name="" class="form-control input_filed shipping_first_name" placeholder="First Name">
                </div>
                <div class="col-md-6 ">
                	<input type="text" name="" class="form-control input_filed shipping_last_name" placeholder="Last Name">
                </div>
            </div>
            <br>
      		<input type="text" name="" class="form-control input_filed shipping_address" placeholder="Address">
      		<br>
      		<input type="text" name="" class="form-control input_filed shipping_apartment" placeholder="Apartment">
      		<br>
      		 <div class="row">
      			<div class="col-md-4 ">
      				<input type="text" name="" class="form-control input_filed shipping_city" placeholder="City">
                </div>
                <div class="col-md-4 ">
                	<select class="form-control shipping_state" style="background: #fff8f7;border:2px solid #EBD9D6">
      			      <option>State</option>
                  <option>Maharashtra</option>
                  <option>Delhi</option>
                  <option>Kerla</option>
      		        </select>
                </div>
                <div class="col-md-4 ">
                	<input type="text" name="" class="form-control input_filed shipping_pin_code" placeholder="Pin Code">
                </div>
            </div>
            <br>
            <input type="text" name="" class="form-control input_filed shipping_phone_number" placeholder="Phone Number">
      	</div>
      	<div class="payment_div">
      		<h1 class="text">Payment</h1>
      		<p style="color: #C3BBBA;font-size: 15px;">All transactions are secure and encrypted.</p>
      		<div class="row" style="border: 1px solid #C28B85;width: 100%;margin-left: 0px;">
      			<div class="col-md-7">
      				<label><input type="radio" name="" value="1">&nbsp;Razorpay Secure (UPI, Cards, Wallets,  &nbsp;&nbsp;&nbsp;&nbsp;NetBanking)</label>
      			</div> 
      			<div class="col-md-5">
      				<img src="img/upi_img.png" style="width: 15%;margin-top: 15px;border: 1px solid #EBE8E7;">
      				<img src="img/visa_img.png" style="width: 15%;margin-top: 15px;border: 1px solid #EBE8E7;">
      				<img src="img/master_card_img.png" style="width: 15%;margin-top: 15px;border: 1px solid #EBE8E7;">
      				<img src="img/rupay_img.png" style="width: 15%;margin-top: 15px;border: 1px solid #EBE8E7;">
      				<img src="img/visa_img.png" style="width: 15%;margin-top: 15px;border: 1px solid #EBE8E7;">
      				<img src="img/master_card_img.png" style="width: 15%;margin-top: 15px;border: 1px solid #EBE8E7;">
      			</div>
      			<div class="col-md-12" style="border-top: 1px solid #C28B85; background: #EBE8E7;border-bottom: 1px solid #C28B85;">
      				<center >
      					<div class="container" style="width: 65%;">
      						<br>
      						<img src="img/wallet.png">
      						<p >After Clicking "Pay now", you will be redirected to Razorpay secure (UPI, Card, Wallets, NetBanking)to complete your purchase securely.</p>
      					</div>
      				</center>
      			</div>
      			<div class="col-md-12">
      				<label><input type="radio" name="" value="2">&nbsp;Cash on Delivery (COD)</label>
      			</div>    			
      		</div>
      		<button style="width: 100%;height: 50px;margin-top: 30px;background: #A17772;border: none;color: white;border-radius: 5px;font-size: 20px;margin-bottom: 15%;" onclick="add_shipping_address()">Pay now</button>
      	</div>
      	<hr style="border: 1px solid #C28D85;">
      	<ul style="list-style: none;display: flex;text-align: ">
      		<u style="color: #C28B85;"><li style="font-size: 14px;">Refund policy</li></u>&nbsp;&nbsp;&nbsp;
      		<u style="color: #C28B85;"><li style="font-size: 14px;">Shipping policy</li></u>&nbsp;&nbsp;&nbsp;
      		<u style="color: #C28B85;"><li style="font-size: 14px;">Privacy policy</li></u>&nbsp;&nbsp;&nbsp;
      		<u style="color: #C28B85;"><li style="font-size: 14px;">Terms of service</li></u>&nbsp;&nbsp;&nbsp;
      		<u style="color: #C28B85;"><li style="font-size: 14px;">Contact information</li></u>
      	</ul>
      </div>
      <div class="col-md-6">
        <div class="row">
          <div class="col-md-12">
            <?php
            include('db/db.php');
$user_id = $_COOKIE['user_id'];
$sql_cart_items = "SELECT * FROM `cart` WHERE user_id = '$user_id'";
$result_cart_items = mysqli_query($connection, $sql_cart_items);
if (mysqli_num_rows($result_cart_items) > 0) {

 
$sql_cart="SELECT cart.cart_id, cart.p_id,  cart.user_id, cart.p_price, cart.p_qty as product_qty, cart.total, products.p_id, products.p_name, products.p_img FROM cart INNER JOIN products ON cart.p_id = products.p_id WHERE cart.user_id = '$user_id'";

$result_cart=mysqli_query($connection, $sql_cart);

if (mysqli_num_rows($result_cart) > 0) {
   foreach ($result_cart as $row) {

    ?>
            <div class="row" style="margin-top: 20px;">
          <div class="col-md-2">
            <img src="img/<?=$row['p_img']?>" style="width: 100%;height: 100px;border-radius: 5px;border: 1px solid #C28D85;">
          </div>
          <div class="col-md-6">
            <h1 style="font-size: 20px;"><?=$row['p_name']?></h1>
          </div>
          <div class="col-md-4">
            <h1 style="font-size: 20px;"><?=$row['p_price']?></h1>
          </div>
        </div>
   <?php
   }
 }
}
?>
        <br>
        <div class="row">
        <div class="col-md-6">
          <h1 style="font-size: 20px;">Subtotal :</h1>
          <h1 style="font-size: 20px;">Shipping :</h1>
          <h1 style="font-size: 30px;">Total :</h1>
        </div>
        <div class="col-md-6">
          <h1 style="font-size: 20px;"><?=$sum?></h1>
          <h1 style="font-size: 20px;"><?=$shipping_amount?></h1>
          <h1 style="font-size: 20px;"><?=$grand_total?></h1>
        </div>
        </div>
          </div>
        </div>
      </div>

    </div>	
</div>
<?php
include('footer.php');
?>
</body>
<!-- MDB -->
<script
  type="text/javascript"
  src="https://cdnjs.cloudflare.com/ajax/libs/mdb-ui-kit/6.3.0/mdb.min.js"
></script>
</html>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
<script type="text/javascript">
function add_shipping_address() {
  var email = $('.shipping_email_id').val();
  var country = $('.shipping_country').val();
  var first_name = $('.shipping_first_name').val();
  var last_name = $('.shipping_last_name').val();
  var address = $('.shipping_address').val();
  var apartment = $('.shipping_apartment').val();
  var city = $('.shipping_city').val();
  var state = $('.shipping_state').val();
  var pin_code = $('.shipping_pin_code').val();
  var mobile_number = $('.shipping_phone_number').val();
  

  if (email === '' || country === '' || first_name === '' || last_name === '' || address === '' || apartment === '' || city === '' || state === '' || pin_code === '' || mobile_number === '') {
    alert("All fields are required");
  } else {
    $.ajax({
      url: 'php/insert_shipping_address.php',
      method: 'POST',
      data: {email: email,country: country,first_name: first_name,last_name: last_name,address: address,apartment: apartment,city: city,state: state,pin_code: pin_code,mobile_number: mobile_number},
      success: function(res) {
        alert(res);
      }
    });
  }
}
</script>