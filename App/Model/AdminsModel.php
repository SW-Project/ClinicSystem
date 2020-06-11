<html>
<head>
 
  
</head>
<body>
<div class= "container">
<?php
require_once(__ROOT__ . "model/Model.php");
require_once(__ROOT__ . "model/AdminModel.php");

class Admins extends Model{
  private $Admins;
  function __construct() {
		$this->fillArray();
	}
	function fillArray() {
		$this->Admins = array();
		$this->db = $this->connect();
		$result = $this->readStaff();
		
		while ($row = $result->fetch_assoc()) {
			array_push($this->Admins, new Admin($row["SID"],$row["SSN"],$row["CID"],$row["Fname"],$row["Mname"],$row["Lname"],$row["gender"],$row["mobile"],$row["email"],$row["pass"],$row["User_type_id"],$row["message"],$row["BirthDay"],
      $row["languages"],$row["education"],$row["Joined_date"]));
		}
	}

	function getAdmins() {
		return $this->Admins;
	}

	function readStaff(){
		$sql = "SELECT * FROM staff";

		$result = $this->db->query($sql);
		if ($result->num_rows > 0){
			return $result;
		}
		else {
			return false;
		}
	}

  function showStaff(){
    $sql = "SELECT staff.SID, staff.Fname, staff.Mname, staff.Lname, staff.email, user_type.Description FROM staff, user_type WHERE staff.User_type_id=user_type.User_type_id
";

    $result = $this->db->query($sql);
    if ($result->num_rows > 0){
      return $result;
    }
    else {
      return false;
    }

  }
   
    function AddStaff($CID, $SSN,$Fname,$Mname,$Lname,$gender,$mobile,$email,$pass,$userType,$BirthDay,$languages, $education, $JoinedDate){
     	if(empty($CID)){
              echo '<div class="alert alert-danger" role="alert">';
              echo '<a href="Admin1.php" class="close" data-dismiss="alert" aria-label="close">&times;</a>';
              echo "Please choose one of the following Clinics!";
              echo '</div>';
              return;
     	}

        if(empty($SSN)){
              echo '<div class="alert alert-danger" role="alert">';
              echo '<a href="Admin1.php" class="close" data-dismiss="alert" aria-label="close">&times;</a>';
     		      echo "Please fill in the Social Security Number";
              echo '</div>';
              return;
             
     	}
     	if(!preg_match("/^[0-9]{9}$/", $SSN)) {
              echo '<div class="alert alert-danger" role="alert">';
              echo '<a href="Admin1.php" class="close" data-dismiss="alert" aria-label="close">&times;</a>';
              echo "<strong>Please write a valid Social Security Number!</strong>";
              echo '</div>';
              return;
        }
        
        if(empty($Fname)){
              echo '<div class="alert alert-danger" role="alert">';
              echo '<a href="Admin1.php" class="close" data-dismiss="alert" aria-label="close">&times;</a>';
           
     		      echo "Please fill in the User's first name";
              echo '</div>';
              return;  
           
     	}
     	if(!preg_match("/^[a-zA-Z'-]+$/", $Fname)) {
              echo '<div class="alert alert-danger" role="alert">';
              echo '<a href="Admin1.php" class="close" data-dismiss="alert" aria-label="close">&times;</a>';
              echo "Please write a valid First Name";
              echo '</div>';
              return; 
           
        }

         if(empty($Mname)){
              echo '<div class="alert alert-danger" role="alert">';
              echo '<a href="Admin1.php" class="close" data-dismiss="alert" aria-label="close">&times;</a>';
           
     	        echo "Please fill in the User's middle name";
              echo '</div>';
              return; 
          
     	}
     	if(!preg_match("/^[a-zA-Z'-]+$/", $Mname)) {
              echo '<div class="alert alert-danger" role="alert">';
              echo '<a href="Admin1.php" class="close" data-dismiss="alert" aria-label="close">&times;</a>';
              echo "Please write a valid Middle Name";
              echo '</div>';
              return; 

            
        }

        if(empty($Lname)){
              echo '<div class="alert alert-danger" role="alert">';
              echo '<a href="Admin1.php" class="close" data-dismiss="alert" aria-label="close">&times;</a>';
     		      echo "Please fill in the User's last name";
              echo '</div>';
              return; 

           
     	}
     	if(!preg_match("/^[a-zA-Z'-]+$/", $Lname)) {
              echo '<div class="alert alert-danger" role="alert">';
              echo '<a href="Admin1.php" class="close" data-dismiss="alert" aria-label="close">&times;</a>';
              echo "Please write a valid Last Name";
              echo '</div>';
              return; 

           
        }

        if(empty($gender)){
              echo '<div class="alert alert-danger" role="alert">';
              echo '<a href="Admin1.php" class="close" data-dismiss="alert" aria-label="close">&times;</a>';
     		      echo "Please fill in the User's Gender";
              echo '</div>';
              return; 


          
     	}

     	if(empty($mobile)){
              echo '<div class="alert alert-danger" role="alert">';
              echo '<a href="Admin1.php" class="close" data-dismiss="alert" aria-label="close">&times;</a>';
     		      echo "Please fill in the User's mobile number";
              echo '</div>';
              return; 

         
     	}
     	if(strlen($mobile) < '11'){
              echo '<div class="alert alert-danger" role="alert">';
              echo '<a href="Admin1.php" class="close" data-dismiss="alert" aria-label="close">&times;</a>';
     		      echo "Please write a valid mobile number";
              echo '</div>';
              return; 

      
          
          }
        if(strlen($mobile) > '11'){
              echo '<div class="alert alert-danger" role="alert">';
              echo '<a href="Admin1.php" class="close" data-dismiss="alert" aria-label="close">&times;</a>';
              echo "Please write a valid mobile number";
              echo '</div>';
              return; 

           
         }

        if(empty($email)){
              echo '<div class="alert alert-danger" role="alert">';
              echo '<a href="Admin1.php" class="close" data-dismiss="alert" aria-label="close">&times;</a>';
     		      echo "Please fill in the User's email";
              echo '</div>';
              return; 

          
     	}

     	if(!filter_var($email, FILTER_VALIDATE_EMAIL)){
              echo '<div class="alert alert-danger" role="alert">';
              echo '<a href="Admin1.php" class="close" data-dismiss="alert" aria-label="close">&times;</a>';
     		      echo "Please write a valid email";
              echo '</div>';
              return; 

         }

        if(empty($pass)){
            echo '<div class="alert alert-danger" role="alert">';
            echo '<a href="Admin1.php" class="close" data-dismiss="alert" aria-label="close">&times;</a>';
            echo "Please fill in the User's password";
            echo '</div>';
            return; 

         
     	}
     	if(strlen($pass) <= '8'){
              echo '<div class="alert alert-danger" role="alert">';
              echo '<a href="Admin1.php" class="close" data-dismiss="alert" aria-label="close">&times;</a>';
     		      echo "Your Password Must Contain At Least 8 Numbers or characters";
              echo '</div>';
              return; 

                    
        }

        if(empty($userType)){
              echo '<div class="alert alert-danger" role="alert">';
              echo '<a href="Admin1.php" class="close" data-dismiss="alert" aria-label="close">&times;</a>';
     		      echo "Please fill in the User type";
              echo '</div>';
              return; 

                
            
     	}

     	if(empty($languages)){
              echo '<div class="alert alert-danger" role="alert">';
              echo '<a href="Admin1.php" class="close" data-dismiss="alert" aria-label="close">&times;</a>';
     		      echo "Please fill in the User's spoken languages";
              echo '</div>';
              return; 

             
     	}
     	if(!preg_match("/^[a-zA-Z'-]+$/", $languages)) {
              echo '<div class="alert alert-danger" role="alert">';
              echo '<a href="Admin1.php" class="close" data-dismiss="alert" aria-label="close">&times;</a>';
              echo "Please write a valid languages";
              echo '</div>';
              return; 

             
        }
        if(empty($education)){
              echo '<div class="alert alert-danger" role="alert">';
              echo '<a href="Admin1.php" class="close" data-dismiss="alert" aria-label="close">&times;</a>';
              echo "Please fill in the User's Qualifications";
              echo '</div>';
              return; 

            
     	}
     	if(!preg_match("/^[a-zA-Z'-]+$/", $education)) {
              echo '<div class="alert alert-danger" role="alert">';
              echo '<a href="Admin1.php" class="close" data-dismiss="alert" aria-label="close">&times;</a>';
              echo "Please write a valid Qualifications' format";
              echo '</div>';
              return; 

          
        }


	$sql = "INSERT INTO `staff` (`SID`, `SSN`, `CID`, `Fname`, `Mname`, `Lname`, `gender`, `mobile`, `email`, `pass`, `User_type_id`, `BirthDay`, `languages`, `education`, `Joined_date`) 
	VALUES ('DEFAULT', '$SSN', '$CID', '$Fname', '$Mname', '$Lname', '$gender', '$mobile', '$email', '$pass', '$userType', '$BirthDay', '$languages', '$education', '$JoinedDate')";
		if($this->db->query($sql) === true){
         echo '<div class="alert alert-success" role="alert">';
         echo '<a href="Admin1.php" class="close" data-dismiss="alert" aria-label="close">&times;</a>';
         echo "<strong>User added successfully!</strong>";
         echo '</div>';
		     $this->fillArray();
		}
	
		else{
			echo "ERROR: not able to execute $sql. ";
		}
	}





















}























?>
</div>
</body>
</html>