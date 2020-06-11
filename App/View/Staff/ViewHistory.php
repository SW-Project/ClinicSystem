<?php
require_once('C:\xampp\htdocs\SW\App\View\Staff\View.php');
class View_History extends View {
public function output(){
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
}