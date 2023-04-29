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
			<li><a href="#">Home</a></li>
			<li><a href="login.php">Admin Login</a></li>
			<li><a href="user_login.php">User login</a></li>
			<li><a href="#">Contact</a></li>
		</ul>
	</nav>
	<main>
		<p>
			
		</p>
	</main>
	<footer>
		<div>
			<img src="C:\xampp\htdocs\copyright.png">
			<p>&copy; 2023 My Website. All rights reserved.</p>
		</div>
	</footer>
</body>
</html>
