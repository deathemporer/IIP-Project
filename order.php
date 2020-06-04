<?php
$servername = "localhost";
$username = "username";
$password = "password";

// Create connection
$conn = new mysqli($servername, $username, $password);

// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}
echo "Connected successfully";
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Hostel Manager | My Orders</title>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
    <link rel="stylesheet" href="stylesheets/order.css">
</head>
<body>
    <nav class="navbar navbar-default">
        <div class="container-fluid">
          <div class="navbar-header">
            <a class="navbar-brand" href="index.php"><span id="hostel">HOSTEL</span><span id="manager">MANAGER</span></a>
          </div>
          <ul class="nav navbar-nav" id="links">
            <li class="active"><a href="index.php">Home</a></li>
            <li><a href="room.php">Room Cleaning</a></li>
            <li><a href="mess.php">Night Mess</a></li>
            <li><a href="order.php">My Orders</a></li>
          </ul>
        </div>
      </nav>

      <div id="container">
        <div class="panel panel-default" id="card">
            <div class="panel-heading">Order</div>
            <div class="panel-body"></div>
            
        </div>
        <div class="panel panel-default" id="card">
            <div class="panel-heading">Order</div>
            <div class="panel-body"></div>
            
        </div>
        <div class="panel panel-default" id="card">
            <div class="panel-heading">Order</div>
            <div class="panel-body"></div>
            
        </div>
        <div class="panel panel-default" id="card">
            <div class="panel-heading">Order</div>
            <div class="panel-body"></div>
            
        </div>

</body>
</html>