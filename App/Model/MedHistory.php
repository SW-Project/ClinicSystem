<?php
require_once(__ROOT__ . "model/Model.php");
class History extends Model {
    private $id;
    protected $medid;
    protected $Height;
    protected $Weight;
    protected $allergies;
    protected $medications;
    protected $Illnesses;
    function __construct($id,$Height="",$Weight="",$allergies="",$medications="",$Illnesses="") {
      $this->id = $id;
 	    $this->db = $this->connect();

     if(""===$id){
       $this->readMed($id);
     }else{
       //$this->$id = $_SESSION["PID"];
       $this->$Height = $Height;
 	     $this->$Weight=$Weight;
       $this->$allergies = $allergies;
       $this->$medications = $medications;
       $this->$Illnesses = $Illnesses;
     }
   }

  function getID() {
    return $this->$_SESSION['PID'];
  }
  function getMedId() {
    return $this->medid;
  }
  function setMedId($medid) {
    return $this->medid = $medid;
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


  function readMed($id){
      $sql ="SELECT * FROM `History` where PID=".$id;
      $db = $this->connect();
      $result = $db->query($sql);
      if ($result->num_rows == 1){
          $row = $db->fetchRow();
          $this->medid=$row["Med_history_id"];
          $this->id = $_SESSION["PID"];
          $this->Height = $row["height"];
          $this->Weight = $row["weight"];
          $this->allergies = $row["allergies"];
          $this->Illnesses=$row["p_illnesses"];
      }
      else {
          $this->medid = "";
          $this->id = "";
          $this->Height = "";
          $this->Weight = "";
          $this->allergies = "";
          $this->Illnesses = "";
      }
    }


    function AddMedical($id,$Height,$Weight,$allergies,$medications,$Illnesses)
    {
      $sql="INSERT INTO `History`(`Med_history_id`, `PID`, `height`, `weight`, `allergies`, `Medications`, `p_illnesses`)
       VALUES (DEFAULT,'$id','$Height','$Weight','$allergies','$medications','$Illnesses')";
     $sql2="UPDATE `Patients` SET `Med_history`='$id'";
       if($this->db->query($sql) === true && $this->db->query($sql2) === true){
        return true;

    } else{
        return false;
    }
    }


  }
?>
