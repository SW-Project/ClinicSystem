 <html>
 <head> 
<link href="http://localhost/SW/lib/js/bootbox.all">
<link href="http://localhost/SW/lib/js/bootbox">
<link href="http://localhost/SW/lib/js/bootbox.all.min">
</head>

<?php
require_once(__ROOT__ . "model/Model.php");
class Admin extends Model{
    private $SID;
    private $SSN;
  	private $CID;
    private $username;
    private $Fname;
    private $Mname;
    private $Lname;
    private $gender;
    private $mobile;
    private $email;
    private $pass;
    private $User_type_id;
    private $message;
    private $BirthDay;
    private $languages;
    private $education;
    private $Joined_date;
    
    function __construct($SID, $SSN="",$CID="",$username="", $Fname="", $Mname="", $Lname="", $gender="", $mobile="", $email="", $pass="",
     $User_type_id="",  $message="",$BirthDay="", $languages="", $education="", $Joined_date=""){
      $this->$SID = $SID;
 	    $this->db = $this->connect();

    if(""===$username){
       $this->readUser($SID);
     }else{
 	     $this->$SSN=$SSN;
       $this->$CID = $CID;
       $this->$username = $username;
       $this->$Fname = $Fname;
       $this->$Mname = $Mname;
       $this->$Lname = $Lname;
       $this->$gender = $gender;
       $this->$mobile = $mobile;
       $this->$email = $email;
       $this->$pass = $pass;
       $this->$User_type_id = $User_type_id;
       $this->$message = $message;
       $this->$BirthDay = $BirthDay;
       $this->$languages = $languages;
       $this->$education = $education;
       $this->$Joined_date = $Joined_date;

     }
    }

   function getSSN() {
    return $this->SSN;
  }
  function setSSN($SSN) {
    return $this->SSN = $SSN;
  }
   function getCID() {
    return $this->CID;
  }
  function setCID($CID) {
    return $this->CID = $CID;
  }

   function getusername() {
    return $this->username;
  }
  function setusername($username) {
    return $this->username = $username;
  }
  function getFname() {
   return $this->Fname;
  }
  function setFname($Fname) {
   return $this->Fname = $Fname;
  }
  function getMname() {
    return $this->Mname;
    }
    function setMname($Mname) {
    return $this->Mname = $Mname;
    }
  function getLname() {
  return $this->Lname;
  }
  function setLname($Lname) {
  return $this->Lname = $Lname;
  }

  function getGender() {
  return $this->gender;
  }
  function setGender($gender) {
  return $this->gender = $gender;
  }
   function getmobile() {
    return $this->mobile;
  }
  function setmobile($mobile) {
    return $this->mobile = $mobile;
  }
  function getemail() {
   return $this->email;
 }
 function setemail($email) {
   return $this->email = $email;
 }
   
  function getPassword() {
    return $this->pass;
  }
  function setPassword($pass) {
    return $this->pass = $pass;
  }
  function getUserTypeID() {
    return $this->User_type_id;
  }
  function setUserTypeID($User_type_id) {
    return $this->User_type_id = $User_type_id;
  }

  function getmessage() {
    return $this->message;
  }
  function setmessage($message) {
    return $this->message = $message;
  }
  
  function getDay() {
    return $this->BirthDay;
  }
  function setDay($BirthDay) {
    return $this->BirthDay = $BirthDay;
  }

   function getLang() {
    return $this->languages;
  }
  function setLang($languages) {
    return $this->languages = $languages;
  }
   function geteducation() {
    return $this->education;
  }
  function seteducation($education) {
    return $this->education = $education;
  }

  function getJoinedDate() {
    return $this->Joined_date;
  }
  function setJoinedDate($Joined_date) {
    return $this->Joined_date = $Joined_date;
  }
  function getID() {
    return $this->SID;
  }

  function readUser($SID){
      $sql ="SELECT * FROM staff where SID=".$SID;
      $db = $this->connect();
      $result = $db->query($sql);
  
      if ($result->num_rows == 1){
          $row = $db->fetchRow();
          $this->SID = $row["SID"];
          $this->SSN = $row["SSN"];
          $this->CID = $row["CID"];
          $this->Fname = $row["Fname"];
          $this->Mname = $row["Mname"];
          $this->Lname = $row["Lname"];
          $this->gender=$row["gender"];
          $this->mobile=$row["mobile"];
          $this->email=$row["email"];
          $this->pass=$row["pass"];
          $this->User_type_id = $row["User_type_id"];
          $this->message = $row["message"];
  	 	    $this->BirthDay = $row["BirthDay"];
          $this->languages = $row["languages"];
          $this->education = $row["education"];
          $this->Joined_date = $row["Joined_date"];
      }
      else {
      	  $this->SSN = "";
      	  $this->CID = "";
          $this->Fname = "";
          $this->Mname = "";
          $this->Lname = "";
          $this->gender = "";
          $this->mobile = "";
          $this->email = "";
          $this->pass = "";
          $this->User_type_id= "";
          $this->message  = "";
  		    $this->BirthDay="";
  		    $this->languages = "";
  		    $this->education = "";
  		    $this->Joined_date = "";
      }
    }

    function deleteStaff(){

    $sql="DELETE from staff where SID='$this->SID'";
    if($this->db->query($sql) === true){
             echo '<div class="alert alert-danger" role="alert">';
             echo '<a href="StaffView.php" class="close" data-dismiss="alert" aria-label="close">&times;</a>';
             echo "<strong>Deleted Successfully!</strong>";
             echo '</div>';
        } else{
            echo "ERROR: Could not able to execute $sql. " . $conn->error;
        }
  }


  function editStaff($email, $pass, $mobile, $clinic){
      $sql = "UPDATE staff set email='$email',pass='$pass', mobile='$mobile', CID='$clinic' where SID=$this->SID;";
        if($this->db->query($sql) === true){
             echo '<div class="alert alert-success" role="alert">';
             echo '<a href="StaffView.php" class="close" data-dismiss="alert" aria-label="close">&times;</a>';
             echo "<strong>Edited successfully!</strong>";
             echo '</div>';
            $this->readUser($this->SID);
        } else{
            echo "ERROR: Could not able to execute $sql. " . $conn->error;
        }
  }










}







?>
</html>