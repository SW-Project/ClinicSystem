<?php 
require_once(__ROOT__."View/Staff/View.php");

class Rec extends View
{
function output()
{
	
}
function viewTable()
{

$results= $this->model->showAppointments();
if ($results){
echo " <table class='table table-bordered' id='dataTable' width='100%' cellspacing='0'>
<thead>
<tr>
<th>#</th>
<th>ID</th>
<th>Clinic</th>
<th>Day</th>
<th>Date</th>
<th>time</th>
<th>Reason</th>
<th>Payment</th>
<th>Print</th>
</tr>
</thead>";
while($row = mysqli_fetch_array($results)) {
  echo "<thead>";
  echo "<tr>";
  echo "<td>" . $row['appointment_id'] . "</td>";
  echo "<td>" . $row['PID'] . "</td>";
  echo "<td>" . $row['Cname'] . "</td>";
  echo "<td>" . $row['Days'] . "</td>";
  echo "<td>" . $row['App_Date'] . "</td>";
  echo "<td>" . $row['App_time'] . "</td>";
  echo "<td>" . $row['reasons'] . "</td>";
  echo "<td>" . $row['Description'] . "</td>";
  echo '<td> <a href="recepPDF.php?id='.$row['appointment_id'].'&PID='.$row['PID'].'">Print</a>  </td>';
  echo "</tr>";
  echo "</thead>";
}
echo "</table>";
echo'<br>';
    
}

else{
  echo"No Appointments Today";
}
}
}
?>