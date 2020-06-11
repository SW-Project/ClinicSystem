<?php

require_once(__ROOT__ . "controller/Controller.php");
class OperationsController extends Controller{


   public function insert() {

    if(isset($_POST['submit'])){
	    $PID = $_REQUEST['PID'];
        $OpType = $_REQUEST['OpType'];
         if($OpType == "Anterior Cruciate Ligament"){
           $OpType = '1';
         }
         if($OpType == "Meniscal Repair"){
           $OpType = '2';
        }
         if($OpType == "Meniscectomy"){
           $OpType = '3';
        }
         if($OpType == "Knee Chondroplasty"){
          $OpType = '4';
       }
        $Hospital = $_REQUEST['Hospital'];
         if($Hospital == "Yousry Gohar Hospital"){
          $Hospital = '1';
       }

  		$OpDate = $_REQUEST['OpDate'];
  		

$this->model->AddOperation($PID,$OpDate,$OpType,$Hospital);
}

}
}
?>