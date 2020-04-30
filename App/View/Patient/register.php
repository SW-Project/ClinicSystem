
<!--
Author: W3layouts
Author URL: http://w3layouts.com
License: Creative Commons Attribution 3.0 Unported
License URL: http://creativecommons.org/licenses/by/3.0/
-->
<?php


session_start();
include_once 'function.php';
$user = new Patient();

 if (isset($_REQUEST['submit'])){
	 $Fname = $_POST['Fname'];
		$Mname = $_POST['Mname'];
		$Lname = $_POST['Lname'];
		$email = $_POST['email'];
		$password = $_POST['password'];
		$mobile = $_POST['mobile'];
		$gender = $_POST['gender'];
		$Day = $_POST['Day'];
		$Month = $_POST['Month'];
		$Year = $_POST['Year'];
 extract($_REQUEST);
 $register = $user->reg_user($Fname, $Mname,$Lname, $gender,$mobile,$email,$password,$Day,$Month,$Year);
 if ($register) {
 // Registration Success
header('location:login.php');
 } else {
 // Registration Failed
echo 'Something went wrong';
 }
 }
 ?>


<!DOCTYPE html>
<html >
<head>
	<title>Dr. Ahmed Ghoneim</title>
	<!-- Meta tag Keywords -->

	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta charset="UTF-8" />
	<meta name="keywords" content="Be Clinic Responsive web template, Bootstrap Web Templates, Flat Web Templates, Android Compatible web template, Smartphone Compatible web template, free webdesigns for Nokia, Samsung, LG, SonyEricsson, Motorola web design" />
	<script>
		addEventListener("load", function () {
			setTimeout(hideURLbar, 0);
		}, false);

		function hideURLbar() {
			window.scrollTo(0, 1);
		}
	</script>

	<!--// Meta tag Keywords -->

	<!-- Custom-Files -->
	<link rel="stylesheet" href="lib/css/bootstrap.css">
	<!-- Bootstrap-Core-CSS -->
	<link rel="stylesheet" href="/Users/home/Desktop/SW Project/libcss/style.css" type="text/css" media="all" />
	<!-- Style-CSS -->
	<link href="/Users/home/Desktop/SW Project/lib/css/font-awesome.min.css" rel="stylesheet">
	<!-- Font-Awesome-Icons-CSS -->
	<!-- //Custom-Files -->

	<!-- Web-Fonts -->
	<link href="//fonts.googleapis.com/css?family=Quicksand:300,400,500,700" rel="stylesheet">
	<link href="//fonts.googleapis.com/css?family=Mukta:200,300,400,500,600,700,800&amp;subset=devanagari,latin-ext" rel="stylesheet">
	<!-- //Web-Fonts -->
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
		<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
		<meta name="viewport" content="width=device-width, initial-scale=1.0">


</head>

<body>
	<!-- main -->
	<div id="home">
		<!-- top header -->
		<header>
			<div class="top-bar py-3">
				<div class="container">
					<div class="row">
						<div class="col-xl-5 col-lg-6 col-md-8 top-social-agile text-lg-left text-center">
							<div class="row">
								<!-- social icons -->
								<ul class="col-4 top-right-info">
									<li>
										<a href="https://www.facebook.com/kneeinjury/">
											<span class="fa fa-facebook-f"></span>
										</a>
									</li>
									<li>
										<a href="m.me/kneeinjury">
											<p><i class="fab" style="font-size:15px"> &#xf39f; </i></p>
										</a>
									</li>
									<li class="mx-3">
										<a href="https://www.youtube.com/channel/UCWoWydNtA65jsai0wQ0ErrA">
											<span class="fa fa-youtube"></span>
										</a>
									</li>
									<li>
										<a href="https://instagram.com/drghonam?igshid=q9g4mht43lx1">
											<span class="fa fa-instagram"></span>
										</a>
									</li>

								</ul>
								<!-- //social icons -->
							</div>
						</div>
						<div class="col-xl-7 col-lg-6 col-md-4 top-social-agile text-md-right text-center mt-md-0 mt-2">
							<div class="row">
								<div class="offset-xl-6 offset-lg-4">
								</div>
								<div class="col-xl-3 col-lg-4 col-6 top-w3layouts p-md-0 text-right">
									<!-- login -->
									<a href="login.html" class="login-button-2 text-uppercase text-bl">
										<span class="fa fa-sign-in mr-2"></span>Login</a>
									<!-- //login -->
								</div>
								<div class="col-xl-3 col-lg-4 col-6 header-w3layouts text-md-right text-left">
									<!-- register -->
									<a href="register.html" class="login-button-2 text-uppercase text-bl">
										<span class="fa fa-pencil-square-o mr-2"></span>Register</a>
									<!-- //register -->
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</header>
		<!-- //top header -->

		<!-- second header -->
		<div class="main-top">
			<div class="container">
				<div class="header d-md-flex justify-content-between align-items-center py-3">
					<!-- logo -->
					<div id="logo">
						<h1>
							<a href="index.html">
								<span class="fa fa-user-md mr-2"></span>
								<span class="logo-sp"></span>Dr. Ahmed Ghoniem Clinic
							</a>
						</h1>
					</div>
					<!-- //logo -->
					<!-- nav -->
					<div class="nav_w3ls">
						<nav>
							<label for="drop" class="toggle">Menu</label>
							<input type="checkbox" id="drop" />
							<ul class="menu">
								<li><a href="index.html">Home</a></li>
								<li class="mx-lg-4 mx-md-3 my-md-0 my-2"><a href="about.html">About Us</a></li>
								<li><a href="gallery.html">Gallery</a></li>
								<li class="mx-lg-4 mx-md-3 my-md-0 my-2">
									<!-- First Tier Drop Down -->
									<label for="drop-2" class="toggle toogle-2">Dropdown <span class="fa fa-angle-down" aria-hidden="true"></span>
									</label>
									<a href="#" class="active">Dropdown <span class="fa fa-angle-down" aria-hidden="true"></span></a>
									<input type="checkbox" id="drop-2" />
									<ul>
										<li><a href="about.html" class="drop-text">Services</a></li>
										<li><a href="single.html" class="drop-text active">Blog </a></li>
										<li><a href="about.html" class="drop-text">Our Doctor</a></li>
									</ul>
								</li>
								<li><a href="contact.html">Contact Us</a></li>
							</ul>
						</nav>
					</div>
					<!-- //nav -->
				</div>
			</div>
		</div>
		<!-- //second header -->

		<!-- banner -->
		<div class="main-banner-2">

		</div>


	<div class="breadcrumb-agile py-1">
		<ol class="breadcrumb m-0">
			<li class="breadcrumb-item">
				<a href="index.html">Home</a>
			</li>
			<li class="breadcrumb-item active" aria-current="page">Registration</li>
		</ol>
	</div>

	<section class="logins py-5">
		<div class="container">

			<form action="register.php" method="post" name="reg">
				<div class="form-group ">
				<label>First Name:</label>
				<input class="form-control " type="text" name="Fname" required="" />
       <label>Middle Name:</label>
				<input class="form-control" type="text" name="Mname" required="" />
				<label>Last Name:</label>
 				<input class="form-control" type="text" name="Lname" required="" />

				<label>Email:</label>
				<input class="form-control" type="email" name="email" />


				<label>Password:</label>
				<input class="form-control" type="password" name="password" required="" />


				<label>Mobile:</label>
				<input class="form-control" type="text" name="mobile" required="" />


					<label for="gender">Gender</label>
					<select class="form-control input-sm" name="gender">
					<option value=" "></option>
					<option value="Male ">Male</option>
					<option value="Female ">Female</option>

							</select>

        <label for="address">Birthdate </label>
			 <input type="text" class="form-control " name="Day" placeholder="Day"/>

		<label for="Month">Month</label>
		  <select class="form-control " name="Month"/>
								<option value=""> Month</option>
	              <option value="January">January</option>
	              <option value="February">February</option>
								<option value="March">March</option>
							  <option value="April">April</option>
					  		<option value="May">May</option>
							  <option value="June">June</option>
				   		 <option value="July">July</option>
							  <option value="August">August</option>
							 <option value="September">September</option>
							  <option value="October">October</option>
							 <option value="November">November</option>
				 		  <option value="January">December</option></select>

			<input type="text" class="form-control " name="Year" placeholder="Year"/>

			  <button type="submit" name="submit" class="btn btn-primary">Sign Up</button>

				<a href="login.php">Already registered! Click Here!</a></td>
			</div>
			</form>

			<br>
		</div>

	</section>


	<!-- footer -->
	<footer class="py-5">
		<div class="container py-xl-5 py-lg-3">
			<div class="row">
				<div class="col-lg-7 w3l-footer">
					<!-- logo -->
					<div class="logo2">
						<h2>
							<a href="index.html">
								<span class="fa fa-user-md mr-2"></span>
								<span class="logo-sp"></span> Dr. Ahmed Ghoneim
							</a>
						</h2>
					</div>
					<!-- //logo -->
					<p class="mt-4 text-li">
           Our clinic is specializing in knee and arthroscopic surgeries and knee ligaments only.
					 Our mission is to provide best medical services for our Patients.
					</p>
					<ul class="list-unstyled list-styles mt-lg-5 mt-4">
						<li>
							<p class="text-li"><span class="fa fa-location-arrow mr-2"></span>

	     	   Dew Tower - Zahraa El Maadi - Thirteenth Sector - Maadi
		       Cairo, Egypt111</p>
						</li>
						<li class="my-3">
							<p class="text-li"><span class="fa fa-phone mr-2"></span>01150001410</p>
						</li>
						<li>
							<a href="mailto:info@example.com" class="text-wh"><span class="fa fa-envelope-open mr-2"></span>mail@example.com</a>
						</li>
					</ul>
				</div>
				<div class="col-lg-5 w3l-footer mt-lg-0 mt-5">
					<h3 class="mb-sm-4 mb-3 text-wh">Partners</h3>
					<ul class="list-unstyled list-part text-wh pt-lg-3">
						<li><span class="fa fa-500px" aria-hidden="true"></span></li>
						<li class="mx-4"><span class="fa fa-gg" aria-hidden="true"></span></li>
						<li><span class="fa fa-lastfm" aria-hidden="true"></span></li>
						<li class="mx-4"><span class="fa fa-openid" aria-hidden="true"></span></li>
						<li><span class="fa fa-angellist" aria-hidden="true"></span></li>
					</ul>
					<div class="n-right-w3ls mt-5 pt-lg-4">
						<h3 class="mb-sm-4 mb-3 text-wh">Newsletter</h3>
						<form action="#" method="post">
							<div class="row pt-2">
								<div class="col-8 form-group">
									<input class="form-control" type="email" name="Email" placeholder="Email Address" required="">
								</div>
								<div class="col-4 form-group p-sm-0 pl-0">
									<button class="form-control submit btn font-weight-bold" type="submit">Subscribe</button>
								</div>
							</div>
						</form>
					</div>
				</div>
			</div>
		</div>
	</footer>
	<!-- //footer -->

	<!-- footer bottom -->
	<!-- copyright -->
	<div class="copy-w3pvt">
		<div class="container py-3">
			<div class="row">
				<div class="col-lg-7 w3ls_footer_grid1_left text-lg-left text-center">
					<p>&copy; 2019 Be Clinic. All rights reserved | Design by
						<a href="http://w3layouts.com/">W3layouts</a>
					</p>
				</div>
				<div class="col-lg-5 w3ls_footer_grid_left1_pos text-lg-right text-center mt-lg-0 mt-2">
					<ul>
						<li>
							<a href="https://www.facebook.com/kneeinjury/" class="facebook">
								<span class="fa fa-facebook-f mr-2"></span>Facebook</a>
						</li>
						<li>
							<a href="https://www.youtube.com/channel/UCWoWydNtA65jsai0wQ0ErrA" class="google">
								<span class="fa fa-youtube mr-2"></span>Youtube</a>
						</li>
					</ul>
				</div>
			</div>
		</div>
	</div>
	<!-- //copyright -->
	<!-- //footer bottom -->
	<!-- move top icon -->
	<a href="#home" class="move-top text-center"></a>


</body>

</html>
