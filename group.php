





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
    <a href="members_reg.php">Register Members</a>
                <br>
                
<a href="#">About Us</a>
                <br>

<?php

    

    // When form submitted, insert values into the database.
    if (isset($_REQUEST['Group_Id'])) {
       $Group_Id = stripslashes($_REQUEST['Group_Id']);
        //escapes special characters in a string
        $Group_Id = mysqli_real_escape_string($con, $Group_Id);
       
        // removes backslashes
        $Group_Name = stripslashes($_REQUEST['Group_Name']);
        //escapes special characters in a string
        $Group_Name = mysqli_real_escape_string($con, $Group_Name);
       
       
        $query    = "INSERT into `group` (Group_Id,Group_Name)
                     VALUES ('$Group_Id','$Group_Name')";
        $result   = mysqli_query($con, $query);
        if ($result) {
            echo "<div class='form'>
                  <h3>You are registered successfully.</h3><br/>
                  
                  </div>";
        } else {
            echo "<div class='form'>
                  <h3>Registration failed.</h3><br/>
                  <p class='link'>Click here to <a href='group.php'>register</a> again.</p>
                  </div>";
        }
        } else {
?>
    <form class="form" action="" method="post">
        <h1 class="login-title">Register Group</h1>
         <input type="text" class="login-input" name="Group_Id" placeholder="Group Identification" required />
        <input type="text" class="login-input" name="Group_Name" placeholder="Group name" required />
        
        <input type="submit" name="submit" value="Register" class="login-button">
     
    </form>
<?php
    }
?>

  <div class="footer">
    <p>© 2023 - I am Sarah</p>
  </div>
</body>
</html>
