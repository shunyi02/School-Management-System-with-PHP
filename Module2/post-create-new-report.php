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
    $advisee = $conn->query("select idadvisees from advisees where name = '".$data->advisee."';");
    if($advisee->num_rows != 1){
        http_response_code(404);
        return;
    }
    $advisee_id = null;
    foreach($advisee as $k => $v){
        $advisee_id = $v['idadvisees'];
        break;
    }
    $sql = "insert into reports (
                report_status,
                idadvisors,
                report_number,
                report_date,
                idadvisees,
                academic_performance,
                class_attendance,
                cocurricular_activities,
                areas_for_improvement,
                encountered_issues,
                other_comments
            ) values ('Pending Acknowledgement',1,";
    $leading = 0;
    foreach ($data as $k => $v){
        if($v != null){
            if($leading != 0){
                $sql = $sql . ',';
            };
            if($k == 'report_date'){
                $sql = $sql."'".date("Y/m/d")."'";
            }
            else if($k == 'advisee'){
                $sql = $sql."'".$advisee_id."'";
            }
            else{
                $sql = $sql."'".$v."'";
            }
            $leading++;
        }
    }
    $sql = $sql . ");";
    /* var_dump($sql); */

    $ok = $conn->query($sql);
?>