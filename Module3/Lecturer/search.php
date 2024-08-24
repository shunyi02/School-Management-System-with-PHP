<?php

if (session_status() === PHP_SESSION_NONE) {
  session_start();
}

?>


<head>
    <link rel="stylesheet" href="ShowStudent.css">
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.2/font/bootstrap-icons.css">
    <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <script type="text/javascript" src="js/jquery-3.4.1.min.js"></script>
    <script type="text/javascript" src="js/bootstrap.bundle.min.js"></script>
    <style>
          #blink {
                animation: blinker 1.5s linear infinite;
                color: red;
                font-family: sans-serif;
            }
            @keyframes blinker {
                50% {
                    opacity: 0;
                }
            }
        </style>
</head>
<body class="bg-light">
<button class="border-0 rounded-circle bg-transparent mt-3 ml-3" onclick="window.open('search.html')"><i class="bi bi-arrow-left" style="font-size:50px;"></i></button>

<div class="container">
  <table class="table table-borderless ">
    <tbody>

<?php

include('connection.php');

$keyword = $_POST['search'];

$sql = "SELECT * FROM student where studentID like '%".$keyword."%' or studentName like '%".$keyword."%'";

$result = $con->query($sql);


    if ($result->num_rows > 0) {
      // output data of each row

      $col=0;

        while($row = $result->fetch_assoc()) {

          if($col%2==0){
           ?> <tr> <?php
          }

?>
<td>
  <form id="stepForm" action="SearchExtension.php" method = "POST">
  <div class="grid-7 element-animation mt-5 mx-auto d-block float-none">
    <div class="card color-card-2 d-flex justify-content-center text-center">
      <img src="data:image/jpg;charset=utf8;base64,<?php echo base64_encode($row['Image']); ?>" alt="profile-pic" class="border profile mx-auto d-block">
      <h1 class="title-2"><?php echo $row['studentName'] ?></h1>
      <p class="title-2"><?php echo $row['studentID'] ?></p>
      <?php
      $sql1 = "SELECT count(*) as count from curricular where approved=0 and studentID = '".$row['studentID']."'";
      $sql2 = "SELECT count(*) as count from softskill where approved=0 and studentID = '".$row['studentID']."'";

      $result1 = $con->query($sql1);
      $result2 = $con->query($sql2);
      $row1 = $result1->fetch_assoc();
      $row2 = $result2->fetch_assoc();
      
      if($row1["count"]>0 || $row2["count"]>0){
        ?><p class="title-2" style="font-size:14px; color: red" id="blink">New curricular or soft skill is pending for your approval.</p><?php
      }

      ?>
      <input type="hidden" name="studentID" value="<?php echo $row['studentID'] ?>">
      <div class="text-center">
      <button type="submit" class="button mt-3 mb-5">Show Information</button>
        </div>
    </div>
  </div>
  </form>
</td>

<?php

if($col%2==1){
  ?> </tr> <?php
 }

 $col++;

        }
    }
    else{ ?>
      <script>
      swal('No Result Found!', 'Please search agian.', 'info').then((value) => {
                  window.open('search.html','_self');
                });
      </script>
<?php    }

?>

</tbody>
</table>

</div>

<link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
<script defer src="https://use.fontawesome.com/releases/v5.0.8/js/all.js"></script>
<link href="https://fonts.googleapis.com/css?family=Roboto:100,300,400" rel="stylesheet">


</body>