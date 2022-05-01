<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8">
		<title>Login</title>
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
 <!-- Favicon -->
 <link rel="shortcut icon" href="./images/favicon.png" type="image/png" />
  <!-- Font Awesome -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.1/css/all.min.css" />
 <!-- ======== Swiper Js ======= -->
    <link
      rel="stylesheet"
      href="https://cdnjs.cloudflare.com/ajax/libs/Swiper/6.7.5/swiper-bundle.min.css"
    />

  <!-- Boxicons -->
  <link href='https://unpkg.com/boxicons@2.0.8/css/boxicons.min.css' rel='stylesheet'>

		<!-- MATERIAL DESIGN ICONIC FONT -->
		<link rel="stylesheet" href="fonts/material-design-iconic-font/css/material-design-iconic-font.min.css">
		<!-- Nav style -->
		 	<link rel="stylesheet" href="../../styles.css">
		<!-- STYLE CSS -->
		<link rel="stylesheet" href="css/style.css">
	</head>

	<body>

	<!--Nav bar -->
	<?php
		include "../../components/nav.php"
	?>
	<!-- Nav bar end -->

		<div class="authwrapper" style="background-image: url('images/bg-registration-form-2.jpg');">
			<div class="inner">
				<form action="">
					<h3>Login Form</h3>
					
					<div class="form-wrapper">
						<label for="">Email</label>
						<input type="email" class="form-control">
					</div>
					<div class="form-wrapper">
						<div class="form-group">
						<label for="">Password</label>
						<a href="/webproj/auth/SignUp/" style="text-decoration:underline">Forgot?</a>
						</div>
						<input type="password" class="form-control">
					</div>
					
					<!-- <div class="checkbox">
						<label>
							<input type="checkbox"> .
							<span class="checkmark"></span>
						</label>
					</div> -->
					<button class="login-btn">Login</button>
					<h4 style="text-align:center; padding:10px;">New to Niranjan?<a href="/webproj/auth/SignUp/" style="text-decoration:underline"> Create account</a></h4>
				</form>
			</div>
		</div>
		
	</body><!-- This templates was made by Colorlib (https://colorlib.com) -->
</html>