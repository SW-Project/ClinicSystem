
<?php
require_once(__ROOT__ . "model/Model.php");
class Operation extends Model{
    private $Op_ID;
    private $PID;
  	private $OpDate;
    private $Op_type_id;
    private $Hospital_id;

    
    function __construct($Op_ID="",$PID="",$OpDate="", $Op_type_id="", $Hospital_id=""){
      $this->$Op_ID = $Op_ID;
 	    $this->db = $this->connect();

    if(""===$Hospital_id){ 
       $this->readOperations($Op_ID);
     }else{

       $this->$PID = $PID;
       $this->$OpDate = $OpDate;
       $this->$Op_type_id = $Op_type_id;
       $this->$Hospital_id = $Hospital_id;
     }
    }

   function getPID() {
    return $this->PID;
   }
   function setPID($PID) {
    return $this->PID = $PID;
  }
   function getOpDate() {
    return $this->OpDate;
   }
   function setOpDate($OpDate) {
    return $this->OpDate = $OpDate;
  }
   function getOpTypeID() {
    return $this->Op_type_id;
   }
   function setOpTypeID($Op_type_id) {
    return $this->Op_type_id = $Op_type_id;
  }
  function getHospital() {
    return $this->Hospital_id;
   }
   function setHospital($Hospital_id) {
    return $this->Hospital_id = $Hospital_id;
  }
   function getOperationID() {
    return $this->Op_ID;
  }
    
  function readOperations($Op_ID){
      $sql ="SELECT * FROM operations where Op_ID=".$Op_ID;
      $db = $this->connect();
      $result = $db->query($sql);
  
      if ($result->num_rows == 1){
          $row = $db->fetchRow();
          $this->Op_ID = $row["Op_id"];
          $this->PID = $row["PID"];
          $this->OpDate = $row["OpDate"];
          $this->Op_type_id = $row["Op_type_id"];
          $this->Hospital_id = $row["Hospital_id"];
      }
      else {
      	  $this->PID = "";
      	  $this->OpDate = "";
          $this->Op_type_id = "";
          $this->Hospital_id = "";
      }
    }

    function editOperation($OpDate, $Op_type_id, $Hospital_id){
      $sql = "UPDATE operations set OpDate='$OpDate',Op_type_id='$Op_type_id', Hospital_id='$Hospital_id' where Op_id=$this->Op_ID;";
        if($this->db->query($sql) === true){
            echo '<div class="alert alert-success" role="alert">';
            echo '<a href="OperationView.php" class="close" data-dismiss="alert" aria-label="close">&times;</a>';
            echo "<strong> Edited Successfully!</strong>";
            echo '</div>';
            $this->readOperations($this->Op_ID);
        } else{
            echo "ERROR: Could not able to execute $sql. " . $conn->error;
        }
  }

    function deleteOperation(){

    $sql="DELETE from operations where Op_id='$this->Op_ID'";
    if($this->db->query($sql) === true){
           
           echo '<div class="alert alert-danger" role="alert">';
            echo '<a href="OperationView.php" class="close" data-dismiss="alert" aria-label="close">&times;</a>';
            echo "<strong>Operation deleted successfully!</strong>";
            echo '</div>';
        } else{
            echo "ERROR: Could not able to execute $sql. " . $conn->error;
        }
  }

   


}

?>
