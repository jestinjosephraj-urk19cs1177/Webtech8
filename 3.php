<?php
// Start the session
session_start();
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
  <style>
    .pro{
      height: 400px;
      width: 100%;
      background-color: aqua;
    }
    .cont{
      width: 80%;
      height: 100px;
      background-color: beige;
      padding-left: 50px;
      padding-top: 20px;
    }
  </style>
</head>
<body style="background-color: blueviolet;">
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
  <h1>Shoping Page</h1>
  
  <?php
    echo "User Name : ".$_SESSION["myname"]."<br>";
  ?>

<form action="4.php" method="GET">
  
  <div class="container">
  <div class="row">
    <div class="col">
    <div class="pro">
      <img src="https://5.imimg.com/data5/LV/PO/RS/SELLER-89215017/mens-jogger-footwear-500x500.png" height="70%" width="100%" alt="" style="background-color: white;">
        <center><input type="radio" id="css" name="price" value="Cut Shoe - 999">
  <label for="css">Product name : CutShoe<br>product price : 999 Rs</label><br>
</center>
      </div>
    </div>
    <div class="col order-5">
    <div class="pro">
      <img src="https://m.media-amazon.com/images/I/81euNVK3zrL._UY500_.jpg" height="70%" width="100%" alt="">
        <center><input type="radio" id="css" name="price" value="Causal Shoe - 899">
  <label for="css">Product name : Shoes<br>product price : 899 Rs</label><br>
</center>
      </div>
    </div>
    <div class="col order-1">
    <div class="pro">
      <img src="https://xofootwear.com/wp-content/uploads/2020/05/solider-01-7-fuel-grey-orange-original-imafd6zv5xgpxwpd.jpeg" height="70%" width="100%"  alt="">
        <center><input type="radio" id="javascript" name="price" value="Slipper - 1200">
  <label for="javascript">Product name : Slipper<br>product price : 1200 Rs</label>
</center>

      </div>
    </div>
  </div>
</div>

<br><br>
  


<center>
<div class="cont"><h1>Billing Address</h1></div>

<div class="form-floating"style="width:80%;padding-top: 20px;">
  <textarea class="form-control" name="address" placeholder="Type your address here" id="floatingTextarea2" style="height: 100px"></textarea><br>
  <label for="floatingTextarea2">Address</label>

  <input type="button" onclick="decrementValue()" value="-" />
   <input type="text" id="number" name="quantity" value="1"/>
   <input type="button" onclick="incrementValue()" value="+" />
   <br><br>
   <input type="submit" value="Submit">
</div>
</center>
</form> 
<br><br><br>
<script>
  function incrementValue()
{
    var value = parseInt(document.getElementById('number').value, 10);
    value = isNaN(value) ? 1 : value;
    value++;
    document.getElementById('number').value = value;
}

function decrementValue()
{
    var value = parseInt(document.getElementById('number').value, 10);
    value = isNaN(value) ? 1 : value;
    if(value>1){value--;}
    document.getElementById('number').value = value;
}
</script>
  
</body>
</html>