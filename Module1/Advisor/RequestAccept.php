<?php
if (session_status() === PHP_SESSION_NONE) {
    session_start();
}
$host     = 'localhost';
$username = 'root';
$password = '';
$dbname   = 'aas';


$conn = new mysqli($host, $username, $password, $dbname);
if (!$conn) {
    die("Cannot connect to the database." . $conn->error);
}

$name = $_GET['title'];
$sdate = $_GET['apmtStart_date'];
$edate = $_GET['apmtEnd_time'];
$stu = $_GET['stu_id'];
$id= $_POST['id'];


if (isset($_POST['Accept'])) {
    $query1 = "INSERT INTO `schedule_list`(`title`,`start_datetime`,`end_datetime`,`stu_ID`,`lec_id`) VALUES ('$name','$sdate','$edate','$stu','$lec')";
    $query2 = "Update appointment set IsAccept='1' where id='$id'";
    if ($conn->query($query1) === TRUE && $conn->query($query2)) {
        echo "<script> alert('Appointment Approved'); location.replace('/Group4/Module1/Advisor/schedule/index.php') </script>";
    } else {
        echo "<pre>";
        echo "An Error occured.<br>";
        echo "Error: " . $conn->error . "<br>";
        echo "SQL: " . $query1 . "<br>";
        echo "</pre>";
    }
}
if(iseet($_POST['Reject']))
{
    $query3 = "Delete FROM appointment where id='$id'";
    if ($conn->query($query3)) {
        echo "<script> alert('Appointment Approved'); location.replace('/Group4/Module1/Advisor/Request.php') </script>";
    } else {
        echo "<pre>";
        echo "An Error occured.<br>";
        echo "Error: " . $conn->error . "<br>";
        echo "SQL: " . $query1 . "<br>";
        echo "</pre>";
    }
}
?>