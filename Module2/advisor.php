<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Academic Advice Portal</title>
    <link rel="stylesheet" type = "text/css" href="styles.css">
</head>
<body>

<div class="menu-wrap">
        <input type="checkbox" class="toggler">
        <div class="hamburger"><div></div></div>
        <div class="menu">
            <div>
                <div>
                    <ul class="option">
                        <li><a href="/Group4/MainMenu/LectureMenu.php">Home</a></li>
                        <li><a href="#">Appointment Booking</a></li>
                        <li><a href="/Group4/Module3/Lecturer/search.html">Student Information</a></li>
                        <li><a href="/Group4/Module5/Lecturer.php">Student Monthly Progress Report</a></li>
                        <li><a href="#">Student Academic Performance</a></li>
                        <li><a href="/Group4/MainMenu/index.html">Log Out</a></li>
                    </ul>
                </div>
            </div>
        </div>
    </div>

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

        $sql = "SELECT * FROM aas.advisors where idadvisors = 1";
        $result = $conn->query($sql);

        if ($result->num_rows > 0) {
            // output data of each row
            while($row = $result->fetch_assoc()) {
                $name = $row["name"];
                $staff_id = $row["staff_id"];
                $faculty = $row["faculty"];
                $email = $row["email"];
                $extension = $row["extension"];
            }
        } else {
            echo "0 results";
        }

        $report_sql = "SELECT  advisees.*, reports.*
            FROM    advisees INNER JOIN
            (
                SELECT  idadvisees,
                        MAX(report_date) MaxDate
                FROM    reports
                GROUP BY idadvisees
            ) MaxDates ON advisees.idadvisees = MaxDates.idadvisees
            INNER JOIN
            reports ON   MaxDates.idadvisees = reports.idadvisees
                        AND MaxDates.MaxDate = reports.report_date
            ORDER BY reports.report_status desc;";
            $report_result = $conn->query($report_sql);

        $list_sql = "SELECT reports.*, advisees.* FROM aas.reports inner join aas.advisees on reports.idadvisees=advisees.idadvisees where reports.idadvisors = 1 order by reports.report_status desc";
        $list_result = $conn->query($list_sql);
    ?>

    <div class="wrapper">


        <div class="nav">
            <p class="nav-p">Academic Advice Portal</p>
            <button class="nav-btn nav-btn-advisor" id="js-btn-advisor-noti-menu">ADVISOR<img src="assets/img/change_history.png" alt=""class="nav-btn-icon"></button>
            <div class="nav-noti-menu-advisor" id="js-advisor-noti-menu" style="display: none;">
                <a class="nav-noti-menu-a" href="/Group4/Module2/login.php">Logout</a>
            </div>
        </div>

        <div class="block block-advisor">

            <div class="block-title">Academic Advisor Details:</div>

            <div class="block-row">
                
                <!-- left -->
                <div class="block-left">
                    <img src="assets/img/<?php echo $staff_id ?>.png" alt="" class="block-left-img">
                </div>

                <!-- right -->
                <div class="block-right">
                    <table>
                        <tr class="tr">
                            <td class="field">Name</td>
                            <td><?php echo $name ?></td>
                        </tr>
                        <tr class="tr">
                            <td>Staff ID</td>
                            <td><?php echo $staff_id ?></td>
                        </tr>
                        <tr class="tr">
                            <td>Faculty</td>
                            <td><?php echo $faculty ?></td>
                        </tr>
                        <tr class="tr">
                            <td>Email</td>
                            <td><?php echo $email ?></td>
                        </tr>
                        <tr class="tr">
                            <td>Extension</td>
                            <td><?php echo $extension ?></td>
                        </tr>
                    </table>
                </div>

            </div>

        </div>

        <div class="block block-all-advisees">

            <div class="block-title">Academic Advisees:</div>

            <table class="table-all-advisees">
                <tr class="tr">
                    <th class="table-all-advisees-td table-all-advisees-th">Name</th>
                    <th class="table-all-advisees-td table-all-advisees-th">Student ID</th>
                    <th class="table-all-advisees-td table-all-advisees-th">Latest Report Status</th>
                </tr>
                <?php
                    foreach ($report_result as $r) {
                        echo "<tr>
                        <td class=\"table-all-advisees-td\"><a class=\"report-a\" href=\"/Group4/Module2/report-list.php?advisee_id=" 
                        . $r['idadvisees'] . "\">" . $r['name'] . "</a></td><td class=\"table-all-advisees-td\">" 
                        . $r['student_id'] . "</td><td class=\"table-all-advisees-td\">" . $r['report_status'] . "</td></tr>";
                    }
                ?>
            </table>


        </div>

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
            
            <div class="block block-create">
                <a class="btn-create-a" href="/Group4/Module2/advisor-create-new-report.php"><div class="btn-create">Create new report</div></a>
            </div>
            
        </div>

    </div>

</body>
<script>
    var btnNotiMenu = document.getElementById("js-btn-advisor-noti-menu");
    var notiMenu = document.getElementById("js-advisor-noti-menu");

    btnNotiMenu.addEventListener("click", function(){
        if (notiMenu.style.display === "none"){
            notiMenu.style.display = "block";
        }
        else{
            notiMenu.style.display = "none";
        }
    });
</script>
</html>