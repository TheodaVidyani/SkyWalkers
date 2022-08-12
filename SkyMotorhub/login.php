<!doctype html>
<html>

<head>
	<meta charset="utf-8">
	<title>SkyMotorhub.lk</title>

	<link rel="stylesheet" type="text/css" href="style/login.css">
	<link rel="shortcut icon" type="x-icone" href="image/logo.png">
</head>

<body>

	<!--_______________________________________ Login __________________________________ -->
	<br>
	<br>
	<form class="modal-content animate" action="verifyUser.php" method="post">
		<div class="imgcontainer">
			<img src="image/img_avatar.png" alt="Avatar" class="avatar">
		</div>

		<div class="container">
			<label for="uname"><b>Username</b></label>
			<input type="text" placeholder="Enter Username" name="username" required>

			<label for="psw"><b>Password</b></label>
			<input type="password" placeholder="Enter Password" name="password" required>

			<button type="submit" name="submit" >Login</button>
			<label>
				<input type="checkbox" checked="checked" name="remember"> Remember me
			</label>
		</div>

		<div class="container" style="background-color:#f1f1f1">
			<button type="button" onclick="document.getElementById('id01').style.display='none'"
				class="cancelbtn">Cancel</button>
			<span class="psw">Forgot <a href="#">password?</a></span>
		</div>
	</form>
	</div>
</body>

</html>
