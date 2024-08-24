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

$lec = $_SESSION['userID'];
if(empty($id)){
    $sql = "INSERT INTO `schedule_list` (`title`,`start_datetime`,`end_datetime`,`Lec_ID`) VALUES ('$title','$start_datetime','$end_datetime','$lec')";
}else{
    $sql = "UPDATE `schedule_list` set `title` = '{$title}',`start_datetime` = '{$start_datetime}', `end_datetime` = '{$end_datetime}' where `Lec_ID` = '{$lec}'";
}
$save = $conn->query($sql);

if($save){
    echo "<script> alert('Schedule Successfully Saved.'); location.replace('./') </script>";
}else{
    echo "<pre>";
    echo "An Error occured.<br>";
    echo "Error: ".$conn->error."<br>";
    echo "SQL: ".$sql."<br>";
    echo "</pre>";
}
$conn->close();
