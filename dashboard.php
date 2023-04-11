
<?php
    // Enter your host name, database username, password, and database name.
    // If you have not set database password on localhost then set empty.
    $con = mysqli_connect("localhost","root","","uasingishu event db");
    // Check connection
    if (mysqli_connect_errno()){
        echo "Failed to connect to MySQL: " . mysqli_connect_error();
    }
?>
<?php
//include auth_session.php file on all user panel pages
include("auth_session.php");
?>

<!DOCTYPE html>
<html>
<head>
  <meta charset="UTF-8">
  <title>Admin Dashboard</title>
  <link rel="stylesheet" type="text/css" href="style.css">
  <style>
    
   .title{
      background-color: teal;
    }
  </style>
</head>
<body>
  <div class="title">
  <h1 style="text-align: center; color: white ;">Event Application</h1>
  </div>
  <div class="header">
    <h1>Admin Dashboard</h1>
    <div class="logout">
      <h2>Welcome, <?php echo $_SESSION['username']; ?>!</h2>
      <a href="logout.php">Logout</a>
    </div>
  </div>
  
  <a href="group.php">Add Group</a>
  <br>
    <a href="Members_reg.php">Register Members</a>
                <br>
                
<a href="#">About Us</a>
                <br>
                
  <div class="footer">
    <p>© 2023 - I am Sarah</p>
  </div>
</body>
</html>
