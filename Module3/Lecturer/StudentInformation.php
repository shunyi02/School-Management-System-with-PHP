<?php 
if (session_status() === PHP_SESSION_NONE) {
  session_start();
}
?>

<html ng-app="myApp">
  <head>
    <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
    <title> Student Information </title>
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="StudentInformation.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.2/font/bootstrap-icons.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <script type="text/javascript" src="js/jquery-3.4.1.min.js"></script>
    <script type="text/javascript" src="js/bootstrap.bundle.min.js"></script>
    <script src="StudentInformation.js"></script>

  </head>
  
    <body class="bg-light mb-5 pb-5">
    <div class="menu-wrap">
        <input type="checkbox" class="toggler">
        <div class="hamburger"><div></div></div>
        <div class="menu">
            <div>
                <div>
                    <ul class="option">
                        <li><a href="/Group4/MainMenu/LectureMenu.php">Home</a></li>
                        <li><a href="#">Appointment Booking</a></li>
                        <li><a href="#">Consultation Record</a></li>
                        <!-- <li><a href="#">Student Information</a></li> -->
                        <li><a href="/Group4/Module5/Lecturer.php">Student Monthly Progress Report</a></li>
                        <li><a href="#">Student Academic Performance</a></li>
                        <li><a href="/Group4/MainMenu/index.html">Log Out</a></li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
    <?php
      include('connection.php');

      $userID = $_SESSION['studentID'];
      $sql = "SELECT * FROM student where studentID = '".$userID."'";
      $result = $con->query($sql);


      if ($result->num_rows > 0) {
      // output data of each row
      while($row = $result->fetch_assoc()) {
      ?>

      <div class="container-fluid">
        <div class="row">
          <div class="col">

            <div class="container pt-5">
              <h1 data-anime="scroll">Student Profile</h1>
            </div>
              
            <div class="container tab-01" data-group="tab-01">
                
              <div class="container row">
                <div class="col-md-8">
                  <ul class="tab-menu">
                    <li><a href="#item-1" data-click="item-1">Personal Details</a></li>
                    <li><a href="#item-2" data-click="item-2">Qualification</a></li>
                    <li><a href="#item-3" data-click="item-3">Curricular</a></li>
                    <li><a href="#item-4" data-click="item-4">Soft Skill</a></li>
                    <li><a href="/Group4/Module3/Resume/resume.php?userID=<?php echo $row["studentID"] ?>" target="_blank">Generate Resume</a></li>
                  </ul>
                </div>
                <div class="col-md-4">
                  <img src="data:image/jpg;charset=utf8;base64,<?php echo base64_encode($row['Image']); ?>" alt="Student Profile" id="ProfileImage" class="img-thumbnail img-fluid rounded mx-auto d-block">
                </div>
              </div>
            
              <div class="item mb-5 bg-light" id="item-1" data-target="item-1" style="opacity:0.8">
            
                <table class="table table-hover table-striped table-responsive-sm">
                  <tbody>
                    <tr>
                      <th scope="row">Name</th>
                      <td><?php echo $row["studentName"];?></td>
                    </tr>
                    <tr>
                      <th scope="row">Race</th>
                      <td><?php echo $row["Race"];?></td>
                    </tr>
                    <tr>
                      <th scope="row">Gender</th>
                      <td><?php echo $row["Gender"];?></td>
                    </tr>
                    <tr>
                      <th scope="row">NRIC NO.</th>
                      <td><?php echo $row["IC_No"];?></td>
                    </tr>
                    <tr>
                      <th scope="row">Student ID No.</th>
                      <td><?php echo $row["studentID"];?></td>
                    </tr>
                    <tr>
                      <th scope="row">Faculty</th>
                      <td><?php echo $row["Faculty"];?></td>
                    </tr>
                    <tr>
                      <th scope="row">Course</th>
                      <td><?php echo $row["Course"];?></td>
                    </tr>
                    <tr>
                      <th scope="row">Study Session</th>
                      <td><?php echo $row["Study_Session"];?></td>
                    </tr>
                    <tr>
                      <th scope="row">University Email</th>
                      <td><?php echo $row["studentEmail"];?></td>
                    </tr>
                    <tr>
                      <th scope="row">Address</th>
                      <td><?php echo $row["Address"];?></td>
                    </tr>
                    <tr>
                      <th scope="row">Postcode</th>
                      <td><?php echo $row["Postcode"];?></td>
                    </tr>
                    <tr>
                      <th scope="row">State</th>
                      <td><?php echo $row["State"];?></td>
                    </tr>
                    <tr>
                      <th scope="row">Mobile Phone</th>
                      <td><?php echo $row["studentPhNo"];?></td>
                    </tr>
                  </tbody>
                </table>
                <a href="EditProfile.php?userID=<?php echo $userID; ?>">
              <button class="bg-primary text-light pl-5 pr-5 pt-2 pb-2 float-right border-0 rounded">Edit</button>
                </a>
              </div> <!-- ITEM-1 -->
              <?php
      }
    }
      ?>



<div class="item bg-light" id="item-2" data-target="item-2" style="opacity:0.8">
                <table class="table table-hover table-striped table-responsive-sm table-responsive-md">
                  <thead class="thead-dark">
                    <tr>
                      <th scope="col">No</th>
                      <th scope="col">Higher Education Provider</th>
                      <th scope="col">Qualification</th>
                      <th scope="col">Current CGPA</th>
                      <th scope="col">Date Obtained the CGPA</th>
                    </tr>
                  </thead>
                  <tbody>
      <?php 
      
      $sql1 = "SELECT * FROM qualification where studentID = '".$userID."'";
      $result1 = $con->query($sql1);
      $num = 1;

      if ($result1->num_rows > 0) {
      // output data of each row
      while($row1 = $result1->fetch_assoc()) {
      ?>
                   
                    <tr>
                      <th scope="row"><?php echo $num;?></th>
                      <td><?php echo $row1["higher_education"];?></td>
                      <td><?php echo $row1["qualification"];?></td>
                      <td><?php echo $row1["cgpa"];?></td>
                      <td><?php echo date("d-m-Y", strtotime($row1["date"]));?></td>
                    </tr>
                    <?php $num++; ?>

              <?php
      }
    }
              ?>
                                </tbody>
                </table>
                </div> <!-- ITEM-2 -->
            
              <div class="item bg-light" id="item-3" data-target="item-3" style="opacity:0.8">
                <table class="table table-hover table-striped table-responsive-sm table-responsive-md">
                  <thead class="thead-dark">
                    <tr>
                      <th scope="col">No</th>
                      <th scope="col">Higher Education Provider</th>
                      <th scope="col">Society</th>
                      <th scope="col">Activity</th>
                      <th scope="col">Position</th>
                      <th scope="col">Start Date</th>
                    </tr>
                  </thead>
                  <tbody>

                  <?php 
      
                      $sql2 = "SELECT * FROM curricular where approved=true and studentID = '".$userID."'";
                      $result2 = $con->query($sql2);
                      $num1 = 1;

                      if ($result2->num_rows > 0) {
                      // output data of each row
                      while($row2 = $result2->fetch_assoc()) {
                  ?>

                    <tr>
                      <th scope="row"><?php echo $num1;?></th>
                      <td><?php echo $row2["higher_education"];?></td>
                      <td><?php echo $row2["society"];?></td>
                      <td><?php echo $row2["activity"];?></td>
                      <td><?php echo $row2["position"];?></td>
                      <td><?php echo date("d-m-Y", strtotime($row2["date"]));?></td>
                    </tr>
                    <?php $num1++; ?>

              <?php
                }
              }
              ?>
                  </tbody>
                </table>

              <button class="bg-primary text-light pl-5 pr-5 pt-2 pb-2 float-right border-0 rounded" onclick = "window.open('Curricular.php?userID=<?php echo $userID; ?>')">Check Student Request</button>

              </div> <!-- ITEM-3 -->

              <div class="item bg-light" id="item-4" data-target="item-4" style="opacity:0.8">
                <table class="table table-hover table-striped table-responsive-sm">
                  <thead class="thead-dark">
                    <tr>
                      <th scope="col">No</th>
                      <th scope="col">Soft Skill</th>
                      <th scope="col">Description</th>
                    </tr>
                  </thead>
                  <tbody>
                    
                  <?php 
      
                    $sql3 = "SELECT * FROM softskill where approved=true and studentID = '".$userID."'";
                    $result3 = $con->query($sql3);
                    $num2 = 1;

                    if ($result3->num_rows > 0) {
                    // output data of each row
                    while($row3 = $result3->fetch_assoc()) {
                  ?>

                  <tr>
                    <th scope="row"><?php echo $num2;?></th>
                    <td><?php echo $row3["softskill"];?></td>
                    <td><?php echo $row3["description"];?></td>
                  </tr>
                  <?php $num2++; ?>

                  <?php
                  }
                  }
                  ?>


                  </tbody>
                </table>

                <button class="bg-primary text-light pl-5 pr-5 pt-2 pb-2 float-right border-0 rounded" onclick = "window.open('SoftSkill.php?userID=<?php echo $userID; ?>')">Check Student Request</button>

              </div> <!-- ITEM-4 -->
                
            </div> <!-- TAB-CONTAINER  -->

          </div>
        </div>  
      </div>



      <script>
        function createPopupWin(pageURL, pageTitle,
                    popupWinWidth, popupWinHeight) {
            var left = (screen.width - popupWinWidth) / 2;
            var top = (screen.height - popupWinHeight) / 4;
             
            var myWindow = window.open(pageURL, pageTitle,
                    'resizable=yes, width=' + popupWinWidth
                    + ', height=' + popupWinHeight + ', top='
                    + top + ', left=' + left);
        }
    </script>


    </body>
</html>