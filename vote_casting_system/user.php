<?php session_start(); ?>
<!DOCTYPE html>
<html>
<head>
<title>Boundary Sign in Form Flat Responsive Widget Template :: w3layouts</title>
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="keywords" content="Boundary Sign in Form template Responsive, Login form web template,Flat Pricing tables,Flat Drop downs  Sign up Web Templates, Flat Web Templates, Login sign up Responsive web template, SmartPhone Compatible web template, free WebDesigns for Nokia, Samsung, LG, Sony Ericsson, Motorola web design" />
<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>
<!-- Custom Theme files -->
<link href="css/3.css" rel="stylesheet" type="text/css" media="all" />
<!-- //Custom Theme files -->
<!-- web font -->
<link href='//fonts.googleapis.com/css?family=Oxygen:400,700' rel='stylesheet' type='text/css'>
<!-- //web font -->
</head>
<body>
	<h1>Login to continue</h1>
<!--form-stars-here-->
		<div class="login-form w3-agile">
			<h2>sign in</h2>
			<form action="" method="post">
					<p>User Name</p>
					<input type="text" name="u" placeholder=" " required="" />
					<p>password</p>
					<input type="password" name="p" placeholder="" required="" />
					<input name="submit" type="submit" value="let me in">
			</form>
			
		</div>
<!--//form-ends-here-->
<!-- copyright -->
	<div class="copyright w3-agile">
		<p> © 2016 Boundary Sign in Form . All rights reserved | Design by <a href="http://w3layouts.com/" target="_blank">W3layouts</a></p>
	</div>
	<!-- //copyright --> 
</body>
</html>

<?php
	include('connect.php');
	if(isset($_POST['submit'])){
		
		$user_name = $_POST['u'];
		$pass = md5(md5($_POST['p']));
		
		$query = "SELECT * FROM voter where user_name='$user_name' AND password='$pass'";
		
		$run  = $con->query($query);
		if($run->num_rows){
			
			$run_fetch = $run->fetch_assoc();
			
			$_SESSION['v'] = $run_fetch['voted'];
			$_SESSION['user_name'] = $run_fetch['user_name'];
			$_SESSION['vid'] = $run_fetch['voter_id'];
			header('Location:userlog.php');
			
			
		}
		
	}
	
?>
