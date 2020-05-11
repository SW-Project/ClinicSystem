<!--
Author: W3layouts
Author URL: http://w3layouts.com
License: Creative Commons Attribution 3.0 Unported
License URL: http://creativecommons.org/licenses/by/3.0/
-->

<!DOCTYPE html>
<html lang="zxx">

<head>
	<title>Dr. Ahmed Ghoneim</title>
	<!-- Meta tag Keywords -->

	<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.1/css/all.css" integrity="sha384-50oBUHEmvpQ+1lW4y57PTFmhCaXp0ML5d60M1M7uH2+nqUivzIebhndOJK28anvf" crossorigin="anonymous">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta charset="UTF-8" />
	<meta name="keywords" content="Be Clinic Responsive web template, Bootstrap Web Templates, Flat Web Templates, Android Compatible web template, Smartphone Compatible web template, free webdesigns for Nokia, Samsung, LG, SonyEricsson, Motorola web design" />
	<link href="http://localhost/SW/lib/vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
  <link href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">
<link href="http://localhost/SW/lib/css/sb-admin-2.min.css" rel="stylesheet">
	<script>
		addEventListener("load", function () {
			setTimeout(hideURLbar, 0);
		}, false);

		function hideURLbar() {
			window.scrollTo(0, 1);
		}
	</script>
	<script>
function showTime(str) {
  if (str == "") {
    document.getElementById("txtHint").innerHTML = "";
    return;
  } else { 
    var xmlhttp = new XMLHttpRequest();
    xmlhttp.onreadystatechange = function() {
      if (this.readyState == 4 && this.status == 200) {
        document.getElementById("txt").innerHTML = this.responseText;
      }
    };
    xmlhttp.open("GET","getClinic.php?q="+str,true);
    xmlhttp.send();
  }
}
</script>
	<!--// Meta tag Keywords -->

	<!-- Custom-Files -->
	<link rel="stylesheet" href="http://localhost/SW/lib/css/bootstrap.css">
	<!-- Bootstrap-Core-CSS -->
	<link rel="stylesheet" href="http://localhost/SW/lib/css/style.css" type="text/css" media="all" />
	<!-- Style-CSS -->
	<link href="http://localhost/SW/lib/css/font-awesome.min.css" rel="stylesheet">
	<!-- Font-Awesome-Icons-CSS -->
	<!-- //Custom-Files -->

	<!-- Web-Fonts -->
	<link href="//fonts.googleapis.com/css?family=Quicksand:300,400,500,700" rel="stylesheet">
	<link href="//fonts.googleapis.com/css?family=Mukta:200,300,400,500,600,700,800&amp;subset=devanagari,latin-ext" rel="stylesheet">
	<!-- //Web-Fonts -->

</head>
<?php
session_start();
require_once("/Applications/XAMPP/xamppfiles/htdocs/SW/App/Database/Db.php");

$db=new DB();
$conn=$db->connect();

if(isset($_POST['submit']))	{
	$ID=$_SESSION["PID"];
	$CID=$_REQUEST["clinic"];
	$Day_ID=$_REQUEST["Day"];
	$Reasons=$_REQUEST["Reasons"];
	$Payment=$_REQUEST["Payment"];

	$sql="INSERT INTO `appointments`(`appointment_id`, `PID`, `Day_id`, `reasons`,`Pay_type`) 
	VALUES (DEFAULT,'$ID','$Day_ID','$Reasons','$Payment')";
	$sql2="UPDATE `Day_Limit` SET `status`='BOOKED'  WHERE Day_id='$Day_ID'";

	if ($conn->query($sql) === true && $conn->query($sql2) === true){
	
	   echo"Done";
	   header("Location:ShowApp.php?id='.$ID");
	}
	else
	{
		echo"Error";
	}
}

?>
<body>
	<!-- main -->
	<div id="home">
		<!-- top header -->
		<header>
			<nav class="navbar navbar-expand navbar-light bg-white topbar mb-4 static-top shadow">

				<!-- Sidebar Toggle (Topbar) -->
				<button id="sidebarToggleTop" class="btn btn-link d-md-none rounded-circle mr-3">
					<i class="fa fa-bars"></i>
				</button>



				<!-- Topbar Navbar -->
				<ul class="navbar-nav ml-auto">


						<!-- Dropdown - Messages -->
						<div class="dropdown-menu dropdown-menu-right p-3 shadow animated--grow-in" aria-labelledby="searchDropdown">
							<form class="form-inline mr-auto w-100 navbar-search">
								<div class="input-group">
									<input type="text" class="form-control bg-light border-0 small" placeholder="Search for..." aria-label="Search" aria-describedby="basic-addon2">
									<div class="input-group-append">
										<button class="btn btn-primary" type="button">
											<i class="fas fa-search fa-sm"></i>
										</button>
									</div>
								</div>
							</form>
						</div>
					</li>

					<!-- Nav Item - Alerts -->
					<li class="nav-item dropdown no-arrow mx-1">
						<a class="nav-link dropdown-toggle" href="#" id="alertsDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
							<i class="fas fa-bell fa-fw"></i>
							<!-- Counter - Alerts -->
							<span class="badge badge-danger badge-counter">3+</span>
						</a>
					<!-- Nav Item - Messages -->
					<li class="nav-item dropdown no-arrow mx-1">
						<a class="nav-link dropdown-toggle" href="#" id="messagesDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
							<i class="fas fa-envelope fa-fw"></i>
							<!-- Counter - Messages -->
							<span class="badge badge-danger badge-counter">7</span>
						</a>
					</li>

					<!-- Nav Item - User Information -->
					<li class="nav-item dropdown no-arrow">
						<a class="nav-link dropdown-toggle" href="#" id="userDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
							<span class="mr-2 d-none d-lg-inline text-gray-600 small"><?php echo $_SESSION['username'];?></span>
							<img class="img-profile rounded-circle" src="http://localhost/SW/lib/images/user2.png">
						</a>
						<!-- Dropdown - User Information -->
						<div class="dropdown-menu dropdown-menu-right shadow animated--grow-in" aria-labelledby="userDropdown">
							<a class="dropdown-item" href="#">
								<i class="fas fa-user fa-sm fa-fw mr-2 text-gray-400"></i>
								Profile
							</a>
							<a class="dropdown-item" href="#">
								<i class="fas fa-cogs fa-sm fa-fw mr-2 text-gray-400"></i>
								Settings
							</a>
							<div class="dropdown-divider"></div>
							<a class="dropdown-item" href="#" data-toggle="modal" data-target="#logoutModal">
								<i class="fas fa-sign-out-alt fa-sm fa-fw mr-2 text-gray-400"></i>
								Logout
							</a>
						</div>
					</li>

				</ul>

			</nav>


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
								<li><a href="Patient.php">Home</a></li>
								<li class="mx-lg-4 mx-md-3 my-md-0 my-2"><a href="about.html">About Us</a></li>
								<li><a href="Profile.php">Profile </a></li>
								<li class="mx-lg-4 mx-md-3 my-md-0 my-2">
									<!-- First Tier Drop Down -->
									<label for="drop-2" class="toggle toogle-2">Services <span class="fa fa-angle-down" aria-hidden="true"></span>
									</label>
									<a href="#" class="active">Services <span class="fa fa-angle-down" aria-hidden="true"></span></a>
									<input type="checkbox" id="drop-2" />
									<ul>
								    	<li><a href="gallery.html">Gallery </a></li>
										<li><a href="Report.html" class="drop-text active">Reports </a></li>
										<li><a href="operation.html" class="drop-text">Operations</a></li>
										<li><a href="Exercise.html" class="drop-text">Exercise</a></li>
										<li ><a href="contact.html" class="drop-text"> Contact Us </a></li>
									</ul>
								</li>
								<li class="mx-lg-4 mx-md-3 my-md-0 my-2"><a href="Booking.php">Book Now </a></li>



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
		<!-- //banner -->
	</div>
	<!-- //main -->

	<!-- page details -->
	<div class="breadcrumb-agile py-1">
		<ol class="breadcrumb m-0">
			<li class="breadcrumb-item">
				<a href="index.html">Home</a>
			</li>
			<li class="breadcrumb-item active" aria-current="page">Booking</li>
		</ol>
	</div>
	<!-- //page details -->

	<!-- Booking -->

		<!-- Content Row -->
	<!-- Booking -->
	<section class="Booking py-5">
		<!-- Content Row -->
<div class="container py-xl-5 py-lg-3">
		<div class="container py-xl-5 py-lg-3">
			<div class="title-section mb-md-5 mb-4">
        <h3 class="w3ls-title text-uppercase text-dark font-weight-bold">Book Your Appoitment Now</h3>
         <label>For Help Call : 01150001410</label>
			</div>
	<div class="login px-sm-4 mx-auto mw-100 login-wrapper">
   <form class="login-wrapper" action="#" method="post">
		 <div class="form-group">

	  <label>Which Clinic:</label>
       <select  placeholder="which clinic" name="clinic" onchange="showTime(this.value)" class="form-control">
		<?php			 
       	echo'	<option value="">----------------------------------Clinics-------------------------------</option>';
		$sql="SELECT * FROM `clinics`";
		$result=mysqli_query($conn,$sql);
		while($row=mysqli_fetch_array($result))
		echo '<option   value='.$row['CID'].'>  '.$row['Cname'].'</option>';
		echo'		</select>    <br>';
	   
	   ?>
	   <div id="txt"><b></b></div>
	   <br>


<label>Choose The date Using Only the Date ID:</label>
<input type="number" class="form-control" name="Day" placeholder="" required="">
<br>
		 <label>Reasons For Seeing the Doctor:</label>
		  <select  placeholder="Reason For seeing Doctor" name="Reasons" class="form-control">
			<option value="New Cairo">-----------------------------------Reasons-------------------------------</option>
			<option value="Left">Left Knees</option>
			<option value="Both">Both Knees</option>
			<option value="Right">Right Knees</option>
			</select>
			<br>
			<label>Payment Method:</label>
       <select  placeholder="" name="Payment"  class="form-control">
		<?php			 
       	echo'	<option value="">----------------------------------Payment-------------------------------</option>';
		$sql="SELECT * FROM `Pay_type`";
		$result=mysqli_query($conn,$sql);
		while($row=mysqli_fetch_array($result))
		echo '<option   value='.$row['Pay_type_id'].'>  '.$row['Description'].'</option>';
		echo'		</select>    <br>';
	   
	   ?>
			<button type="submit" name= "submit" class="btn submit mt-4">Submit</button>
		</div>
			</div>
			</form>
		</div>
		</div>
	</section>
	<!-- //login -->


	<!-- //login -->

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
	<!-- //move top icon -->

</body>

</html>
