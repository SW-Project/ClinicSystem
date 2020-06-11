<!DOCTYPE html>
<html>
<head>

<style>
table {
  width: 100%;
  border-collapse: collapse;
}

table, td, th {
  border: 1px solid black;
  padding: 5px;
}

th {text-align: left;}
</style>

</head>

<body>

<?php
$q = intval($_GET['q']);
//require_once("/Applications/XAMPP/xamppfiles/htdocs/SW/App/Database/Db.php");
//require_once(__ROOT__ . "Database/Db.php");
require_once('C:\xampp\htdocs\SW\App\Database\Db.php');

$db=new DB();
$con = $db->connect();

if (!$con) {
  die('Could not connect: ' . mysqli_error($con));
}

$sql=" SELECT  Day_limit.Day_id,Day_Limit.app_type_id,schedule.Days,schedule.App_Date,Day_Limit.App_time
FROM Day_limit , schedule 
WHERE  CID = '".$q."'
AND Day_Limit.Sch_id=schedule.Sch_id
AND app_type_id='1'
AND status=''";
$result = mysqli_query($con,$sql);
if ($result){
echo "<table class='table table-hover'>
<tr>
<th>#</th>
<th>Type</th>
<th>Day</th>
<th>Date</th>
<th>time</th>
<th>Select</th>
</tr>";
while($row = mysqli_fetch_array($result)) {
  echo "<tr>";
  echo "<td>" . $row['Day_id'] . "</td>";
  echo "<td>" . $row['app_type_id'] . "</td>";
  echo "<td>" . $row['Days'] . "</td>";
  echo "<td>" . $row['App_Date'] . "</td>";
  echo "<td>" . $row['App_time'] . "</td>";
  echo "<td> <input type='radio' name='Day' value=".$row['Day_id']." required /> </td>";
  echo "</tr>";
}

echo "</table>";
echo'<br>';}
else
{
echo"No Available appointments";
}
?>
</body>

</html>