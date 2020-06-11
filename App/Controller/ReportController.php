<?php

require_once(__ROOT__ . "Controller/Controller.php");
class ReportController extends Controller{


   public function insert() {
       
	   if(isset($_POST['submit'])){
        $PID = $_REQUEST['PID'];
  		$RDate = $_REQUEST['RDate'];
  		$ReportType_id = $_REQUEST['ReportType_id'];
        
         if($ReportType_id == "Operative report"){
           $ReportType_id = '1';
         }
         if($ReportType_id == "Discharge Summary"){
           $ReportType_id= '2';
        }
         if($ReportType_id == "Radiology Report"){
           $ReportType_id= '3';
        }
           
  		$medical_diag= $_REQUEST['medical_diag'];
        $Results = $_REQUEST['Results'];
  		$pat_practice = $_REQUEST['pat_practice'];
  		$Comments= $_REQUEST['Comments'];
  		

$this->model->insertreports($PID,$RDate,$ReportType_id,$medical_diag,$Results,$pat_practice,$Comments);
}

}
       
}



?>
