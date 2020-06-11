<?php
require_once('C:\xampp\htdocs\SW\App\View\Staff\View.php');
class viewTime extends View {

 public function output(){
    $str1="";
    $str1.='

    <!-- Modal -->
<div class="modal fade" id="insertTime" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Insert Time</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <form action="" method= "POST">
      <div class="modal-body">
             <div class = "form-group col-md-6 col-sm-6">
             <label for="AppType">Appointment Type</label>
             <select class="form-control input-sm"  required="" id="form-appType" name="AppType">
             <option></option>
             <option>Examination</option>  //This is a dummy data filled from database
             <option>Check Up</option>
             </select>
           </div>
             <div class="form-group col-md-6 col-sm-6">
                <label for="time"> Working Time </label>
                <input type="time" class="form-control input-sm" id="form-time" required="" name="cTime" placeholder="">
              </div>
             <div class = "form-group col-md-6 col-sm-6">
             <label for="AppDate">Date</label>
             <select class="form-control input-sm"  required="" id="form-date" name="Date">
             <option></option>
             <option>2020-06-06</option> 
             <option>2020-06-13</option>
             <option>2020-06-20</option> 
             <option>2020-06-27</option>
             <option>2020-06-07</option> 
             <option>2020-06-14</option>
             <option>2020-06-21</option>
             <option>2020-06-28</option>
            
             </select>
           </div>
           

              
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancel</button>
        <button type="submit" name="inserttTime" class="btn btn-primary">Insert Time</button>
      </div>
      </form>
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
              <h6 class="m-0 font-weight-bold text-primary"> Working Days</h6><br>
             <button type="button" class="btn btn-outline-info" data-toggle="modal" data-target="#insertTime">
                Add Time
                </button>
            </div>

            <div class="card-body">
              <div class="table-responsive">
                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                  <thead>
                    <tr>
                      <th>Tagamoaa Clinic</th>
                      <th>Action</th>

                    </tr>
                  </thead>

                  <tbody>';
                   
                    $result = $this->model->showTimeTable1();
                     while($queryRow = $result->fetch_row()){
                     
                     $str1.=
                     '<tr>'.
                      //for($i =0; $i < $result->field_count; $i++){
                    '<td>'.$queryRow[3].'</td>'.
                    '<td><a href=TimeView.php?id='.$queryRow[2].'>view</a></td>'.
                     
                     '</tr>';

               }
                  $str1.='
                    
                   
                  </tbody>
                </table>
              </div>
            </div>
   

           <div class="card-body">
              <div class="table-responsive">
                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                  <thead>
                    <tr>
                      <th>Manial Clinic &nbsp &nbsp &nbsp</th>
                      <th>Action</th>

                    </tr>
                  </thead>

                  <tbody>';
                   
                    $result = $this->model->showTimeTable2();
                     while($queryRow = $result->fetch_row()){
                     
                     $str1.=
                     '<tr>'.
                      //for($i =0; $i < $result->field_count; $i++){
                    '<td>'.$queryRow[3].'</td>'.
                    '<td><a href=TimeView.php?id='.$queryRow[2].'>view</a></td>'.
                     
                     '</tr>';

               }
                  $str1.='
                    
                   
                  </tbody>
                </table>
              </div>
            </div>








          </div>
           <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.min.js" integrity="sha256-9/aliU8dGd2tb6OSsuzixeV4y/faTqgFtohetphbbj0=" crossorigin="anonymous"></script>
         <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
         <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js" integrity="sha384-OgVRvuATP1z7JjHLkuOU7Xw704+h835Lr+6QL9UvYjZE3Ipu6Tp75j7Bh/kR0JKI" crossorigin="anonymous"></script>
      

        </div>
        <!-- /.container-fluid -->

      </div>
      <!-- End of Main Content -->  ';
      return $str1;

    }

    public function viewTimeTable(){
      $str='
      <div class="card-body">
              <div class="table-responsive">
                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                  <thead>
                    <tr>
                     
                      <th>Working Hours</th>
                      

                    </tr>
                  </thead>

                  <tbody>';
                     $result = $this->model->getApp_time();
                     while($queryRow = $result->fetch_row()){
                     
                     $str1.=
                     '<tr>'.
                      //for($i =0; $i < $result->field_count; $i++){
                     '<td>'.$queryRow[4].'</td>'.
                     
                     '</tr>';

               }
                  $str1.='
                    
                   
                  </tbody>
                </table>
              </div>
            </div>

      ';

}
 } 
?>