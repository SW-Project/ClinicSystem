<?php
include 'config.php';

class Staff {
      public $db;

  		  public function __construct(){
  			$this->db = new mysqli(DB_HOST, DB_USER, DB_PASSWORD, DB_DATABSE);

  			if(mysqli_connect_errno()) {
  				echo "Error: Could not connect to database.";
  			        exit;
  			}
      }

          public function reg_staff($Fname,$Mname,$Lname,$gender,$mobile,$email,$password,$job,$Day,$Month,$Year){

                $check = "SELECT * FROM Users
                 WHERE Fname = '".$Fname."' AND Mname='".$Mname."' AND Lname='".$Lname."' AND gender='".$gender."'
                 AND mobile='".$mobile."' AND BirthDay='".$Day."' AND BirthMonth='".$Month."' AND BirthYear='".$Year."' AND User_type_id='".$job."' ";
                 $sql =  $this->db->query($check) ;
                 $count_row = $sql->num_rows;

              if($count_row >0 ){
                 echo "<script>alert('Oops! something wrong.')</script>";
              }
              else{

              
                $qr = "INSERT INTO `Users`(`UID`, `Fname`, `Mname`, `Lname`, `gender`, `mobile`, `email`, `pass`, `User_type_id`, `message`, `BirthDay`, `BirthMonth`, `BirthYear`)
                     VALUES (DEFAULT,'$Fname', '$Mname', '$Lname','$gender',
                             '$mobile','$email','$password','$job','','$Day','$Month','$Year')";

                 $result = mysqli_query($this->db,$qr) or die(mysqli_connect_errno()."Data cannot inserted");
                 return $result;

              }
            }
            public function reg_staff_second($SSN,$CID,$languages,$education)
            {


              $qr2="INSERT INTO `staff`(`SID`, `SSN`, `CID`, `languages`, `education`)
                     VALUES (DEFAULT,'$SSN','$CID','$languages','$education')";
              $result2 = mysqli_query($this->db,$qr2) or die(mysqli_connect_errno()."Data cannot inserted");

              return $result2;


            }


        }






?>
