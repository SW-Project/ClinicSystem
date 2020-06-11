<?php
require_once(__ROOT__ . "model/Model.php");
class Patient extends Model {
    private $id;
    private $Uname;
    private $Fname;
    private $Mname;
    private $Lname;
    private $email;
    private $password;
    private $mobile;
    private $gender;
    private $Day;
    private $Month;
    private $Year;
    protected $Height;
    protected $Weight;
    protected $allergies;
    protected $medications;
    protected $Illnesses;
    function __construct($id,$Uname="",$Fname="",$Mname="",$Lname="",$email="",$password="",$mobile="",$gender="",$Day="",$Month="",$Year="") {
      $this->id = $id;
      $this->db = $this->connect();

     if(""===$Uname){
       $this->readUser($id);
     }else{
       $this->$Uname = $Uname;
       $this->$Fname=$Fname;
       $this->$Mname = $Mname;
       $this->$Lname = $Lname;
       $this->$email = $email;
       $this->$password = $password;
       $this->$mobile = $mobile;
       $this->$gender = $gender;
       $this->$Day = $Day;
       $this->$Month = $Month;
       $this->$Year = $Year;

     }
   }
   function getUname() {
    return $this->Uname;
  }
  function setUname($Uname) {
    return $this->Uname = $Uname;
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
  function getemail() {
   return $this->email;
 }
 function setemail($email) {
   return $this->email = $email;
 }
   function getPassword() {
    return $this->password;
  }
  function setPassword($password) {
    return $this->password = $password;
  }

  function getmobile() {
    return $this->mobile;
  }
  function setmobile($mobile) {
    return $this->mobile = $mobile;
  }

  function getgender() {
    return $this->gender;
  }
  function setgender($gender) {
    return $this->gender = $gender;
  }
  function getDay() {
    return $this->Day;
  }
  function setDay($Day) {
    return $this->Day = $Day;
  }
  function getMonth() {
    return $this->Month;
  }
  function setMonth($Month) {
    return $this->Month = $Month;
  }

  function getYear() {
    return $this->Year;
  }
  function setYear($Year) {
    return $this->Year = $Year;
  }

  function getID() {
    return $this->id;
  }
  function getHeight() {
    return $this->Height;
  }
  function setHeight($Height) {
    return $this->Height = $Height;
  }

  function getWeight() {
    return $this->Weight;
  }
  function setWeight($Weight) {
    return $this->Weight = $Weight;
  }
  function getallergies() {
    return $this->allergies;
  }
  function setallergies($allergies) {
    return $this->allergies = $allergies;
  }
  function getmedications() {
    return $this->medications;
  }
  function setmedications($medications) {
    return $this->medications = $medications;
  }

  function getIllnesses() {
    return $this->Illnesses;
  }
  function setIllnesses($Illnesses) {
    return $this->Illnesses = $Illnesses;
  }


  function readUser($id){
      $sql ="SELECT * FROM `Patients` where PID=".$id;
      $db = $this->connect();
      $result = $db->query($sql);
      if ($result->num_rows == 1){
          $row = $db->fetchRow();
          $this->Fname = $row["Fname"];
          $this->Mname = $row["Mname"];
          $this->Lname = $row["Lname"];
          $this->Uname = $row["username"];
          $_SESSION["username"]=$row["username"];
          $this->gender=$row["gender"];
          $this->mobile=$row["mobile"];
          $this->email=$row["email"];
          $this->password=$row["pass"];
          $this->message = $row["message"];
          $this->Day = $row["BirthDay"];
          $this->Month = $row["BirthMonth"];
          $this->Year = $row["BirthYear"];
      }
      else {
          $this->Fname = "";
          $this->Mname = "";
          $this->Lname = "";
          $this->Uname = "";
          $this->gender = "";
          $this->mobile = "";
          $this->email = "";
          $this->password= "";
          $this->message  = "";
          $this->Day="";
          $this->Month = "";
          $this->Year = "";
      }
    }
    function checkUserExist($username){
      $checkExist = "SELECT username from Patients WHERE username ='" . $username . "'";
      $this->db->query($checkExist);
         if($checkExist > 0){//That means username is existed from the table
            echo"<script>"."alert('Error Username is taken'); "."</script>";
         }
      }
      function editPatient($Fname,$Mname,$Lname,$Uname,$gender,$mobile,$email,$password,$Day,$Month,$Year){
        $sql = "UPDATE `Patients` SET `Fname`='$Fname',`Mname`='$Mname',`Lname`='$Lname',`username`='$Uname',`gender`='$gender',`mobile`='$mobile',`email`='$email',`pass`='$password',
        `BirthDay`='$Day',`BirthMonth`='$Month',`BirthYear`='$Year' WHERE `PID`=$this->id;";
          if($this->db->query($sql) === true){
              echo "updated successfully.";
              $this->readUser($this->id);
          } else{
              echo "ERROR: Could not able to execute $sql. " ;
          }
  
    }
    


  }
?>
