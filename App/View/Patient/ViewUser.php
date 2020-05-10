
<?php
require_once(__ROOT__ . "View/Patient/View.php");
class ViewUser extends View{	
	public function output(){

		$str1="";
		$str1.="    <nav class='navbar navbar-expand navbar-light bg-white topbar mb-4 static-top shadow'>


		<!-- Topbar Navbar -->
		<ul class='navbar-nav ml-auto'>

		  <!-- Nav Item - Search Dropdown (Visible Only XS) -->
		  <li class='nav-item dropdown no-arrow d-sm-none'>
			<a class='nav-link dropdown-toggle' href='#' id='searchDropdown' role='button' data-toggle='dropdown' aria-haspopup='true' aria-expanded='false'>
			  <i class='fas fa-search fa-fw'></i>
			</a>
			<!-- Dropdown - Messages -->
			<div class='dropdown-menu dropdown-menu-right p-3 shadow animated--grow-in' aria-labelledby='searchDropdown'>
			  <form class='form-inline mr-auto w-100 navbar-search'>
				<div class='input-group'>
				  <input type='text' class='form-control bg-light border-0 small' placeholder='Search for...' aria-label='Search' aria-describedby='basic-addon2'>
				  <div class='input-group-append'>
					<button class='btn btn-primary' type='button'>
					  <i class='fas fa-search fa-sm'></i>
					</button>
				  </div>
				</div>
			  </form>
			</div>
		  </li>";

		  $str1.="     <!-- Nav Item - Alerts -->
		  <li class='nav-item dropdown no-arrow mx-1'>
			<a class='nav-link dropdown-toggle' href='#' id='alertsDropdown' role='button' data-toggle='dropdown' aria-haspopup='true' aria-expanded='false'>
			  <i class='fas fa-bell fa-fw'></i>
			  <!-- Counter - Alerts -->
			  <span class='badge badge-danger badge-counter'>3+</span>
			</a>
			<!-- Dropdown - Alerts -->
			<div class='dropdown-list dropdown-menu dropdown-menu-right shadow animated--grow-in' aria-labelledby='alertsDropdown'>
			  <h6 class='dropdown-header'>
				Alerts Center
			  </h6>

			  <a class='dropdown-item text-center small text-gray-500' href='#'>Show All Alerts</a>
			</div>
		  </li>

		  <!-- Nav Item - Messages -->
		  <li class='nav-item dropdown no-arrow mx-1'>
			<a class='nav-link dropdown-toggle' href='#' id='messagesDropdown' role='button' data-toggle='dropdown' aria-haspopup='true' aria-expanded='false'>
			  <i class='fas fa-envelope fa-fw'></i>
			  <!-- Counter - Messages -->
			  <span class='badge badge-danger badge-counter'>7</span>
			</a>
			<!-- Dropdown - Messages -->
			<div class='dropdown-list dropdown-menu dropdown-menu-right shadow animated--grow-in' aria-labelledby='messagesDropdown'>
			  <h6 class='dropdown-header'>
				Message Center
			  </h6>

			  <a class='dropdown-item text-center small text-gray-500' href='#'>Read More Messages</a>
			</div>
		  </li>

		  <div class='topbar-divider d-none d-sm-block'></div>
		  <!-- Nav Item - User Information -->
		  <li class='nav-item dropdown no-arrow'>";
			$str1.="<span class='mr-1 d-none d-sm-inline text-gray-400 small'>".$this->model->getUname()."</span>";
			$str1.="  <img class='img-profile rounded-circle' width='50' height='50' src='http://localhost/SW/lib/images/user1.png' >
			</a>
			</div>
		  </li>

		</ul>

	  </nav>";

	
	return $str1;
}
public function topnav()
{
	$str="";
	$str.="
	<div class='main-top'>
	    <div class='container'>
		   <div class='header d-md-flex justify-content-between align-items-center py-3'>
			<!-- logo -->
			<div id='logo'>
				<h1>
					<a href='index.html'>
						<span class='fa fa-user-md mr-2'></span>
						<span class='logo-sp'></span>Dr. Ahmed Clinic
					</a>
				</h1>
			</div>
			<div class='nav_w3ls'>
				<nav>
					<label for='drop' class='toggle'>Menu</label>
					<input type='checkbox' id='drop' />
					<ul class='menu'>
					   <li><a href='http://localhost/SW/Public/Profile.php'>Profile</a></li>
						<li><a href='http://localhost/SW/Public/Patient.php'>Home</a></li>
						<li class='mx-lg-4 mx-md-3 my-md-0 my-2'><a href='about.html'>About Us</a></li>
						<li><a href='gallery.html'>Gallery </a></li>
						<li class='mx-lg-4 mx-md-3 my-md-0 my-2'>
							<label for='drop-2' class='toggle toogle-2'>Services <span class='fa fa-angle-down' aria-hidden='true'></span>
							</label>
							<a href='#' class='active'>Services <span class='fa fa-angle-down' aria-hidden='true'></span></a>
							<input type='checkbox' id='drop-2' />
							<ul>
								<li><a href='PatientHistory.php' class='drop-text'>Medical History</a></li>
								<li><a href='Report.html' class='drop-text active'>Reports </a></li>
								<li><a href='Operation.html' class='drop-text'>Operations</a></li>
								<li><a href='Exercise.html' class='drop-text'>Exercise</a></li>
							</ul>
						</li>
						<li class='mx-lg-4 mx-md-3 my-md-0 my-1'><a href='Booking2.html'>Booking</a></li>
					  <li class='mx-lg-4 mx-md-3 my-md-0 my-2'><a href='contact.html'>Contact us</a></li>


					</ul>
				</nav>
			</div>
		</div>
	</div>
</div>
	";
	return $str;

}
function loginForm(){
	$str=	'<section class="logins py-5">
	<div class="container py-xl-5 py-lg-3">
		<div class="title-section mb-md-5 mb-4">
			<h6 class="w3ls-title-sub">Easy to Login</h6>
			<h3 class="w3ls-title text-uppercase text-dark font-weight-bold">Login Now</h3>
		</div>
		<div class="login px-sm-4 mx-auto mw-100 login-wrapper">
			<form class="login-wrapper" action="login.php" method="post">
				<div class="form-group">
					<label>ID</label>
					<input type="text" class="form-control" name="id" placeholder="Enter your ID or Username" required="">
			   </div>
				<div class="form-group">
					<label>Password</label>
					<input type="password" class="form-control" name="password" placeholder="Enter your Password" required="">
				</div>
				<button type="submit" name= "login" class="btn submit mt-4">Login</button>
				
				</p>
				 </form>
		</div>
	</div>
</section>';
	return $str;
}
 function signupForm(){
$str='
	<section class="logins py-5">
		<div class="container">

			<form action="register.php?action=insert" method="post" name="" >
				<div class="form-group ">
                <label>UserName:</label>
				  <input class="form-control " type="text" name="Uname" onkeyup=".$this->model->getUname()" required="" />
				 


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

	</section>';
  return $str;
}
 function Profile(){
	$str='';
	$str.='
	<div class="container">
		<form action="Profile.php?action=edit" method="post" name="" >
			<div class="form-group ">
			<label>UserName:</label>';
	$str.='<input class="form-control " type="text" name="Uname"   required="" value="'.$this->model->getUname().'"/>
			 
       <label>First Name:</label>
			<input class="form-control " type="text" name="Fname" required="" value="'.$this->model->getFname().'"/>
			<label>Middle Name:</label>
			<input class="form-control" type="text" name="Mname" required="" value="'.$this->model->getMname().'"/>
			<label>Last Name:</label>
			 <input class="form-control" type="text" name="Lname" required="" value="'.$this->model->getLname().'"/> 
			<label>Email:</label>
			<input class="form-control" type="email" name="email"  value="'.$this->model->getemail().'"/>


			<label>Password:</label>
			<input class="form-control" type="password" name="password" required="" />


			<label>Mobile:</label>
			<input class="form-control" type="text" name="mobile" required=""  value="'.$this->model->getmobile().'"/> 


				<label for="gender">Gender</label>
				<select class="form-control input-sm" name="gender" >

				<option value="'.$this->model->getgender().'" >'.$this->model->getgender().'</option>';
				$str.='		<option value="Male ">Male</option>
				<option value="Female ">Female</option>

						</select>

	<label for="address">Birthdate </label>
		 <input type="text" class="form-control " name="Day" placeholder="Day"/ value="'.$this->model->getDay().'"/> ';

	$str.=' <label for="Month">Month</label>
	  <select class="form-control " name="Month"  />';
	  $str.=' <option value="'.$this->model->getMonth().'">'.$this->model->getMonth(). '</option>';
	  $str.='             <option value=""> Month</option>
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

		<input type="text" class="form-control " name="Year" placeholder="Year" value="'.$this->model->getYear().'"/>';

		$str.='  <button type="submit" name="submit" class="btn btn-primary">Edit</button>
		</div>
		</form>

	</div>

';
	return $str;
}


}


?>
