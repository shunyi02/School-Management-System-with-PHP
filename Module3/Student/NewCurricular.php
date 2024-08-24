<?php

include('connection.php');

if (session_status() === PHP_SESSION_NONE) {
    session_start();
  }

  $userID = $_SESSION['userID'];
  $education = $_POST['education'];
  $society = $_POST['society'];
  $activity = $_POST['activity'];
  $position = $_POST['position'];
  $date = $_POST['date'];


if(isset($_POST["submit"])){ 

    
        // Get file info 
        $fileName = basename($_FILES["image"]["name"]); 
        $fileType = pathinfo($fileName, PATHINFO_EXTENSION); 
         
        // Allow certain file formats 
        $allowTypes = array('jpg','png','jpeg','gif'); 
        // if(in_array($fileType, $allowTypes)){ 
            $image = $_FILES['image']['tmp_name']; 
            $imgContent = addslashes(file_get_contents($image)); 
         
            // Insert image content into database 
            $insert = $con->query("INSERT into curricular (studentID, higher_education, society, activity, position, date, image) VALUES ('$userID','$education','$society','$activity','$position','$date','$imgContent')"); 
 ?>            
            <head><script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script></head>
            <body>
            <script>

      <?php if($insert){ ?> 
            
                swal('Save Successful!', 'Please wait lecturer to approve your curricular.', 'success').then((value) => {
                  window.open('','_self').close();
                });

        <?php }else{ ?>
                swal('Save Failed!', 'Please try again later.', 'error').then((value) => {
                  window.open('','_self').close();
                });
<?php               
            }  
        
   
} 
?>

            </script>
            </body>
  
