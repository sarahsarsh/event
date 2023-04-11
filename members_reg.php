





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
  <title>User Dashboard</title>
  <link rel="stylesheet" type="text/css" href="style.css">
  
</head>
<body>
  <h1 style="text-align: center; color: blue">Event Application</h1>
  <div class="header">
    <h1>User Dashboard</h1>
    <div class="logout">
      <h2>Welcome, <?php echo $_SESSION['username']; ?>!</h2>
      <a href="logout.php">Logout</a>
    </div>
  </div>
  
  <a href="group.php">Add Group</a>
  <br>
    <a href="members_reg.php">Register Members</a>
                <br>
                
<a href="#">Link 3</a>
                <br>


<?php

    

    // When form submitted, insert values into the database.
    if (isset($_REQUEST['user_id'])) {
       $user_id = stripslashes($_REQUEST['user_id']);
        //escapes special characters in a string
        $user_id = mysqli_real_escape_string($con, $user_id);
       
        // removes backslashes
        $username = stripslashes($_REQUEST['username']);
        //escapes special characters in a string
        $username = mysqli_real_escape_string($con, $username);
       // removes backslashes
        $phone_number = stripslashes($_REQUEST['phone_number']);
        //escapes special characters in a string
        $phone_number = mysqli_real_escape_string($con, $phone_number);
       // removes backslashes
        $Location = stripslashes($_REQUEST['Location']);
        //escapes special characters in a string
        $Location = mysqli_real_escape_string($con, $Location);
        $Group_Id = stripslashes($_REQUEST['Group_Id']);
        //escapes special characters in a string
        $Group_Id = mysqli_real_escape_string($con, $Group_Id);
        
       
       
        $query    = "INSERT into `user` (user_id,username,phone_number,Location,Group_Id)
                     VALUES ('$user_id','$username','$phone_number',' $Location','$Group_Id')";
        $result   = mysqli_query($con, $query);
        if ($result) {
            echo "<div class='form'>
                  <h3> registered successfully.</h3><br/>
                  <p class='link'>Click here to <a href='members_reg.php'>Register</a></p>
                  </div>";
        } else {
            echo "<div class='form'>
                  <h3>Registration failed.</h3><br/>
                  <p class='link'>Click here to <a href='members_reg.php'>register</a> again.</p>
                  </div>";
        }
        } else {
?>
    <form class="form" action="" method="post">
        <h1 class="login-title">Register Member</h1>
         <input type="text" class="login-input" name="user_id" placeholder="user_id" required />
        <input type="text" class="login-input" name="username" placeholder="username" required />
        <input type="text" class="login-input" name="phone_number" placeholder="phone_number" required />
        <input type="text" class="login-input" name="Location" placeholder="Location" required />
        <input type="text" class="login-input" name="Group_Id" placeholder="Group_Id" required />
        
        <input type="submit" name="submit" value="Register" class="login-button">
      <p class="link">  <p>Do you have an account</p><a href="members_reg.php">Click Here  To Register again</a></p>
       
    </form>
<?php
    }
?>
  <div class="footer">
    <p>© 2023 - I am Sarah</p>
  </div>
</body>
</html>
