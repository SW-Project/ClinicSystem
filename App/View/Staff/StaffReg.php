<?php
require_once('C:\xampp\htdocs\SW\App\View\Staff\View.php');
class viewStaffReg extends View {
  


  public function output(){
    $str1="";
    $str1.='   
    
        <!-- Begin Page Content -->
        <div class="container-fluid">

          <!-- Page Heading -->
          <body>
      <div class="panel panel-primary" style="margin:20px;">
        <div class="panel-heading">
          <h3 class="panel-title">Staff Registration </h3>
        </div>
      <div class="panel-body">
          <form id="form1" action="" method= "POST">
      <div class="col-md-12 col-sm-12">
        <div class="form-group col-md-6 col-sm-6">
                  <label for="Fname"> First Name  </label>
                  <input type="text" class="form-control input-sm" id="form-fname" required="" name="Fname" placeholder="">
              </div>
              <div class="form-group col-md-6 col-sm-6">
                <label for="Mname">Middle Name  </label>
                <input type="text" class="form-control input-sm" id="form-mname" required="" name="Mname" placeholder="">
              </div>
              <div class="form-group col-md-6 col-sm-6">
                <label for="Lname">Last Name  </label>
                <input type="text" class="form-control input-sm"  id="form-lname" required="" name="Lname" placeholder="">
              </div>
              <div class="form-group col-md-6 col-sm-6">
                <label for="name"> National ID  </label>
                <input type="text" class="form-control input-sm" id="form-ssn" required="" name="SSN" placeholder="">
               </div>
              <div class="form-group col-md-6 col-sm-6">
                <label for="email"> Email </label>
                <input type="email" class="form-control input-sm" id="form-email" required="" name="email" placeholder="">
              </div>
              <div class="form-group col-md-6 col-sm-6">
                <label for="name"> Password </label>
                <input type="password" class="form-control input-sm" id="form-pass" required="" name="pass" placeholder="">
              </div>
              <div class = "form-group col-md-6 col-sm-6">
                <label for="userType">User Type ID</label>
                <select class="form-control input-sm" required="" id="form-userType" name="userType">
                <option></option>
                <option>Doctor</option>
                <option>Assistant</option>
                <option>Receptionist</option>
                <option>Admin</option>

                    </select>
              </div>
              

              <div class="form-group col-md-6 col-sm-6">
                  <label for="mobile">Mobile</label>
                  <input type="text" class="form-control input-sm" required="" id="form-mobile" name="mobile" placeholder="">
              </div>

              <div class = "form-group col-md-6 col-sm-6">
                <label for="gender">Gender</label>
                <select class="form-control input-sm" required="" id="form-gender" name="gender">
                <option></option>
                <option>Male</option>
                <option>Female</option>

                    </select>
              </div>
              <div class="form-group col-md-6 col-sm-6">
                    <label for="address">Birthdate </label>
                    <input type="date" class="form-control input-sm" required="" id="form-BirthDay" name="BirthDay"></textarea>
              </div>
            <div class="form-group col-md-6 col-sm-6">
              <label for="languages">Languages known </label>
              <textarea class="form-control input-sm" required="" id="form-languages" name="languages" ></textarea>
           </div>
           <div class="form-group col-md-6 col-sm-6">
             <label for="Qual">Qualifications </label>
             <textarea class="form-control input-sm" required="" id="form-Qual" name="Qual"></textarea>
          </div>
           <div class = "form-group col-md-6 col-sm-6">
             <label for="clinc">Employeed in which clinic ?</label>
             <select class="form-control input-sm"  required="" id="form-CID" name="CID">
             <option></option>
             <option>Tagmoaa Clinic</option>  //This is a dummy data filled from database
             <option>Maadi Clinic</option>
             <option>Manial Clinic</option>

                 </select>
           </div>
           <div class="form-group col-md-6 col-sm-6">
                    <label for="joinedDate">Joined Date </label>
                    <input type="date" class="form-control input-sm" id="form-JoinedDate" required="" name="JoinedDate"></textarea>
              </div>


      <div class="col-md-12 col-sm-12">
        <div class="form-group col-md-3 col-sm-3 pull-right" >
            <input type="submit" class="btn btn-primary" value="Submit" id= "form-submit" name="submit"/>
        </div>

      </div>
      </div>
     <p id="form-message" class="text-danger" name="message"></p>
         </form>
      </body>

        </div>

        <!-- /.container-fluid -->

      <!-- End of Main Content -->
     ';

      return $str1;
    }

    public function StaffTable(){
     $str3="";
      $str3.=' 


        <!-- Begin Page Content -->
        <div class="container-fluid">

          <!-- Page Heading -->
          <h1 class="h3 mb-2 text-gray-800">Tables</h1>


          <!-- DataTales Example -->
          <div class="card shadow mb-4">
            <div class="card-header py-3">
              <h6 class="m-0 font-weight-bold text-primary"> Staff</h6>
            </div>

            <div class="card-body">
              <div class="table-responsive">
                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                  <thead>
                    <tr>
                      <th>Id</th>
                      <th>Name</th>
                      <th>Email</th>
                      <th>User Type</th>
                      <th>Action</th>
                    </tr>
                  </thead>

                  <tbody>';
                   
                    $result = $this->model->showStaff();
                     while($queryRow = $result->fetch_row()){
                     $str3.=
                     '<tr>'.
                      //for($i =0; $i < $result->field_count; $i++){
                     '<td>'.$queryRow[0].'</td>'.
                     '<td>'.$queryRow[1].' '.$queryRow[2].' '.$queryRow[3].'</td>'.
                     '<td>'.$queryRow[4].'</td>'.
                     '<td>'.$queryRow[5].'</td>'.
                     '<td><a href=StaffView.php?id='.$queryRow[0].'>view</a></td>'.
                     '</tr>';

               }
                  $str3.='
                    
                   
                  </tbody>
                </table>
              </div>
            </div>
          </div>

        </div>
        <!-- /.container-fluid -->

      </div>
      <!-- End of Main Content -->  ';
      return $str3;

    }
   public function operationsTable(){
     $str3="";
      $str3.=' 


        <!-- Begin Page Content -->
        <div class="container-fluid">

          <!-- Page Heading -->
          <h1 class="h3 mb-2 text-gray-800">Tables</h1>


          <!-- DataTales Example -->
          <div class="card shadow mb-4">
            <div class="card-header py-3">
              <h6 class="m-0 font-weight-bold text-primary"> Operations</h6>
            </div>

            <div class="card-body">
              <div class="table-responsive">
                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                  <thead>
                    <tr>
                      <th>Patient ID</th>
                      <th>Operation Type</th>
                      <th>Hospital</th>
                      <th>Operation Date</th>
                      <th>Action</th>
                    </tr>
                  </thead>

                  <tbody>';

                    $result = $this->model->showOperations();
                     while($queryRow = $result->fetch_row()){
                     $str3.=
                     '<tr>'.
                      //for($i =0; $i < $result->field_count; $i++){
                     '<td>'.$queryRow[1].'</td>'.
                     '<td>'.$queryRow[2].'</td>'.
                     '<td>'.$queryRow[3].'</td>'.
                     '<td>'.$queryRow[4].'</td>'.
                     '<td><a href=OperationView.php?id='.$queryRow[0].'>view</a></td>'.
                     '</tr>';

               }
                  $str3.='
                    
                   
                  </tbody>
                </table>
              </div>
            </div>
          </div>

        </div>
        <!-- /.container-fluid -->

      </div>
      <!-- End of Main Content -->  ';
      return $str3;

    }




    public function AppointmentsTable(){
     $str3="";
      $str3.=' 


        <!-- Begin Page Content -->
        <div class="container-fluid">

          <!-- Page Heading -->
          <h1 class="h3 mb-2 text-gray-800">Tables</h1>


          <!-- DataTales Example -->
          <div class="card shadow mb-4">
            <div class="card-header py-3">
              <h6 class="m-0 font-weight-bold text-primary"> Appointments</h6>
            </div>

            <div class="card-body">
              <div class="table-responsive">
                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                  <thead>
                    <tr>
                      <th>Patient ID</th>
                      <th>Day</th>
                      <th>Appointment Date</th>
                      <th>Appointment Time</th>
                      <th>Reason</th>
                      <th>Clinic</th>
                      <th>Payement</th>
                    </tr>
                  </thead>

                  <tbody>';
                   
                    $result = $this->model->showAppointments1();
                     while($queryRow = $result->fetch_row()){
                     
                     $str3.=
                     '<tr>'.
                      //for($i =0; $i < $result->field_count; $i++){
                     '<td>'.$queryRow[1].'</td>'.
                     '<td>'.$queryRow[3].'</td>'.
                     '<td>'.$queryRow[4].'</td>'.
                     '<td>'.$queryRow[5].'</td>'.
                     '<td>'.$queryRow[2].'</td>'.
                     '<td>'.$queryRow[6].'</td>'.
                     '<td>'.$queryRow[7].'</td>'.

                     
                     '</tr>';

               }
                  $str3.='
                    
                   
                  </tbody>
                </table>
              </div>
            </div>
          </div>

        </div>
        <!-- /.container-fluid -->

      </div>
      <!-- End of Main Content -->  ';
      return $str3;

    }


    public function ReportsTable(){
     $str3="";
      $str3.=' 


        <!-- Begin Page Content -->
        <div class="container-fluid">

          <!-- Page Heading -->
          <h1 class="h3 mb-2 text-gray-800">Tables</h1>


          <!-- DataTales Example -->
          <div class="card shadow mb-4">
            <div class="card-header py-3">
              <h6 class="m-0 font-weight-bold text-primary"> Reports</h6>
            </div>

            <div class="card-body">
              <div class="table-responsive">
                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                  <thead>
                    <tr>
                      <th>Patient ID</th>
                      <th>Date</th>
                      <th>Report Type</th>
                      <th>Medical diagnosis</th>
                      <th>Clinical Findings</th>
                      <th>Number of Practicies</th>
                      <th>Comments</th>
                    </tr>
                  </thead>

                  <tbody>';
                   
                    $result = $this->model->showAllreports();
                     while($queryRow = $result->fetch_row()){
                     
                     $str3.=
                     '<tr>'.
                      //for($i =0; $i < $result->field_count; $i++){

                     '<td>'.$queryRow[1].'</td>'.
                     '<td>'.$queryRow[3].'</td>'.
                     '<td>'.$queryRow[2].'</td>'.
                     '<td>'.$queryRow[4].'</td>'.
                     '<td>'.$queryRow[5].'</td>'.
                     '<td>'.$queryRow[6].'</td>'.
                     '<td>'.$queryRow[7].'</td>'.

                     
                     '</tr>';

               }
                  $str3.='
                    
                   
                  </tbody>
                </table>
              </div>
            </div>
          </div>

        </div>
        <!-- /.container-fluid -->

      </div>
      <!-- End of Main Content -->  ';
      return $str3;

    }



    public function Schedule(){
     $str3="";
      $str3.=' 

<!-- Modal -->
<div class="modal fade" id="editStaffModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Edit Staff</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <form action="" method= "POST">
      <div class="modal-body">
             <div class="form-group col-md-6 col-sm-6">
                <label for="CID"> Clinic </label>
                <input type="text" class="form-control input-sm" id="form-CID" required="" readonly name="CID" placeholder="" >
              </div>
              <div class="form-group col-md-6 col-sm-6">
                <label for="days"> Working days </label>
                <input type="text" class="form-control input-sm" id="form-days" required="" name="days" placeholder="" >
              </div>
              <div class="form-group col-md-6 col-sm-6">
                  <label for="mobile">Appointment Date</label>
                  <input type="date" class="form-control input-sm" required="" id="form-appDate" name="AppDate"  placeholder="">
              </div>
              

              
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancel</button>
        <button type="submit" name="editStaff" class="btn btn-primary">Edit Staff</button>
      </div>
      </form>
       <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.min.js" integrity="sha256-9/aliU8dGd2tb6OSsuzixeV4y/faTqgFtohetphbbj0=" crossorigin="anonymous"></script>
         <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
         <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js" integrity="sha384-OgVRvuATP1z7JjHLkuOU7Xw704+h835Lr+6QL9UvYjZE3Ipu6Tp75j7Bh/kR0JKI" crossorigin="anonymous"></script>
     
    </div>
  </div>
</div>


        <!-- Begin Page Content -->
        <div class="container-fluid">

          <!-- Page Heading -->
          <h1 class="h3 mb-2 text-gray-800">Tables</h1>


          <!-- DataTales Example -->
          <div class="card shadow mb-4">

            <div class="card-header py-3">
              <h6 class="m-0 font-weight-bold text-primary"> Appointment Dates for this Month!</h6><br>
                <a href="HoursView.php" class="btn btn-outline-info" role="button">Working Hours</a>


            </div>

            <div class="card-body">
              <div class="table-responsive">
                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                  <thead>
                    <tr>
                      <th>Appointment Dates</th>
                      <th>Days</th>
                       <th>Action</th>
                    </tr>
                  </thead>

                  <tbody>

                  ';
                   
                    $result = $this->model->readSchedules();
                   
                     while($queryRow = $result->fetch_row()){
                      
                     $str3.=
                     
                      //for($i =0; $i < $result->field_count; $i++){
                    
                     '<td>'.$queryRow[2].'</td>'.
                     '<td>'.$queryRow[1].'</td>'.
                      '<td><a href=ScheduleView.php?id='.$queryRow[0].'>view</a></td>'.
                      '</tr>';
                   }
                  
                  $str3.='
                    
                   
                  </tbody>
                </table>
              </div>
            </div>
          </div>

        </div>
        <!-- /.container-fluid -->

      </div>
      <!-- End of Main Content -->  ';
      return $str3;

    }



     public function patientTable(){
     $str3="";
      $str3.=' 


        <!-- Begin Page Content -->
        <div class="container-fluid">

          <!-- Page Heading -->
          <h1 class="h3 mb-2 text-gray-800">Tables</h1>


          <!-- DataTales Example -->
          <div class="card shadow mb-4">
            <div class="card-header py-3">
              <h6 class="m-0 font-weight-bold text-primary"> Patients</h6>
            </div>

            <div class="card-body">
              <div class="table-responsive">
                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                  <thead>
                    <tr>
                       <th>Id</th>
                       <th>Name</th>
                       <th>Mobile</th>
                       <th>Email</th>
                      
                       <th>Birth Date</th>
                    </tr>
                  </thead>

                  <tbody>';
                    $result = $this->model->readPatients();
                     while($queryRow = $result->fetch_row()){
                     
                     $str3.=
                     '<tr>'.
                      //for($i =0; $i < $result->field_count; $i++){
                     '<td>'.$queryRow[0].'</td>'.
                     '<td>'.$queryRow[1].' '.$queryRow[2].' '.$queryRow[3].'</td>'.
                     '<td>'.$queryRow[6].'</td>'.
                     '<td>'.$queryRow[7].'</td>'.
                     '<td>'.$queryRow[10].' '.$queryRow[11].' '.$queryRow[12].'</td>'.
                     '</tr>';

               }
                  $str3.='
                    
                    </tr>
                  </tbody>
                </table>
              </div>
            </div>
          </div>

        </div>
        <!-- /.container-fluid -->

      </div>
      <!-- End of Main Content -->  ';
      return $str3;

    }


    public function viewSTAFF(){
      $str='
  
<!-- Modal -->
<div class="modal fade" id="editStaffModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Edit Staff</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <form action="" method= "POST">
      <div class="modal-body">
             <div class="form-group col-md-6 col-sm-6">
                <label for="email"> Email </label>
                <input type="email" class="form-control input-sm" id="form-email" required="" name="email" placeholder="" value="'.$this->model->getemail().'">
              </div>
              <div class="form-group col-md-6 col-sm-6">
                <label for="Password"> Password </label>
                <input type="password" class="form-control input-sm" id="form-pass" required="" name="pass" placeholder="" value="'.$this->model->getPassword().'">
              </div>
  
              <div class="form-group col-md-6 col-sm-6">
                  <label for="mobile">Mobile</label>
                  <input type="text" class="form-control input-sm" required="" id="form-mobile" name="mobile"  placeholder="" value="'.$this->model->getmobile().'">
              </div>
               <div class = "form-group col-md-6 col-sm-6">
             <label for="clinc">Clinic</label>
             <select class="form-control input-sm"  required="" id="form-CID" name="CID">
             <option></option>
             <option>Tagmoaa Clinic</option>  //This is a dummy data filled from database
             <option>Maadi Clinic</option>
             <option>Manial Clinic</option>

                 </select>
           </div>

              
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancel</button>
        <button type="submit" name="editStaff" class="btn btn-primary">Edit Staff</button>
      </div>
      </form>
    </div>
  </div>
</div>



<!-- Modal -->
<div class="modal fade" id="deleteStaffModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Delete Staff</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <form action="" method= "POST">
      <div class="modal-body">
        Are you sure you want to delete this user? This process cannot be undone.
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancel</button>
        <button type="submit" name="deleteStaff" class="btn btn-danger">Delete</button>
      </div>
      </form>
    </div>
  </div>
</div>


 <!-- Begin Page Content -->
        <div class="container-fluid">

          <!-- Page Heading -->
          <body>
      <div class="panel panel-primary" style="margin:20px;">
        <div class="panel-heading">
          <h3 class="panel-title" >Staff </h3>
        </div>
      <div class="panel-body">
          <form id="form1" action="" method= "POST">
      <div class="col-md-12 col-sm-12">
        <div class="form-group col-md-6 col-sm-6">
                  <label for="Fname"> First Name  </label>
                  <input type="text" class="form-control input-sm" id="form-fname" required="" name="Fname" placeholder="" readonly value="'.$this->model->getFname().'">
              </div>
              <div class="form-group col-md-6 col-sm-6">
                <label for="Mname">Middle Name  </label>
                <input type="text" class="form-control input-sm" id="form-mname" required="" name="Mname" placeholder="" readonly value="'.$this->model->getMname().'">
              </div>
              <div class="form-group col-md-6 col-sm-6">
                <label for="Lname">Last Name  </label>
                <input type="text" class="form-control input-sm"  id="form-lname" required="" name="Lname" placeholder="" readonly value="'.$this->model->getLname().'">
              </div>
              <div class="form-group col-md-6 col-sm-6">
                <label for="name"> National ID  </label>
                <input type="text" class="form-control input-sm" id="form-ssn" required="" name="SSN" placeholder="" readonly value="'.$this->model->getSSN().'">
              </div>

              <div class="form-group col-md-6 col-sm-6">
                <label for="email"> Email </label>
                <input type="email" class="form-control input-sm" id="form-email" required="" name="email" readonly placeholder="" value="'.$this->model->getemail().'">
              </div>
      ';
              $namesR = $this->model->getUserTypeID();
              if($namesR == "1"){
                        $namesR = "Doctor";
                       }
                       if($namesR == "2"){
                        $namesR = "Assistant";
                       }
                       if($namesR == "3"){
                        $namesR = "Receptionist";
                       }
                       if($namesR == "6"){
                        $namesR = "Admin";
                       }

             $str.=' <div class="form-group col-md-6 col-sm-6">
                <label for="userType"> User Type </label>
                <input type="text" class="form-control input-sm" id="form-userType" required="" name="userType" readonly placeholder="" value="'.$namesR.'">
              </div>
              

              <div class="form-group col-md-6 col-sm-6">
                  <label for="mobile">Mobile</label>
                  <input type="text" class="form-control input-sm" required="" id="form-mobile" name="mobile" readonly placeholder="" value="'.$this->model->getmobile().'">
              </div>

              <div class="form-group col-md-6 col-sm-6">
                <label for="gender"> Gender </label>
                <input type="text" class="form-control input-sm" id="form-gender" required="" name="gender" readonly placeholder="" value="'.$this->model->getGender().'">
              </div>
              
              <div class="form-group col-md-6 col-sm-6">
                    <label for="address">Birthdate </label>
                    <input type="date" class="form-control input-sm" required="" id="form-BirthDay" readonly name="BirthDay" value="'.$this->model->getDay().'"></textarea>
              </div>

              <div class="form-group col-md-6 col-sm-6">
                <label for="languages"> Languages </label>
                <input type="text" class="form-control input-sm" id="form-languages" required="" readonly name="languages" placeholder="" value="'.$this->model->getLang().'">
              </div>
              <div class="form-group col-md-6 col-sm-6">
                <label for="Qual"> Qualifications </label>
                <input type="text" class="form-control input-sm" id="form-Qual" required="" readonly name="Qual" placeholder="" value="'.$this->model->geteducation().'">
              </div>';
               $namesC = $this->model->getCID();
                       if($namesC == "1"){
                        $namesC = "Tagmoaa Clinic";
                       }
                       if($namesC == "2"){
                        $namesC = "Maadi Clinic";
                       }
                       if($namesC == "3"){
                        $namesC = "Manial Clinic";
                       }
                       


        $str.='   <div class="form-group col-md-6 col-sm-6">
                  <label for="clinic">Clinic</label>
                  <input type="text" class="form-control input-sm" required="" id="form-CID" readonly name="CID" placeholder="" value="'.$namesC.'">
              </div>
           <div class="form-group col-md-6 col-sm-6">
                    <label for="joinedDate">Joined Date </label>
                    <input type="date" class="form-control input-sm" id="form-JoinedDate" readonly required="" name="JoinedDate" value="'.$this->model->getJoinedDate().'"></textarea>
              </div>


      <div class="col-md-12 col-sm-12">
        <div class="form-group col-md-3 col-sm-3 pull-right" >
               <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#editStaffModal">
                Edit
                </button>

                 <button type="button" class="btn btn-danger" data-toggle="modal" data-target="#deleteStaffModal">
                Delete
                </button>
        </div>

      </div>
    
      </div>
     
         </form>
         <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.min.js" integrity="sha256-9/aliU8dGd2tb6OSsuzixeV4y/faTqgFtohetphbbj0=" crossorigin="anonymous"></script>
         <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
         <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js" integrity="sha384-OgVRvuATP1z7JjHLkuOU7Xw704+h835Lr+6QL9UvYjZE3Ipu6Tp75j7Bh/kR0JKI" crossorigin="anonymous"></script>
      </body>

        </div>
       

        <!-- /.container-fluid -->

      <!-- End of Main Content -->  ';




  return $str;


    }  


    public function patientHistoryTable(){
     $str3="";
      $str3.=' 


        <!-- Begin Page Content -->
        <div class="container-fluid">

          <!-- Page Heading -->
          <h1 class="h3 mb-2 text-gray-800">Tables</h1>


          <!-- DataTales Example -->
          <div class="card shadow mb-4">
            <div class="card-header py-3">
              <h6 class="m-0 font-weight-bold text-primary"> Patients History</h6>
            </div>

            <div class="card-body">
              <div class="table-responsive">
                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                  <thead>
                    <tr>
                       <th>Patient ID</th>
                       <th>Height</th>
                       <th>Weight</th>
                       <th>Allergies</th>
                       <th>Medications</th>
                       <th>Illnesses</th>
                    </tr>
                  </thead>

                  <tbody>';
                    $result = $this->model->readHistories();
                     while($queryRow = $result->fetch_row()){
                     
                     $str3.=
                     '<tr>'.
                      //for($i =0; $i < $result->field_count; $i++){
                     '<td>'.$queryRow[1].'</td>'.
                     '<td>'.$queryRow[2].'</td>'.
                     '<td>'.$queryRow[3].'</td>'.
                     '<td>'.$queryRow[4].'</td>'.
                     '<td>'.$queryRow[5].'</td>'.
                     '<td>'.$queryRow[6].'</td>'.
                     '</tr>';

               }
                  $str3.='
                    
                    </tr>
                  </tbody>
                </table>
              </div>
            </div>
          </div>

        </div>
        <!-- /.container-fluid -->

      </div>
      <!-- End of Main Content -->  ';
      return $str3;

    }



       public function viewOperation(){
      $str='
  
<!-- Modal -->
<div class="modal fade" id="editModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Edit Operation</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <form action="" method= "POST">
      <div class="modal-body">
         
      <div class="col-md-12 col-sm-12">

              <div class="form-group col-md-6 col-sm-6">
                <label for="Patient"> Patient ID</label> 
                <input type="text" class="form-control input-sm" name="PID" placeholder="" readonly value="'.$this->model->getPID().'">
              </div>
              <div class="form-group col-md-6 col-sm-6">
                <label for="OpType">Operation Type  </label>
         <select class="form-control input-sm" id="OpType" name="OpType" required="" >
             <option></option>
             <option>Anterior Cruciate Ligament</option>  //This is a dummy data filled from database
             <option>Meniscal Repair</option>
             <option>Meniscectomy</option>
             <option>Knee Chondroplasty</option>
                 </select>
              </div>
              <div class="form-group col-md-6 col-sm-6">
                <label for="name"> Hospital </label>
                         <select class="form-control input-sm" id="Hospital" name="Hospital" required="">
             <option></option>
             <option>Yousry Gohar Hospital</option>  //This is a dummy data filled from database
                 </select>
              </div>
              <div class="form-group col-md-6 col-sm-6">
                    <label for="address">Operation Date </label>
                    <input type="date" class="form-control input-sm" id="OpDate" name="OpDate" required="" ></textarea>
              </div>
      <div class="col-md-12 col-sm-12">
        
      </div>

      </div>
        


      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        <button type="submit" name="insertData" class="btn btn-primary">Edit Operation</button>
      </div>
       </form>
    </div>
  </div>
</div>

<!-- Modal -->
<div class="modal fade" id="deleteModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Delete Operation</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <form action="" method= "POST">
      <div class="modal-body">
        Are you sure you want to delete this Operation? This process cannot be undone.
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancel</button>
        <button type="submit" name="deleteOp" class="btn btn-danger">Delete</button>
      </div>
      </form>
    </div>
  </div>
</div>


 <!-- Begin Page Content -->
        <div class="container-fluid">

          <!-- Page Heading -->
          <body>
      <div class="panel panel-primary" style="margin:20px;">
        <div class="panel-heading">
          <h3 class="panel-title" >Operations </h3>
        </div>
      <div class="panel-body">
          <form id="form1" action="" method= "POST">
      <div class="col-md-12 col-sm-12">
        <div class="form-group col-md-6 col-sm-6">
                  <label for="PID"> Patient ID  </label>
                  <input type="text" class="form-control input-sm" id="form-pid" required="" name="PID" placeholder="" readonly value="'.$this->model->getPID().'">
              </div>';
              $namesR = $this->model->getOpTypeID();
              if($namesR == "1"){
                        $namesR = "Anterior Cruciate Ligament";
                       }
                      if($namesR == "2"){
                        $namesR = "Meniscal Repair";
                       }
                      if($namesR == "3"){
                        $namesR = "Meniscectomy";
                       }
                      if($namesR == "4"){
                        $namesR = "Knee Chondroplasty";
                       }

           $str.='<div class="form-group col-md-6 col-sm-6">
                <label for="OpType">Operation Type </label>
                <input type="text" class="form-control input-sm"  id="form-optype" required="" name="OpType" placeholder="" readonly value="'.$namesR .'">
              </div>' ;
              $namesH = $this->model->getHospital();
              if($namesH == "1"){
                        $namesH = "Yousry Gohar Hospital";
                  }
            $str.='  <div class="form-group col-md-6 col-sm-6">
                <label for="Hospital">Hospital </label>
                <input type="text" class="form-control input-sm"  id="form-hospital" required="" name="Hospital" placeholder="" readonly value="'.$namesH .'">
              </div>
               <div class="form-group col-md-6 col-sm-6">
                    <label for="opdate">Operation Date </label>
                    <input type="date" class="form-control input-sm" id="form-opDate" readonly required="" name="OpDate" value="'.$this->model->getOpDate().'"></textarea>
              </div>

             
         <div class="col-md-12 col-sm-12">
        <div class="form-group col-md-3 col-sm-3 pull-right" >
               <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#editModal">
                Edit
                </button>

               <button type="button" class="btn btn-danger" data-toggle="modal" data-target="#deleteModal">
                Delete
                </button>
        </div>

      </div>
    
      </div>
     
         </form>
         <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.min.js" integrity="sha256-9/aliU8dGd2tb6OSsuzixeV4y/faTqgFtohetphbbj0=" crossorigin="anonymous"></script>
         <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
         <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js" integrity="sha384-OgVRvuATP1z7JjHLkuOU7Xw704+h835Lr+6QL9UvYjZE3Ipu6Tp75j7Bh/kR0JKI" crossorigin="anonymous"></script>
      </body>

        </div>
       

        <!-- /.container-fluid -->

      <!-- End of Main Content -->  ';




  return $str;


    }


    public function viewClinicTime(){
      $str='
  
<!-- Modal -->
<div class="modal fade" id="editModalTime" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Edit Clinic Time</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <form action="" method= "POST">
      <div class="modal-body">
         
      <div class="col-md-12 col-sm-12">

              <div class="form-group col-md-6 col-sm-6">
                    <label for="Ctime">Operation Date </label>
                    <input type="time" class="form-control input-sm" id="Ctime" name="Ctime" required="" value="'.$this->model->getApp_time() .'"></textarea>
              </div>
      

      </div>
        


      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        <button type="submit" name="editTime" class="btn btn-primary">Edit Time</button>
      </div>
       </form>
    </div>
  </div>
</div>

<!-- Modal -->
<div class="modal fade" id="deleteModalTime" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Delete Time</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <form action="" method= "POST">
      <div class="modal-body">
        Are you sure you want to delete this? This process cannot be undone.
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancel</button>
        <button type="submit" name="deleteTime" class="btn btn-danger">Delete</button>
      </div>
      </form>
    </div>
  </div>
</div>


 <!-- Begin Page Content -->
        <div class="container-fluid">

          <!-- Page Heading -->
          <body>
      <div class="panel panel-primary" style="margin:20px;">
        <div class="panel-heading">
          <h3 class="panel-title" >Working Time </h3>
        </div>
      <div class="panel-body">
          <form id="form1" action="" method= "POST">
      <div class="col-md-12 col-sm-12">';
              $namesR = $this->model->getCID();
              if($namesR == "1"){
                        $namesR = "Tagmoaa Clinic";
                       }
                      if($namesR == "2"){
                        $namesR = "Maadi Clinic";
                       }
                      if($namesR == "3"){
                        $namesR = "Manial Clinic";
                       }

           $str.='<div class="form-group col-md-6 col-sm-6">
                <label for="Ctime">Clinic </label>
                <input type="text" class="form-control input-sm"  id="form-Ctime" required="" name="CTime" placeholder="" readonly value="'.$namesR .'">
              </div>
               <div class="form-group col-md-6 col-sm-6">
                <label for="WTime">Working Time </label>
                <input type="text" class="form-control input-sm"  id="form-WTime" required="" name="WTime" placeholder="" readonly value="'.$this->model->getApp_time() .'">
              </div>

             
         <div class="col-md-12 col-sm-12">
        <div class="form-group col-md-3 col-sm-3 pull-right" >
               <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#editModalTime">
                Edit
                </button>

               <button type="button" class="btn btn-danger" data-toggle="modal" data-target="#deleteModalTime">
                Delete
                </button>
        </div>

      </div>
    
      </div>
     
         </form>
         <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.min.js" integrity="sha256-9/aliU8dGd2tb6OSsuzixeV4y/faTqgFtohetphbbj0=" crossorigin="anonymous"></script>
         <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
         <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js" integrity="sha384-OgVRvuATP1z7JjHLkuOU7Xw704+h835Lr+6QL9UvYjZE3Ipu6Tp75j7Bh/kR0JKI" crossorigin="anonymous"></script>
      </body>

        </div>
       

        <!-- /.container-fluid -->

      <!-- End of Main Content -->  ';




  return $str;


    }



  public function viewSchedule(){
      $str='


  
<!-- Modal -->
<div class="modal fade" id="editModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Edit Schedule</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <form action="" method= "POST">
      <div class="modal-body">
         
      <div class="col-md-12 col-sm-12">

              
              <div class="form-group col-md-6 col-sm-6">
                <label for="days"> Working Day</label> 
                <input type="text" class="form-control input-sm" name="Days" placeholder="" readonly value="'.$this->model->getDays().'">
              </div>
              <div class="form-group col-md-6 col-sm-6">
                <label for="days"> Appointment Date</label> 
                <input type="date" class="form-control input-sm" name="AppDate" required="" placeholder="">
              </div>

      </div>
        


      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        <button type="submit" name="editSchedule" class="btn btn-primary">Edit Schedule</button>
      </div>
       </form>
    </div>
  </div>
</div>



 <!-- Begin Page Content -->
        <div class="container-fluid">

          <!-- Page Heading -->
          <body>
      <div class="panel panel-primary" style="margin:20px;">
        <div class="panel-heading">
          <h3 class="panel-title" > Schedule </h3>
        </div>
      <div class="panel-body">
          <form id="form1" action="" method= "POST">
      <div class="col-md-12 col-sm-12">
        <div class="form-group col-md-6 col-sm-6">
                <label for="days"> Working Day</label> 
                <input type="text" class="form-control input-sm" name="Days" placeholder="" readonly value="'.$this->model->getDays().'">
              </div>
              <div class="form-group col-md-6 col-sm-6">
                <label for="days"> Appointment Date</label> 
                <input type="date" class="form-control input-sm" name="AppDate" placeholder="" readonly value="'.$this->model->getAppDate().'">
              </div>

             
             
         <div class="col-md-12 col-sm-12">
        <div class="form-group col-md-3 col-sm-3 pull-right" >
              
               <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#editModal">
                Edit Date
                </button>
        </div>

      </div>
    
      </div>
     
         </form>
         <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.min.js" integrity="sha256-9/aliU8dGd2tb6OSsuzixeV4y/faTqgFtohetphbbj0=" crossorigin="anonymous"></script>
         <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
         <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js" integrity="sha384-OgVRvuATP1z7JjHLkuOU7Xw704+h835Lr+6QL9UvYjZE3Ipu6Tp75j7Bh/kR0JKI" crossorigin="anonymous"></script>
      </body>

        </div>
       

        <!-- /.container-fluid -->

      <!-- End of Main Content -->  ';




  return $str;


    }


   

    
}
?>

