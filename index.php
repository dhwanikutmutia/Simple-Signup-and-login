<?php 
	include ('connection.php'); 
?>

<!DOCTYPE html>
<html>
<head>
	<title>Slide Navbar</title>
	<link rel="stylesheet" type="text/css" href="slide navbar style.css">
    <link rel="stylesheet" href="style.css">
<link href="https://fonts.googleapis.com/css2?family=Jost:wght@500&display=swap" rel="stylesheet">
</head>
<body>
	<div class="main">  	
		<input type="checkbox" id="chk" aria-hidden="true">

			<div class="signup">
            <form action="" method="POST">
				<form>
					<label for="chk" aria-hidden="true">Sign up</label>
					<input type="text" name="username" placeholder="User name" required="" >
					<input type="email" name="email" placeholder="Email" required="">
					<input type="password" name="password" placeholder="Password" required="">
					<button name="register">Sign up</button>
                    <?php include 'register.php' ?>
				</form>
			</div>

			<div class="login">
				<form action="" method="POST">
					<label for="chk" aria-hidden="true">Login</label>
					<input type="email" name="email" placeholder="Email" required="">
					<input type="password" name="password" placeholder="Password" required="">
					<button name="login">Login</button>
                    <?php include 'login.php' ?>
				</form>
			</div>
	</div>
</body>
</html>