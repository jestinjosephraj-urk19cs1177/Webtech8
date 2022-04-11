
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
  <style>
    .cont{
      padding-top: 5px;
      height: 70px;
      background-color: aqua;
      width: 100%;
      text-align: center;
    }

    #customers {
  font-family: Arial, Helvetica, sans-serif;
  border-collapse: collapse;
  width: 100%;
}

#customers td, #customers th {
  border: 1px solid #ddd;
  padding: 8px;
}

#customers tr:nth-child(even){background-color: #f2f2f2;}

#customers tr:hover {background-color: #ddd;}

#customers th {
  padding-top: 12px;
  padding-bottom: 12px;
  text-align: left;
  background-color: #04AA6D;
  color: white;
}

  </style>
</head>
<body>
  <div class="cont">
    <h1>order summary</h1>
  </div>
  <br>
  <h3>please take a moment to view your order : </h3>
  <?php
  echo "Name : ".$_SESSION["myname"]."<br>";
echo "Address : ".$_GET['address']."<br><br>";
?>

<table id="customers">
  <tr>
    <th>Item Description</th>
    <th>quantity</th>
    <th>amount</th>
  </tr>
  <tr>
  <?php
  echo "<td>" . explode("-",$_GET['price'])[0]. "</td>";
  echo "<td>" . $_GET['quantity'] . "</td>"; 
  echo "<td>" . (int)explode("-",$_GET['price'])[1]*(int)$_GET['quantity'] . "</td>";
  ?>
  </tr>
</table>

<?php
		if(array_key_exists('button1', $_POST)) {
			button1();
		}
		function button1() {
			header("Location:3.php");
  exit();
		}
	?>

<form method="post">
		<input type="submit" name="button1"
				class="button" value="Confirm Order" />
	</form>
</body>
</html>
