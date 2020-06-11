<?php
require_once('C:\xampp\htdocs\SW\App\View\Staff\View.php');
class ViewAppointment extends View {
public function output(){
     $str3="";
      $str3.=' 


        <!-- Begin Page Content -->
		
        <div class="container-fluid">

          <!-- Page Heading -->
          <h1 class="h3 mb-2 text-gray-800">Appointments</h1>


          <!-- DataTales Example -->
          <div class="card shadow mb-4">
            <div class="card-header py-3">
              <h6 class="m-0 font-weight-bold text-primary">Today Appointments </h6>
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
                    $result = $this->model->showAppointments();
                     while($queryRow = $result->fetch_row()){
                     $str3.=
                     '<tr>'.
                      //for($i =0; $i < $result->field_count; $i++){
                     '<td>'.$queryRow[1].'</td>'.
                     '<td>'.$queryRow[2].'</td>'.
                     '<td>'.$queryRow[4].'</td>'.
                     '<td>'.$queryRow[5].'</td>'.
                     '<td>'.$queryRow[6].'</td>'.
                     '<td>'.$queryRow[7].'</td>'.
                     '<td>'.$queryRow[8].'</td>'.
					  
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
}