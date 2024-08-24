<html ng-app="myApp">
  <head>
    <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
    <title> Soft Skill </title>
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="EditStyle.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.0/css/all.css" integrity="sha384-lZN37f5QGtY3VHgisS14W3ExzMWZxybE1SJSEsQp9S+oqd12jhcu+A56Ebc1zFSJ" crossorigin="anonymous">
  </head>
  
    <body class="bg-light mb-5 pb-5">
    <?php
     include('connection.php');

      $userID = $_GET['userID'];
      $sql = "SELECT * FROM student where studentID = '".$userID."'";
      $result = $con->query($sql);

      if ($result->num_rows > 0) {
      // output data of each row
      while($row = $result->fetch_assoc()) {
      ?>

        <form class="bg-transparent" id="stepForm" action="UpdateInformation.php" method="post" enctype="multipart/form-data">
            <h1 class="center">Edit Personal Details</h1>
            
            <div class="float-right row">
            <figure class="figure">
            <img src="data:image/jpg;charset=utf8;base64,<?php echo base64_encode($row['Image']); ?>" alt="Student Profile" id="ProfileImage" style=" border: 1px black solid;width: 180;height: 200;" class="mb-3 img-thumbnail img-fluid rounded mx-auto d-block">
            <input id="img" type="file" name="image" accept="image/*" style="display:none" onchange="previewFile(this);">
            <figcaption class="figure-caption text-center"><label class="btn rounded bg-success text-white" for="img">Change image</label></figcaption>
            </figure>
            </div>

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
                        <input type="text" class="form-control" name="Name" id="Name" value="<?php echo $row["studentName"];?>">
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
                        <input type="text" class="form-control" name="NRIC" id="NRIC" value="<?php echo $row["IC_No"];?>">
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
                        <input type="text" class="form-control" name="Faculty" id="Faculty" value="<?php echo $row["Faculty"];?>">
                      </th>
                    </div>
                  </tr>

                  <tr>
                    <div class="form-group">
                      <th>
                        Course :
                      </th>
                      <th>
                        <input type="text" class="form-control" name="Course" id="Course" value="<?php echo $row["Course"];?>">
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
            

          <input type="submit" name="submit" value="Save" class="bg-primary text-light pl-5 pr-5 pt-2 pb-2 mb-5 w-25 float-right border-0 rounded">
              
            </form>
              </div>
            <?php 
            
      }
      }

            ?>
        

      <script type="text/javascript" src="js/jquery-3.4.1.min.js"></script>
      <script type="text/javascript" src="js/bootstrap.bundle.min.js"></script>
      <script src="EditScript.js"></script>

      <script>
    function previewFile(input){
        var file = $("input[type=file]").get(0).files[0];
 
        if(file){
            var reader = new FileReader();
 
            reader.onload = function(){
                $("#ProfileImage").attr("src", reader.result);
            }
 
            reader.readAsDataURL(file);
        }
    }
</script>

    </body>
</html>