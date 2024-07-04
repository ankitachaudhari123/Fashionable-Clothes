<?php 
session_start();
?>
<!DOCTYPE html>
<html>
<head>
	<title>Suyash</title>
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
  }
  .buy_now_btn{
    width: 100%; 
    height: 50px;
    background :rgb(190, 147, 142)!important;
    color: white;
    border:2px solid white;
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
<section>
	<div class="new_arrivals">
	<img src="img/new_arrivals.webp" style="width: 100%; height: 700px;background-repeat: no-repeat;background-size: cover;">	
	</div>
</section>
<div style="width: 100%;height: 200px;">
  <center>
        <br><br><br>
      <h1 style="font-size: 35px; text-transform: uppercase;color: rgb(190, 147, 142);">NEW ARRIVALS</h1>
      </center>
    </div>
<div class="container">
  <div class="row">
<?php
include('db/db.php');
$new_products_sql="SELECT * FROM products WHERE status = 'Active' order by p_id desc limit 4";
$result=mysqli_query($connection, $new_products_sql);
if (mysqli_num_rows($result)>0) {
  foreach ($result as $row) {
?>
    <div class="col-md-3">
       <a href="product.php?p_id=<?=$row['p_id']?>"> 
       <div class="card"style=" width: 100%;height:400px;border-bottom-left-radius: 0px!important;border-bottom-right-radius: 0px!important;background :url('img/<?=$row['p_img']?>');background-size:cover;">
       </div>
      </a>
      <p style="text-align: left;margin-top: 15px;color: #c28d85!important;font-size: 18px;font-weight: bold;"><?=$row['p_name']?></p>
        <p style="margin-top: -7%;">
                <?php
                if ($row['p_discount']==0){
                }
                else{
                ?>
                <span style="text-decoration: line-through;margin-left: 10px;color: rgb(172 118 117);!important;font-size: 18px;">RS. <?= $row['p_mrp']?></span>
                <?php
                }
                ?>
                <span style="color:  rgb(172 118 117)!important;font-size: 18px;">RS.<?= $row['p_price'] ?></span> </p>
      </div>
<?php
  }
}
?>
 </div>
  </div>
</div>
</div>
<div style="width: 100%;height: 10px;margin-top: 50px;"><hr style="width: 100%; border:1px solid rgb(190, 147, 142);"></div>

<div style="width: 100%;height: 200px;">
	<center>
				<br><br><br>
			<h1 style="font-size: 35px; text-transform: uppercase;color: rgb(190, 147, 142);">couple collection</h1>
			</center>
		</div>
<div class="container">
  <div class="row">

<?php
include('db/db.php');
$couple_collection_sql= "SELECT * FROM `products` WHERE cat_id = 5 order by p_id desc limit 4";
$result=mysqli_query($connection, $couple_collection_sql);
if (mysqli_num_rows($result)>0) {
  foreach ($result as $row) {
    ?>
<div class="col-md-3">
       <a href="product.php?p_id=<?=$row['p_id']?>"> 
       <div class="card"style=" width: 100%;height:400px;border-bottom-left-radius: 0px!important;border-bottom-right-radius: 0px!important;background :url('img/<?=$row['p_img']?>');background-size:cover;">
       </div>
      </a>
       <p style="text-align: left;margin-top: 15px;color: #c28d85!important;font-size: 18px;font-weight: bold;"><?=$row['p_name']?></p>
       <p style="margin-top: -7%;">
                <?php
                if ($row['p_discount']==0){
                }
                else{
                ?>
                <span style="text-decoration: line-through;margin-left: 10px;color: rgb(172 118 117);!important;font-size: 18px;">RS. <?= $row['p_mrp']?></span>
                <?php
                }
                ?>
                <span style="color:  rgb(172 118 117)!important;font-size: 18px;">RS.<?= $row['p_price'] ?></span> </p>
      </div>


    <?php
  }
}
?>
</div>
  </div>
  </div>
</div>
<center>
  <a href="couples_collection.php">
<button type="button" class="btn btn-primary" style="margin-top: 3%;margin-bottom: 3%;background:rgb(190, 147, 142);border: 1px solid #c2a2a6;font-size: 14px; ">View All Products</button></a>
</center>
<div style="width: 100%;height: 10px;"><hr style="width: 100%; border:1px solid rgb(190, 147, 142);"></div>



<div class="container" style="margin-top: 90px;">
  <div class="row">
    <div class="col-md-4">
    	 <a href=""> 
    	 <div class="card"style=" width: 100%;height:400px;background :url('img/mens-1.webp');background-size:cover;">
       </div>
      </a>
      </div>
    <div class="col-md-4">
      <a href=""> 
    	 <div class="card"style=" width: 100%;height:400px;background :url('img/kurti-set-2.webp');background-size:cover;">
       </div>
      </a>
    </div>
    <div class="col-md-4">
      <a href=""> 
    	 <div class="card"style=" width: 100%;height:400px;background :url('img/westen-3.webp');background-size:cover;">
       </div>
      </a>
  </div>
  <div class="col-md-12">
      <a href=""> 
    	 <div class="card"style=" width: 100%;height:400px;background :url('img/couple-collection-man-1.webp');background-size:cover;margin-top: 3%;">
       </div>
      </a>
  </div>
</div>
  </div>
  </div>
</div>
<div style="width: 100%;height: 200px;">
	<center>
				<br><br><br>
			<h1 style="font-size: 35px; text-transform: uppercase;color:rgb(190, 147, 142);">LIMITED TIME OFFER</h1>
			</center>
		</div>
<div class="container">
  <?php 
      include('db/db.php');
      $sql="SELECT * FROM `products` WHERE status = 'Active' AND p_discount != 0 order by p_id desc limit 1";
      $result=mysqli_query($connection, $sql);
      if (mysqli_num_rows($result)>0) {
       foreach ($result as $row) { 
       ?>
       <div class="row">
    <div class="col-md-6">
      <a href="product.php?p_id=<?=$row['p_id']?>">
        <img src="img/<?=$row['p_img']?>" style="height: 600px;width: 70%;margin-left: 30%;">
      </a>
    </div>
     <div class="col-md-6">
      <h3 style="margin-right: 100%;margin-bottom: 5px;margin-top: 20px;color: rgb(190, 147, 142);font-size: 20px;margin-left: 10px;font-weight: bold;">SUYASHWEB</h3>
        <h1 style="margin-right: 100%;margin-bottom: 5px;color: rgb(190, 147, 142);font-size: 20px;margin-left: 10px;font-weight: bold;width: 100%;"><?=$row['p_name']?></h1>
        <h1 style="margin-right: 51%;margin-bottom: 20px;color:rgb(190, 147, 142);font-size: 20px;margin-left: 10px;font-weight: bold;">RS. <?=$row['p_mrp']?> <span style="text-decoration:line-through;color:rgb(190, 147, 142);font-size: 20px;font-weight: bold;">RS. <?=$row['p_price']?></span></h1>
         <input type="hidden" name="p_id" class="p_id_text" value="<?=$row['p_id']?>">
        <input type="hidden" name="p_price" class="p_price_text" value="<?=$row['p_price']?>">

        <input type="number" name="" class="p_qty_text" min="1" value="1" style="height: 50px;width: 30%;padding-left: 10px;color: rgb(190, 147, 142);border: 2px solid rgb(190, 147, 142);font-weight: bold;margin-bottom: 15px;">       
<?php
if (isset($_COOKIE['name']) != '') {
?>
<button class="add_to_card_btn" onclick="add_to_cart()">ADD TO CARD</button>
     <button class="buy_now_btn">BUY IT NOW</button>
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

       <?php 
        }
       }
      ?>
</div>
<?php
include "footer.php";
?>
<?php
include "nav-bar.php";
?>
</body>
<!-- MDB -->
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
</script>