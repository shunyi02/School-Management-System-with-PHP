<?php
if (session_status() === PHP_SESSION_NONE) {
    session_start();
}


include('connection.php');
$studentID= $_POST['studentID'];

$_SESSION['studentID'] = $studentID;


?>

<head></head>
            <body><script>
            window.open("StudentInformation.php","_self");
            </script></body>