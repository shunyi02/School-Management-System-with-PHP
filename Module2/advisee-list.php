<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Academic Advice Portal</title>
    <link rel="icon" type="image/x-icon" href="assets/img/utar logo 1.png">
    <link rel="stylesheet" href="assets/css/styles.css">
    <style>
        body{
            padding-bottom: 5rem;
        }
    </style>
</head>
<body>
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

        // $report_sql = "select top 1 idreports from reports order by idreports desc;";

        $advisors_sql = "select * from advisors where idadvisors = 1;";

        $advisors_result = $conn->query($advisors_sql);
        if ($advisors_result->num_rows > 0) {
            while($row = $advisors_result->fetch_assoc()) {
                $advisor = $row;
            }
        }

        /* $null_comment = "Not Filled"; */
        $null_comment = "<input name='test' placeholder='fill me pls'></input>";

        function printForm($form_name){
            return "<input id='" . $form_name . "' name='" . $form_name . "' placeholder='" . $form_name . "'></input>";
        };
        
    ?>
    <div class="wrapper">

    <div class="block block-report-advisor">

<div class="block-title">Academic Advice Reports:</div>

    <table class="table-report">
        <tr class="tr">
        <th class="table-report-advisor-td table-report-advisor-th">Name</th>
            <th class="table-report-advisor-td table-report-advisor-th">Student ID</th>
            <th class="table-report-advisor-td table-report-advisor-th">Report Number</th>
            <th class="table-report-advisor-td table-report-advisor-th">Report Date</th>
            <th class="table-report-advisor-td table-report-advisor-th">Report Status</th>
        </tr>
        <?php
            foreach ($list_result as $r) {
                echo "<tr><td class=\"table-report-advisor-td\">" . $r['name'] ."</td><td class=\"table-report-advisor-td\">" . $r['student_id'] . "</td><td class=\"table-report-advisor-td\"><a class=\"report-a\" href=\"/Group4/Module2/advisor-report.php?report_id=" . $r['idreports'] . "\">" . $r['idadvisees']. $r['report_number'] ."</a></td><td class=\"table-report-advisor-td\">" . $r['report_date'] . "</td><td class=\"table-report-advisor-td\">" . $r['report_status'] . "</td></tr>";
            }
            $conn->close();
        ?>
    </table>

</div>
        

    </div>
</body>
