<?php
require_once('C:\xampp\htdocs\SW\App\View\Staff\View.php');
class viewEditAppointment extends View{
    public function output(){
   
     $str1="";
      $str1.='
    


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
                      <th>Id</th>
                      <th>Name</th>
                      <th>Case</th>
                      <th>Type of Appoitnment</th>
                      <th>Appoitment Time</th>
                      <th>Other</th>
                    </tr>
                  </thead>

                  <tbody>
                    <tr>
                     <td>1001</td>
                      <td>Tiger Nixon</td>
                      <td>Left Knee</td>
                      <td>Examination</td>
                      <td>2020/03/25 7:00</td>
                      <td><a href="#">view</a></td>
                    </tr>
                    <tr>
                      <td>1200</td>
                      <td>Garrett Winters</td>
                      <td>Both knees</td>
                      <td>Examination</td>
                      <td>2020/03/25 7:30</td>
                      <td><a href="#">view</a></td>
                    </tr>
                    <tr>
                      <td>2100</td>
                      <td>Ashton Cox</td>
                      <td>Right Knee</td>
                      <td>Examination</td>
                      <td>2020/03/25 8:00</td>
                      <td><a href="#">view</a></td>
                    </tr>
                    <tr>
                      <td>1006</td>
                      <td>Cedric Kelly</td>
                      <td>Right knee</td>
                      <td>Examination</td>
                      <td>2020/03/25 8:30</td>
                      <td><a href="#">view</a></td>
                    </tr>
                    <tr>
                      <td>400</td>
                      <td>Airi Satou</td>
                      <td>Both knees</td>
                      <td>fellow up</td>
                      <td>2020/03/25 9:00</td>
                      <td><a href="#">view</a></td>
                    </tr>
                    <tr>
                      <td>602</td>
                      <td>Brielle Williamson</td>
                      <td>Left knee</td>
                      <td>fellow up</td>
                      <td>2020/03/25 9:30</td>
                      <td><a href="#">view</a></td>
                    </tr>

                  </tbody>
                </table>
              </div>
            </div>
          </div>

        </div>
        <!-- /.container-fluid -->

      </div>
      <!-- End of Main Content -->s











';




         return $str1;

    }

   

}

?>