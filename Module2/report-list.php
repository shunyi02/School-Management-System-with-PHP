<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Academic Advice Portal</title>
    <link rel="stylesheet" href="assets/css/styles.css">
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

        $sql = "SELECT * FROM aas.advisees where idadvisees = ".$_REQUEST['advisee_id'].";";
        $result = $conn->query($sql);

        if ($result->num_rows > 0) {
            // output data of each row
            while($row = $result->fetch_assoc()) {
                $name1 = $row["name"];
                $student_id = $row["student_id"];
                $course = $row["course"];
                $intake = $row["intake"];
                $faculty = $row["faculty"];
            }
        } else {
            echo "0 results";
        }

        $list_sql = "SELECT * FROM aas.reports where idadvisees = " . $_REQUEST['advisee_id'] . " order by report_date desc, report_status desc";
        $list_result = $conn->query($list_sql);
    ?>

    <div class="wrapper">

        <div class="block-back">
            <a class="btn-back-a" href="/Group4/Module2/advisor.php"><div class="btn-back">< Back</div></a>
        </div>

        <div class="nav">
            <p class="nav-p">Academic Advice Portal</p>
            <button class="nav-btn nav-btn-advisor" id="js-btn-advisor-noti-menu">ADVISOR<img src="assets/img/change_history.png" alt=""class="nav-btn-icon"></button>
            <div class="nav-noti-menu-advisor" id="js-advisor-noti-menu" style="display: none;">
                <a class="nav-noti-menu-a" href="/Group4/Module2/login.php">Logout</a>
            </div>
        </div>

        <div class="block block-advisee">

            <div class="block-title">Academic Advisee Details:</div>

            <div class="block-row">
                
                <!-- left -->
                <div class="block-left">
                    <img src="assets/img/<?php echo $student_id ?>.png" alt="" class="block-left-img">
                </div>

                <!-- right -->
                <div class="block-right">
                    <table>
                        <tr class="tr">
                            <td class="field">Name</td>
                            <td><?php echo $name1 ?></td>
                        </tr>
                        <tr class="tr">
                            <td>Student ID</td>
                            <td><?php echo $student_id ?></td>
                        </tr>
                        <tr class="tr">
                            <td>Course</td>
                            <td><?php echo $course ?></td>
                        </tr>
                        <tr class="tr">
                            <td>Intake</td>
                            <td><?php echo $intake ?></td>
                        </tr>
                        <tr class="tr">
                            <td>Faculty</td>
                            <td><?php echo $faculty ?></td>
                        </tr>
                    </table>
                </div>

            </div>

        </div>

        <div class="block block-report-advisor">

            <div class="block-title">Academic Advice Reports:</div>

                <table class="table-report">
                    <tr class="tr">
                        <th class="table-report-advisor-td table-report-advisor-th">Report Number</th>
                        <th class="table-report-advisor-td table-report-advisor-th">Report Date</th>
                        <th class="table-report-advisor-td table-report-advisor-th">Report Status</th>
                    </tr>
                    <?php
                        foreach ($list_result as $r) {
                            echo "<tr><td class=\"table-report-advisor-td\"><a class=\"report-a\" href=\"/Group4/Module2/advisor-report.php?report_id=" . $r['idreports'] . "\">" . $r['report_number'] . "</a></td><td class=\"table-report-advisor-td\">" . $r['report_date'] . "</td><td class=\"table-report-advisor-td\">" . $r['report_status'] . "</td></tr>";
                        }
                        $conn->close();
                    ?>
                </table>

            </div>

            <div class="block block-create">
                <a class="btn-create-a" href="/Group4/Module2/advisor-create-new-report.php"><div class="btn-create">Create new report</div></a>
            </div>
            
        </div>

    </div>

</body>
</html>