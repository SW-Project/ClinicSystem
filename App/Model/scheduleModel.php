<?php
require_once(__ROOT__ . "model/Model.php");
class Schedule extends Model {
    private $Sch_id;
   
  	private $Days;
    private $App_Date;
     function __construct($Sch_id,$Days="",$App_Date="") {
      $this->Sch_id = $Sch_id;
 	    $this->db = $this->connect();

     if(""===$Days){
       $this->readSch($Sch_id);
     }else{
      
 	    $this->$Days=$Days;
       $this->$App_Date = $App_Date;
       

     }
   }
  
  function getDays() {
   return $this->Days;
  }
  function setDays($Days) {
   return $this->Days = $Days;
  }
  function getAppDate() {
    return $this->App_Date;
    }
    function setAppDate($App_Date) {
    return $this->App_Date = $App_Date;
    }
  
  

  function readSch($Sch_id){
      $sql ="SELECT * FROM `schedule` where Sch_id=".$Sch_id;
      $db = $this->connect();
      $result = $db->query($sql);
      if ($result->num_rows == 1){
          $row = $db->fetchRow();
          $this->Days = $row["Days"];
		  $this->App_Date = $row["App_Date"];
		      
      }
      else {
         
          $this->Days = "";
          $this->App_Date = "";
         
      }
    }


     function editSchedule($App_Date){
      $sql = "UPDATE schedule set App_Date='$App_Date' where Sch_id=$this->Sch_id;";
        if($this->db->query($sql) === true){
             echo '<div class="alert alert-success" role="alert">';
             echo '<a href="TimeView.php" class="close" data-dismiss="alert" aria-label="close">&times;</a>';
             echo "<strong>Edited successfully!</strong>";
             echo '</div>';
            $this->readSch($this->Sch_id);
        } else{
            echo "ERROR: Could not able to execute $sql. " . $conn->error;
        }
  }


    function deleteSchedule(){

    $sql="DELETE from schedule where Sch_id='$this->Sch_id'";
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

