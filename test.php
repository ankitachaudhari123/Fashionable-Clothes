<!DOCTYPE html>
<html>
<head>
  <title>NAVBAR</title>
<style type="text/css">
  *{
    margin: 0;
    padding: 0;
  }
  body{
    background: #fff8f7;
  }
  .nav_main_div{
    width: 100%;
    height: 150px;
    position: fixed;
    background: #fff8f7;
    top: 0;
  }
  .logo{
    width: 100px;
    height: 50px;
    margin-left: 85%;
    margin-top: 20px;
  }
  .first_div{
    width: 100%;
    height: 100px;
    display: inline-flex;
  }
  .logo_div{
    width: 90%;
    height: 80px;
  }
  .icon_div{
    width: 50%;
    height: 80px;
  }
  .second_div{
    width: 100%;
    height: 50px;
  }
  .menu_list{
    display: inline-flex;
    color: rgb(190, 147, 142);
    list-style:  none;
    column-gap: 35px;
    font-size: 17px;
    margin-top: 5px;
    text-transform: uppercase;
  }
  .menu_list:hover {
  color: #c2a2a6;
  }
  .new_arrivals{
    width: 100%;
    height: 700px;
    margin-top: 10%;
  }

    #primary_nav_wrap
{
  margin-top:15px
}

#primary_nav_wrap ul
{
  list-style:none;
  position:relative;
  float:left;
  margin:0;
  padding:0
}

#primary_nav_wrap ul a
{
  display:block;
  color:#333;
  text-decoration:none;
  font-weight:700;
  font-size:12px;
  line-height:32px;
  padding:0 15px;
  font-family:"HelveticaNeue","Helvetica Neue",Helvetica,Arial,sans-serif
}

#primary_nav_wrap ul li
{
  position:relative;
  float:left;
  margin:0;
  padding:0
}

#primary_nav_wrap ul li.current-menu-item
{
  background:#ddd
}

#primary_nav_wrap ul li:hover
{
  background:#f6f6f6
}

#primary_nav_wrap ul ul
{
  display:none;
  position:absolute;
  top:100%;
  left:0;
  background:#fff;
  padding:0
}

#primary_nav_wrap ul ul li
{
  float:none;
  width:200px
}

#primary_nav_wrap ul ul a
{
  line-height:120%;
  padding:10px 15px
}

#primary_nav_wrap ul ul ul
{
  top:0;
  left:100%
}

#primary_nav_wrap ul li:hover > ul
{
  display:block
}
</style>
<body>

<section>
  <div class="nav_main_div">
    <div class="first_div">
      <div class="logo_div">
      <a href="index.php">      
        <img src="img/logo.avif" class="logo">
        </a>
        </div>
        <div class="icon_div">


    

           <nav id="primary_nav_wrap" style="margin-left: 94%;margin-top: 23%;">
            <?php 
            if (isset($_COOKIE['name']) != '') {
            ?>
            <ul>
              <li><i class="fas fa-user" style="font-size: 20px; color: rgb(190, 147, 142);"></i>
                <ul style="background: #fff8f7;border-radius: 5px; ">
                  <li><a href="#" style="color:rgb(190, 147, 142);font-size: 15px;font-weight: 200">Hello, <?=$_COOKIE['name'];?></a></li>
                  <li><a href="php/logout.php" style="color:rgb(190, 147, 142); ">Logout</a></li>
                </ul>
              </li>   
            </ul>

            <?php
            }
            else{
            ?>
            <ul>
              <li><i class="fa-regular fa-user" style="font-size: 20px; color: rgb(190, 147, 142);"></i>
                <ul>
                  <li><a href="login.php" style="color:rgb(190, 147, 142); ">Login</a></li>
                  <li><a href="resister.php" style="color:rgb(190, 147, 142); ">Register</a></li>
                </ul>
              </li>   
            </ul>

            <?php
            }
            ?>
          </nav>
      </div>
      <div style="width: 8%;margin-top: 7%;margin-right: 10%;">
      <i class="fa-solid fa-magnifying-glass" style="font-size: 20px; color: rgb(190, 147, 142);"></i>&nbsp;&nbsp;&nbsp;
      <a href="cart.php"><i class="fa-solid fa-bag-shopping" style="font-size: 20px; color: rgb(190, 147, 142);"></i></a>
      <span class="badge rounded-pill badge-notification  count_product" style="background-color:  rgb(190, 147, 142)">0</span>
      </div >  
    </div>
    <div class="second_div">
      <center>
      <ul class="menu_list">
        <a class="menu_list" href="sale.php"><li>sale</li></a>
        
      <li class="nav-item dropdown menu_list"><a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" role="button" data-mdb-toggle="dropdown" aria-expanded="false">
          women
        </a>
        <ul class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
          <li>
            <a class="dropdown-item menu_list" href="kurti.php">kurtas & set</a>
          </li>
          <li>
            <a class="dropdown-item menu_list" href="kaftan.php">kaftans</a>
          </li>
        </ul>
      </li>
        <a class="menu_list " href="men.php"><li>men</li></a>
        <a class="menu_list" href="western_wear.php"><li>western wears</li></a>
        <a class="menu_list" href="couples_collection.php"><li>couple's  collection</li></a>
      </ul>
        </center>
    </div>
  </div>
</section>
</body>
<script type="text/javascript">
total_products();
  function total_products(){
    $.ajax({
      url:'php/count_products.php',
      method:'POST',
      data:{},
      success:function(res){
        $('.count_product').html(res);
      }
    })
  }
</script>
</html>





