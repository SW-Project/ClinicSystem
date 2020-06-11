<?php

require_once(__ROOT__."View/Patient/View.php");
require_once('C:\xampp\htdocs\/SW/lib/libs/fpdf.php');

class PDF extends View
{

function output(){
$id=$_GET['id'];

//get invoices data
$query = $this->model->show_Appointment_PDF($id);
$invoice = mysqli_fetch_array($query);

//A4 width : 219mm
//default margin : 10mm each side
//writable horizontal : 219-(10*2)=189mm

$pdf = new FPDF('P','mm','A4');

$pdf->AddPage();

//set font to arial, bold, 14pt
$pdf->SetFont('Arial','B',14);

//Cell(width , height , text , border , end line , [align] )

$pdf->Cell(130	,5,'Dr/Ahmed Ghoniem',0,0);
$pdf->Cell(59	,5,'Appointent',0,1);//end of line

//set font to arial, regular, 12pt
$pdf->SetFont('Arial','',12);

$pdf->Cell(130	,5,'[Manial , Maadi , 5th Settlement]',0,0);
$pdf->Cell(59	,5,'',0,1);//end of line

$pdf->Cell(130	,5,'[Cairo, Egypt]',0,0);
$pdf->Cell(25	,5,'Customer ID',0,0);
$pdf->Cell(34	,5,$invoice['PID'],0,1);//end of line


$pdf->Cell(130	,5,'Phone [+01150001410]',0,0);
$pdf->Cell(34	,5,'Appointment # ',0,0);
$pdf->Cell(34	,5,$invoice['appointment_id'],0,1);//end of line

$pdf->Cell(130	,5,'Fax [+01150001410]',0,0);
$pdf->Cell(34	,5,'Date',0,0);
$pdf->Cell(34	,5,$invoice['App_Date'],0,1);//end of line

//make a dummy empty cell as a vertical spacer
$pdf->Cell(189	,10,'',0,1);//end of line

//billing address
$pdf->Cell(100	,5,'Bill to',0,1);//end of line

//add dummy cell at beginning of each line for indentation
$pdf->Cell(10	,5,'',0,0);
$pdf->Cell(90	,5,$invoice['Fname'],0,1);

$pdf->Cell(10	,5,'',0,0);
$pdf->Cell(90	,5,$invoice['Mname'],0,1);

$pdf->Cell(10	,5,'',0,0);
$pdf->Cell(90	,5,$invoice['Lname'],0,1);

$pdf->Cell(10	,5,'',0,0);
$pdf->Cell(90	,5,$invoice['mobile'],0,1);

//make a dummy empty cell as a vertical spacer
$pdf->Cell(189	,10,'',0,1);//end of line

//invoice contents
$pdf->SetFont('Arial','B',12);

$pdf->Cell(40	,5,'Clinic',1,0);
$pdf->Cell(40	,5,'Date',1,0);
$pdf->Cell(40	,5,'Time',1,0);
$pdf->Cell(40	,5,'Payment',1,1);//end of line

$pdf->SetFont('Arial','',12);

//Numbers are right-aligned so we give 'R' after new line parameter

//items
$query = $this->model->show_Appointment_PDF($id);
$tax = 0; //total tax
$amount = 0; //total amount

//display the items
while($item = mysqli_fetch_array($query)){
	$pdf->Cell(40	,5,$item['Cname'],1,0);
	//add thousand separator using number_format function
	$pdf->Cell(40,5,$item['App_Date'],1,0);
	$pdf->Cell(40,5,$item['App_time'],1,0);
	$pdf->Cell(40,5,$item['Description'],1,0);//end of line
	//accumulate tax and amount
	$tax += 0.0;
	$amount += 300.0;
}

//summary
$pdf->Cell(130	,5,'',0,0);
$pdf->Cell(25	,5,'Subtotal',0,0);
$pdf->Cell(4	,5,'$',1,0);
$pdf->Cell(30	,5,number_format($amount),1,1,'R');//end of line

$pdf->Cell(130	,5,'',0,0);
$pdf->Cell(25	,5,'Total ',0,0);
$pdf->Cell(7	,5,'E'.iconv("UTF-8", "ISO-8859-1", "£"),1,0);
$pdf->Cell(30	,5,number_format($amount),1,1,'R');//end of line


$pdf->SetY(-32);
    // Arial italic 8
$pdf->SetFont('Arial','I',8);
    // Page number
$pdf->Cell(0,10,'Page '.date("Y/m/d"),0,0,'C');



$pdf->Output();
}
}
?>
