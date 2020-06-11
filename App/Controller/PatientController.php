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
public function insertMed()
{
$Height=$_REQUEST['Height'];
$Weight=$_REQUEST['Weight'];

if(isset($_REQUEST['Radio']))
{
	$check=$_REQUEST['Radio'];
	if($check=='Yes')
	{
	$allergies=$_REQUEST['allergies'];
	}
	else{
		$allergies="None";
	}
}
if(isset($_REQUEST['Radio2']))
{
	$check=$_REQUEST['Radio2'];
	if($check=='Yes2')
	{
	$medications=$_REQUEST['medications'];
	}
	else{
		$medications="None";
	}
}
if(!empty($_REQUEST['Illnesses'])) {
	if (is_array($_REQUEST['Illnesses']) || is_object($_POST['Illnesses']) )
	 {
	$Illnesses= implode(',', $_REQUEST['Illnesses']);
	if(!empty($_REQUEST['Other'])) {
		$value2=$_REQUEST['Illness'];
		$Illnesses=$Illnesses.$value2;
	}
}
}
else
{
	if(!empty($_REQUEST['Other'])) {
		$Illnesses=$_REQUEST['Illness'];
}
}
$this->model->AddMedical($Height,$Weight,$allergies,$medications,$Illnesses);
}
}


?>
