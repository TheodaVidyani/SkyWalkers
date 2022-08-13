<<<<<<< HEAD
<?php

?>


=======
>>>>>>> ef2087ac04750843468ef1daad28e69dc54d5161
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
<<<<<<< HEAD
		<div class="collapse navbar-collapse" id="upmenu">
			<ul class="nav navbar-nav" id="navbarontop">
				<li class="active"><a href="index.html">HOME</a> </li>
				<li class="active"><a href="Vehicle.html">VEHICLES</a> </li>
				<li>
					<a href="contact.html">CONTACT</a>
 
				</li>
			</ul>
		</div>
	</nav>
</div>
<!--_______________________________________ Login __________________________________ -->
	<br>
	<br>
	<form action="conn.php" method="post">
		<div class="cont">
			<div class="form sign-in">
				<h2>Welcome</h2>
				<label>
					<span>Username</span>
					<input type="text" name="username" id="username" placeholder="Enter your Username"/>
				</label>
				<label>
					<span>Password</span>
					<input type="password" name="password" id="password" placeholder="Enter your Password"/>
				</label>
				<p class="forgot-pass">Forgot password?</p>
				<button type="submit" value="submit" class="submit">Sign In</button>
			 
			</div>
			<div class="sub-cont">
				<div class="img">
					<div class="img__text m--up">
					 
						<h3>Don't have an account? Please Sign up!<h3>
					</div>
					<div class="img__text m--in">
					
						<h3>If you already has an account, just sign in.<h3>
					</div>
					
					<div class="img__btn">
						<span class="m--up">Sign Up</span>
						<span class="m--in">Sign In</span>
					</div>
				</div>
				
				<div class="form sign-up">
				
					<h2>Create your Account</h2>
					<label>
						<span>Name</span>
						<input type="text" placeholder="Enter your Name" name="name" id="name" required />
					</label>
					<label>
						<span>Email</span>
						<input type="email" placeholder="Enter your Email" name="email" id="email" required />
					</label>
					<label>
						<span>Password</span>
						<input type="password" placeholder="Enter your Password" name="password" id="password" required />
					</label>
					<label>
						<span>Confirm Password</span>
						<input type="password" placeholder="Re-enter your Password" name="cpassword" id="cpassword" required  />
					</label>
					<button type="submit" value="submit" class="submit">Sign Up</button>
					
				</div>
			</div>
=======

		<div class="container" style="background-color:#f1f1f1">
			<button type="button" onclick="document.getElementById('id01').style.display='none'"
				class="cancelbtn">Cancel</button>
			<span class="psw">Forgot <a href="#">password?</a></span>
>>>>>>> ef2087ac04750843468ef1daad28e69dc54d5161
		</div>
	</form>
	</div>
</body>

</html>
