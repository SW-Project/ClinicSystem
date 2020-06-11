<!--
Author: W3layouts
Author URL: http://w3layouts.com
License: Creative Commons Attribution 3.0 Unported
License URL: http://creativecommons.org/licenses/by/3.0/
-->
<?php

define('__ROOT__', "../app/App/");
require_once(__ROOT__ . "model/PatientsModel.php");
require_once(__ROOT__ . "controller/PatientController.php");
require_once(__ROOT__ . "View/Patient/ViewUser.php");

session_start();
$model = new Patient($_SESSION["PID"]);
$controller = new PatientsController($model);
$view = new ViewUser($controller, $model);



?>
<!DOCTYPE html>
<html lang="zxx">

<head>
	<title>Dr. Ahmed Ghoneim</title>
	<!-- Meta tag Keywords -->
<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.1/css/all.css" integrity="sha384-50oBUHEmvpQ+1lW4y57PTFmhCaXp0ML5d60M1M7uH2+nqUivzIebhndOJK28anvf" crossorigin="anonymous">
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
	<link rel="stylesheet" href="http://localhost/SW/lib/css/bootstrap.css">
	<!-- Bootstrap-Core-CSS -->
	<link href="http://localhost/SW/lib/css/css_slider.css" type="text/css" rel="stylesheet" media="all">
	<!-- banner slider -->
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


<body>
	<!-- main -->
	<div id="home">
		<!-- top header -->
		<header>
		<?php  echo $view->output();?>
		</header>
		<!-- //top header -->

		<!-- second header -->
		<div class="main-top">
			
		<?php 
		 echo $view->topnav();?>
		</div>
		<!-- //second header -->

		<!-- banner -->
		<div class="banner_w3lspvt">
			<div class="csslider infinity" id="slider1">
				<input type="radio" name="slides" checked="checked" id="slides_1" />
				<input type="radio" name="slides" id="slides_2" />
				<input type="radio" name="slides" id="slides_3" />
				<ul class="banner_slide_bg">
					<li class="banner-top1">
						<div class="container">
							<div class="banner-info_agile_w3ls text-center mx-auto">

							</div>
						</div>
					</li>
					<li class="banner-top2">
						<div class="container">
							<div class="banner-info_agile_w3ls text-center mx-auto">


							</div>
						</div>
					</li>
					<li class="banner-top3">
						<div class="container">
							<div class="banner-info_agile_w3ls text-center mx-auto">

							</div>
						</div>
					</li>
				</ul>
				<div class="navigation">
					<div>
						<label for="slides_1"></label>
						<label for="slides_2"></label>
						<label for="slides_3"></label>
					</div>
				</div>
			</div>
		</div>
		<!-- //banner -->
	</div>
	<!-- //main -->

	<!-- banner bottom -->
	<div class="section-2">
		<div class="container-fluid">
			<div class="row slide">
				<div class="col-xl-4 triple-sec p-5">
					<h5 class="text-wh font-weight-bold">We have something to be proud of</h5>
					<ul class="list-unstyled text-wh mt-4">
						<li class="clearfix py-3">
							<h4 class="text-wh font-weight-bold">6250</h4>
							<p class="text-li">Happy Patients</p>
						</li>
						<li class="style-bottom-w3 mt-3">
							<h4 class="text-wh font-weight-bold">20</h4>
							<p class="text-li">Years of experience</p>
						</li>
					</ul>
				</div>
				<div class="col-xl-4 triple-sec p-5">
					<h5 class="text-wh font-weight-bold">Opening Hours</h5>
					<ul class="list-unstyled text-wh mt-4">
						<li class="clearfix py-3">
							<span class="float-left"> Monday - Thursday </span>
							<div class="value float-right"> 7:00 PM - 11:00 PM </div>
						</li>
						<li class="clearfix border-top border-bottom py-3">
							<span class="float-left"> Saturday </span>
							<div class="value float-right"> 7:00 PM - 11:00 PM </div>
						</li>
						<li class="clearfix py-3">
							<span class="float-left"> Sunday </span>
							<div class="value float-right"> 7:00 PM - 11:00 PM </div>
						</li>
					</ul>
				</div>
				<div class="col-xl-4 triple-sec p-5 text-center">
					<p class="text-uppercase text-li mt-xl-5 mt-4 pt-xl-2">our</p>
					<h4 class="down-list-w3 text-wh font-weight-bold mt-1 mb-4"> Patients Stories</h4>
					<a href="/Applications/XAMPP/xamppfiles/htdocs/web/gallery.php" class="some-small-btn bg-wh btn text-bl font-weight-bold mb-xl-0 mb-4">Check It</a>
				</div>
			</div>
		</div>
	</div>
	<!-- //banner bottom -->

	<!-- why -->
	<section class="blog_w3ls py-5" id="why">
		<div class="container py-xl-5 py-lg-3">
			<div class="title-section mb-md-5 mb-4">
				<h6 class="w3ls-title-sub">About Us</h6>
				<h3 class="w3ls-title text-uppercase text-bl font-weight-bold">Why Choose Us</h3>
			</div>
			<div class="row">
				<!-- blog grid -->
				<div class="col-lg-4 col-md-6">
					<div class="card border-0 med-blog">
						<div class="card-header p-0">
							<img class="card-img-bottom" src="http://localhost/SW/lib/images/Dr.jpg" alt="image" width="300px" height ="300px">
						</div>
						<div class="card-body border border-top-0">
							<div class="mb-3">
								<h5 class="blog-title card-title m-0">Our trust worthy doctor</h5>

							</div>

							<a href="about.html" class="btn blog-btn mt-4">Read more</a>
						</div>
					</div>
				</div>
				<!-- //blog grid -->
				<!-- blog grid -->
				<div class="col-lg-4 col-md-6 mt-md-0 mt-5">
					<div class="card border-0 med-blog">
						<div class="card-header p-0">
							<img class="card-img-bottom" src="http://localhost/SW/lib/images/blog3.jpg" alt="image" width="300px" height ="300px">
						</div>
						<div class="card-body border border-top-0">
							<div class="mb-3">
								<h5 class="blog-title card-title m-0">Our Fellow Up System</h5>

							</div>

							<a href="single.html" class="btn blog-btn mt-4">Read more</a>
						</div>
					</div>
				</div>
				<!-- //blog grid -->
				<!-- blog grid -->
				<div class="col-lg-4 col-md-6 mt-lg-0 mt-5">
					<div class="card border-0 med-blog">
						<div class="card-header p-0">
							<img class="card-img-bottom" src="http://localhost/SW/lib/images/blog2.jpg" alt="image" width="300px" height ="300px">
						</div>
						<div class="card-body border border-top-0">
							<div class="mb-3">
								<h5 class="blog-title card-title m-0">Operations</h5>

							</div>

							<a href="single.html" class="btn blog-btn mt-4">Read more</a>
						</div>
					</div>
				</div>
				<!-- //blog grid -->
			</div>
		</div>
	</section>
	<!-- //why -->


	<!-- services -->
	<section class="services-w3ls py-5" id="services">
		<div class="container py-xl-5 py-lg-3">
			<div class="row">
				<div class="col-lg-6 mt-lg-0 mt-5">
					<div class="d-flex services-box">
						<span class="fa fa-ambulance" aria-hidden="true "  style="background-color:#3371FF" ></span>
						<!-- .Icon ends here -->
						<div class="service-content ml-4">
							<h3 class="text-wh font-weight-bold">Emergency</h3>
							<p class="my-3 text-li">
								In case of Emergency you can contact with us, we can help you.
							</p>

						</div>
						<!-- .Service-content ends here -->
					</div>
					<div class="d-flex services-box mt-5">
						<span class="fa fa-hospital-o" aria-hidden="true" style="background-color:#3371FF"></span>
						<!-- .Icon ends here -->
						<div class="service-content ml-4">
							<h3 class="text-wh font-weight-bold">Operations</h3>
							<p class="my-3 text-li">
								Our operation techniques and fellow ups after it provide for you comfortable experience.
							</p>

						</div>
						<!-- .Service-content ends here -->
					</div>
				</div>

				<div class="col-lg-6 mt-lg-0 mt-5">
					<div class="d-flex services-box">
						<span class="fa fa-comments" aria-hidden="true" style="background-color:#3371FF"></span>
						<!-- .Icon ends here -->
						<div class="service-content ml-4">
							<h3 class="text-wh font-weight-bold">Care Advice</h3>
							<p class="my-3 text-li">
								We reply on any of your questions through our chatting system.
							</p>

						</div>
						<!-- .Service-content ends here -->
					</div>
					<div class="d-flex services-box mt-5">
						<span class="fab fa-medrt" aria-hidden="true" style="background-color:#3371FF"></span>
						<!-- .Icon ends here -->
						<div class="service-content ml-4">
							<h3 class="text-wh font-weight-bold">Medical Care</h3>
							<p class="my-3 text-li">
								Medical Care and Medical solutions for any case.
							</p>

						</div>
						<!-- .Service-content ends here -->
					</div>
				</div>
			</div>
		</div>
	</section>
	<!-- //services -->

	<!-- blog -->
	<section class="blog_w3ls py-5" id="blog">
		<div class="container py-xl-5 py-lg-3">
			<div class="title-section mb-md-5 mb-4">
				<h6 class="w3ls-title-sub">Latest Posts</h6>
				<h3 class="w3ls-title text-uppercase text-bl font-weight-bold">Our Blog</h3>
			</div>
			<div class="row">
				<!-- blog grid -->
				<div class="col-lg-4 col-md-6">
					<div class="card border-0 med-blog">
						<div class="card-header p-0">
							<a href="single.html">
								<img class="card-img-bottom" src="http://localhost/SW/lib/images/bg1.jpg" alt="image">
							</a>
						</div>
						<div class="card-body border border-top-0 pb-5">
							<div class="mb-3">
								<h5 class="blog-title card-title font-weight-bold m-0">
									<a href="gallery.php">We insure about your satisfaction</a>
								</h5>
								<div class="blog_w3icon">
									<span>
										Jan 12, 2020 </span>
								</div>
							</div>
							<p class="mb-4">Since you entered our clinic you are one of our big family.</p>
							<a href="gallery.php" class="blog-btn btn">Read more</a>
						</div>
					</div>
				</div>
				<!-- //blog grid -->
				<!-- blog grid -->
				<div class="col-lg-4 col-md-6 mt-md-0 mt-5">
					<div class="card border-0 med-blog">
						<div class="card-body border border-bottom-0 pb-5">
							<div class="mb-3">
								<h5 class="blog-title card-title font-weight-bold m-0">
									<a href="gallery.php">Exercise regularly</a>
								</h5>
								<div class="blog_w3icon">
									<span>
										Jan 14, 2020</span>
								</div>
							</div>
							<p class="mb-4">Exercises helps fast recovery</p>
							<a href="gallery.php" class="blog-btn btn">Read more</a>
						</div>
						<div class="card-header p-0">
							<a href="gallery.php">
								<img class="card-img-bottom" src="http://localhost/SW/lib/images/train.jpg" alt="image">
							</a>
						</div>
					</div>
				</div>
				<!-- //blog grid -->
				<!-- blog grid -->
				<div class="col-lg-4 col-md-6 mt-lg-0 mt-5">
					<div class="card border-0 med-blog">
						<div class="card-header p-0">
							<a href="gallery.php">
								<img class="card-img-bottom" src="http://localhost/SW/lib/images/patient2.jpg" alt="image">
							</a>
						</div>
						<div class="card-body border border-top-0 pb-5">
							<div class="mb-3">
								<h5 class="blog-title card-title font-weight-bold m-0">
									<a href="gallery.php"></a>
								</h5>
								<div class="blog_w3icon">
									<span>
										Mar 16, 20220 </span>
								</div>
							</div>
							<p class="mb-4"></p>
							<a href="single.html" class="blog-btn btn">Read more</a>
						</div>
					</div>
				</div>
				<!-- //blog grid -->
			</div>
			<div class="row mt-5">
				<!-- blog grid -->
				<div class="col-lg-4 col-md-6">
					<div class="card border-0 med-blog">
						<div class="card-header p-0">
							<a href="single.html">
								<img class="card-img-bottom" src="http://localhost/SW/lib/images/Dr.jpg" alt="image">
							</a>
						</div>
						<div class="card-body border border-top-0 pb-5">
							<div class="mb-3">
								<h5 class="blog-title card-title font-weight-bold m-0">
									<a href="single.html">Doctors's talk</a>
								</h5>
								<div class="blog_w3icon">
									<span>
										Mar 18, 2020 </span>
								</div>
							</div>
							<p class="mb-4">Answer to the most frequent question</p>
							<a href="single.html" class="blog-btn btn">Read more</a>
						</div>
					</div>
				</div>
				<!-- //blog grid -->
				<!-- blog grid -->
				<div class="col-lg-4 col-md-6 mt-md-0 mt-5">
					<div class="card border-0 med-blog">
						<div class="card-body border border-bottom-0 pb-5">
							<div class="mb-3">
								<h5 class="blog-title card-title font-weight-bold m-0">
									<a href="gallery.php">Fellow up system </a>
								</h5>
								<div class="blog_w3icon">
									<span>
										Jan 20, 2020 </span>
								</div>
							</div>
							<p class="mb-4">Recent technology used to help you</p>
							<a href="gallery.php" class="blog-btn btn">Read more</a>
						</div>
						<div class="card-header p-0">
							<a href="gallery.php">
								<img class="card-img-bottom" src="http://localhost/SW/lib/images/blog3.jpg" alt="image">
							</a>
						</div>
					</div>
				</div>
				<!-- //blog grid -->
				<!-- blog grid -->
				<div class="col-lg-4 col-md-6 mt-lg-0 mt-5">
					<div class="card border-0 med-blog">
						<div class="card-header p-0">
							<a href="single.html">
								<img class="card-img-bottom" src="http://localhost/SW/lib/images/team3.jpg" alt="image">
							</a>
						</div>
						<div class="card-body border border-top-0 pb-5">
							<div class="mb-3">
								<h5 class="blog-title card-title font-weight-bold m-0">
									<a href="gallery.php">The assistant</a>
								</h5>
								<div class="blog_w3icon">
									<span>
										Jan 24, 2020 </span>
								</div>
							</div>
							<p class="mb-4">My assistant is here for you</p>
							<a href="single.html" class="blog-btn btn">Read more</a>
						</div>
					</div>
				</div>
				<!-- //blog grid -->
			</div>
		</div>
	</section>
	<!-- //blog -->

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
	<a href="#home" class="move-top text-center"><img alt="Qries" src="http://localhost/SW/lib/images/move-top.png"></a>
	<!-- //move top icon -->

</body>

</html>
