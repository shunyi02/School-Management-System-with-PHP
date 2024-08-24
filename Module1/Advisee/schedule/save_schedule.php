<?php 

if (session_status() === PHP_SESSION_NONE) {
  session_start();
}
require_once('db-connect.php');
if($_SERVER['REQUEST_METHOD'] !='POST'){
    echo "<script> alert('Error: No data to save.'); location.replace('./') </script>";
    $conn->close();
    exit;
}
extract($_POST);
$allday = isset($allday);

$stu = $_SESSION['userID'];
if(empty($id)){
    $sql = "INSERT INTO `appointment` (`title`,`apmtStart_date`,`apmtEnd_time`,`stu_id`) VALUES ('$title','$start_datetime','$end_datetime','$stu')";
}else{
    $sql = "UPDATE `schedule_list` set `title` = '{$title}',`apmtStart_date` = '{$start_datetime}', `apmtEnd_time` = '{$end_datetime}' where `stu_id` = '{$stu}'";
}
$save = $conn->query($sql);

if($save){
    echo "<script> alert('Appointment Successfully Send to Advisor.'); location.replace('./') </script>";
}else{
    echo "<pre>";
    echo "An Error occured.<br>";
    echo "Error: ".$conn->error."<br>";
    echo "SQL: ".$sql."<br>";
    echo "</pre>";
}
$conn->close();
