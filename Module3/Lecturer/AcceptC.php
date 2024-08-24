<?php
include('connection.php');


$id = $_GET['id'];
$sql = "Update curricular set approved=1 where AutoKey = '$id'";  


$sql1 = "SELECT * FROM curricular where AutoKey = '".$id."'";
$result = $con->query($sql1);
if ($result->num_rows > 0) {
// output data of each row
while($row = $result->fetch_assoc()) {
$userID = $row['studentID'];
}
}


?>

<head><script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script></head>
            <body>
            <script>
<?php
if ($con->query($sql) === TRUE) { ?>
    swal('Update Successful!', 'Please notice your student.', 'success').then((value) => {
                  window.open('curricular.php?userID=<?php echo $userID ?>','_self');
                });
<?php
}
else{ ?>
    swal('Update Failed!', 'There was an error. Please try again later', 'error').then((value) => {
                  window.open('curricular.php?userID=<?php echo $userID ?>','_self');
                });
<?php }
?>

</script>
            </body>
  