<?php
require_once(__ROOT__ . "View/Patient/View.php");
class ViewDR extends View{
	public function output(){

		$str1="";
        $str1.="    <nav class='navbar navbar-expand navbar-light bg-white topbar mb-4 static-top shadow'>


		<!-- Topbar Navbar -->
		<ul class='navbar-nav ml-auto'>

		  <!-- Nav Item - Search Dropdown (Visible Only XS) -->
		  <li class='nav-item dropdown no-arrow d-sm-none'>
			<a class='nav-link dropdown-toggle' href='#' id='searchDropdown' role='button' data-toggle='dropdown' aria-haspopup='true' aria-expanded='false'>
			  <i class='fas fa-search fa-fw'></i>
			</a>
			<!-- Dropdown - Messages -->
			<div class='dropdown-menu dropdown-menu-right p-3 shadow animated--grow-in' aria-labelledby='searchDropdown'>
			  <form class='form-inline mr-auto w-100 navbar-search'>
				<div class='input-group'>
				  <input type='text' class='form-control bg-light border-0 small' placeholder='Search for...' aria-label='Search' aria-describedby='basic-addon2'>
				  <div class='input-group-append'>
					<button class='btn btn-primary' type='button'>
					  <i class='fas fa-search fa-sm'></i>
					</button>
				  </div>
				</div>
			  </form>
			</div>
		  </li>";
        
        $str1.="  <!-- Nav Item - Alerts -->
        <li class='nav-item dropdown no-arrow mx-1'>
              <a class='nav-link dropdown-toggle' href='#' id='alertsDropdown' role='button' data-toggle='dropdown' aria-haspopup='true'aria-expanded='false'>
                <i class='fas fa-bell fa-fw'></i>
                <!-- Counter - Alerts -->
                <span class='badge badge-danger badge-counter'>3+</span>
              </a>
              <!-- Dropdown - Alerts -->
              <div class='dropdown-list dropdown-menu dropdown-menu-right shadow animated--grow-in' aria-labelledby='alertsDropdown'>
                <h6 class='dropdown-header'>
                  Alerts Center
                </h6>


                </a>
                <a class='dropdown-item text-center small text-gray-500' href='#'>Show All Alerts</a>
              </div>
            </li>

            <!-- Nav Item - Messages -->
            <li class='nav-item dropdown no-arrow mx-1'>
              <a class='nav-link dropdown-toggle' href='#' id='messagesDropdown' role='button' data-toggle='dropdown' aria-haspopup='true' aria-expanded='false'>
                <i class='fas fa-envelope fa-fw'></i>
                <!-- Counter - Messages -->
                <span class='badge badge-danger badge-counter'>7</span>
              </a>
              <!-- Dropdown - Messages -->
              <div class='dropdown-list dropdown-menu dropdown-menu-right shadow animated--grow-in' aria-labelledby='messagesDropdown'>
                <h6 class='dropdown-header'>
                  Message Center
                </h6>
      
                <a class='dropdown-item text-center small text-gray-500' href='#'>Read More Messages</a>
              </div>
            </li>

            <div class='topbar-divider d-none d-sm-block'></div>

            <!-- Nav Item - User Information -->
            <li class='nav-item dropdown no-arrow'>
              <a class='nav-link dropdown-toggle' href='#' id='userDropdown' role='button' data-toggle='dropdown' aria-haspopup='true' aria-expanded='false'>
                <span class='mr-2 d-none d-lg-inline text-gray-600 small'>Dr. Ahmed</span>
                <img class='img-profile rounded-circle' src='http://192.168.64.2/SW/lib/images/Dr.jpg'>
              </a>
        
        </div>
		  </li>

		</ul>

	  </nav>";


	return $str1;
        
        
    }
        
        public function patientTable(){
     
     $str2="";
      $str2.=' 


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
                     
                     $str2.=
                     '<tr>'.
                      //for($i =0; $i < $result->field_count; $i++){
                     '<td>'.$queryRow[0].'</td>'.
                     '<td>'.$queryRow[1].' '.$queryRow[2].' '.$queryRow[3].'</td>'.
                     '<td>'.$queryRow[6].'</td>'.
                     '<td>'.$queryRow[7].'</td>'.
                     '<td>'.$queryRow[10].' '.$queryRow[11].' '.$queryRow[12].'</td>'.
                     '</tr>';

               }
                  $str2.='
                    
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
      return $str2;

    }



    
      
    public function addoperation(){
     $str3="";
    $str3.=' 
     <!-- Begin Page Content -->
        <div class="container-fluid">

          <!-- Page Heading -->
          <h1 class="h3 mb-2 text-gray-800">Operations</h1>


          <!-- DataTales Example -->
          <div class="card shadow mb-4">
            <div class="card-header py-3">
              <h6 class="m-0 font-weight-bold text-primary">Book an operation</h6>
            </div>
              <div class="panel-body">
          <form action="" method= "POST">
      <div class="col-md-12 col-sm-12">
              <div class="form-group col-md-6 col-sm-6">
                <label for="PID">Patient ID  </label>
                <select class="form-control input-sm" id="PID" name="PID" required="" >
                <option></option>';
                $result = $this->model->readPatients();
                while($queryRow = $result->fetch_row()){
                  $str3.=
                  '<option>'.$queryRow[0].'</option>';
                }
                $str3.='

                
          
                 </select>
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
        <div class="form-group col-md-3 col-sm-3 pull-right" >
            <input type="submit" class="btn btn-primary" name="submit" value="Submit"/>
        </div>
      </div>

      </div>
         </form>
      </body>

        </div>
      <!-- End of Main Content -->









      ';

      return $str3;
	}
    
    public function addreport(){
     $str4="";
    $str4.=' 
    
     <!-- Begin Page Content -->
        <div class="container-fluid">

          <!-- Page Heading -->
          <h1 class="h3 mb-2 text-gray-800">Reports</h1>


         <!-- DataTales Example -->
          <div class="card shadow mb-4">
            <div class="card-header py-3">
              <h6 class="m-0 font-weight-bold text-primary">Add Report</h6>
            </div>
              <div class="panel-body">
          <form action="" method= "POST">
      <div class="col-md-12 col-sm-12">
      	
               <div class="form-group col-md-6 col-sm-6">
                <label for="PID">Patient ID  </label>
                <select class="form-control input-sm" id="PID" name="PID" required="" >
                <option></option>';
                $result = $this->model->readPatients();
                while($queryRow = $result->fetch_row()){
                  $str4.=
                  '<option>'.$queryRow[0].'</option>';
                }
                $str4.='

                
          
                 </select>
              </div>
           <div class="form-group col-md-6 col-sm-6">
                    <label for="address"> Date </label>
                    <input type="date" class="form-control input-sm" id="RDate" name="RDate" >
              </div>
              <div class="form-group col-md-6 col-sm-6">
                <label for="ReportType_id">Report Type ID	</label>
				 <select class="form-control input-sm" id="ReportType_id" name="ReportType_id">
             
              <option></option>
             <option>Operative report</option>  //This is a dummy data filled from database
             <option>Discharge Summary</option>
			 <option>Radiolgy Report</option>
			 
                 </select>
                 
              </div>
              <div class="form-group col-md-6 col-sm-6">
                  <label for="name"> Medical Diagnosis	</label>
                  <input type="text" class="form-control" name="medical_diag" required="medical_diag">
                  
              </div>
              <div class="form-group col-md-6 col-sm-6">
                  <label for="name"> Clinical Findings	</label>
                  <input type="text" class="form-control" name="Results" required="Results">
                  
              </div>
              <div class="form-group col-md-6 col-sm-6">
                <label for="Patient">How long Have the patient attended the practice?	</label>
                <input type="text" class="form-control" name="pat_practice" required="pat_practice">
              </div>
                  <div class="form-group col-md-6 col-sm-6">
                  <label for="name"> Comments	</label>
                 <input type="text" class="form-control" name="Comments" required="Comments">
              </div>
     

             
      <div class="col-md-12 col-sm-12">
      	<div class="form-group col-md-3 col-sm-3 pull-right" >
      			<input type="submit" class="btn btn-primary" name="submit" value="Submit"/>
      	</div>
      </div>

      </div>
         </form>
      </body>

        </div>
      <!-- End of Main Content -->

    
    
      ';

      return $str4;
}
    
    
 function viewTable()
{
$id=$_SESSION['Report_id'];
$results= $this->model->show_Report($id);
if ($results)
echo "<table class='table table-hover'>
<tr>
<th>#</th>
<th>ID</th>
<th>Day</th>
<th>Date</th>
<th>Medical diagnosis</th>
<th>Clinical Findings</th>
<th>How long have the patient attended the practice?</th>
<th>Comments</th>
<th>Print</th>
</tr>";
while($row = mysqli_fetch_array($results)) {
  echo "<tr>";
  echo "<td>" . $row['Report_id'] . "</td>";
  echo "<td>" . $row['PID'] . "</td>";
  echo "<td>" . $row['RDate'] . "</td>";
  echo "<td>" . $row['ReportType_id'] . "</td>";
  echo "<td>" . $row['medical_diag'] . "</td>";
  echo "<td>" . $row['Results'] . "</td>";
  echo "<td>" . $row['pat_practice'] . "</td>";
 echo "<td>" . $row['Comments'] . "</td>";
  echo '<td> <a href="generate_pdf.php?id='.$row['Report_id'].'">Print</a>  </td>';
  echo "</tr>";
}
echo "</table>";
echo'<br>';
    
}
  
    function showappointments()
    {
        
       $str6="";
      $str6.='  
        
        
        
        
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
                       <th>#</th>
                    <th>Patient ID</th>
                     <th>Clinic</th>
                       <th>Day</th>
                         <th>Date</th>
                            <th>time</th>
                              <th>Reason</th>
                              </tr>";
                              </thead>

                  <tbody>';
                   $results= $this->model->showAppointments();
                   while($row = mysqli_fetch_array($results)) {
                    
                      
                      $str6.=
                     '<tr>'.
                      
                     '<td>'.$row[0].'</td>'.
                     '<td>'.$row[1].' '.$row[2].' '.$row[3].'</td>'.
                     '<td>'.$row[6].'</td>'.
                     '<td>'.$row[7].'</td>'.
                     '<td>'.$row[10].' '.$row[11].' '.$row[12].'</td>'.
                     '</tr>';

               }
                  $str6.='
                    
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
      return $str6;

        
 }


 function showHistory()
    {
        
       $str6="";
      $str6.='  
        
        
        
        
        <!-- Begin Page Content -->
        <div class="container-fluid">

          <!-- Page Heading -->
          <h1 class="h3 mb-2 text-gray-800">Tables</h1>


          <!-- DataTales Example -->
          <div class="card shadow mb-4">
            <div class="card-header py-3">
              <h6 class="m-0 font-weight-bold text-primary"> Med Histories</h6>
            </div>

            <div class="card-body">
              <div class="table-responsive">
                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                  <thead>
                  <tr>   
                    <th>Patient ID</th>
                     <th>Height</th>
                     <th>Weight</th>
                    <th>allergies</th>
                    
                    <th>Medications</th>
                    <th>P-Illiness</th>
                    </tr>
                            </thead>

                  <tbody>';
                   $result= $this->model->readHistories();
                   while($queryRow = $result->fetch_row()){
                    
                      
                      $str6.=
                     '<tr>'.
                      
                     '<td>'.$queryRow[0].'</td>'.
                     '<td>'.$queryRow[1].' </td>'.
                     '<td>'.$queryRow[2].' </td>'.
                     '<td>'.$queryRow[3].' </td>'.
                     '<td>'.$queryRow[4].' </td>'.
                     '<td>'.$queryRow[5].' </td>'.
                     '</tr>';

               }
                  $str6.='
                    
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
      return $str6;

        
 }
     
  function showreport()
    {
        
       $str8="";
      $str8.='  
        
        
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
                   $result= $this->model->showAllreports();
                   while($queryRow = $result->fetch_row()){
                    
                      
                      $str8.=
                     '<tr>'.
                      '<td>'.$queryRow[1].'</td>'.
                     '<td>'.$queryRow[3].'</td>'.
                     '<td>'.$queryRow[2].'</td>'.
                     '<td>'.$queryRow[4].'</td>'.
                     '<td>'.$queryRow[5].'</td>'.
                     '<td>'.$queryRow[6].'</td>'.
                     '<td>'.$queryRow[7].'</td>'.
                     '</tr>';

               }
                  $str8.='
                    
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
      return $str8;

        
 }
 function Topnav(){
     $str5="";
	$str5.="
    
    <div id='wrapper'>

    <!-- Sidebar -->
    <ul class='navbar-nav bg-gradient-primary sidebar sidebar-dark accordion' id='accordionSidebar'>

      <!-- Sidebar - Brand -->
      <a class='sidebar-brand d-flex align-items-center justify-content-center' href='index.php>
        <div class='sidebar-brand-icon'>
          <i class='fa fa-user-md mr-2'></i>
        </div>
        <div class='sidebar-brand-text mx-3'>Dr Ahmed Ghoniem Clinic </div>
      </a>

      <!-- Divider -->
      <hr class='sidebar-divider my-0'>
            <!-- Nav Item - Tables -->
            <li class='nav-item active'>
              <a class='nav-link' href='Dr1.php'>
                <i class='fas fa-fw fa-table'></i>
                <span>Today Appoitments</span></a>
            </li>
            <li class='nav-item active'>
              <a class='nav-link' href='Dr2.php'>
                <i class='fas fa-history'></i>
                <span>Patient's History</span></a>
          </li>
          <li class='nav-item active'>
              <a class='nav-link'href='Dr3.php'>
                <i class='far fa-sticky-note'></i>
                <span>Add Report</span></a>
            </li>
          <li class='nav-item active'>
              <a class='nav-link' href='Dr4.php'>
                <i class='fas fa-cut'></i>
                <span>Book an Operation</span></a>
            </li>
            
     ";
	return $str5;
            
        
}
}
