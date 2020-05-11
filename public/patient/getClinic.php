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
require_once("/Applications/XAMPP/xamppfiles/htdocs/SW/App/Database/Db.php");
$db=new DB();
$con = $db->connect();

if (!$con) {
  die('Could not connect: ' . mysqli_error($con));
}

$sql="SELECT * 
      FROM Day_limit WHERE CID = '".$q."' AND status=''";
$result = mysqli_query($con,$sql);

echo "<table class='table table-hover'>
<tr>
<th>#</th>
<th>Type</th>
<th>Day</th>
<th>Date</th>
<th>time</th>
</tr>";
while($row = mysqli_fetch_array($result)) {
  echo "<tr>";
  echo "<td>" . $row['Day_id'] . "</td>";
  echo "<td>" . $row['app_type_id'] . "</td>";
  echo "<td>" . $row['Day'] . "</td>";
  echo "<td>" . $row['App_Date'] . "</td>";
  echo "<td>" . $row['App_time'] . "</td>";
  echo "</tr>";
}
echo "</table>";
echo'<br>';


?>
</body>
</html>