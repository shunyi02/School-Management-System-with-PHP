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
                            <li><a href="/Group4/MainMenu/StudentMenu.php">Home</a></li>
                            <li><a href="/Group4/Module1/Advisee/schedule/index.php">Appointment Booking</a></li>
                            <li><a href="/Group4/Module2/advisee.php">Consultation Record</a></li>
                            <li><a href="/Group4/Module3/Student/StudentInformation.php">Student Information</a></li>
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

                $sql = "SELECT studentName, studentID, studentEmail FROM student";
                $result = $conn->query($sql);

                if ($result->num_rows > 0) {
                // output data of each row
                while($row = $result->fetch_assoc()) {
                    if($row["studentID"] == "$userID" ){
                        echo "<div class='heading'><p>Name: ". 
                        $row["studentName"]. "</p><p>ID: ". $row["studentID"]. "</p><p>Email: ". $row["studentEmail"]. "</div>";
                    }
                }   
                } else {
                echo "0 results";
                }
                $conn->close();
            ?> 

            <h1>
                My Course
            </h1>   

            <table width="98%">
                <tbody>
                    <tr height="25px">
                        <td style="text-align: left; font-weight: bold;"> Course 1</td> 
                        <td ><a class="link" href="UCCD2502.html">UCCN2502 INTRODUCTION TO INVENTIVE PROBLEM SOLVING AND PROPOSAL WRITING</a></td> 
                    </tr>
                    <tr height="25px">
                        <td style="text-align: left; font-weight: bold;">Course 2</td> 
                        <td><a class="link" href="UCCA2513.html">UCCA2513 MINI PROJECT</a></td> 
                    </tr>	
                    <tr height="25px">
                        <td style="text-align: left; font-weight: bold;">Course 3</td> 
                        <td><a class="link" href="UCCN1223.html">UCCN1223 CYBERSECURITY</a></td> 
                    </tr>					
                    <tr height="25px">
                        <td style="text-align: left; font-weight: bold;">Course 4</td> 
                        <td><a class="link" href="MPU34032.html">MPU34032 COMMUNITY PROJECT</a></td> 
                </tbody>
            </table>
            
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