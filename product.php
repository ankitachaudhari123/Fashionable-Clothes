<!DOCTYPE html>
<html>
<head>
	<title>product</title>
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
  .add_to_card_btn{
    width: 100%;
    height: 50px;
    background: white;
    margin-bottom: 10px;
    color:rgb(190, 147, 142)!important;
    border:2px solid rgb(190, 147, 142);
    margin-top: 30px;
  }
  .buy_now_btn{
    width: 100%; 
    height: 50px;
    background :rgb(190, 147, 142)!important;
    color: white;
    border:2px solid white;
    margin-top: 20px;
  }
  .add_to_card_btn:hover{
    background :rgb(190, 147, 142)!important;
    color: white!important;
    border:2px solid white!important;
  }
  .buy_now_btn:hover{
     background: white!important;
    color:rgb(190, 147, 142)!important;
    border:2px solid rgb(190, 147, 142)!important;
  }
</style>
<body>
<br><br><br><br><br><br><br>
<div class="container">
    <?php
    include('db/db.php');
     $p_id=$_GET['p_id'];
    $sql="SELECT * FROM `products` WHERE p_id = '$p_id' limit 1";
    $result =mysqli_query($connection, $sql);
    if (mysqli_num_rows($result)>0) {
 	  foreach ($result as $row) { 
 	  		$cat_id = $row['cat_id'];	
 	  ?>
	<div class="row">
	<div class="col-md-6">
		<div style="width: 100%;height: 1000px;background: url(img/<?=$row['p_img']?>);background-size:cover;background-repeat: no-repeat;"></div>
		<div style="width: 100%;height: 50px;"></div>
	</div>	
	<div class="col-md-6">
		<div class="container">
		<p style="font-size: 18px;text-transform: uppercase;color: rgb(190, 147, 142);font-weight: bold;">suyash fashion</p>
		<h6 style="font-size: 25px;text-transform: uppercase;font-family: 'Mate SC', serif;color: rgb(190, 147, 142);font-weight: bold;"><?=$row['p_name']?></h6>
		<p style="font-size: 20px;text-transform: uppercase;margin-top: 15px;margin-bottom: 50px;color: rgb(190, 147, 142);font-weight: bold;">RS. &nbsp;<?=$row['p_price']?></p>
		<hr>
		<p style="font-family: 'Marck Script', cursive;margin-top: 30px;color: rgb(190, 147, 142);font-weight: bold;"><?=$row['p_discription']?><span style="font-family: 'News Cycle', sans-serif;">SUYASH FASHION</span></p>
		<div>
			<p style="font-size: 15px;text-transform: uppercase;margin-top: 25px;color: rgb(190, 147, 142);font-weight: bold;">share &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<i class="fab fa-facebook-f"></i>&nbsp;&nbsp;&nbsp;&nbsp;<i class="fab fa-twitter"></i>&nbsp;&nbsp;&nbsp;&nbsp;<i class="fab fa-pinterest-p"></i> </p>
		</div>
     <input type="hidden" name="p_id" class="p_id_text" value="<?=$_GET['p_id']?>">
    <input type="hidden" name="p_price" class="p_price_text" value="<?=$row['p_price']?>">
		 <input type="number" name="" class="p_qty_text" min="1" value="1" style="height: 50px;width: 30%; margin-top: 5%;padding-left: 10px;color: rgb(190, 147, 142);border: 2px solid rgb(190, 147, 142);font-weight: bold;">
		 <br>
     <?php
if (isset($_COOKIE['name']) != '') {
?>
<button class="add_to_card_btn" onclick="add_to_cart()">ADD TO CARD</button>
     <a href="buy_now_shipping_address.php"><button class="buy_now_btn" onclick="add_to_cart_move_shipping_page()">BUY IT NOW</button></a>
<?php
}
else{
?>
<a href="login.php"><button class="add_to_card_btn" >ADD TO CARD</button></a>
     <a href="login.php"><button class="buy_now_btn">BUY IT NOW</button></a>
<?php
}
?>
		</div>
	</div>
	</div>
	<?php
 	  }
    }
    ?>
	<hr style="width: 60%;background: rgb(190, 147, 142);border: 2px solid rgb(190, 147, 142);">
	<h1 style="font-size: 30px;color: rgb(190, 147, 142);">size chart: </h1>
	<img src="img/size_chart.png" style="width: 60%;height: 900px;">
	<hr style="margin-top: 20px;">
</div>
<div style="width: 100%;height: 200px;">
	<center>
				<br><br><br>
			<h1 style="font-size: 35px; text-transform: uppercase;color: black;color: rgb(190, 147, 142);font-weight: bold;">releted product</h1>
			</center>
		</div>
		<div class="container">
  <div class="row">
<?php
include('db/db.php');
$sql_related_product = "SELECT * FROM products where cat_id= '$cat_id' AND p_id != '".$_GET['p_id']."' limit 4 ";
$result_related_product = mysqli_query($connection, $sql_related_product);
if (mysqli_num_rows($result_related_product)>0) {
foreach ($result_related_product as $row) {
?>
    <div class="col-md-3">
    	 <a href="product.php?p_id=<?=$row['p_id']?>"> 
    	 <div class="card"style=" width: 100%;height:400px;border-bottom-left-radius: 0px!important;border-bottom-right-radius: 0px!important;background :url('img/<?=$row['p_img']?>');background-size:cover;">
       </div>
      </a>
      <p style="text-align: left;margin-top: 15px;color: #c28d85"><?=$row['p_name']?></p>
				<p style="margin-top: -15px;color: #c28d85">RS. <?=$row['p_price']?></p>
      </div>
<?php
  }
}
?>
</div>
  </div>
  <?php
include "footer.php";
?>
<?php
include "nav-bar.php";
?>
</body>
<!-- MDB -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.1/jquery.min.js"></script>
<script
  type="text/javascript"
  src="https://cdnjs.cloudflare.com/ajax/libs/mdb-ui-kit/6.3.0/mdb.min.js"
></script>
</html>
<script type="text/javascript">
  function add_to_cart(){
  var p_id = $('.p_id_text').val(); 
  var p_price = $('.p_price_text').val(); 
  var p_qty = $('.p_qty_text').val(); 


  $.ajax({
    url:'php/add_to_cart.php',
    method:'POST',
    data:{p_id:p_id, p_price:p_price, p_qty:p_qty},
    success:function(res){
      alert(res);
    }
  })

};


function add_to_cart_move_shipping_page(){
  var p_id = $('.p_id_text').val(); 
  var p_price = $('.p_price_text').val(); 
  var p_qty = $('.p_qty_text').val(); 


  $.ajax({
    url:'php/add_to_buy_now_cart.php',
    method:'POST',
    data:{p_id:p_id, p_price:p_price, p_qty:p_qty},
    success:function(res){
     }
  })
};
</script>