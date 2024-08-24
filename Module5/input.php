<?php
    $course_id = $_POST['course_id'];
    $stu_id = $_POST['stu_id'];
    $month = $_POST['month'];
    $question1 = $_POST['question1'];
    $question2 = $_POST['question2'];
    $question3 = $_POST['question3'];
    $question4 = $_POST['question4'];
    $question5 = $_POST['question5'];
    $question6 = $_POST['question6'];
    
    $folderPath = "upload/";
    $image_parts = explode(";base64,", $_POST['signed']); 
    $image_type_aux = explode("image/", $image_parts[0]);
    $image_type = $image_type_aux[1];
    $image_base64 = base64_decode($image_parts[1]);
    $file = $folderPath . uniqid() . '.'.$image_type;
    file_put_contents($file, $image_base64);
    $upload = $_POST['signed'];
    $folder = "./upload/" . $upload;

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
        $stmt = $conn->prepare("insert into survey(course_id, stu_id, month, question1, question2, question3, question4, question5, question6, signature) 
            values(?, ?, ?, ?, ?, ?, ?, ?, ?, ?)");
        $stmt->bind_param("isssssssss", $course_id, $stu_id, $month, $question1, $question2, $question3, $question4, $question5, $question6, $upload);
        $stmt->execute();
        echo '<script>
        
            alert("Monthly Progress Report submitted successfully!");
            let isExecuted = confirm("Do you want to submit another report?");
            if (isExecuted) {
                window.location = "http://localhost/Group4/Module5/Student.php";
            } else {
                window.location = "http://localhost/Group4/MainMenu/StudentMenu.php";
            }
            console.log(isExecuted);
            
        </script>';
        $stmt->close();
        $conn->close();
    }
?>
