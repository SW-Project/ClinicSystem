<?php 
require_once(__ROOT__."View/Patient/View.php");

class Booking extends View
{
function output()
{
	
}
function viewTable()
{
$id=$_SESSION['PID'];
$results= $this->model->show_Appointment($id);
if ($results){
echo "<table class='table table-hover'>
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
<th>Delete</th>
</tr>";
while($row = mysqli_fetch_array($results)) {
  echo "<tr>";
  echo "<td>" . $row['appointment_id'] . "</td>";
  echo "<td>" . $row['PID'] . "</td>";
  echo "<td>" . $row['Cname'] . "</td>";
  echo "<td>" . $row['Days'] . "</td>";
  echo "<td>" . $row['App_Date'] . "</td>";
  echo "<td>" . $row['App_time'] . "</td>";
  echo "<td>" . $row['reasons'] . "</td>";
  echo "<td>" . $row['Description'] . "</td>";
  echo '<td> <a href="generate_pdf.php?id='.$row['appointment_id'].'">Print</a>  </td>';
  echo '<td> <a href="ShowApp.php?del='.$row['appointment_id'].'">Cancel</a>  </td>';
  echo "</tr>";
}
echo "</table>";
echo'<br>';
}
else
{
echo"No available Appointments";
}
}


}
?>
