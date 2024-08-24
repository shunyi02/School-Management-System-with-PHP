<?php

if (session_status() === PHP_SESSION_NONE) {
  session_start();
}

include('connection.php');
$StudentID = $_POST['StudentID'];
$Address = $_POST['Address'];
$Postcode = $_POST['Postcode'];
$State = $_POST['State'];
$Phone = $_POST['Phone'];

$sql = "UPDATE student SET address='".$Address."', postcode='".$Postcode."', state='".$State."', studentPhNo='".$Phone."' WHERE studentID = '".$StudentID."'";
$result = $con->query($sql);

?>

<head><script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script></head>
    <body>
    <script>


<?php
if ($con->query($sql) === TRUE) { 
    $_SESSION['userID'] = $StudentID;
?>
    
    swal('Update Successful!', '', 'success').then((value) => {

        window.open("StudentInformation.php","_self");

    });
    

    
  <?php 
  }

  else { 
  ?>
      swal('Update Failed!', '', 'error') 
      window.open("StudentInformation.php","_self");
    <?php } ?>

    </script>
    </body>
