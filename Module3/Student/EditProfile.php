<?php 
if (session_status() === PHP_SESSION_NONE) {
  session_start();
}
?>
<html ng-app="myApp">
  <head>
    <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
    <title> Edit Personal Details </title>
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="EditStyle.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.0/css/all.css" integrity="sha384-lZN37f5QGtY3VHgisS14W3ExzMWZxybE1SJSEsQp9S+oqd12jhcu+A56Ebc1zFSJ" crossorigin="anonymous">
  </head>
  
    <body class="bg-light mb-5 pb-5">
    <?php
      include('connection.php');

      $userID =  $_SESSION['userID'];
      $sql = "SELECT * FROM student where studentID = '".$userID."'";
      $result = $con->query($sql);

      if ($result->num_rows > 0) {
      // output data of each row
      while($row = $result->fetch_assoc()) {
      ?>

        <form class="bg-transparent" id="stepForm" action="UpdateInformation.php" method = "POST">
            <h1 class="center">Edit Personal Details</h1>
            
            <!-- One "tab" for each step in the form: -->
            
            <div class="tab">
             <form>
             <table class="table-bordered table table-hover table-striped table-responsive-sm table-light mt-5 mb-5" style="opacity:0.9">
                <tbody>
                  <tr>
                    <div class="form-group">
                      <th>
                        Name :
                      </th>
                      <th>
                        <input type="text" class="form-control" id="Name" value="<?php echo $row["studentName"];?>" readonly>
                      </th>
                    </div>
                  </tr>

                  <tr>
                    <div class="form-group">
                      <th>
                        Race :
                      </th>
                      <th>
                        <input type="text" class="form-control" id="Race" value="<?php echo $row["Race"];?>" readonly>
                      </th>
                    </div>
                  </tr>

                  <tr>
                    <div class="form-group">
                      <th>
                        Gender :
                      </th>
                      <th>
                        <input type="text" class="form-control" id="Gender" value="<?php echo $row["Gender"];?>" readonly>
                      </th>
                    </div>
                  </tr>
                      
                  <tr>
                    <div class="form-group">
                      <th>
                        NRIC NO :
                      </th>
                      <th>
                        <input type="text" class="form-control" id="NRIC" value="<?php echo $row["IC_No"];?>" readonly>
                      </th>
                    </div>
                  </tr>

                  <tr>
                    <div class="form-group">
                      <th>
                        Student ID NO :
                      </th>
                      <th>
                        <input type="text" class="form-control" name="StudentID"  id="StudentID" value="<?php echo $row["studentID"];?>" readonly>
                      </th>
                    </div>
                  </tr>

                  <tr>
                    <div class="form-group">
                      <th>
                        Faculty :
                      </th>
                      <th>
                        <input type="text" class="form-control" id="Faculty" value="<?php echo $row["Faculty"];?>" readonly>
                      </th>
                    </div>
                  </tr>

                  <tr>
                    <div class="form-group">
                      <th>
                        Course :
                      </th>
                      <th>
                        <input type="text" class="form-control" id="Course" value="<?php echo $row["Course"];?>" readonly>
                      </th>
                    </div>
                  </tr>

                  <tr>
                    <div class="form-group">
                      <th>
                        Study Session :
                      </th>
                      <th>
                        <input type="text" class="form-control" id="StudySession" value="<?php echo $row["Study_Session"];?>" readonly>
                      </th>
                    </div>
                  </tr>

                  <tr>
                    <div class="form-group">
                      <th>
                        University Email :
                      </th>
                      <th>
                        <input type="text" class="form-control" id="Email" value="<?php echo $row["studentEmail"];?>" readonly>
                      </th>
                    </div>
                  </tr>

                  <tr>
                    <div class="form-group">
                      <th>
                        Address :
                      </th>
                      <th>
                        <input type="text" class="form-control" name="Address"  id="Address" value="<?php echo $row["Address"];?>">
                      </th>
                    </div>
                  </tr>

                  <tr>
                    <div class="form-group">
                      <th>
                        Postcode :
                      </th>
                      <th>
                        <input type="number" pattern="[0-9]{5}" class="form-control" name="Postcode"  id="Postcode" value="<?php echo $row["Postcode"];?>">
                      </th>
                    </div>
                  </tr>

                  <tr>
                    <div class="form-group">
                      <th>
                        State :
                      </th>
                      <th>
                      <input type="text" name="State" id="State" value="<?php echo $row["State"];?>">
                        
                      </th>
                    </div>
                  </tr>

                  <tr>
                    <div class="form-group">
                      <th>
                        Phone Number :
                      </th>
                      <th>
                        <input type="text" pattern="[0-9]{10}" class="form-control" name="Phone" id="Phone" value="<?php echo $row["studentPhNo"];?>">
                      </th>
                    </div>
                  </tr>


                </tbody>
              </table>
            

          <input type="submit" value="Save" class="bg-primary text-light pl-5 pr-5 pt-2 pb-2 mb-5 w-25 float-right border-0 rounded">
              
            </form>
              </div>
            <?php 
            
      }
      }

            ?>
            
            <!-- <div class="tab pt-5">
                <h3>Qualification</h3>
                <div id="wrapper">
                  <table align='center' cellspacing=2 cellpadding=5 id="data_table" class="table table-hover table-striped table-responsive-sm ">
                   <tr>
                     <th>No</th>
                      <th>Higher Education Provider</th>
                      <th>Qualification</th>
                      <th>Current CGPA</th>
                      <th>Date Obtained the CGPA</th>
                      <th>Action</th>
                   </tr>
                
                
                   <tr>
                    <td></td>
                    <td><input type="text" id="new_education"></td>
                    <td><input type="text" id="new_qualification"></td>
                    <td><input type="number" id="new_cgpa" range min=0 max=4 step=0.0001></td>
                    <td><input  type="date" id="new_date" placeholder="dd-mm-yyyy"></td>
                    <td><input type="button" class="add bg-warning" onclick="add_row();" value="Add Row"></i></td>
                   </tr>
                
                  </table>
                 </div>
            </div> -->
            
            <!-- <div class="tab pt-5">
                <h3>Curricular</h3>
                <div id="wrapper">
                  <table align='center' cellspacing=2 cellpadding=5 id="data_table1" class="table table-hover table-striped table-responsive-sm ">
                   <tr>
                     <th>No</th>
                      <th>Higher Education Provider</th>
                      <th scope="col">Society</th>
                      <th scope="col">Activity</th>
                      <th scope="col">Position</th>
                      <th scope="col">Start Date</th>
                      <th>Action</th>
                   </tr>
                
                
                   <tr>
                    <td></td>
                    <td><input type="text" id="new_education"></td>
                    <td><input type="text" id="new_society"></td>
                    <td><input type="text" id="new_activity"></td>
                    <td><input type="text" id="new_position"></td>
                    <td><input  type="date" id="new_date" placeholder="dd-mm-yyyy"></td>
                    <td><input type="button" class="add bg-warning" onclick="add_row1();" value="Add Row"></i></td>
                   </tr>
                
                  </table>
                 </div>
            </div>
            
            <div class="tab pt-5">
                <h3>Soft Skill</h3>
                <table align='center' cellspacing=2 cellpadding=5 id="data_table2" class="table table-hover table-striped table-responsive-sm ">
                  <tr>
                    <th>No</th>
                     <th>Soft Skill</th>
                     <th>Action</th>
                  </tr>
               
               
                  <tr>
                   <td></td>
                   <td><input type="text" id="new_softskill"></td>
                   <td><input type="button" class="add bg-warning" onclick="add_row2();" value="Add Row"></i></td>
                  </tr>
               
                 </table>
            </div>
            
            <div class="prevnext">
              <div class="floatorder">
                <button type="button" id="prevBtn" onclick="nextPrev(-1)">Previous</button>
                <button type="button" id="nextBtn" onclick="nextPrev(1)">Next</button>
              </div>
            </div> -->
            <!-- Circles which indicates the steps of the form: -->
            <!-- <div class="stepalign">
              <span class="step"></span>
              <span class="step"></span>
              <span class="step"></span>
              <span class="step"></span>
            </div>
          </form>
          
          <p>&nbsp;</p> -->
           

      <script type="text/javascript" src="js/jquery-3.4.1.min.js"></script>
      <script type="text/javascript" src="js/bootstrap.bundle.min.js"></script>
      <script src="EditScript.js"></script>
    </body>
</html>