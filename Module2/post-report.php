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
    $sql = "update reports set ";
    $leading = 0;
    foreach ($data as $k => $v){
        if($k != 'report_id'){
            if($v != null){
                if($leading != 0){
                    $sql = $sql . ',';
                };
                $sql = $sql . $k." = '".$v."'";
                $leading++;
            }
        }
    }
    $sql = $sql . ", report_status = 'Pending Acknowledgement' where idreports = ".$data->report_id.";";

    
    $ok = $conn->query($sql);