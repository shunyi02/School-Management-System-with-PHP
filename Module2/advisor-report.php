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

       /*  $sql = "SELECT reports.*, advisees.*, advisors.* FROM academic_advice_report.reports left join advisees on reports.idadvisees = advisees.idadvisees left join advisors on reports.idadvisors = advisors.idadvisors where idreports = ".$_REQUEST['report_id']." ;"; */
        $report_sql = "select * from reports where idreports = ".$_REQUEST['report_id']." ;";
        $report_result = $conn->query($report_sql);
        if ($report_result->num_rows > 0) {
            while($row = $report_result->fetch_assoc()) {
                $report = $row;
            }
        }

        $advisees_sql = "select * from advisees where idadvisees = ".$report['idadvisees']." ;";
        $advisors_sql = "select * from advisors where idadvisors = ".$report['idadvisors']." ;";

        $advisees_result = $conn->query($advisees_sql);
        if ($advisees_result->num_rows > 0) {
            while($row = $advisees_result->fetch_assoc()) {
                $advisee = $row;
            }
        }
        
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

        <div class="title">Academic Advice Report</div>

        <div class="block-report">

            <!-- left -->
            <div class="block-report-left">
                <table>
                    <tr class="tr">
                        <td class="field bold">Report number</td>
                        <td class="bold"><?php echo $report['report_number']?></td>
                    </tr>
                    <tr class="tr">
                        <td>Report Date</td>
                        <td><?php echo $report['report_date']?></td>
                    </tr>
                    <tr class="tr">
                        <td>Advisee</td>
                        <td><?php echo $advisee['name']?></td>
                    </tr>
                    <tr class="tr">
                        <td>Advisor</td>
                        <td><?php echo $advisor['name']?></td>
                    </tr>
                </table>
            </div>

            <!-- right -->
            <div class="block-report-right-container">
                <div class="block-report-right">
                    <div class="bold">REPORT STATUS</div>
                    <div class="block-report-right-status bold"><?php echo $report['report_status']?></div>
                </div>
            </div>
        </div>

        <div class="section block-report-content">

            <div class="bold">Report details:</div>

            <div class="block">
                <table>
                    <tr class="tr-2">
                        <td class="field-2">Academic Performance</td>
                        <td><?php echo $report['academic_performance'] ?? printForm('academic_performance')?></td>
                    </tr>
                    <tr class="tr-2">
                        <td>Class Attendance</td>
                        <td><?php echo $report['class_attendance'] ?? printForm('class_attendance')?></td>
                    </tr>
                    <tr class="tr-2">
                        <td>Co-curricular Activities</td>
                        <td><?php echo $report['cocurricular_activities'] ?? printForm('cocurricular_activities')?></td>
                    </tr>
                    <tr class="tr-2">
                        <td>Areas for Improvement</td>
                        <td><?php echo $report['areas_for_improvement'] ?? printForm('areas_for_improvement')?></td>
                    </tr>
                    <tr class="tr-2">
                        <td>Encountered issue (if any)</td>
                        <td><?php echo $report['encountered_issues'] ?? printForm('encountered_issues')?></td>
                    </tr>
                    <tr class="tr-2">
                        <td>Other comments</td>
                        <td><?php echo $report['other_comments'] ?? printForm('other_comments')?></td>
                    </tr>
                </table>

            </div>

        </div>

        <div class="section block-ack">

            <!-- left -->
            <div class="block-ack-left">
                Report created and signed by:
                <br><br>
                <?php echo $advisor['name'] ?>
                <br>
                <?php echo date("Y/m/d") ?>
            </div>

            <!-- right -->
            <div class="block-ack-right">
                Report acknowledged by:
                <br><br>
                <button class="block-ack-btn" id="btn-ack">Submit</button>
            </div>

        </div>

    </div>
</body>
<script>
    function postReport(){
        data = {
            "report_id" : <?php echo $_REQUEST['report_id'] ?>,
            "academic_performance"      : document.getElementById('academic_performance') ? document.getElementById('academic_performance').value : null,
            "class_attendance"          : document.getElementById('class_attendance') ? document.getElementById('class_attendance').value : null,
            "cocurricular_activities"   : document.getElementById('cocurricular_activities') ? document.getElementById('cocurricular_activities').value : null,
            "areas_for_improvement"     : document.getElementById('areas_for_improvement') ? document.getElementById('areas_for_improvement').value : null,
            "encountered_issues"        : document.getElementById('encountered_issues') ? document.getElementById('encountered_issues').value : null,
            "other_comments"            : document.getElementById('other_comments') ? document.getElementById('other_comments').value : null,
        }

        post = JSON.stringify(data);
        console.log(post);
        url = "/Group4/Module2/post-report.php";
        xhr = new XMLHttpRequest();

        xhr.open('POST', url, true)
        xhr.setRequestHeader("Content-Type", "application/x-www-form-urlencoded");
        xhr.send("data="+post);
        
        xhr.onload = function () {
            if(xhr.status === 200) {
                alert('Submitted');
                window.location.reload();
            }
        }
    }
    document.getElementById("btn-ack").addEventListener("click", postReport);

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