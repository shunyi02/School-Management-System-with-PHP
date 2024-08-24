<?php
    $stu_id = $_POST['stu_id'];
    $month = $_POST['month'];
    $feedback = $_POST['feedback'];
    
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
    else{
        $stmt = $conn->prepare("insert into feedback(stu_id, month, feedback) 
            values(?, ?, ?)");
        $stmt->bind_param("sss", $stu_id, $month, $feedback);
        $stmt->execute();
        echo '<script>
        
            alert("Feedback submitted successfully!");
            let isExecuted = confirm("Do you want to submit another feedback?");
            if (isExecuted) {
                window.location = "http://localhost/Group4/Module5/feedback.html";
            } else {
                window.location = "http://localhost/Group4/MainMenu/LectureMenu.php";
            }
            console.log(isExecuted);
            
        </script>';
        $stmt->close();
        $conn->close();
    }
?>
