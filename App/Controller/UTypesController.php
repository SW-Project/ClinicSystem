<?php

require_once(__ROOT__ . "controller/Controller.php");
class UTypesController extends Controller{
    
    public function insert(){

    $UID= $_REQUEST['User_type_id'];
    $Desc=$_REQUEST['Description']; 
    
        
        
        $this->model->insertIDS($UID,$Desc);
    
    }
    
    public function delete(){
        
    
		$this->model->deleteUsertype();
	}
	  
    }
    
    
    
    
    
    

?>