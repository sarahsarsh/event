<?php
    // Enter your host name, database username, password, and database name.
    // If you have not set database password on localhost then set empty.
    $con = mysqli_connect("localhost","root","","uasingishu event db");
    // Check connection
    if (mysqli_connect_errno()){
        echo "Failed to connect to MySQL: " . mysqli_connect_error();
    }
?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8"/>
    <title>Login</title>
    <link rel="stylesheet" href="style.css"/>
</head>
<body>

</body>
</html>
<!DOCTYPE html>
<html>
<head>
    <title>Event Application</title>
    <style>
        /* Style the header */
        header {
            display: flex;
            flex-direction: column;
            align-items: center;
            justify-content: space-between;
        }

        header img {
            width: 100%;
            max-width: 800px;
            height: auto;
        }

        /* Style the navigation bar */
        nav {
            display: flex;
            justify-content: center;
            background-color: #333;
            padding: 10px;
        }

        nav ul {
            display: flex;
            list-style-type: none;
            margin: 0;
            padding: 0;
        }

        nav li {
            margin-right: 20px;
        }

        nav a {
            color: white;
            text-decoration: none;
            font-size: 18px;
            font-weight: bold;
            padding: 5px;
        }

        nav a:hover {
            background-color: white;
            color: #333;
            border-radius: 5px;
        }

        /* Style the main content */
        main {
            margin: 20px;
        }
        
        body{
            background-image: url(sara.jpeg);
            background-repeat: no-repeat;
            background-position: fixed;
        }
        
        /* Style the footer */
        footer {
            display: flex;
            justify-content: center;
            align-items: center;
            background-color: #333;
            color: white;
            padding: 10px;
            position: absolute;
            bottom: 0;
            width: 100%;
        }
        
        footer p {
            margin: 0;
        }
        
        footer img {
            margin-right: 10px;
        }
    </style>
</head>
<body>
    <header>
        <div>
            
        </div>
        <h1>Welcome to Uasin Gishu Event Organizers</h1>
    </header>
    <nav>
        <ul>
            <li><a href="home.php">Home</a></li>
            <li><a href="#">User login</a></li>
            <li><a href="#">Contact</a></li>
        </ul>
    </nav>
    <main>
        <p>
         <?php

    require('db.php');
    session_start();
    // When form submitted, check and create user session.
    if (isset($_POST['username'])) {
        $username = stripslashes($_REQUEST['username']);    // removes backslashes
        $username = mysqli_real_escape_string($con, $username);
        $password = stripslashes($_REQUEST['password']);
        $password = mysqli_real_escape_string($con, $password);
        // Check user is exist in the database
        $query    = "SELECT * FROM `users` WHERE username='$username'
                     AND password='" . md5($password) . "'";
        $result = mysqli_query($con, $query) or die(mysql_error());
        $rows = mysqli_num_rows($result);
        if ($rows == 1) {
            $_SESSION['username'] = $username;
            // Redirect to user dashboard page
            header("Location: user_Dash.php");
        } else {
            echo "<div class='form'>
                  <h3>Incorrect Username/password.</h3><br/>
                  <p class='link'>Click here to <a href='login.php'>Login</a> again.</p>
                  </div>";
        }
    } else {
?>
    <form class="form" method="post" name="login">
        <h1 class="login-title">User login</h1>
        <input type="text" class="login-input" name="username" placeholder="Username" autofocus="true"/>
        <input type="password" class="login-input" name="password" placeholder="Password"/>
        <input type="submit" value="Login" name="submit" class="login-button"/>
        <p class="link"><a href="registration.php">New Registration</a></p>
  </form>
<?php
    }
?>   
        </p>
    </main>
    <footer>
        <div>
        </div>
    </footer>
</body>
</html>
