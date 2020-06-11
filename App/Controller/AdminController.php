
<?php
include('C:\xampp\htdocs\SW\App\View\Staff\StaffReg.php');

require_once(__ROOT__ . "controller/Controller.php");
class AdminsController extends Controller{
   public function insert() {
    
     
    if(isset($_POST['submit'])){
      
      $CID = $_REQUEST['CID'];

      if($CID == "Tagmoaa Clinic"){
        $CID = '1';
      }
      if($CID == "Maadi Clinic"){
        $CID = '2';
      }
      if($CID == "Manial Clinic"){
        $CID = '3';
      }

      
     
         $SSN = $_REQUEST['SSN'];
     
       

        //$username= $_REQUEST['username'];
        $Fname = $_REQUEST['Fname'];
        $Mname = $_REQUEST['Mname'];
        $Lname = $_REQUEST['Lname'];
        $gender = $_REQUEST['gender'];
        $mobile = $_REQUEST['mobile'];
        $email = $_REQUEST['email'];
        $pass = $_REQUEST['pass'];
        $encrypted=md5($pass);
        $userType = $_REQUEST['userType'];
      if($userType == "Doctor"){
        $userType = '1';
      }
       if($userType == "Assistant"){
        $userType = '2';
      }
       if($userType == "Receptionist"){
        $userType = '3';
      }
       if($userType == "Admin"){
        $userType = '6';
      }
    
       $education = $_REQUEST['Qual'];
       $languages = $_REQUEST['languages'];
       $BirthDay = $_REQUEST['BirthDay'];
      $JoinedDate = $_REQUEST['JoinedDate'];
         


$this->model->AddStaff($CID,$SSN,$Fname,$Mname,$Lname,$gender,$mobile,$email,$encrypted,$userType,$BirthDay,$languages, $education, $JoinedDate);
}
}



public function viewSTAFF(){

     $id = $_GET['id'];
     $this->model->readUser($id);
     
}

public function viewOperation(){

     $id = $_GET['id'];
     $this->model->readOperations($id);
     
}

public function viewClinicTime(){

     $id = $_GET['id'];
     $this->model->readDaylimit($id);
     
}

public function viewSchedule(){

     $id = $_GET['id'];
     $this->model->readSch($id);
     
}


public function editOperation() {

    if(isset($_POST['insertData'])){

         $OpType = $_REQUEST['OpType'];
         if($OpType == "Anterior Cruciate Ligament"){
           $OpType = '1';
         }
         if($OpType == "Meniscal Repair"){
           $OpType = '2';
        }
         if($OpType == "Meniscectomy"){
           $OpType = '3';
        }
         if($OpType == "Knee Chondroplasty"){
          $OpType = '4';
       }
        $Hospital = $_REQUEST['Hospital'];
        if($Hospital == "Yousry Gohar Hospital"){
          $Hospital = '1';
       }

      $OpDate = $_REQUEST['OpDate'];
      

$this->model->editOperation($OpDate,$OpType,$Hospital);
}

}

public function editTime() {

    if(isset($_POST['editTime'])){

         $App_time = $_REQUEST['Ctime'];

         $this->model->editDayLimit($App_time);
}

}
public function editSchedule() {

    if(isset($_POST['editSchedule'])){

         $AppDate = $_REQUEST['AppDate'];

$this->model->editSchedule($AppDate);
}

}


public function deleteSchedule(){
   if(isset($_POST['deleteSchedule'])){
   $this->model->deleteSchedule(); 
  }   
}

public function editStaff() {
  if(isset($_POST['editStaff'])){
     $CID = $_REQUEST['CID'];

      if($CID == "Tagmoaa Clinic"){
        $CID = '1';
      }
      if($CID == "Maadi Clinic"){
        $CID = '2';
      }
      if($CID == "Manial Clinic"){
        $CID = '3';
      }
        $mobile = $_REQUEST['mobile'];
        $email = $_REQUEST['email'];
        $pass = $_REQUEST['pass'];
        $encrypted=md5($pass);
   
   $this->model->editStaff($email, $pass, $mobile, $CID);

   
}
}


public function addTime() {
  if(isset($_POST['inserttTime'])){

        $app_type_id = $_REQUEST['AppType'];
        if($app_type_id == "Examination"){
          $app_type_id = '1';
        }
         if($app_type_id == "Check Up"){
          $app_type_id = '2';
        }

        $App_time = $_REQUEST['cTime'];
        $Sch_id= $_REQUEST['Date'];
        switch($Sch_id){
          case '2020-06-06':
             $Sch_id = '1';
             $CID = 1;
             break;
          case '2020-06-13':
             $Sch_id = '2';
             $CID = 1;
             break;
          case '2020-06-20':
             $Sch_id = '3';
             $CID = 1;
             break;
          case '2020-06-27':
             $Sch_id = '4';
             $CID = 1;
             break;
          case '2020-06-07':
             $Sch_id = '5';
             $CID = 3;
             break;
          case '2020-06-14':
             $Sch_id = '6';
             $CID = 3;
             break;
          case '2020-06-21':
             $Sch_id = '7';
             $CID = 3;
             break;
          case '2020-06-28':
             $Sch_id = '8';
             $CID = 3;
             break;
        }
       
   
   $this->model->AddTime($app_type_id,$CID,$App_time, $Sch_id);

   
}
}



public function deleteOperation(){
   if(isset($_POST['deleteOp'])){
   $this->model->deleteOperation(); 
  }   
}

public function deleteTime(){
   if(isset($_POST['deleteTime'])){
   $this->model->deleteDayLimit(); 
  }   
}

public function deleteStaff(){
   if(isset($_POST['deleteStaff'])){
   $this->model->deleteStaff(); 
  }   
}


}



?>
