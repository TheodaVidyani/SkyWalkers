<?php

?>


<!doctype html>
<html>
<head>
    <meta charset="utf-8">
    <title>SkyMotorhub.lk</title>
    <link rel="stylesheet" href="css/style.css">
	<link rel="stylesheet" type="text/css" href="source/bootstrap-3.3.6-dist/css/bootstrap.css">
	<link rel="stylesheet" type="text/css" href="source/font-awesome-4.5.0/css/font-awesome.css">
	<link rel="stylesheet" type="text/css" href="style/slider.css">
	<link rel="stylesheet" type="text/css" href="style/mystyle.css">
	<link rel="shortcut icon" type="x-icone" href="image/logo.png">
</head>
<body>
<!-- Header -->
<div class="allcontain">
	<div class="header">
			<ul class="socialicon">
				<li><a href="#"><i class="fa fa-facebook"></i></a></li>
				<li><a href="#"><i class="fa fa-twitter"></i></a></li>
				<li><a href="#"><i class="fa fa-google-plus"></i></a></li>
				<li><a href="#"><i class="fa fa-pinterest"></i></a></li>
			</ul>
			<ul class="givusacall">
				<li>Give us a call : 0115678963 </li>
			</ul>
			<ul class="logreg">
				<li><a href="login.html">Login </a> </li>
			</ul>
	</div>
	<!-- Navbar Up -->
	<nav class="topnavbar navbar-default topnav">
		<div class="container">
			<div class="navbar-header">
				<button type="button" class="navbar-toggle collapsed toggle-costume" data-toggle="collapse" data-target="#upmenu" aria-expanded="false">
					<span class="sr-only"> Toggle navigaion</span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
				</button>
				<a class="navbar-brand logo" href="#"><img src="image/logo.png" alt="logo"></a>
			</div>	 
		</div>
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
		</div>
	</form>
		<script>
			document.querySelector('.img__btn').addEventListener('click', function() {
				document.querySelector('.cont').classList.toggle('s--signup');
			});
		</script>
	<!-- ______________________________________________________Bottom Menu ______________________________-->
	<div class="bottommenu">
		<div class="bottomlogo">
		<span class="dotlogo">&bullet;</span><img src="image/logo 3.png" alt="logo3"><span class="dotlogo">&bullet;;</span>
		</div>
		<!-- <ul class="nav nav-tabs bottomlinks">
			<li role="presentation" ><a href="#/" role="button">ABOUT US</a></li>
			<li role="presentation"><a href="#/">CATEGORIES</a></li>
			<li role="presentation"><a href="#/">PREORDERS</a></li>
			<li role="presentation"><a href="#/">CONTACT US</a></li>
			<li role="presentation"><a href="privacypolicy.html">PRIVACY POLICY</a></li>
			<li role="presentation"><a href="#/">REVIEWS</a></li>
			<li role="presentation"><a href="T&C.html">TERMS & CONDITIONS</a></li>
		</ul> -->
		 <img src="image/line.png" alt="line"> <br>
		 <div class="bottomsocial">
		 	<a href="#"><i class="fa fa-facebook"></i></a>
			<a href="#"><i class="fa fa-twitter"></i></a>
			<a href="#"><i class="fa fa-google-plus"></i></a>
			<a href="#"><i class="fa fa-pinterest"></i></a>
		</div>
			<div class="footer">
				<div class="copyright">
				  &copy; Copy right 2022 | <a href="privacypolicy.html">Privacy Policy</a>
				</div>
				<div class="atisda">
					 Designed by  Team SkyWalkers 
				</div>
			</div>
	</div>
</div>

<script type="text/javascript" src="source/bootstrap-3.3.6-dist/js/jquery.js"></script>
<script type="text/javascript" src="source/js/isotope.js"></script>
<script type="text/javascript" src="source/js/myscript.js"></script> 
<script type="text/javascript" src="source/bootstrap-3.3.6-dist/js/jquery.1.11.js"></script>
<script type="text/javascript" src="source/bootstrap-3.3.6-dist/js/bootstrap.js"></script>
</body>
</html>
