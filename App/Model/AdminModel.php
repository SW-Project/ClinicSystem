<?php
require_once(__ROOT__ . "model/Model.php");
require_once(__ROOT__ . "model/UserModel.php");
require_once(__ROOT__."model/StaffModel.php");

class AdminModel extends Model {


function readUser($SID){
    $sql = "SELECT * FROM staff where SID=".$SID;
    $db = $this->connect();
    $result = $db->query($sql);
    if ($result->num_rows == 1){
        $row = $db->fetchRow();
      $this->SSN=$row["SSN"];
      $this->CID= $row["CID"];
      $this->username=$row["username"];
      $_SESSION["username"]=$row["username"];
      $this->FirstName = $row["Fname"];
	  $this->MiddleName=$row["Mname"];
      $this->LastName = $row["Lname"];
      $this->gender = $row["gender"];
      $this->mobile = $row["mobile"];
	  $this->email=$row["email"];
      $this->password = $row["pass"];
      $this->User_type_id = $row["User_type_id"];
      $this->BirthDay = $row["BirthDay"];
	  $this->BirthMonth= $row["BirthMonth"];
      $this->BirthYear = $row["BirthYear"];
      $this->languages = $row["languages"];
      $this->education = $row["education"];
        
    }
    else {
      $this->SSN="";
      $this->CID="";
      $this->username="";
      $this->FirstName = "";
	  $this->MiddleName="";
      $this->LastName = "";
      $this->gender = "";
      $this->mobile = "";
	  $this->email="";
      $this->password ="";
      $this->User_type_id ="";
      $this->BirthDay = "";
	  $this->BirthMonth= "";
      $this->BirthYear = "";
      $this->languages ="";
      $this->education = "";
    }
  }
   
function insertStaff($SSN,$CID,$username,$FirstName,$MiddleName,$LastName,$gender,
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

    function editUser($SSN,$CID,$username,$FirstName,$MiddleName,$LastName,$gender,
                         $mobile,$email,$password,$User_type_id,$BirthDay,$BirthMonth
                          ,$BirthYear,$languages,$education){
      $sql = "update staff set SSN='$SSN',CID='$CID',username='$username',Fname='$FirstName',Mname='$MiddleName',
      Lname='$LastName',gender='$gender',
     mobile='$mobile',email='$email',pass='$password',User_type_id='$User_type_id'
     ,BirthDay='$BirthDay',BirthMonth='$BirthMonth'
    ,BirthYear='$BirthYear',lanuages='$languages',education='$education' where SID=$this->SID;";
        if($this->db->query($sql) === true){
            echo "updated successfully.";
            $this->readUser($this->SID);
        } else{
            echo "ERROR: Could not able to execute $sql. " . $conn->error;
        }

  }
  
  function deleteStaff(){
	  $sql="delete from staff where SID=$this->SID;";
	  if($this->db->query($sql) === true){
            echo "deletet successfully.";
        } else{
            echo "ERROR: Could not able to execute $sql. " . $conn->error;
        }
	}

	

	

	function readPatients(){
		$sql = "SELECT * FROM Patients";

		$result = $this->db->query($sql);
		if ($result->num_rows > 0){
			return $result;
		}
		else {
			return false;
		}
	}

    function deletepatient(){
	  $sql="delete from patients where PID=$this->PID;";
	  if($this->db->query($sql) === true){
            echo "deletet successfully.";
        } else{
            echo "ERROR: Could not able to execute $sql. " . $conn->error;
        }
	}
    
    ?>
    