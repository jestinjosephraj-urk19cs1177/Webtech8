<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
  <style>
    .connt{
      padding-top: 200px;
      height: 90%px;
      width: 80%;
    }
    .spacer{
      height: 30px;
    }
  </style>
</head>
<body>
  <center>
  <div class="connt">
  <h1>Login Form</h1>
  <br>
  <br>

<form action="2.php" method="GET">
  <label for="name">Username:</label>
  <input type="text" id="name" name="name"><br><br>
  <label for="pass">Password:</label>
  <input type="password" id="pass" name="pass"><br><br>
  <input type="submit" value="Submit">
  <script>
    console.log(document.getElementById('name'))
  </script>
</form>

  </div>
  </center>
</body>
</html>
