<?php

$conn = mysqli_connect("localhost", "root", "", "clinic_project");
if(isset($_POST['submit'])){
	$idname = $_POST['name'];
    $password = $_POST['password'];
    $query = "SELECT *     FROM users WHERE UID='".$idname."' AND pass= '".$password."'";
   $result = mysqli_query($conn, $query);

if($row = mysqli_fetch_assoc($result)){
    $_SESSION['User'] = $_POST['name'];
    if ( $row['User_type_id'] == 1 )  {
        header("location:Dr.html");
    }
    if ( $row['User_type_id'] == 2 )  {
        header("location:Assis.html");
    }
    if ( $row['User_type_id'] == 3 )  {
        header("location:Recep.html");
    }
    exit;
}
}


?>

<!--
Author: W3layouts
Author URL: http://w3layouts.com
License: Creative Commons Attribution 3.0 Unported
License URL: http://creativecommons.org/licenses/by/3.0/
-->
<!DOCTYPE html>
<html>

<head>
<title> Staff Login</title>
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="keywords" content=" Master  Login Form Widget Tab Form,Login Forms,Sign up Forms,Registration Forms,News letter Forms,Elements"/>
<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>
<link href="http://localhost/SW/lib/css/logstyle.css" rel="stylesheet" type="text/css" media="all" />
<link href="//fonts.googleapis.com/css?family=Cormorant+SC:300,400,500,600,700" rel="stylesheet">
<link href="//fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i,800,800i" rel="stylesheet">
</head>

<body>
	<div class="padding-all">
		<div class="header">
			<h1>Login</h1>
		</div>

		<div class="design-w3l">
			<div class="mail-form-agile">
				<form action="#" method="post">
					<input type="text" name="name" placeholder="ID or Username..." required=""/>
					<input type="password"  name="password" class="padding" placeholder="Password" required=""/>
					<input type="submit" name= "submit" value="login">
				</form>
			</div>
		  <div class="clear"> </div>
		</div>

	</div>
</body>
</html>