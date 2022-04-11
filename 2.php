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
</head>
<body>
  
<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "mydb";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}
$myname=$_GET['name'];
$mypwd=$_GET['pass'];

$_SESSION["myname"] = "$myname";

$sql = "SELECT myname,mypwd FROM myuser WHERE myname='$myname' and mypwd='$mypwd'";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
  // output data of each row
  header("Location:3.php");
  exit();
} else {
  echo "0 results";
  header("Location:1.php");
  exit();
}
$conn->close();
?>
</body>
</html>
