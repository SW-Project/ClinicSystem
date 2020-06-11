
<?php
require_once(__ROOT__ . "model/Model.php");
class DayLimit extends Model{
    private $Day_id;
    private $app_type_id;
  	private $CID;
    private $status;
    private $App_time;
    private $Sch_id;

    
    function __construct($Day_id="",$app_type_id="",$CID="", $status="", $App_time="",$Sch_id=""){
      $this->$Day_id = $Day_id;
 	    $this->db = $this->connect();

    if(""===$status){ 
       $this->readDaylimit($Day_id);
     }else{

       $this->$app_type_id = $app_type_id;
       $this->$CID = $CID;
       $this->$status = $status;
       $this->$App_time = $App_time;
       $this->$Sch_id = $Sch_id;
     }
    }

   function getapp_type_id() {
    return $this->app_type_id;
   }
   function setapp_type_id($app_type_id) {
    return $this->app_type_id = $app_type_id;
  }
   function getCID() {
    return $this->CID;
   }
   function setCID($CID) {
    return $this->CID = $CID;
  }
   function getstatus() {
    return $this->status;
   }
   function setstatus($status) {
    return $this->status = $status;
  }
  function getApp_time() {
    return $this->App_time;
   }
   function setApp_time($App_time) {
    return $this->App_time = $App_time;
  }

  function getSch_id() {
    return $this->Sch_id;
   }
   function setSch_id($Sch_id) {
    return $this->Sch_id = $Sch_id;
  }
   function getDayID() {
    return $this->Day_id;
  }
    
  function readDaylimit($Day_id){
      $sql ="SELECT * FROM day_limit where Day_id=".$Day_id;
      $db = $this->connect();
      $result = $db->query($sql);
  
      if ($result->num_rows == 1){
          $row = $db->fetchRow();
          $this->Day_id = $row["Day_id"];
          $this->app_type_id = $row["app_type_id"];
          $this->CID = $row["CID"];
          $this->status = $row["status"];
          $this->App_time = $row["App_time"];
          $this->Sch_id = $row["Sch_id"];
      }
      else {
      	  $this->app_type_id = "";
      	  $this->CID = "";
          $this->status = "";
          $this->App_time = "";
          $this->Sch_id = "";
      }
    }

    function editDayLimit($App_time){
      if(empty($App_time)){
              echo '<div class="alert alert-danger" role="alert">';
              echo '<a href="TimeView.php" class="close" data-dismiss="alert" aria-label="close">&times;</a>';
              echo "Please fill in the time!";
              echo '</div>';
              return; 
      }
      $sql = "UPDATE day_limit set App_time='$App_time' where Day_id=$this->Day_id;";
        if($this->db->query($sql) === true){
             echo '<div class="alert alert-success" role="alert">';
             echo '<a href="TimeView.php" class="close" data-dismiss="alert" aria-label="close">&times;</a>';
             echo "<strong>Edited successfully!</strong>";
             echo '</div>';
            $this->readDaylimit($this->Day_id);
        } else{
            echo "ERROR: Could not able to execute $sql. " . $conn->error;
        }
  }

   function deleteDayLimit(){

    $sql="DELETE from day_limit where Day_id='$this->Day_id'";
    if($this->db->query($sql) === true){
           
             echo '<div class="alert alert-danger" role="alert">';
             echo '<a href="TimeView.php" class="close" data-dismiss="alert" aria-label="close">&times;</a>';
             echo "<strong>Deleted successfully!</strong>";
             echo '</div>';
        } else{
            echo "ERROR: Could not able to execute $sql. " . $conn->error;
        }
  }


   


}

?>
