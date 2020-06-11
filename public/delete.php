<?php
session_start();
define('__ROOT__', "../App/");
require_once(__ROOT__ . "model/PatientsModel.php");
require_once(__ROOT__ . "controller/PatientController.php");
require_once(__ROOT__ . "model/AppointsModel.php");
require_once(__ROOT__ . "controller/AppointController.php");
require_once(__ROOT__ . "View/Patient/ViewUser.php");
require_once("/Applications/XAMPP/xamppfiles/htdocs/SW/App/Database/Db.php");


$model = new Appointments();

$model2 = new Patient($_SESSION["PID"]);
$controller2 = new PatientsController($model);
$controller = new AppointmentController($model);
$view = new ViewUser($controller2, $model2);



?>