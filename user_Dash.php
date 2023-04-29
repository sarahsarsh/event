
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
    .link{
    	  display: block;
  padding: 5px;
  margin: 10px 0;
  text-decoration: none;
  font-size: 18px;
  font-weight: bold;
  color: #333;
  background-image: url(bullet.png);
  background-repeat: no-repeat;
  background-position: left center;
  padding-left: 20px;
    }
  </style>
</head>
<body>
  <div class="title">
  <h1 style="text-align: center; color: white ;">Event Application</h1>
  </div>
  <div class="header">
    <h1>User Dashboard</h1>
    <div class="logout">
      <h2>Welcome, <?php echo $_SESSION['username']; ?>!</h2>
      <a href="user_login.php">Logout</a>
    </div>  
  </div>
  <div class="link">
  <a href="#">Important events</a>
  <br>
   <a href="#">View events</a>
   <br>
  <a href="#">Post event</a>
  <br>
<a href="#">About Us</a>
</div>
                <br>
                
  <div class="footer">

    <p>© 2023 sarah</p>
  </div>
</body>
</html>
