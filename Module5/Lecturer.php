<!DOCTYPE html>
 <html lang="en"></html>
    <head>
        <title>UTAR Acedemic Advisory System</title>
        <meta charset="utf-8"/>
        <link rel = "stylesheet" type = "text/css" href = "style1.css">  
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
                            <li><a href="/Group4/Module3/Lecturer/search.html">Student Information</a></li>
                            <li><a href="#">Student Academic Performance</a></li>
                            <li><a href="/Group4/MainMenu/index.html">Log Out</a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
        
        <div id="frm"> 
            <h1 class="h"> 
            Monthly Progress Report System
            </h1>

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

                $sql = "SELECT lec_name, lec_id, lec_email FROM lecturer";
                $result = $conn->query($sql);

                if ($result->num_rows > 0) {
                while($row = $result->fetch_assoc()) {
                    if($row["lec_id"] == "$userID"){
                        echo "<div class='heading'><p>Name: ". 
                        $row["lec_name"]. "</p><p>ID: ". $row["lec_id"]. "</p><p>Email: ". $row["lec_email"]. "</div><br>";
                    }
                }   
                } else {
                echo "0 results";
                }

                echo "<div style='display: flex; justify-content: space-between;'><h1>My Student</h1> <h2><a class='link' href='graph.php'>View Analysis</a></h2>
                <h2><a class='link' href='feedback.html'>Give Feedback</a></h2></div>";

                $sql = "SELECT stu.studentName, s.month, s.question1, s.question2, s.question3, s.question4, s.question5, s.question6, c.lecID
                FROM student stu, survey s, course c, lecturer l WHERE stu.studentID = s.stu_id AND s.course_id = c.course_id AND l.lec_id = c.lecID";
                $result = $conn->query($sql);

                echo "<table border='1'>
                <tr>
                <th>Student Name</th>
                <th>Month</th>
                <th>Question 1</th>
                <th>Question 2</th>
                <th>Question 3</th>
                <th>Question 4</th>
                <th>Question 5</th>
                <th>Question 6</th>
                </tr>";
                
                if ($result->num_rows > 0) {         
                    while($row = $result->fetch_assoc()) {
                        if($row['lecID'] == "$userID"){
                            echo "<tr>";
                            echo "<td>" . $row['studentName'] . "</td>";
                            echo "<td>" . $row['month'] . "</td>";
                            echo "<td>" . $row['question1'] . "</td>";
                            echo "<td>" . $row['question2'] . "</td>";
                            echo "<td>" . $row['question3'] . "</td>";
                            echo "<td>" . $row['question4'] . "</td>";
                            echo "<td>" . $row['question5'] . "</td>";
                            echo "<td>" . $row['question6'] . "</td>";
                            echo "</tr>"; 
                        }
                    }
                } else {
                    echo "0 results";
                }

                echo "</table>";
                $conn->close();
            ?> 
            
            <p></p>

            <div>
                <u><b>Legend:</b></u> <br>
                Completed: Student need to complete every course survey. <br>
            </div>  

            <div id="footer"><!--begin footer-->
                <div class="brief">
                    <ul>
                    <li><a class="link" href="http://www.utar.edu.my/legalStatement.jsp" target="_blank">Legal Statement </a></li>
                    <li><a class="link" href="http://www.utar.edu.my/termsOfUse.jsp" target="_blank">Terms of Usage </a></li>
                    <li>© Universiti Tunku Abdul Rahman 2022</li>
                    </ul>
                </div>	
            
                <div style="float:right; margin: -25px 0 5px 0; "> <div class="followuson"> FOLLOW US ON</div>
                    <a href="http://www.facebook.com/UTARnet" target="_blank"><img src="http://portal.utar.edu.my/stuIntranet/images/icon_facebook.png"></a> 
                    <a href="http://twitter.com/UTARnet" target="_blank"><img src="http://portal.utar.edu.my/stuIntranet/images/icon_twitter.png"></a>
                </div>
            </div><!--end footer-->
        </div>
    </body>
</html>