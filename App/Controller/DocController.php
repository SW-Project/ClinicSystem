<?php

require_once(__ROOT__ . "controller/Controller.php");
require_once(__ROOT__ . "controller/StaffController.php");

class DocController extends Controller {
    
    
   public function edit() {
      $SSN=$_REQUEST['SSN'];
      $CID= $_REQUEST['CID'];
      $username=$_REQUEST['username']; 
      $FirstName = $_REQUEST['Fname'];
	  $MiddleName=$_REQUEST['Mname'];
      $LastName = $_REQUEST['Lname'];
      $gender = $_REQUEST['gender'];
      $mobile = $_REQUEST['mobile'];
	  $email=$_REQUEST['email'];
      $password = $_REQUEST['pass'];
      $encrypted=md5($password);
      $User_type_id = $_REQUEST['User_type_id'];
      $BirthDay = $_REQUEST['BirthDay'];
	  $BirthMonth= $_REQUEST['BirthMonth'];
      $BirthYear = $_REQUEST['BirthYear'];
      $languages = $_REQUEST['languages'];
      $education = $_REQUEST['education'];

		$this->model->editUser($SSN,$CID,$username,$FirstName,$MiddleName,$LastName,$gender,
                         $mobile,$email,$password,$User_type_id,$BirthDay,$BirthMonth
                          ,$BirthYear,$languages,$education);
	}
     
    
    
    
    
    
    
}
?>