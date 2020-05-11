<?php

require_once(__ROOT__ . "controller/Controller.php");
class ReportController extends Controller{


   public function insert() {
	
        $PID = $_REQUEST['PID'];
        $RDate = $_REQUEST['RDate'];
  		$ReportType = $_REQUEST['ReportType'];
  		$Comments = $_REQUEST['Comments'];
  		$Uploads = $_REQUEST['Uploads'];
		

   $this->model-> insertreports($PID,$RDate,$ReportType,$Comments,$Uploads);

}
public function edit() {
	    $PID = $_REQUEST['PID'];
        $RDate = $_REQUEST['RDate'];
  		$ReportType = $_REQUEST['ReportType'];
  		$Comments = $_REQUEST['Comments'];
  		$Uploads = $_REQUEST['Uploads'];

	$this->model->editReport($PID,$RDate,$ReportType,$Comments,$Uploads);
}

public function delete(){
        
    
		$this->model->deleteReport();
	}
}


?>
