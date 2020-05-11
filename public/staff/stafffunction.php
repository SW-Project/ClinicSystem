<?php



public function check_login($id, $password){

                
                $query = "SELECT * 	FROM staff WHERE UID='".$id."' AND pass= '".$password."'";
                $result = mysqli_query($this->db,$query);
                $user_data = mysqli_fetch_array($result);
                $count_row = $result->num_rows;

                if($count_row == 1){
                  $_SESSION['login'] = true;
                  $_SESSION['User'] = $_POST['id'];
                   return true;

                }
                else{
                   return false;
                }

    
    public function get_session(){
	        return $_SESSION['login'];
	    }

        



function addstaff()
{

if(isset($_POST['submit']))
{
$SSN=$_REQUEST['SSN'];
      $CID= $_POST['CID'];
      $username=$_POST['username']; 
      $FirstName = $_POST['Fname'];
	  $MiddleName=$_POST['Mname'];
      $LastName = $_POST['Lname'];
      $gender = $_POST['gender'];
      $mobile = $_POST['mobile'];
	  $email=$_POST['email'];
      $password = $_POST['pass'];
      $encrypted=md5($password);
      $User_type_id = $_POST['User_type_id'];
      $BirthDay = $_POST['BirthDay'];
	  $BirthMonth= $_POST['BirthMonth'];
      $BirthYear = $_POST['BirthYear'];
      $languages = $_POST['languages'];
      $education = $_POST['education'];

 
$sql=mysqli_query($con,$sql ="INSERT INTO staff (SSN,CID,username,Fname,Mname,
      Lname,gender,
     mobile,email,pass,User_type_id
     ,BirthDay,BirthMonth
    ,BirthYear=,lanuages,education) VALUES ('$SSN','$CID','$username','$FirstName','$MiddleName',
      '$LastName','$gender','$mobile','$email','$password','$User_type_id'
     ,'$BirthDay','$BirthMonth'
    ,'$BirthYear','$languages','$education')");
if($sql)
{
echo "<script>alert('Doctor info added Successfully');</script>";
echo "<script>window.location.href ='manage-doctors.php'</script>";

}
}
    
}
}
