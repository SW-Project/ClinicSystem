<?php
require_once(__ROOT__ . "model/Model.php");
class Clinic extends Model {
    private $CID;
    private $Cname;
    private $address;
    private $location;

    function __construct($CID,$Cname="",$address="",$location="") {
      $this->CID = $CID;
 	    $this->db = $this->connect();

     if(""===$Cname){
       $this->readClinic($CID);
     }else{
        $this->$Cname = $Cname;
        $this->$address=$address;
        $this->$location=$location;

     }
   }
   function getCname() {
    return $this->Cname;
  }
  function setUname($Cname) {
    return $this->Uname = $Cname;
  }
  function getaddress() {
   return $this->address;
  }
  function setaddress($address) {
   return $this->address = $address;
  }
  
  function getlocation() {
    return $this->location;
   }
   function setlocation($location) {
    return $this->location = $location;
   }

  function getCID() {
    return $this->CID;
  }
  function readClinic($CID){
      $sql ="SELECT * FROM `clinics` where CID=".$CID;
      $db = $this->connect();
      $result = $db->query($sql);
      if ($result->num_rows == 1){
          $row = $db->fetchRow();
          $this->Cname = $row['Cname'];
          $this->address = $row["address"];
           $this->location = $row["location"];
      }
      else {
          $this->Cname = "";
          $this->address = "";
          $this->location = "";
      }
    }
      function editClinic($Cname,$address,$location){
        $sql = "UPDATE `clinics` SET `Cname`='$Cname',`address`='$address' ,`location`='$location' WHERE `CID`=$this->CID;";
          if($this->db->query($sql) === true){
              echo "updated successfully.";
              $this->readClinic($this->CID);
          } else{
              echo "ERROR: Could not able to execute $sql. " ;
          }
  ;
    }
    
    function deleteUser(){
      $sql="DELETE FROM `clinics` WHERE CID=$this->CID;";
      if($this->db->query($sql) === true){
              echo "deletet successfully.";
          } else{
              echo "ERROR: Could not able to execute $sql. ";
          }
    }


  }
?>
