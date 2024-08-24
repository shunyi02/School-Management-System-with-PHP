<?php
    $servername = "localhost:3306";
    $username = "root";
    $password = "";
    $dbname = "aas";

    // Create connection
    $conn = new mysqli($servername, $username, $password, $dbname);
    // Check connection
    if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
    }

    if (session_status() === PHP_SESSION_NONE) {
        session_start();
    }

    $userID = $_SESSION['userID'];

?>
<!DOCTYPE HTML>
<html lang="en">
<head> 
    <meta charset="UTF-8">
    <title>Report Analysis</title> 
    <script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>
    <link rel = "stylesheet" type = "text/css" href = "style1.css">
    <style>
        div {
            background-color: none;
        }
    </style>
    <script type="text/javascript">
        google.charts.load('current', {'packages':['corechart']});
        google.charts.setOnLoadCallback(drawChart);

        function drawChart() {
            var data = google.visualization.arrayToDataTable([
                ['Month', 'asm progress %'],
                <?php
                        $sql = "SELECT stu.studentName, s.month, s.question1, s.question2, s.question3, s.question4, s.question5, s.question6, c.lecID
                        FROM student stu, survey s, course c, lecturer l WHERE stu.studentID = s.stu_id AND s.course_id = c.course_id 
                        AND l.lec_id = c.lecID AND s.month = 'Month 1' AND stu.studentName = 'Jack Lim' AND c.lecID = '$userID'";
                        $result = $conn->query($sql);
                        while($row1 = $result->fetch_assoc()) {
                            echo "['Month 1'," . $row1['question6'] . "],";
                        }
        
                        $sql = "SELECT stu.studentName, s.month, s.question1, s.question2, s.question3, s.question4, s.question5, s.question6, c.lecID
                        FROM student stu, survey s, course c, lecturer l WHERE stu.studentID = s.stu_id AND s.course_id = c.course_id 
                        AND l.lec_id = c.lecID AND s.month = 'Month 2' AND stu.studentName = 'Jack Lim' AND c.lecID = '$userID'";
                        $result = $conn->query($sql);
                        while($row2 = $result->fetch_assoc()) {
                            echo "['Month 2'," . $row2['question6'] . "],";
                        }
                    
                        $sql = "SELECT stu.studentName, s.month, s.question1, s.question2, s.question3, s.question4, s.question5, s.question6, c.lecID
                        FROM student stu, survey s, course c, lecturer l WHERE stu.studentID = s.stu_id AND s.course_id = c.course_id 
                        AND l.lec_id = c.lecID AND s.month = 'Month 3' AND stu.studentName = 'Jack Lim' AND c.lecID = '$userID'";
                        $result = $conn->query($sql);
                        while($row3 = $result->fetch_assoc()) {
                            echo "['Month 3'," . $row3['question6'] . "],";
                        }
                    
                        $sql = "SELECT stu.studentName, s.month, s.question1, s.question2, s.question3, s.question4, s.question5, s.question6, c.lecID
                        FROM student stu, survey s, course c, lecturer l WHERE stu.studentID = s.stu_id AND s.course_id = c.course_id 
                        AND l.lec_id = c.lecID AND s.month = 'Month 4' AND stu.studentName = 'Jack Lim' AND c.lecID = '$userID'";
                        $result = $conn->query($sql);
                        while($row4 = $result->fetch_assoc()) {
                            echo "['Month 4'," . $row4['question6'] . "],";
                        }

                        $sql = "SELECT stu.studentName, s.month, s.question1, s.question2, s.question3, s.question4, s.question5, s.question6, c.lecID
                        FROM student stu, survey s, course c, lecturer l WHERE stu.studentID = s.stu_id AND s.course_id = c.course_id 
                        AND l.lec_id = c.lecID AND s.month = 'Month 5' AND stu.studentName = 'Jack Lim' AND c.lecID = '$userID'";
                        $result = $conn->query($sql);
                        while($row5 = $result->fetch_assoc()) {
                            echo "['Month 5'," . $row5['question6'] . "],";
                        }

                ?>
            ]);

            var options = {
            title: 'Student: Jack Lim Assignment Progress',
            hAxis: {
                    title: 'Month'
                },
                vAxis: {
                    title: 'Percentage'
                },   
            legend: { position: 'bottom' }
            };

            var chart = new google.visualization.LineChart(document.getElementById('curve_chart'));

            chart.draw(data, options);
        }

        google.charts.load('current', {'packages':['corechart']});
        google.charts.setOnLoadCallback(drawChart1);

        function drawChart1() {
            var data1 = google.visualization.arrayToDataTable([
                ['Month', 'asm progress %'],
                <?php
                        $sql = "SELECT stu.studentName, s.month, s.question1, s.question2, s.question3, s.question4, s.question5, s.question6, c.lecID
                        FROM student stu, survey s, course c, lecturer l WHERE stu.studentID = s.stu_id AND s.course_id = c.course_id 
                        AND l.lec_id = c.lecID AND s.month = 'Month 1' AND stu.studentName = 'King Ong' AND c.lecID = '$userID'";
                        $result = $conn->query($sql);
                        while($row1 = $result->fetch_assoc()) {
                            echo "['Month 1'," . $row1['question6'] . "],";
                        }
        
                        $sql = "SELECT stu.studentName, s.month, s.question1, s.question2, s.question3, s.question4, s.question5, s.question6, c.lecID
                        FROM student stu, survey s, course c, lecturer l WHERE stu.studentID = s.stu_id AND s.course_id = c.course_id 
                        AND l.lec_id = c.lecID AND s.month = 'Month 2' AND stu.studentName = 'King Ong' AND c.lecID = '$userID'";
                        $result = $conn->query($sql);
                        while($row2 = $result->fetch_assoc()) {
                            echo "['Month 2'," . $row2['question6'] . "],";
                        }
                    
                        $sql = "SELECT stu.studentName, s.month, s.question1, s.question2, s.question3, s.question4, s.question5, s.question6, c.lecID
                        FROM student stu, survey s, course c, lecturer l WHERE stu.studentID = s.stu_id AND s.course_id = c.course_id 
                        AND l.lec_id = c.lecID AND s.month = 'Month 3' AND stu.studentName = 'King Ong' AND c.lecID = '$userID'";
                        $result = $conn->query($sql);
                        while($row3 = $result->fetch_assoc()) {
                            echo "['Month 3'," . $row3['question6'] . "],";
                        }
                    
                        $sql = "SELECT stu.studentName, s.month, s.question1, s.question2, s.question3, s.question4, s.question5, s.question6, c.lecID
                        FROM student stu, survey s, course c, lecturer l WHERE stu.studentID = s.stu_id AND s.course_id = c.course_id 
                        AND l.lec_id = c.lecID AND s.month = 'Month 4' AND stu.studentName = 'King Ong' AND c.lecID = '$userID'";
                        $result = $conn->query($sql);
                        while($row4 = $result->fetch_assoc()) {
                            echo "['Month 4'," . $row4['question6'] . "],";
                        }

                        $sql = "SELECT stu.studentName, s.month, s.question1, s.question2, s.question3, s.question4, s.question5, s.question6, c.lecID
                        FROM student stu, survey s, course c, lecturer l WHERE stu.studentID = s.stu_id AND s.course_id = c.course_id 
                        AND l.lec_id = c.lecID AND s.month = 'Month 5' AND stu.studentName = 'King Ong' AND c.lecID = '$userID'";
                        $result = $conn->query($sql);
                        while($row5 = $result->fetch_assoc()) {
                            echo "['Month 5'," . $row5['question6'] . "],";
                        }

                ?>
            ]);

            var options1 = {
            title: 'Student: King Ong Assignment Progress',
            hAxis: {
                    title: 'Month'
                },
                vAxis: {
                    title: 'Percentage'
                },   
            legend: { position: 'bottom' }
            };

            var chart1 = new google.visualization.LineChart(document.getElementById('curve_chart1'));

            chart1.draw(data1, options1);
        }

        google.charts.load('current', {'packages':['corechart']});
        google.charts.setOnLoadCallback(drawChart2);

        function drawChart2() {
            var data2 = google.visualization.arrayToDataTable([
                ['Month', 'asm progress %'],
                    <?php
                        $sql = "SELECT stu.studentName, s.month, s.question1, s.question2, s.question3, s.question4, s.question5, s.question6, c.lecID
                        FROM student stu, survey s, course c, lecturer l WHERE stu.studentID = s.stu_id AND s.course_id = c.course_id 
                        AND l.lec_id = c.lecID AND s.month = 'Month 1' AND stu.studentName = 'Queen KK' AND c.lecID = '$userID'";
                        $result = $conn->query($sql);
                        while($row1 = $result->fetch_assoc()) {
                            echo "['Month 1'," . $row1['question6'] . "],";
                        }
        
                        $sql = "SELECT stu.studentName, s.month, s.question1, s.question2, s.question3, s.question4, s.question5, s.question6, c.lecID
                        FROM student stu, survey s, course c, lecturer l WHERE stu.studentID = s.stu_id AND s.course_id = c.course_id 
                        AND l.lec_id = c.lecID AND s.month = 'Month 2' AND stu.studentName = 'Queen KK' AND c.lecID = '$userID'";
                        $result = $conn->query($sql);
                        while($row2 = $result->fetch_assoc()) {
                            echo "['Month 2'," . $row2['question6'] . "],";
                        }
                    
                        $sql = "SELECT stu.studentName, s.month, s.question1, s.question2, s.question3, s.question4, s.question5, s.question6, c.lecID
                        FROM student stu, survey s, course c, lecturer l WHERE stu.studentID = s.stu_id AND s.course_id = c.course_id 
                        AND l.lec_id = c.lecID AND s.month = 'Month 3' AND stu.studentName = 'Queen KK' AND c.lecID = '$userID'";
                        $result = $conn->query($sql);
                        while($row3 = $result->fetch_assoc()) {
                            echo "['Month 3'," . $row3['question6'] . "],";
                        }
                    
                        $sql = "SELECT stu.studentName, s.month, s.question1, s.question2, s.question3, s.question4, s.question5, s.question6, c.lecID
                        FROM student stu, survey s, course c, lecturer l WHERE stu.studentID = s.stu_id AND s.course_id = c.course_id 
                        AND l.lec_id = c.lecID AND s.month = 'Month 4' AND stu.studentName = 'Queen KK' AND c.lecID = '$userID'";
                        $result = $conn->query($sql);
                        while($row4 = $result->fetch_assoc()) {
                            echo "['Month 4'," . $row4['question6'] . "],";
                        }

                        $sql = "SELECT stu.studentName, s.month, s.question1, s.question2, s.question3, s.question4, s.question5, s.question6, c.lecID
                        FROM student stu, survey s, course c, lecturer l WHERE stu.studentID = s.stu_id AND s.course_id = c.course_id 
                        AND l.lec_id = c.lecID AND s.month = 'Month 5' AND stu.studentName = 'Queen KK' AND c.lecID = '$userID'";
                        $result = $conn->query($sql);
                        while($row5 = $result->fetch_assoc()) {
                            echo "['Month 5'," . $row5['question6'] . "],";
                        }

                    ?>
            ]);

            var options2 = {
                title: 'Student: Queen KK Assignment Progress',
                hAxis: {
                    title: 'Month'
                },
                vAxis: {
                    title: 'Percentage'
                },   
            legend: { position: 'bottom' }
            };

            var chart2 = new google.visualization.LineChart(document.getElementById('curve_chart2'));

            chart2.draw(data2, options2);
        }

        google.charts.load('current', {'packages':['corechart']});
        google.charts.setOnLoadCallback(drawChart3);

        function drawChart3() {
            var data3 = google.visualization.arrayToDataTable([
                ['Month', 'asm progress %'],
                <?php
                        $sql = "SELECT stu.studentName, s.month, s.question1, s.question2, s.question3, s.question4, s.question5, s.question6, c.lecID
                        FROM student stu, survey s, course c, lecturer l WHERE stu.studentID = s.stu_id AND s.course_id = c.course_id 
                        AND l.lec_id = c.lecID AND s.month = 'Month 1' AND stu.studentName = 'Razak bin Osman' AND c.lecID = '$userID'";
                        $result = $conn->query($sql);
                        while($row1 = $result->fetch_assoc()) {
                            echo "['Month 1'," . $row1['question6'] . "],";
                        }
        
                        $sql = "SELECT stu.studentName, s.month, s.question1, s.question2, s.question3, s.question4, s.question5, s.question6, c.lecID
                        FROM student stu, survey s, course c, lecturer l WHERE stu.studentID = s.stu_id AND s.course_id = c.course_id 
                        AND l.lec_id = c.lecID AND s.month = 'Month 2' AND stu.studentName = 'Razak bin Osman' AND c.lecID = '$userID'";
                        $result = $conn->query($sql);
                        while($row2 = $result->fetch_assoc()) {
                            echo "['Month 2'," . $row2['question6'] . "],";
                        }
                    
                        $sql = "SELECT stu.studentName, s.month, s.question1, s.question2, s.question3, s.question4, s.question5, s.question6, c.lecID
                        FROM student stu, survey s, course c, lecturer l WHERE stu.studentID = s.stu_id AND s.course_id = c.course_id 
                        AND l.lec_id = c.lecID AND s.month = 'Month 3' AND stu.studentName = 'Razak bin Osman' AND c.lecID = '$userID'";
                        $result = $conn->query($sql);
                        while($row3 = $result->fetch_assoc()) {
                            echo "['Month 3'," . $row3['question6'] . "],";
                        }
                    
                        $sql = "SELECT stu.studentName, s.month, s.question1, s.question2, s.question3, s.question4, s.question5, s.question6, c.lecID
                        FROM student stu, survey s, course c, lecturer l WHERE stu.studentID = s.stu_id AND s.course_id = c.course_id 
                        AND l.lec_id = c.lecID AND s.month = 'Month 4' AND stu.studentName = 'Razak bin Osman' AND c.lecID = '$userID'";
                        $result = $conn->query($sql);
                        while($row4 = $result->fetch_assoc()) {
                            echo "['Month 4'," . $row4['question6'] . "],";
                        }

                        $sql = "SELECT stu.studentName, s.month, s.question1, s.question2, s.question3, s.question4, s.question5, s.question6, c.lecID
                        FROM student stu, survey s, course c, lecturer l WHERE stu.studentID = s.stu_id AND s.course_id = c.course_id 
                        AND l.lec_id = c.lecID AND s.month = 'Month 5' AND stu.studentName = 'Razak bin Osman' AND c.lecID = '$userID'";
                        $result = $conn->query($sql);
                        while($row5 = $result->fetch_assoc()) {
                            echo "['Month 5'," . $row5['question6'] . "],";
                        }

                ?>
            ]);

            var options3 = {
            title: 'Student: Razak bin Osman Assignment Progress',
            hAxis: {
                    title: 'Month'
                },
                vAxis: {
                    title: 'Percentage'
                },   
            legend: { position: 'bottom' }
            };

            var chart3 = new google.visualization.LineChart(document.getElementById('curve_chart3'));

            chart3.draw(data3, options3);
        }

        google.charts.load('current', {'packages':['corechart']});
        google.charts.setOnLoadCallback(drawChart4);

        function drawChart4() {
            var data4 = google.visualization.arrayToDataTable([
                ['Month', 'asm progress %'],
                <?php
                        $sql = "SELECT stu.studentName, s.month, s.question1, s.question2, s.question3, s.question4, s.question5, s.question6, c.lecID
                        FROM student stu, survey s, course c, lecturer l WHERE stu.studentID = s.stu_id AND s.course_id = c.course_id 
                        AND l.lec_id = c.lecID AND s.month = 'Month 1' AND stu.studentName = 'Aisha Nur Aiman' AND c.lecID = '$userID'";
                        $result = $conn->query($sql);
                        while($row1 = $result->fetch_assoc()) {
                            echo "['Month 1'," . $row1['question6'] . "],";
                        }
        
                        $sql = "SELECT stu.studentName, s.month, s.question1, s.question2, s.question3, s.question4, s.question5, s.question6, c.lecID
                        FROM student stu, survey s, course c, lecturer l WHERE stu.studentID = s.stu_id AND s.course_id = c.course_id 
                        AND l.lec_id = c.lecID AND s.month = 'Month 2' AND stu.studentName = 'Aisha Nur Aiman' AND c.lecID = '$userID'";
                        $result = $conn->query($sql);
                        while($row2 = $result->fetch_assoc()) {
                            echo "['Month 2'," . $row2['question6'] . "],";
                        }
                    
                        $sql = "SELECT stu.studentName, s.month, s.question1, s.question2, s.question3, s.question4, s.question5, s.question6, c.lecID
                        FROM student stu, survey s, course c, lecturer l WHERE stu.studentID = s.stu_id AND s.course_id = c.course_id 
                        AND l.lec_id = c.lecID AND s.month = 'Month 3' AND stu.studentName = 'Aisha Nur Aiman' AND c.lecID = '$userID'";
                        $result = $conn->query($sql);
                        while($row3 = $result->fetch_assoc()) {
                            echo "['Month 3'," . $row3['question6'] . "],";
                        }
                    
                        $sql = "SELECT stu.studentName, s.month, s.question1, s.question2, s.question3, s.question4, s.question5, s.question6, c.lecID
                        FROM student stu, survey s, course c, lecturer l WHERE stu.studentID = s.stu_id AND s.course_id = c.course_id 
                        AND l.lec_id = c.lecID AND s.month = 'Month 4' AND stu.studentName = 'Aisha Nur Aiman' AND c.lecID = '$userID'";
                        $result = $conn->query($sql);
                        while($row4 = $result->fetch_assoc()) {
                            echo "['Month 4'," . $row4['question6'] . "],";
                        }

                        $sql = "SELECT stu.studentName, s.month, s.question1, s.question2, s.question3, s.question4, s.question5, s.question6, c.lecID
                        FROM student stu, survey s, course c, lecturer l WHERE stu.studentID = s.stu_id AND s.course_id = c.course_id 
                        AND l.lec_id = c.lecID AND s.month = 'Month 5' AND stu.studentName = 'Aisha Nur Aiman' AND c.lecID = '$userID'";
                        $result = $conn->query($sql);
                        while($row5 = $result->fetch_assoc()) {
                            echo "['Month 5'," . $row5['question6'] . "],";
                        }

                ?>
            ]);

            var options4 = {
            title: 'Student: Aisha Nur Aiman Assignment Progress',
            hAxis: {
                    title: 'Month'
                },
                vAxis: {
                    title: 'Percentage'
                },   
            legend: { position: 'bottom' }
            };

            var chart4 = new google.visualization.LineChart(document.getElementById('curve_chart4'));

            chart4.draw(data4, options4);
        }

        google.charts.load('current', {'packages':['corechart']});
        google.charts.setOnLoadCallback(drawChart5);

        function drawChart5() {
            var data5 = google.visualization.arrayToDataTable([
                ['Month', 'asm progress %'],
                <?php
                        $sql = "SELECT stu.studentName, s.month, s.question1, s.question2, s.question3, s.question4, s.question5, s.question6, c.lecID
                        FROM student stu, survey s, course c, lecturer l WHERE stu.studentID = s.stu_id AND s.course_id = c.course_id 
                        AND l.lec_id = c.lecID AND s.month = 'Month 1' AND stu.studentName = 'Li Ah Bu' AND c.lecID = '$userID'";
                        $result = $conn->query($sql);
                        while($row1 = $result->fetch_assoc()) {
                            echo "['Month 1'," . $row1['question6'] . "],";
                        }
        
                        $sql = "SELECT stu.studentName, s.month, s.question1, s.question2, s.question3, s.question4, s.question5, s.question6, c.lecID
                        FROM student stu, survey s, course c, lecturer l WHERE stu.studentID = s.stu_id AND s.course_id = c.course_id 
                        AND l.lec_id = c.lecID AND s.month = 'Month 2' AND stu.studentName = 'Li Ah Bu' AND c.lecID = '$userID'";
                        $result = $conn->query($sql);
                        while($row2 = $result->fetch_assoc()) {
                            echo "['Month 2'," . $row2['question6'] . "],";
                        }
                    
                        $sql = "SELECT stu.studentName, s.month, s.question1, s.question2, s.question3, s.question4, s.question5, s.question6, c.lecID
                        FROM student stu, survey s, course c, lecturer l WHERE stu.studentID = s.stu_id AND s.course_id = c.course_id 
                        AND l.lec_id = c.lecID AND s.month = 'Month 3' AND stu.studentName = 'Li Ah Bu' AND c.lecID = '$userID'";
                        $result = $conn->query($sql);
                        while($row3 = $result->fetch_assoc()) {
                            echo "['Month 3'," . $row3['question6'] . "],";
                        }
                    
                        $sql = "SELECT stu.studentName, s.month, s.question1, s.question2, s.question3, s.question4, s.question5, s.question6, c.lecID
                        FROM student stu, survey s, course c, lecturer l WHERE stu.studentID = s.stu_id AND s.course_id = c.course_id 
                        AND l.lec_id = c.lecID AND s.month = 'Month 4' AND stu.studentName = 'Li Ah Bu' AND c.lecID = '$userID'";
                        $result = $conn->query($sql);
                        while($row4 = $result->fetch_assoc()) {
                            echo "['Month 4'," . $row4['question6'] . "],";
                        }

                        $sql = "SELECT stu.studentName, s.month, s.question1, s.question2, s.question3, s.question4, s.question5, s.question6, c.lecID
                        FROM student stu, survey s, course c, lecturer l WHERE stu.studentID = s.stu_id AND s.course_id = c.course_id 
                        AND l.lec_id = c.lecID AND s.month = 'Month 5' AND stu.studentName = 'Li Ah Bu' AND c.lecID = '$userID'";
                        $result = $conn->query($sql);
                        while($row5 = $result->fetch_assoc()) {
                            echo "['Month 5'," . $row5['question6'] . "],";
                        }

                ?>
            ]);

            var options5 = {
            title: 'Student: Li Ah Bu Assignment Progress',
            hAxis: {
                    title: 'Month'
                },
                vAxis: {
                    title: 'Percentage'
                },   
            legend: { position: 'bottom' }
            };

            var chart5 = new google.visualization.LineChart(document.getElementById('curve_chart5'));

            chart5.draw(data5, options5);
        }

        google.charts.load('current', {'packages':['corechart']});
        google.charts.setOnLoadCallback(drawChart6);

        function drawChart6() {
            var data6 = google.visualization.arrayToDataTable([
                ['Month', 'asm progress %'],
                <?php
                        $sql = "SELECT stu.studentName, s.month, s.question1, s.question2, s.question3, s.question4, s.question5, s.question6, c.lecID
                        FROM student stu, survey s, course c, lecturer l WHERE stu.studentID = s.stu_id AND s.course_id = c.course_id 
                        AND l.lec_id = c.lecID AND s.month = 'Month 1' AND stu.studentName = 'Prakash' AND c.lecID = '$userID'";
                        $result = $conn->query($sql);
                        while($row1 = $result->fetch_assoc()) {
                            echo "['Month 1'," . $row1['question6'] . "],";
                        }
        
                        $sql = "SELECT stu.studentName, s.month, s.question1, s.question2, s.question3, s.question4, s.question5, s.question6, c.lecID
                        FROM student stu, survey s, course c, lecturer l WHERE stu.studentID = s.stu_id AND s.course_id = c.course_id 
                        AND l.lec_id = c.lecID AND s.month = 'Month 2' AND stu.studentName = 'Prakash' AND c.lecID = '$userID'";
                        $result = $conn->query($sql);
                        while($row2 = $result->fetch_assoc()) {
                            echo "['Month 2'," . $row2['question6'] . "],";
                        }
                    
                        $sql = "SELECT stu.studentName, s.month, s.question1, s.question2, s.question3, s.question4, s.question5, s.question6, c.lecID
                        FROM student stu, survey s, course c, lecturer l WHERE stu.studentID = s.stu_id AND s.course_id = c.course_id 
                        AND l.lec_id = c.lecID AND s.month = 'Month 3' AND stu.studentName = 'Prakash' AND c.lecID = '$userID'";
                        $result = $conn->query($sql);
                        while($row3 = $result->fetch_assoc()) {
                            echo "['Month 3'," . $row3['question6'] . "],";
                        }
                    
                        $sql = "SELECT stu.studentName, s.month, s.question1, s.question2, s.question3, s.question4, s.question5, s.question6, c.lecID
                        FROM student stu, survey s, course c, lecturer l WHERE stu.studentID = s.stu_id AND s.course_id = c.course_id 
                        AND l.lec_id = c.lecID AND s.month = 'Month 4' AND stu.studentName = 'Prakash' AND c.lecID = '$userID'";
                        $result = $conn->query($sql);
                        while($row4 = $result->fetch_assoc()) {
                            echo "['Month 4'," . $row4['question6'] . "],";
                        }

                        $sql = "SELECT stu.studentName, s.month, s.question1, s.question2, s.question3, s.question4, s.question5, s.question6, c.lecID
                        FROM student stu, survey s, course c, lecturer l WHERE stu.studentID = s.stu_id AND s.course_id = c.course_id 
                        AND l.lec_id = c.lecID AND s.month = 'Month 5' AND stu.studentName = 'Prakash' AND c.lecID = '$userID'";
                        $result = $conn->query($sql);
                        while($row5 = $result->fetch_assoc()) {
                            echo "['Month 5'," . $row5['question6'] . "],";
                        }

                ?>
            ]);

            var options6 = {
            title: 'Student: Prakash Assignment Progress',
            hAxis: {
                    title: 'Month'
                },
                vAxis: {
                    title: 'Percentage'
                },   
            legend: { position: 'bottom' }
            };

            var chart6 = new google.visualization.LineChart(document.getElementById('curve_chart6'));

            chart6.draw(data6, options6);
        }

        google.charts.load('current', {'packages':['corechart']});
        google.charts.setOnLoadCallback(drawChart7);

        function drawChart7() {
            var data7 = google.visualization.arrayToDataTable([
                ['Month', 'asm progress %'],
                <?php
                        $sql = "SELECT stu.studentName, s.month, s.question1, s.question2, s.question3, s.question4, s.question5, s.question6, c.lecID
                        FROM student stu, survey s, course c, lecturer l WHERE stu.studentID = s.stu_id AND s.course_id = c.course_id 
                        AND l.lec_id = c.lecID AND s.month = 'Month 1' AND stu.studentName = 'Ali bin Akao' AND c.lecID = '$userID'";
                        $result = $conn->query($sql);
                        while($row1 = $result->fetch_assoc()) {
                            echo "['Month 1'," . $row1['question6'] . "],";
                        }
        
                        $sql = "SELECT stu.studentName, s.month, s.question1, s.question2, s.question3, s.question4, s.question5, s.question6, c.lecID
                        FROM student stu, survey s, course c, lecturer l WHERE stu.studentID = s.stu_id AND s.course_id = c.course_id 
                        AND l.lec_id = c.lecID AND s.month = 'Month 2' AND stu.studentName = 'Ali bin Akao' AND c.lecID = '$userID'";
                        $result = $conn->query($sql);
                        while($row2 = $result->fetch_assoc()) {
                            echo "['Month 2'," . $row2['question6'] . "],";
                        }
                    
                        $sql = "SELECT stu.studentName, s.month, s.question1, s.question2, s.question3, s.question4, s.question5, s.question6, c.lecID
                        FROM student stu, survey s, course c, lecturer l WHERE stu.studentID = s.stu_id AND s.course_id = c.course_id 
                        AND l.lec_id = c.lecID AND s.month = 'Month 3' AND stu.studentName = 'Ali bin Akao' AND c.lecID = '$userID'";
                        $result = $conn->query($sql);
                        while($row3 = $result->fetch_assoc()) {
                            echo "['Month 3'," . $row3['question6'] . "],";
                        }
                    
                        $sql = "SELECT stu.studentName, s.month, s.question1, s.question2, s.question3, s.question4, s.question5, s.question6, c.lecID
                        FROM student stu, survey s, course c, lecturer l WHERE stu.studentID = s.stu_id AND s.course_id = c.course_id 
                        AND l.lec_id = c.lecID AND s.month = 'Month 4' AND stu.studentName = 'Ali bin Akao' AND c.lecID = '$userID'";
                        $result = $conn->query($sql);
                        while($row4 = $result->fetch_assoc()) {
                            echo "['Month 4'," . $row4['question6'] . "],";
                        }

                        $sql = "SELECT stu.studentName, s.month, s.question1, s.question2, s.question3, s.question4, s.question5, s.question6, c.lecID
                        FROM student stu, survey s, course c, lecturer l WHERE stu.studentID = s.stu_id AND s.course_id = c.course_id 
                        AND l.lec_id = c.lecID AND s.month = 'Month 5' AND stu.studentName = 'Ali bin Akao' AND c.lecID = '$userID'";
                        $result = $conn->query($sql);
                        while($row5 = $result->fetch_assoc()) {
                            echo "['Month 5'," . $row5['question6'] . "],";
                        }

                ?>
            ]);

            var options7 = {
            title: 'Student: Ali bin Akao Assignment Progress',
            hAxis: {
                    title: 'Month'
                },
                vAxis: {
                    title: 'Percentage'
                },   
            legend: { position: 'bottom' }
            };

            var chart7 = new google.visualization.LineChart(document.getElementById('curve_chart7'));

            chart7.draw(data7, options7);
        }

        google.charts.load('current', {'packages':['corechart']});
        google.charts.setOnLoadCallback(drawChart8);

        function drawChart8() {
            var data8 = google.visualization.arrayToDataTable([
                ['Month', 'asm progress %'],
                <?php
                        $sql = "SELECT stu.studentName, s.month, s.question1, s.question2, s.question3, s.question4, s.question5, s.question6, c.lecID
                        FROM student stu, survey s, course c, lecturer l WHERE stu.studentID = s.stu_id AND s.course_id = c.course_id 
                        AND l.lec_id = c.lecID AND s.month = 'Month 1' AND stu.studentName = 'Jevita Pu' AND c.lecID = '$userID'";
                        $result = $conn->query($sql);
                        while($row1 = $result->fetch_assoc()) {
                            echo "['Month 1'," . $row1['question6'] . "],";
                        }
        
                        $sql = "SELECT stu.studentName, s.month, s.question1, s.question2, s.question3, s.question4, s.question5, s.question6, c.lecID
                        FROM student stu, survey s, course c, lecturer l WHERE stu.studentID = s.stu_id AND s.course_id = c.course_id 
                        AND l.lec_id = c.lecID AND s.month = 'Month 2' AND stu.studentName = 'Jevita Pu' AND c.lecID = '$userID'";
                        $result = $conn->query($sql);
                        while($row2 = $result->fetch_assoc()) {
                            echo "['Month 2'," . $row2['question6'] . "],";
                        }
                    
                        $sql = "SELECT stu.studentName, s.month, s.question1, s.question2, s.question3, s.question4, s.question5, s.question6, c.lecID
                        FROM student stu, survey s, course c, lecturer l WHERE stu.studentID = s.stu_id AND s.course_id = c.course_id 
                        AND l.lec_id = c.lecID AND s.month = 'Month 3' AND stu.studentName = 'Jevita Pu' AND c.lecID = '$userID'";
                        $result = $conn->query($sql);
                        while($row3 = $result->fetch_assoc()) {
                            echo "['Month 3'," . $row3['question6'] . "],";
                        }
                    
                        $sql = "SELECT stu.studentName, s.month, s.question1, s.question2, s.question3, s.question4, s.question5, s.question6, c.lecID
                        FROM student stu, survey s, course c, lecturer l WHERE stu.studentID = s.stu_id AND s.course_id = c.course_id 
                        AND l.lec_id = c.lecID AND s.month = 'Month 4' AND stu.studentName = 'Jevita Pu' AND c.lecID = '$userID'";
                        $result = $conn->query($sql);
                        while($row4 = $result->fetch_assoc()) {
                            echo "['Month 4'," . $row4['question6'] . "],";
                        }

                        $sql = "SELECT stu.studentName, s.month, s.question1, s.question2, s.question3, s.question4, s.question5, s.question6, c.lecID
                        FROM student stu, survey s, course c, lecturer l WHERE stu.studentID = s.stu_id AND s.course_id = c.course_id 
                        AND l.lec_id = c.lecID AND s.month = 'Month 5' AND stu.studentName = 'Jevita Pu' AND c.lecID = '$userID'";
                        $result = $conn->query($sql);
                        while($row5 = $result->fetch_assoc()) {
                            echo "['Month 5'," . $row5['question6'] . "],";
                        }

                ?>
            ]);

            var options8 = {
            title: 'Student: Jevita Pu Assignment Progress',
            hAxis: {
                    title: 'Month'
                },
                vAxis: {
                    title: 'Percentage'
                },   
            legend: { position: 'bottom' }
            };

            var chart8 = new google.visualization.LineChart(document.getElementById('curve_chart8'));

            chart8.draw(data8, options8);
        }

        google.charts.load('current', {'packages':['corechart']});
        google.charts.setOnLoadCallback(drawChart9);

        function drawChart9() {
            var data9 = google.visualization.arrayToDataTable([
                ['Month', 'asm progress %'],
                <?php
                        $sql = "SELECT stu.studentName, s.month, s.question1, s.question2, s.question3, s.question4, s.question5, s.question6, c.lecID
                        FROM student stu, survey s, course c, lecturer l WHERE stu.studentID = s.stu_id AND s.course_id = c.course_id 
                        AND l.lec_id = c.lecID AND s.month = 'Month 1' AND stu.studentName = 'Dashini' AND c.lecID = '$userID'";
                        $result = $conn->query($sql);
                        while($row1 = $result->fetch_assoc()) {
                            echo "['Month 1'," . $row1['question6'] . "],";
                        }
        
                        $sql = "SELECT stu.studentName, s.month, s.question1, s.question2, s.question3, s.question4, s.question5, s.question6, c.lecID
                        FROM student stu, survey s, course c, lecturer l WHERE stu.studentID = s.stu_id AND s.course_id = c.course_id 
                        AND l.lec_id = c.lecID AND s.month = 'Month 2' AND stu.studentName = 'Dashini' AND c.lecID = '$userID'";
                        $result = $conn->query($sql);
                        while($row2 = $result->fetch_assoc()) {
                            echo "['Month 2'," . $row2['question6'] . "],";
                        }
                    
                        $sql = "SELECT stu.studentName, s.month, s.question1, s.question2, s.question3, s.question4, s.question5, s.question6, c.lecID
                        FROM student stu, survey s, course c, lecturer l WHERE stu.studentID = s.stu_id AND s.course_id = c.course_id 
                        AND l.lec_id = c.lecID AND s.month = 'Month 3' AND stu.studentName = 'Dashini' AND c.lecID = '$userID'";
                        $result = $conn->query($sql);
                        while($row3 = $result->fetch_assoc()) {
                            echo "['Month 3'," . $row3['question6'] . "],";
                        }
                    
                        $sql = "SELECT stu.studentName, s.month, s.question1, s.question2, s.question3, s.question4, s.question5, s.question6, c.lecID
                        FROM student stu, survey s, course c, lecturer l WHERE stu.studentID = s.stu_id AND s.course_id = c.course_id 
                        AND l.lec_id = c.lecID AND s.month = 'Month 4' AND stu.studentName = 'Dashini' AND c.lecID = '$userID'";
                        $result = $conn->query($sql);
                        while($row4 = $result->fetch_assoc()) {
                            echo "['Month 4'," . $row4['question6'] . "],";
                        }

                        $sql = "SELECT stu.studentName, s.month, s.question1, s.question2, s.question3, s.question4, s.question5, s.question6, c.lecID
                        FROM student stu, survey s, course c, lecturer l WHERE stu.studentID = s.stu_id AND s.course_id = c.course_id 
                        AND l.lec_id = c.lecID AND s.month = 'Month 5' AND stu.studentName = 'Dashini' AND c.lecID = '$userID'";
                        $result = $conn->query($sql);
                        while($row5 = $result->fetch_assoc()) {
                            echo "['Month 5'," . $row5['question6'] . "],";
                        }

                ?>
            ]);

            var options9 = {
            title: 'Student: Dashini Assignment Progress',
            hAxis: {
                    title: 'Month'
                },
                vAxis: {
                    title: 'Percentage'
                },   
            legend: { position: 'bottom' }
            };

            var chart9 = new google.visualization.LineChart(document.getElementById('curve_chart9'));

            chart9.draw(data9, options9);
        }
    </script>
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
                            <li><a href="/Group4/Module1/Advisor/Advisor.php">Appointment Booking</a></li>
                            <li><a href="/Group4/Module2/advisor.php">Consultation Record</a></li>
                            <li><a href="#">Student Information</a></li>
                            <li><a href="#">Student Academic Performance</a></li>
                            <li><a href="/Group4/MainMenu/index.html">Log Out</a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>

    <div style="width:60%;" id="frm">
        <h1 class="h"> 
            Analysis Report
        </h1>
        <p id="curve_chart" style="width: 900px; height: 500px; "></p>
        <p id="curve_chart1" style="width: 900px; height: 500px;"></p>
        <p id="curve_chart2" style="width: 900px; height: 500px;"></p>
        <p id="curve_chart3" style="width: 900px; height: 500px;"></p>
        <p id="curve_chart4" style="width: 900px; height: 500px;"></p>
        <p id="curve_chart5" style="width: 900px; height: 500px;"></p>
        <p id="curve_chart6" style="width: 900px; height: 500px;"></p>
        <p id="curve_chart7" style="width: 900px; height: 500px;"></p>
        <p id="curve_chart8" style="width: 900px; height: 500px;"></p>
        <p id="curve_chart9" style="width: 900px; height: 500px;"></p>
    </div>
</body>
</html>

