<?php
// Create connection
static $conn;
$conn = mysqli_connect('localhost','root','','iip');

// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}

?>



<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Hostel Manager | Room Cleaning</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
    <link rel="stylesheet" href="stylesheets/room.css">
    <script src="scripts/room.js"></script>
    
</head>
<body>
    <nav class="navbar navbar-default">
        <div class="container-fluid">
          <div class="navbar-header">
            <a class="navbar-brand" href="index.php"><span id="hostel">HOSTEL</span><span id="manager">MANAGER</span></a>
          </div>
          <ul class="nav navbar-nav" id="links">
            <li><a href="index.php">Home</a></li>
            <li class="active"><a href="room.php">Room Cleaning</a></li>
            <li><a href="mess.php">Night Mess</a></li>
            <li><a href="order.php">My Orders</a></li>
          </ul>
        </div>
      </nav>
      
      <div id="container">
        
        <form class="form-horizontal" id="forms" method='post'>
            <h1 id="head">Order Room Cleaning</h1> 
            <h2>Enter your details:</h2> <br>
            <div class="form-group">
            <label class="control-label col-sm-2" for="name">Name:</label>
            <div class="col-sm-10" id="inputs">
                <input type="text" class="form-control" id="name" placeholder="Enter Name">
            </div>
            </div>
            <div class="form-group">
                <label class="control-label col-sm-2" for="block">Select Block:</label>
                <div class="col-sm-10">
                <select class="form-control" id="block">
                    <option>M</option>
                    <option>N</option>
                    <option>P</option>
                    <option>Q</option>
                </select>
            </div>
            </div>
            <div class="form-group">
            <label class="control-label col-sm-2" for="rno">Room Number:</label>
            <div class="col-sm-10">
                <input type="password" class="form-control" id="rno" placeholder="Enter Room Number">
            </div>
            </div>
            <div class="form-group">
                <label class="control-label col-sm-2" for="sel1">Select Slot:</label>
                <div class="col-sm-10">
                <select class="form-control" id="sel1">
                    <option>7 AM - 8 AM</option>
                    <option>8 AM - 9 AM</option>
                    <option>9 AM - 10 AM</option>
                    <option>10 AM - 11 AM</option>
                </select>
            </div>
            </div>
        
            <div class="form-group" id="submitbtn">
            <div class="col-sm-offset-2 col-sm-10">
                <input type="submit" class="btn btn-default" id="submit">Submit</button>
            </div>
            </div>
        </form>

        <div id="sidebar">
            <h2>Why to use?</h2>
            <p>Enter your details and order room cleaning. Room Cleaning Register can touched by around 100 people a day and is quite a safety hazard. </p>
            <p>This step is taken to avoid contact with the register to enter details in view of the COVID-19 pandemic.</p>
            <span id="span"></span>
        </div>

    </div>
   
</body>
</html>

<?php
    if($_SERVER['REQUEST_METHOD'] == 'POST') { // Form is Posted
        // Assign Variables
        $names = $_POST['name'];
        $block = $_POST['block'];
        $rno = $_POST['rno'];
        $time = $_SESSION['sel1'];
        // Apply Insertion Query
        $sql = "INSERT INTO room (room_rno, room_name, room_block, room_time)
                VALUES ('$rno', '$names', '$block', $time)";
        $query = mysqli_query($conn, $sql);
        // Action on Successful Query
        header("location: index.php");
    }
?>