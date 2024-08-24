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
                        <li><a href="/Group4/MainMenu/StudentMenu.php">Home</a></li>
                        <li><a href="#">Appointment Booking</a></li>
                        <li><a href="/Group4/Module3/Student/StudentInformation.php">Student Information</a></li>
                        <li><a href="/Group4/Module5/Student.php">Student Monthly Progress Report</a></li>
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

        // query 1
        $sql = "SELECT * FROM aas.advisees where idadvisees = 1";
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
        
        // query 2
        $sql2 = "SELECT * FROM aas.advisors where idadvisors = 1";
        $result2 = $conn->query($sql2);

        if ($result2->num_rows > 0) {
            // output data of each row
            while($row = $result2->fetch_assoc()) {
                $name2 = $row["name"];
                $staff_id = $row["staff_id"];
                $faculty = $row["faculty"];
                $email = $row["email"];
                $extension = $row["extension"];
            }
        } else {
            echo "0 results";
        }

        

        $report_sql = "SELECT * FROM aas.reports WHERE idadvisees = 1 ORDER BY report_date DESC;";
        $report_result = $conn->query($report_sql);
        $pending = 0;

        foreach ($report_result as $r) {
            if($r['report_status'] == 'Pending Acknowledgement') {
                $pending++;
            }
        };
    ?>

    <div class="wrapper">

        <div class="nav">
            <p class="nav-p">Academic Advice Portal</p>
            <button class="nav-btn nav-btn-advisee" id="js-btn-advisee-noti-menu">ADVISEE<img src="assets/img/change_history.png" alt=""class="nav-btn-icon"></button>
            <div class="nav-noti-menu-advisee" id="js-advisee-noti-menu" style="display: none;">
                <a class="nav-noti-menu-a" href="/Group4/Module2/advisee.php"><div class="nav-noti-menu-item">Pending Academic Advice<br>Reports to Acknowledge (<span id="nav-noti-menu-num"><?php echo $pending ?></span>)</div></a>
                
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
                            <td><?php echo $name2 ?></td>
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

        <div class="block">

            <div class="block-title">Academic Advice Reports:</div>

                <table class="table-report">
                    <tr class="tr">
                        <th class="table-report-td table-report-th">Report Number</th>
                        <th class="table-report-td table-report-th">Report Date</th>
                        <th class="table-report-td table-report-th">Report Status</th>
                    </tr>
                    <?php
                        $i = 0;
                        foreach ($report_result as $r) {
                            echo "<tr>";
                            echo "<td class=\"table-report-td\"><a class=\"report-a\" href=\"/Group4/Module2/advisee-report.php?report_id=" . $r['idreports'] . "\">" . $r['report_number'] . "</a></td><td class=\"table-report-td\">" . $r['report_date'] . "</td><td class=\"table-report-td\">" . $r['report_status'] . "</td>";
                            echo "</tr>";
                            $i++;
                        }
                    ?>
                </table>

            </div>
            
        </div>

    </div>
</body>
<script>
    var btnNotiMenu = document.getElementById("js-btn-advisee-noti-menu");
    var notiMenu = document.getElementById("js-advisee-noti-menu");

    btnNotiMenu.addEventListener("click", function(){
        if (notiMenu.style.display === "none"){
            notiMenu.style.display = "block";
        }
        else{
            notiMenu.style.display = "none";
        }
    });

    // pending acknowledge number
    document.getElementById("nav-noti-menu-num", function() {
        notiMenu.style.diplay = "block";
    });
</script>
</html>