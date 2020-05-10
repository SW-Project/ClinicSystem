<?php

require_once(__ROOT__ . "controller/Controller.php");
class PatientsController extends Controller{


   public function insert() {
	
        $Uname = $_REQUEST['Uname'];
        $Fname = $_REQUEST['Fname'];
  		$Mname = $_REQUEST['Mname'];
  		$Lname = $_REQUEST['Lname'];
  		$email = $_REQUEST['email'];
		$password = $_REQUEST['password'];
		$encrypted=md5($password);
        $mobile = $_REQUEST['mobile'];
  		$gender = $_REQUEST['gender'];
  		$Day = $_REQUEST['Day'];
  		$Month = $_REQUEST['Month'];
  		$Year = $_REQUEST['Year'];

   $this->model-> RegPatients($Fname,$Mname,$Lname,$Uname,$gender,$mobile,$email,$encrypted,$Day,$Month,$Year);

}
public function edit() {
	    $Uname = $_REQUEST['Uname'];
        $Fname = $_REQUEST['Fname'];
  		$Mname = $_REQUEST['Mname'];
  		$Lname = $_REQUEST['Lname'];
  		$email = $_REQUEST['email'];
		$password = $_REQUEST['password'];
		$encrypted=md5($password);
        $mobile = $_REQUEST['mobile'];
  		$gender = $_REQUEST['gender'];
  		$Day = $_REQUEST['Day'];
  		$Month = $_REQUEST['Month'];
  		$Year = $_REQUEST['Year'];

	$this->model->editPatient($Fname,$Mname,$Lname,$Uname,$gender,$mobile,$email,$encrypted,$Day,$Month,$Year);
}


}


?>
