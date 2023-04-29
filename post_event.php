





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
    <a href="post_event.php">Post Event</a>
                <br>
                



<?php

    

    // When form submitted, insert values into the database.
    if (isset($_REQUEST['event_id'])) {
       $event_id = stripslashes($_REQUEST['event_id']);
        //escapes special characters in a string
        $event_id = mysqli_real_escape_string($con, $event_id);
       
        // removes backslashes
       
       // removes backslashes
        $contact = stripslashes($_REQUEST['contact']);
        //escapes special characters in a string
        $contact = mysqli_real_escape_string($con, $contact);
       // removes backslashes
        $venue = stripslashes($_REQUEST['venue']);
        //escapes special characters in a string
        $venue = mysqli_real_escape_string($con, $venue);
        $user_id = stripslashes($_REQUEST['user_id']);
        //escapes special characters in a string
        $user_id = mysqli_real_escape_string($con, $user_id);
        
        
       
       
        $query    = "INSERT into `user` (event_id,contact,venue,user_id)
                     VALUES ('$event_id','$contact',' $venue','$user_id')";
        $result   = mysqli_query($con, $query);
        if ($result) {
            echo "<div class='form'>
                  <h3> posted successfully.</h3><br/>
                  <p class='link'>Click here to <a href='members_reg.php'>post_event</a></p>
                  </div>";
        } else {
            echo "<div class='form'>
                  <h3>post failed.</h3><br/>
                  <p class='link'>Click here to <a href='members_reg.php'>post_event</a> again.</p>
                  </div>";
        }
        } else {
?>
    <form class="form" action="" method="post">
        <h1 class="login-title">Post Event</h1>
         <input type="text" class="login-input" name="event_id" placeholder="event_id" required />
        <input type="text" class="login-input" name="contact" placeholder="contact" required />
        <input type="text" class="login-input" name="venue" placeholder="venue" required />
        <input type="text" class="login-input" name="user_id" placeholder="user_id" required />
        <input type="submit" name="submit" value="Post Event" class="login-button">
             
    </form>
<?php
    }
?>
  <div class="footer">
    <p>© 2023</p>
  </div>
</body>
</html>
