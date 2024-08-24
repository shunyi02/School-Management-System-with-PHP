<html ng-app="myApp">
  <head>
    <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
    <title>Soft Skill </title>
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="Curricular.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.2/font/bootstrap-icons.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.0/css/all.css" integrity="sha384-lZN37f5QGtY3VHgisS14W3ExzMWZxybE1SJSEsQp9S+oqd12jhcu+A56Ebc1zFSJ" crossorigin="anonymous">
  </head>
  
    <body class="bg-light mb-5 pb-5">
    <?php
      include('connection.php');

      $userID = $_GET['userID'];
      $sql = "SELECT * FROM softskill where approved='0' and studentID = '".$userID."'";
      $result = $con->query($sql);
      $num = 1;

      ?>

      <form class="bg-transparent" id="stepForm" method="post" enctype="multipart/form-data">
            <h1 class="center">New Soft Skill</h1>
            
            <!-- One "tab" for each step in the form: -->
            
            <div class="tab">
             <form>
              <table class="table table-hover table-striped table-responsive-sm mt-5 mb-5">
              <thead class="thead-dark">
                    <tr>
                      <th scope="col">No</th>
                      <th scope="col">Soft Skill</th>
                      <th scope="col">Description</th>
                      <th scope="col">Image</th>
                      <th scope="col">Approve</th>
                      <th scope="col">Decline</th>
                    </tr>
                  </thead>
                <tbody>


      <?php

      if ($result->num_rows > 0) {
      // output data of each row
      while($row = $result->fetch_assoc()) {
      ?>
                  <tr>
                    <div class="form-group">
                    <th>
                        <?php echo $num ?>
                      </th>
                      <th>
                        <?php echo $row["softskill"] ?>
                      </th>
                      <th>
                        <?php echo $row["description"] ?>
                      </th>
                      <th>
                        <?php echo '<a href="viewImage.php?id='.$row["softskill_id"].'" target="_blank"><i class="bi bi-image-fill"></i></a>'; ?>
                      </th>
                      <th>
                      <button type="button" id="<?php echo $row['softskill_id'] ?>" class="btn btn-primary" onclick="AcceptC(this.id)"><i class="bi bi-check-lg"></i></button>
                      </th>
                      <th>
                      <button type="button" id="<?php echo $row['softskill_id'] ?>" class="btn btn-danger" onclick="DeclineC(this.id)"><i class="bi bi-x"></i></button>
                      </th>
                    </div>
                  </tr>
             
            <?php 
            $num++;
      }
      }

            ?>
        

        </tbody>
              </table>
            
            </form>
              </div>

      <script type="text/javascript" src="js/jquery-3.4.1.min.js"></script>
      <script type="text/javascript" src="js/bootstrap.bundle.min.js"></script>
      <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
      <script src="Curricular.js"></script>
      <script>
        function AcceptC(id){
          window.open("AcceptS.php?id="+id , '_self');
        }

        function DeclineC(id){

          swal({
  title: "Are you sure to decline this soft skill?",
  text: "",
  icon: "warning",
  buttons: true,
  dangerMode: true,
})
.then((willDelete) => {
  if (willDelete) {
    window.open("DeclineS.php?id="+id , '_self');
  }
});

        }
      </script>
    </body>
</html>