<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Cart</title>

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
  href="https://cdnjs.cloudflare.com/ajax/libs/mdb-ui-kit/6.0.1/mdb.min.css"
  rel="stylesheet"
/>
<style> @import url('https://fonts.googleapis.com/css2?family=Courgette&family=Nunito+Sans:wght@300&family=Rubik:ital@1&display=swap'); </style>
</head>
<body>
<?php 

include('db/db.php');



$user_id = $_COOKIE['user_id'];
$sql_cart_empty = "SELECT * FROM cart WHERE user_id = '$user_id'";
$result_empty = mysqli_query($connection, $sql_cart_empty);


if (mysqli_num_rows($result_empty) > 0) {

?>
<div class="container">
  <div class="row"style="margin-top: 15%!important;" >
  <div class="col-md-8" style=" height: auto;">
<?php
include ('db/db.php');
$user_id = $_COOKIE['user_id'];
$sum = 0;
$shipping_amount = 170;

$sql="SELECT cart.cart_id, cart.p_id,  cart.user_id, cart.p_price, cart.p_qty as product_qty, cart.total, products.p_id, products.p_name, products.p_img FROM cart INNER JOIN products ON cart.p_id = products.p_id WHERE cart.user_id = '$user_id'";

$result=mysqli_query($connection, $sql);

if (mysqli_num_rows($result) > 0) {
   foreach ($result as $row) {
?>

<div class="card">
    <div class="row">
      <div class="col-md-3"style=" height: 200px;" >
        <img src="img/<?=$row['p_img']?>" style="width:90%;height:180px;margin-top: 5%;margin-left: 10%;border-radius: 10px;">
      </div>
      <div class="col-md-6"style=" height: 200px;">
        <h1 style="margin-top: 10%;color: #C28B85!important;font-size: 20px;"><?=$row['p_name']?></h1>
        <h1 style="color: #C28B85!important;font-size: 20px;">Quantity : <?=$row['product_qty']?></h1>
        <i class="far fa-trash-alt delete_prorduct" style="font-size:25px;margin-top: 5%;color: #C28B85!important;" id="<?=$row['cart_id']?>"></i>
      </div>
      <div class="col-md-3"style=" height: 200px;">
        <h1 style="color: #C28B85!important;font-size: 20px;margin-top: 20%;">Quantity </h1>

        <input  style="width: 50%;height: 30px;border:1px solid #C28B85!important;color: #C28B85!important;" type="number" name="product_qty" class="product_qty  product_qty<?=$row['cart_id']?>"  value="<?=$row['product_qty']?>" id="<?=$row['cart_id']?>" min="1">

        <input type="hidden" name="p_id" value="<?=$row['p_id']?>" class="p_id<?=$row['cart_id']?>">

        <input type="hidden" name="p_price" value="<?=$row['p_price']?>" class="p_price<?=$row['cart_id']?>">

        <h1 style="color: #C28B85!important;font-size: 20px;margin-top: 5%;">Total : <?=$row['total']?></h1>
      </div>
    </div>
    </div>
<br>
<?php
$sum += $row['total'];
   }
 }
?>


  </div>
    <div class="col-md-4" style="height: 500px;">
      <div class="card">
        <div class="row">
          <div class="col-md-6">
            <h1 style="font-size:20px;color:#C28B85!important;margin-top: 5%;margin-left: 10px;">The Total Amount : </h1>
          </div>
          <div class="col-md-6">
            <h1 style="font-size:20px;color:#C28B85!important;margin-top: 5%;"><?=$sum?></h1>
          </div>
        </div>
        <div class="row">
          <div class="col-md-6">
            <h1 style="font-size:20px;color:#C28B85!important;margin-top: 10%;margin-left: 10px;">Shipping Amount :</h1>
          </div>
          <div class="col-md-6">
            <h5 style="font-size:20px;color:#C28B85!important;margin-top: 5%;"><?=$shipping_amount?></h5>
          </div>
        </div>
        <div class="row">
          <div class="col-md-6">
            <h1 style="font-size:20px;color:#C28B85!important;margin-left: 10px;">Grand Amount :</h1>
          </div>
          <div class="col-md-6">
            <h5 style="font-size:20px;color:#C28B85!important;"><?=$sum + $shipping_amount?></h5>
          </div>
        </div>
        <hr style="width: 100%; border:1px solid rgb(190, 147, 142);">

        <form method="POST" action="shipping_address.php">
          <input type="hidden" name="sum" value="<?=$sum?>">
          <input type="hidden" name="shipping_amount" value="<?=$shipping_amount?>">
          <input type="hidden" name="grand_total" value="<?=$sum + $shipping_amount?>">
      

        <button type="submit" class="btn btn-primary" style="width:40%!important;height:40px!important;margin-left: 30%!important;background: #C28B85!important;" >CHECKOUT</button>
          </form>
        <br>
      </div>
    </div>
  </div>
</div>
<?php
}
else{
?>
<img src="img/empty_cart.jpg" style="margin-left: 25%;margin-top: 10%;">
<?php
}
?>
<br><br>
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
  src="https://cdnjs.cloudflare.com/ajax/libs/mdb-ui-kit/6.0.1/mdb.min.js"
></script>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.1/jquery.min.js"></script>
</html>
<script type="text/javascript">
  function goback(){
   location.href="./";
  }
function add_to_cart(){
  var p_id = $('.p_id_text').val(); 
  var p_price = $('.p_price_text').val(); 
  var p_qty = $('.p_qty_text').val(); 


  $.ajax({
    url:'add_to_cart_insert.php',
    method:'POST',
    data:{p_id:p_id, p_price:p_price, p_qty:p_qty},
    success:function(res){
      alert(res);
      total_products();
    }
  })

}


$('.delete_prorduct').click(function(){
  var cart_id = $(this).attr("id");

  $.ajax({

    url:'php/delete_cart_product.php',
    method:'POST',
    data:{cart_id:cart_id},
    success:function(res){
      alert(res);
      location.reload();
    }
  })
});


$(".product_qty").change(function(){
  var id = $(this).attr("id");
  var p_id = $('.p_id'+id).val();
  var p_price = $('.p_price'+id).val();
  var qty = $('.product_qty'+id).val();

  $.ajax({

    url:'php/update_cart_product_qty.php',
    method:'POST',
    data:{id:id, p_id:p_id, p_price:p_price, qty:qty},
      success:function(res){
        location.reload();
      }
  })
});
</script>