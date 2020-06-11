<?php

define('__ROOT__', "../App/");
require_once(__ROOT__ . "model/AppointModel.php");
require_once(__ROOT__ . "controller/AppointController.php");
require_once(__ROOT__ . "View/Staff/generate_pdf.php");

$PID=$_GET['PID'];

$model = new Appointment($PID);
$controller = new AppointmentController($model);
$view = new PDF2($controller, $model);

echo $view->output();
?>