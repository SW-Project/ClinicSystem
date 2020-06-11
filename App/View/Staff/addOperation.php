<?php
require_once('C:\xampp\htdocs\SW\App\View\Staff\View.php');
class addOperations extends View {
	public function output(){
     $str1="";
    $str1.=' 
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
                  $str1.=
                  '<option>'.$queryRow[0].'</option>';
                }
                $str1.='

                
          
                 </select>
              </div>
             
              <div class="form-group col-md-6 col-sm-6">
                <label for="OpType">Operation Type 	</label>
				 <select class="form-control input-sm" id="OpType" name="OpType" required="" >
             <option></option>
             <option>Anterior Cruciate Ligament</option>  //This is a dummy data filled from database
             <option>Meniscal Repair</option>
			       <option>Meniscectomy</option>
			       <option>Knee Chondroplasty</option>
                 </select>
              </div>
              <div class="form-group col-md-6 col-sm-6">
                <label for="name"> Hospital	</label>
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

      return $str1;
	}


  public function chat(){
     $str1="";
    $str1.=' 
     <!-- Begin Page Content -->
        <div class="container-fluid">

          <!-- Page Heading -->
          <h1 class="h3 mb-2 text-gray-800">Operations</h1>


          <!-- DataTales Example -->
          <div class="card shadow mb-4">
            <div class="card-header py-3">
              <h6 class="m-0 font-weight-bold text-primary">Contact Patient</h6>
            </div>
          <div class="panel-body">
          <form action="" method= "POST">
              <div class="col-md-12 col-sm-12">
              <div class="form-group col-md-6 col-sm-6">
                   
              </div>
              <div class="form-group col-md-6 col-sm-6">
                    <input type="text" class="form-control input-sm" value="send message" id="message-input" name="input" required="" ></textarea>
              </div>
      <div class="col-md-12 col-sm-12">
        <div class="form-group col-md-3 col-sm-3 pull-right" >
            <input type="submit" class="btn btn-primary" name="submit" id="send-button" value="Submit"/>
        </div>
      </div>

      </div>
         </form>
      </body>

        </div>
      <!-- End of Main Content -->








      ';

      return $str1;
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
                     
                    </tr>
                  </thead>

                  <tbody>';

                    $result = $this->model->readOperations();
                     while($queryRow = $result->fetch_row()){
                       $namesR = $queryRow[3];
                       $namesH = $queryRow[4];
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
                      if($namesH == "1"){
                        $namesH = "Yousry Gohar Hospital";
                       }
                     $str3.=
                     '<tr>'.
                      //for($i =0; $i < $result->field_count; $i++){
                     '<td>'.$queryRow[1].'</td>'.
                     '<td>'. $namesR.'</td>'.
                     '<td>'.$namesH.'</td>'.
                     '<td>'.$queryRow[2].'</td>'.
                     
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

}
  