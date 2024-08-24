<html ng-app="myApp">
  <head>
    <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
    <title> Soft Skill </title>
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="Curricular.css">
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

        <form class="bg-transparent" id="stepForm" action="NewSoftSkill.php" method="post" enctype="multipart/form-data">
            <h1 class="center">New Soft Skill</h1>
            
            <!-- One "tab" for each step in the form: -->
            
            <div class="tab">
             <form>
             <table class="table-bordered table table-hover table-striped table-responsive-sm table-light mt-5 mb-5" style="opacity:0.9">
                <tbody>
                  <tr>
                    <div class="form-group">
                      <th>
                        Soft Skill :
                      </th>
                      <th>
                        <input type="text" class="form-control" name="softskill"  id="softskill" value="" required>
                      </th>
                    </div>
                  </tr>

                  <tr>
                    <div class="form-group">
                      <th>
                        Description :
                      </th>
                      <th>
                        <input type="text" class="form-control" name="description" id="description" value="" required>
                      </th>
                    </div>
                  </tr>       

                  <tr>
                    <div class="form-group">
                      <th>
                        Image :
                        <br><small>* Upload an image to prove your soft skill.</small>
                      </th>
                      <th>
                      <input type="file" name="image" accept="image/*" required>
                      </th>
                    </div>
                  </tr>

                  


                </tbody>
              </table>
            

          <input type="submit" name="submit" value="Save" class="bg-primary text-light pl-5 pr-5 pt-2 pb-2 w-25 float-right border-0 rounded">
              
            </form>
              </div>
            <?php 
            
      }
      }

            ?>
        

      <script type="text/javascript" src="js/jquery-3.4.1.min.js"></script>
      <script type="text/javascript" src="js/bootstrap.bundle.min.js"></script>
      <script src="Curricular.js"></script>
    </body>
</html>