
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Hostel Manager</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
    <link rel="stylesheet" href="stylesheets/style.css">
    <script src="scripts/script.js"></script>
</head>
<body>
    <nav class="navbar navbar-default">
        <div class="container-fluid">
          <div class="navbar-header">
            <a class="navbar-brand" href="index.php"><span id="hostel">HOSTEL</span><span id="manager">MANAGER</span></a>
          </div>
          <ul class="nav navbar-nav" id="links">
            <li class="active"><a href="index.html">Home</a></li>
            <li><a href="room.php">Room Cleaning</a></li>
            <li><a href="mess.php">Night Mess</a></li>
            <li><a href="order.php">My Orders</a></li>
          </ul>
        </div>
      </nav>

      <div id="container">
        <div class="panel panel-default" id="card">
            <div class="panel-heading">Room Cleaning</div>
            <div class="panel-body">Panel Content</div>
            <div class="panel-footer"><button type="button" class="btn btn-default">Default</button></div>
        </div>

        <div class="panel panel-default" id="card">
            <div class="panel-heading">Order food</div>
            <div class="panel-body">Panel Content</div>
            <div class="panel-footer"><button type="button" class="btn btn-default">Default</button></div>
        </div>

        <div class="panel panel-default" id="card">
            <div class="panel-heading">My Orders</div>
            <div class="panel-body">Panel Content</div>
            <div class="panel-footer"><button type="button" class="btn btn-default">Default</button></div>
        </div>
      </div>
</body>
</html>