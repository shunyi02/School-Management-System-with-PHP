<?php
if (session_status() === PHP_SESSION_NONE) {
    session_start();
}


include('connection.php');
$userID= $_POST['userID'];

$_SESSION['userID'] = $userID;


?>

<head></head>
            <body><script>
            window.open("StudentInformation.php","_self");
            </script></body>