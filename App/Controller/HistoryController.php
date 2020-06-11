<?php

require_once(__ROOT__ . "controller/Controller.php");
class HistoryController extends Controller{


public function insertMed()
{
$id=$_SESSION['PID'];
$Height=$_REQUEST['Height'];
$Weight=$_REQUEST['Weight'];

if(isset($_REQUEST['Radio']))
{
	$check=$_REQUEST['Radio'];
	if($check=='Yes')
	{
	$allergies=$_REQUEST['allergies'];
	}
	else{
		$allergies="None";
	}
}
if(isset($_REQUEST['Radio2']))
{
	$check=$_REQUEST['Radio2'];
	if($check=='Yes2')
	{
	$medications=$_REQUEST['medications'];
	}
	else{
		$medications="None";
	}
}
if(!empty($_REQUEST['Illnesses'])) {
	if (is_array($_REQUEST['Illnesses']) || is_object($_POST['Illnesses']) )
	 {
	$Illnesses= implode(',', $_REQUEST['Illnesses']);
	if(!empty($_REQUEST['Other'])) {
		$value2=$_REQUEST['Illness'];
		$Illnesses=$Illnesses.$value2;
	}
}
}
else
{
	if(!empty($_REQUEST['Other'])) {
		$Illnesses=$_REQUEST['Illness'];
}
}
$this->model->AddMedical($id,$Height,$Weight,$allergies,$medications,$Illnesses);
}

}



?>
