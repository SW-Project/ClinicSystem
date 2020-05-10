<?php

require_once(__ROOT__ . "controller/Controller.php");
class ClinicsController extends Controller{


   public function insert() {
	
        $Cname = $_REQUEST['Cname'];
        $address = $_REQUEST['address'];
  		$location = $_REQUEST['location'];

   $this->model-> AddClinic($Cname,$address,$location);

}
public function edit() {
    $Cname = $_REQUEST['Cname'];
    $address = $_REQUEST['address'];
    $location = $_REQUEST['location'];

	$this->model->editClinic($Cname,$address,$location);
}


}


?>
