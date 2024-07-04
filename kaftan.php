<!DOCTYPE html>
<html>
<head>
	<title>Kaftans-Page</title>
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
<body>
<div style="width: 100%;height: 200px;margin-top: 9.8%;">
	<center>
				<br><br><br>
			<h1 style="font-size: 35px; text-transform: uppercase;color: rgb(190, 147, 142);">Kaftan</h1>
			</center>
</div>
<hr>
<div class="container">
<div class="row">
	<div class="col-md-12">
		<div class="row" style="margin-top: 20px;">
			<?php 
			include('db/db.php');
			$sql="SELECT * FROM `products` WHERE cat_id=2";
			$result=mysqli_query($connection, $sql);
			if (mysqli_num_rows($result)>0) {
				foreach ($result as $row) {
			?>
			<div class="col-md-3">
				<a href="product.php?p_id=<?=$row['p_id']?>"><div class="card"style=" width: 100%;height:400px;border-bottom-left-radius: 0px!important;border-bottom-right-radius: 0px!important;background :url('img/<?=$row['p_img']?>');background-size:cover;"></div></a>
                <p style="text-align: left;margin-top: 15px;"><?=$row['p_name']?></p>
                <p style="margin-top: -7%;">
                <?php
                if ($row['p_discount']==0){
                }
                else{
                ?>
                <span style="text-decoration: line-through;margin-left: 10px;">RS. <?= $row['p_mrp']?></span>
                <?php
                }
                ?>
                <span >RS.<?= $row['p_price'] ?></span> </p>
            </div>

			<?php
				}
			}	
			?>
		</div>
	</div>
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
<script
  type="text/javascript"
  src="https://cdnjs.cloudflare.com/ajax/libs/mdb-ui-kit/6.3.0/mdb.min.js"
></script>
</html>