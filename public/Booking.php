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

	<meta charset="UTF-8" >

    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
	<script type="text/javascript" src="http://localhost/SW/lib/js/ajax.js"></script>
	<script type="text/javascript" src="http://localhost/SW/lib/js/Check.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
	<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.1/css/all.css" integrity="sha384-50oBUHEmvpQ+1lW4y57PTFmhCaXp0ML5d60M1M7uH2+nqUivzIebhndOJK28anvf" crossorigin="anonymous">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	
	<meta name="keywords" content="Be Clinic Responsive web template, Bootstrap Web Templates, Flat Web Templates, Android Compatible web template, Smartphone Compatible web template, free webdesigns for Nokia, Samsung, LG, SonyEricsson, Motorola web design" />

    <style>
		.panel {display: none;}
         #one {display: block;}
	</style>
	<script>
		addEventListener("load", function () {
			setTimeout(hideURLbar, 0);
		}, false);

		function hideURLbar() {
			window.scrollTo(0, 1);
		}
	</script>
		<script>
		$(document).ready(function(){
         $('#Type').on('change', function() {
      if ( this.value == '1')
      {
		$("#Examination").show();
		$("#CheckUp").hide();
      }
	  if ( this.value == '2')
      {
		$("#Examination").hide();
        $("#CheckUp").show();
      }
    });
});
	</script>



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
define('__ROOT__', "../App/");
require_once(__ROOT__ . "model/PatientsModel.php");
require_once(__ROOT__ . "controller/PatientController.php");
require_once(__ROOT__ . "model/AppointsModel.php");
require_once(__ROOT__ . "controller/AppointController.php");
require_once(__ROOT__ . "View/Patient/ViewUser.php");
//require_once("/Applications/XAMPP/xamppfiles/htdocs/SW/App/Database/Db.php");
require_once(__ROOT__ . "Database/Db.php");


$model = new Appointments();

$model2 = new Patient($_SESSION["PID"]);
$controller2 = new PatientsController($model);
$controller = new AppointmentController($model);
$view = new ViewUser($controller2, $model2);

if(isset($_POST['Submit']))	{
	$controller->insert();

	}




?>
<body>
	<!-- main -->
	<div id="home">
		<!-- top header -->
		
		<header>
	<?php  echo $view->output();?>
	<?php echo $view->topnav();?>
	</header>



		
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
	<section class="logins py-7">
		<br>
	<div class="container py-xl-7 py-lg-7">
	<div class="login px-lg-5 mx-auto mw-200 login-wrapper">
	<select class="form-control" name='Type' id='Type' required>
	<?php	
			$db=new DB();
			$conn=$db->connect();		 
			echo'	<option value="">----------------------------------Appointment Type-------------------------------</option>';
			$sql="SELECT * FROM `app_type`";
			$result=mysqli_query($conn,$sql);
			while($row=mysqli_fetch_array($result))
			echo '<option   value='.$row['app_type_id'].'>  '.$row['description'].'</option>';
			echo'		</select>    <br>';
   ?>
</select>
</div>
</div>
<br>
	<div class="container py-xl-7 py-lg-7" style='display:none;' id='Examination'>
		<div class="login px-lg-5 mx-auto mw-200 login-wrapper">
		<form lass="login-wrapper" action="#" method="post" name="" required>
		<label>Which Clinic :</label>
		<select  placeholder="which clinic" name="clinic" onchange="showTime(this.value)" class="form-control">
			<?php	
			$db=new DB();
			$conn=$db->connect();		 
			echo'	<option value="">----------------------------------Clinics-------------------------------</option>';
			$sql="SELECT * FROM `clinics`";
			$result=mysqli_query($conn,$sql);
			while($row=mysqli_fetch_array($result))
			echo '<option   value='.$row['CID'].'>  '.$row['Cname'].'</option>';
			echo'		</select>    <br>';
		
		?>
	   <div id="txt"><b>
	   </b>
	</div>
	   <br>
	
   <div class="form-group"> 
  <label>Reasons For Seeing the Doctor:</label>
  <select  placeholder="Reason For seeing Doctor" name="Reasons" class="form-control" required>
			<option value="New Cairo">-----------------------------------Reasons-------------------------------</option>
			<option value="Left">Left Knees</option>
			<option value="Both">Both Knees</option>
			<option value="Right">Right Knees</option>
			</select>
			<br>
</option>
  </div>
  <div class="form-group"> 
  <label>Payment:</label>
  <label class="radio-inline">
	<input type="radio" name="Payment" value="Visa" required>Visa
   </label>
   <label class="radio-inline">
	<input type="radio" name="Payment" value="Cash" required checked>Cash
	</label>
</div>
<br>
			<button type="submit" name=" Submit" class="btn submit mt-4">Submit</button>
	   </form>
	  <br>
</div>
</div>
	  <div class="container py-xl-7 py-lg-7" style='display:none;' id='CheckUp'> 
	  <div class="login px-lg-5 mx-auto mw-200 login-wrapper">
		<form lass="login-wrapper" action="#" method="post" name="">
		<label>Which Clinic :</label>
		<select  placeholder="which clinic" name="clinic" onchange="showCheck(this.value)" class="form-control">
			<?php
			
			$db=new DB();
			$conn=$db->connect();		 
			echo'	<option value="">----------------------------------Clinics-------------------------------</option>';
			$sql="SELECT * FROM `clinics`";
			$result=mysqli_query($conn,$sql);
			while($row=mysqli_fetch_array($result))
			echo '<option   value='.$row['CID'].'>  '.$row['Cname'].'</option>';
			echo'		</select>    <br>';
		
		?>
	   <div id="txt2"><b>
	   </b>
	</div>
	<button type="submit" name=" Submit2" class="btn submit mt-4">Submit</button>
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
