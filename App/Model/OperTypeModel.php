<?php
require_once(__ROOT__ . "model/Model.php");
class OperationType extends Model{
    private $Op_type_id;
    private $descriptions;
  	
    function __construct($Op_type_id="", $descriptions=""){
      $this->$Op_type_id = $Op_type_id;
 	    $this->db = $this->connect();

    if(""===$descriptions){ 
       $this->readOperationsType($Op_type_id);
     }else{

       $this->$descriptions = $descriptions;
     }
    }

   function getOpType() {
    return $this->Op_type_id;
   }
   function setDescription($descriptions) {
    return $this->descriptions = $descriptions;
  }
   function getDescription() {
    return $this->descriptions;
   }
  
  function readOperationsType($Op_type_id){
      $sql ="SELECT * FROM ops_types where Op_type_id=".$Op_type_id;
      $db = $this->connect();
      $result = $db->query($sql);
  
      if ($result->num_rows == 1){
          $row = $db->fetchRow();
          $this->Op_type_id = $row["Op_type_id"];
          $this->descriptions = $row["Description"];
      }
      else {

          $this->descriptions = "";
      }
    }


}

?>