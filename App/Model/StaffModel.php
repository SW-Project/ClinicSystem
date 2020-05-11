<?php
require_once(__ROOT__ . "model/Model.php");
require_once(__ROOT__ . "model/UserModel.php");
require_once("include/Config.php");

class StaffModel extends Model {
	private $staff;
	function __construct() {
		$this->fillArray();
	}

	function fillArray() {
		$this->staff = array();
		$this->db = $this->connect();
		$result = $this->readUsers();
		while ($row = $result->fetch_assoc()) {
			array_push($this->staff, new UserModel($row["SID"],$row["SSN"],$row["CID"],$row["username"],$row["Fname"],$row["Mname"]
       ,$row["Lname"],$row["gender"],$row["mobile"],$row["email"],$row["pass"],$row["User_type_id"]
        ,$row["BirthDay"],$row["BirthMonth"],$row["BirthYear"],$row["languages"]
    $row["education"]));
		}
	}

	function getStaff() {
		return $this->staff;
	}

	function readStaff(){
		$sql = "SELECT * FROM staff";

		$result = $this->db->query($sql);
		if ($result->num_rows > 0){
			return $result;
		}
		else {
			return false;
		}
	}

	function regStaff($SSN,$CID,$username,$FirstName,$MiddleName,$LastName,$gender,
                         $mobile,$email,$password,$User_type_id,$BirthDay,$BirthMonth
                          ,$BirthYear,$languages,$education){
		$sql = "INSERT INTO staff (SSN,CID,username,Fname,Mname,
      Lname,gender,
     mobile,email,pass,User_type_id
     ,BirthDay,BirthMonth
    ,BirthYear=,lanuages,education) VALUES ('$SSN','$CID','$username','$FirstName','$MiddleName',
      '$LastName','$gender','$mobile','$email','$password','$User_type_id'
     ,'$BirthDay','$BirthMonth'
    ,'$BirthYear','$languages','$education')";
		if($this->db->query($sql) === true){
			echo "Records inserted successfully.";
			$this->fillArray();
		} 
		else{
			echo "ERROR: Could not able to execute $sql. " . $conn->error;
		}
	}
    
function checkemail()
{

if(!empty($_POST["email"])) {
	$email= $_POST["email"];
	
		$result =mysqli_query($con,"SELECT email FROM staff WHERE email='$email'");
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

