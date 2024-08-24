<?php
    
    $servername = "localhost:3306";
    $username = "root";
    $password = '';
    $dbname = "aas";

    // Create connection
    $conn = new mysqli($servername, $username, $password, $dbname);
    // Check connection
    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }
    $data = json_decode($_POST['data']);
    $sql = "update reports set report_status = 'Completed' where idreports = ".$data->report_id.";";
    $sql = $sql . "";

    
    $ok = $conn->query($sql);