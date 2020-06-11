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
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
	<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.1/css/all.css" integrity="sha384-50oBUHEmvpQ+1lW4y57PTFmhCaXp0ML5d60M1M7uH2+nqUivzIebhndOJK28anvf" crossorigin="anonymous">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	
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

define('__ROOT__', "../App/");
require_once(__ROOT__ . "model/PatientsModel.php");
require_once(__ROOT__ . "controller/PatientController.php");
require_once(__ROOT__ . "model/MedHistory.php");
require_once(__ROOT__ . "controller/HistoryController.php");
require_once(__ROOT__ . "View/Patient/ViewUser.php");

session_start();
$model1 = new Patient($_SESSION["PID"]);
$controller1= new PatientsController($model1);
$model = new History($_SESSION["PID"]);
$controller = new HistoryController($model);
$view = new ViewUser($controller1, $model1);

if (isset($_POST['Submit']) ) {
	
	$controller->insertMed();
	 if(true)
	 {
		echo "<script>$(document).ready(function(){ $('#myModal').modal('show'); });</script>

		<div class='modal'  id='myModal' name='myModal' role='dialog'>
			<div class='modal-dialog modal-confirm'>
			  <div class='modal-content'>
			  <div class='modal-header'>
		  <img src='http://localhost/SW/lib/images/Success.png' style='position: absolute; margin: 0 auto;left: 0;right: 0;
		   top: -40px;width: 95px;height: 95px;border-radius: 50%;background: transparet;padding: 20px;text-align: center;'>
			<h5 style='text-align: center;'>Success</h5>
			</div>
				<div class='modal-body'>
				  <p> Registration Completed ... Thank You!</p>
				</div>
					<div class='modal-footer'>

							<button type='button' class='btn btn-success' data-dismiss='modal' onclick='myFunction()'>Done</button>
										<script>
										function myFunction()
										{
										  location.href='http://localhost/SW/Public/index.php';
										}
										</script>
					</div>
				</div>
			</div>
		</div>";

	 }
	 else{
		echo "<script>$(document).ready(function(){ $('#myModal').modal('show'); });</script>

		<div class='modal'  id='myModal' name='myModal' role='dialog'>
			<div class='modal-dialog modal-confirm'>
			  <div class='modal-content'>
			  <div class='modal-header'>
		  <img src='http://localhost/SW/lib/images/failure.png' style='position: absolute; margin: 0 auto;left: 0;right: 0;
		   top: -40px;width: 95px;height: 95px;border-radius: 50%;background: transparet;padding: 20px;text-align: center;'>
			<h5 style='text-align: center;'>Failed</h5>
			</div>
				<div class='modal-body'>
				  <p>An Error Occurred Please try again ... Thank You</p>
				</div>
					<div class='modal-footer'>

							<button type='button' class='btn btn-danger' data-dismiss='modal' onclick='myFunction()'>Back</button>
										<script>
										function myFunction()
										{
										  location.href='http://localhost/SW/Public/Compete.php';
										}
										</script>
					</div>
				</div>
			</div>
		</div>";
	 }
	
}
?>

<style>
						input[type="radio"] {
							-ms-transform: scale(1.5); 
							-webkit-transform: scale(1.5); 
							transform: scale(1.5);
						}
						</style>

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
				<a href="index.php">Home</a>
			</li>
			<li class="breadcrumb-item active" aria-current="page">Medical History Completion</li>
		</ol>
	</div>
	<!-- //page details -->
   
	<section class="logins py-7">
		<br>
		<div class="container py-xl-7 py-lg-7">
		<div class="login px-lg-5 mx-auto mw-200 login-wrapper">
		 <form lass="login-wrapper" action="#" method="post" name="">
		 <div class="form-group">
					<label class="form-group">Your Height:</label>
					<input type="number" class="form-control" name="Height" placeholder="" required="" min="100" >
				<br>
		 </div>	
		 <div class="form-group">
				<label > Your Weight:</label>
				<input type="number" class="form-control" name="Weight" placeholder="" required=""  min="30">
				<br> 
		  </div>
		  <div class="form-group"> 
		  <label>Do you have any take any medical allergies:</label>
					<table> 
						<tr>
							<td align="left" height="60">
								
								<label class="radio-inline">
								<input type="radio" name="Radio" value="Yes" required>Yes
								</label>
								<label class="radio-inline">
								<input type="radio" name="Radio" value="No" required checked>No
								</label>
								<br>
								<br>
								<div class="Box1" style="display:none">
								<textarea class="form-control" name="allergies" rows="4" cols="200">
								</textarea>
								</div>	
							</td>
						</tr>
					</table>
					
					<script>
						   $('input[type="radio"]').click(function(){
								if($(this).attr("value")=="No"){
									$(".Box1").hide('slow');
								}
								if($(this).attr("value")=="Yes"){
									$(".Box1").show('slow');

										}        
									});
								$('input[type="radio"]').trigger('click');
						</script>
				</div>
				<div class="form-group">
							
						<label>Do you have any take any medications:</label>
					<table>
						<tr>
							<td align="left" height="45">
							<label class="radio-inline">
								<input type="radio" name="Radio2" value="Yes2" required>Yes
								</label>
								<label class="radio-inline">
								<input type="radio" name="Radio2" value="No2" required checked>No
								</label>
								<div class="Box2" style="display:none">
								<textarea class="form-control" name="medications" rows="4" cols="200">
								
								</textarea>
							</div>
							</td>
						</tr>
					</table>
					<script>
						   $('input[type="radio"]').click(function(){
								if($(this).attr("value")=="No2"){
									$(".Box2").hide('slow');
								}
								if($(this).attr("value")=="Yes2"){
									$(".Box2").show('slow');

										}        
									});
								$('input[type="radio"]').trigger('click');
						</script>
				</div>
				<div class="form-group">
						<label>Please select if you have any of these Illnesses:</label>
					 <div>
						<input type="checkbox" id="Anemia" name="Illnesses[]" value="Anemia" >
						<label for="Anemia">Anemia</label>
					</div>
					<div>
						<input type="checkbox" id="Clotting_Disorder" name="Illnesses[]" value="Clotting Disorder">
						<label for="Clotting_Disorder">Clotting Disorder</label>
					</div>
					<div>
						<input type="checkbox" id="Diabetes" name="Illnesses[]" value="Diabetes">
						<label for="Diabetes">Diabetes</label>
					</div>
					<div>
						<input type="checkbox" id="Kidney_Disease" name="Illnesses[]" value="Kidney Disease">
						<label for="Kidney_Disease">Kidney Disease</label>
					</div>
					<div>
						<input type="checkbox" id="Congestive_Heart_Failure" name="Illnesses[]" value="Congestive Heart Failure">
						<label for="Congestive_Heart_Failure">Congestive Heart Failure</label>
					</div>
				
					<div>
						<input type="checkbox" id="Other" name="Other" value="Other">
						<label for="Other">Other</label>
						<div id="A" style="display:none">
						<textarea class="form-control" name="Illness" rows="4" cols="200" >  </textarea>
						</div>
						<script>
							$('#Other').change(function(){
								if (this.checked) {
									$('#A').fadeIn('slow');
								}
								else {
									$('#A').fadeOut('slow');
								}                   
							});
						</script>
						
					</div>
					</div>
				<button type="submit" name=" Submit" class="btn submit mt-4">Save</button>
				</div>


</div>
</form>
</div>
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
								<span class="logo-sp"></span> Dr. Ahmed Ghoniem Clinic
							</a>
						</h2>
					</div>
					<!-- //logo -->
					<p class="mt-4 text-li">
						Our clinic is specializing in knee and arthroscopic surgeries and knee ligaments only.
						Our mission is to provide best medical services for our Patients.</p>
					<ul class="list-unstyled list-styles mt-lg-5 mt-4">
						<li>
							<p class="text-li"><span class="fa fa-location-arrow mr-2"></span>Dew Tower - Zahraa El Maadi - Thirteenth Sector - Maadi
							Cairo, Egypt</p></p>
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
						<li class="mx-3">
							<a href="https://www.youtube.com/channel/UCWoWydNtA65jsai0wQ0ErrA" class="Youtube">
								<span class="fa fa-youtube mr-2"></span>Youtube</a>
						</li>
						<li>
							<a href="https://instagram.com/drghonam?igshid=q9g4mht43lx1" class="instagram">
								<span class="fa fa-instagram mr-2"></span>Instagram</a>
						</li>
					</ul>
				</div>
			</div>
		</div>
	</div>
	<!-- //copyright -->
	<!-- //footer bottom -->
	<!-- move top icon -->
	<a href="#home" class="move-top text-center"><img alt="Qries" src="http://localhost/SW/lib/images/move-top.png"></a>
	<!-- //move top icon -->

</body>

</html>
