<?php

require_once(__ROOT__ . "controller/Controller.php");
require_once(__ROOT__ . "controller/StaffController.php");

date_default_timezone_set('Africa/Cairo');// 
$currentTime = date( 'd-m-Y h:i:s A', time () );

class AdminController extends Controller {
    
	public function insert() {
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

		$this->model->insertStaff($SSN,$CID,$username,$FirstName,$MiddleName,$LastName,$gender,
                         $mobile,$email,$password,$User_type_id,$BirthDay,$BirthMonth
                          ,$BirthYear,$languages,$education);
	}

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
    public function deletestaff(){
        
    
		$this->model->deleteStaff();
	}
    public function insertpatient() {
	
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
public function editpatient() {
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

public function deletepatient(){
        
    
		$this->model->deletepatient();
	}
    
    public function changepass(){
if(isset($_POST['submit']))
 {
$sql=mysqli_query($con,"SELECT pass FROM  staff where password='".$_POST['pass']."' && username='".$_SESSION['login']."'");
$num=mysqli_fetch_array($sql);
if($num>0)
{
 $con=mysqli_query($con,"update staff set password='".$_POST['pass']."', updationDate='$currentTime' where username='".$_SESSION['login']."'");
$_SESSION['msg1']="Password Changed Successfully !!";
}
else
{
$_SESSION['msg1']="Old Password not match !!";
}
}     
    }
	
 
function chekmail()
{
require_once("include/config.php");
if(!empty($_POST["emailid"])) {
	$email= $_POST["emailid"];
	
		$result =mysqli_query($con,"SELECT docEmail FROM doctors WHERE docEmail='$email'");
		$count=mysqli_num_rows($result);
if($count>0)
{
echo "<span style='color:red'> Email already exists .</span>";
 echo "<script>$('#submit').prop('disabled',true);</script>";
} else{
	
	echo "<span style='color:green'> Email available for Registration .</span>";
 echo "<script>$('#submit').prop('disabled',false);</script>";
}
}
}
}


?>

    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
