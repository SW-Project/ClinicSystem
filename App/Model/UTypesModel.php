<?php
require_once(__ROOT__ . "model/Model.php");

require_once("include/Config.php");

class StaffModel extends Model {

function insertIDS($UID,$Desc){
		$sql = "INSERT INTO User_type_ (User_type_id) VALUES ('$UID','$Desc')";
		if($this->db->query($sql) === true){
			echo "Records inserted successfully.";
			$this->fillArray();
		} 
		else{
			echo "ERROR: Could not able to execute $sql. " . $conn->error;
		}
	}
    
    
    

function deleteUsertype()
{
$sql="delete from User_type where UID=$this->User_type_id;";
	  if($this->db->query($sql) === true){
            echo "deletet successfully.";
        } else{
            echo "ERROR: Could not able to execute $sql. " . $conn->error;
        }
    
    
}

?>