<?php
include 'config.php';

    class Patient {
      public $db;

  		public function __construct(){
  			$this->db = new mysqli(DB_HOST, DB_USER, DB_PASSWORD, DB_DATABSE);

  			if(mysqli_connect_errno()) {
  				echo "Error: Could not connect to database.";
  			        exit;
  			}
  		}
          public function reg_user($Fname,$Mname,$Lname,$gender,$mobile,$email,$password,$Day,$Month,$Year){

                $check = "SELECT * FROM Users
                 WHERE Fname = '".$Fname."' AND Mname='".$Mname."' AND Lname='".$Lname."' AND gender='".$gender."'
                 AND mobile='".$mobile."' AND BirthDay='".$Day."' AND BirthMonth='".$Month."' AND BirthYear='".$Year."'";
                 $sql =  $this->db->query($check) ;
                 $count_row = $sql->num_rows;

              if($count_row >0 ){
                 echo "<script>alert('Oops! something wrong.')</script>";
              }
              else{


                $qr = "INSERT INTO `Users`(`UID`, `Fname`, `Mname`, `Lname`, `gender`, `mobile`, `email`, `pass`, `User_type_id`, `message`, `BirthDay`, `BirthMonth`, `BirthYear`)
                     VALUES (DEFAULT,'$Fname', '$Mname', '$Lname','$gender',
                             '$mobile','$email','$password','5','','$Day','$Month','$Year')";
                 $result = mysqli_query($this->db,$qr) or die(mysqli_connect_errno()."Data cannot inserted");
                 return $result;



              }
            }
              public function check_login($id, $password){

                
                $query = "SELECT * 	FROM users WHERE UID='".$id."' AND pass= '".$password."' AND User_type_id= '4' OR User_type_id= '5'";
                $result = mysqli_query($this->db,$query);
                $user_data = mysqli_fetch_array($result);
                $count_row = $result->num_rows;

                if($count_row == 1){
                  $_SESSION['login'] = true;
                  $_SESSION['User'] = $_POST['id'];
                   return true;

                }
                else{
                   return false;
                }

    }
    public function get_session(){
	        return $_SESSION['login'];
	    }

        }






?>
