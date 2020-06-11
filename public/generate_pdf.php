<?php

define('__ROOT__', "../App/");
require_once(__ROOT__ . "model/AppointModel.php");
require_once(__ROOT__ . "controller/AppointController.php");
require_once(__ROOT__ . "View/Patient/generate_pdf.php");
session_start();
$PID=$_SESSION['PID'];

$model = new Appointment($PID);
$controller = new AppointmentController($model);
$view = new PDF($controller, $model);

echo $view->output();
?>