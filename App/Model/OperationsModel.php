<?php
require_once(__ROOT__ . "model/Model.php");
require_once(__ROOT__ . "model/OperationModel.php");

class Operations extends Model{
  private $Operations;
  function __construct() {
		$this->fillArray();
	}
	function fillArray() {
		$this->Operations = array();
		$this->db = $this->connect();
		$result = $this->readOperations();
		
		while ($row = $result->fetch_assoc()) {
			array_push($this->Operations, new Operation($row["Op_id"],$row["PID"],$row["OpDate"],$row["Op_type_id"],$row["Hospital_id"]));
		}
	}

	function getOperations() {
		return $this->Operations;
	}

	function readOperations(){
		$sql = "SELECT * FROM Operations";

		$result = $this->db->query($sql);
		if ($result->num_rows > 0){
			return $result;
		}
		else {
			return false;
		}
	}

	function showOperations(){
      $sql = "SELECT operations.Op_id,
       operations.PID, ops_types.Description,
        hospitals.name, operations.OpDate FROM operations,
         ops_types, hospitals, patients WHERE operations.PID=patients.PID AND 
         operations.Op_type_id=ops_types.Op_type_id AND operations.Hospital_id=hospitals.Hospital_id ORDER BY operations.Op_id
";

		$result = $this->db->query($sql);
		if ($result->num_rows > 0){
			return $result;
		}
		else {
			return false;
		}

	}
   
    function AddOperation($PID,$OpDate,$Op_type_id,$Hospital_id){

    $sql = "INSERT INTO `operations` (`Op_id`, `PID`, `OpDate`, `Op_type_id`, `Hospital_id`) VALUES ('DEFAULT', '$PID', '$OpDate', '$Op_type_id', '$Hospital_id')"; 

	if($this->db->query($sql) === true){
			echo '<div class="alert alert-success" role="alert">';
            echo '<a href="Book_operation.php" class="close" data-dismiss="alert" aria-label="close">&times;</a>';
            echo "<strong>Operations added successfully!</strong>";
            echo '</div>';
		     $this->fillArray();
		}
	
		else{
			echo "ERROR: not able to execute $sql. ";
		}
	}

}

?>