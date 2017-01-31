<!DOCTYPE html>
<html>
<head>
	<title>HTML5 Login</title>
	<link rel="stylesheet" href="style/css/normalize.css">
	<link rel="stylesheet" href="style/css/style.css">
</head>
<body>
	<section class="loginform cf">
	<?php 
	  if(isset($_GET['error'])){
		  
		  echo '<span style="font-size:17px; color:red">Please check the user name and password</span>';
	  }
	?>
		<form name="login" action="check_user.php" method="POST" accept-charset="utf-8">
			<ul>
				<li>
					<label for="usermail">User Name</label>
					<input type="text" name="uname" placeholder="" required>
				</li>
				<li>
					<label for="password">Password</label>
					<input type="password" name="password" placeholder="password" required></li>

			
				<li>
					<input type="submit" value="Login">
				</li>
				</ul>
		</form>
	</section>
</body>
</html>