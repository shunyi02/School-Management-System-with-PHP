<?php

include('connection.php');

if (session_status() === PHP_SESSION_NONE) {
    session_start();
  }

  $Name = $_POST['Name'];
  $NRIC = $_POST['NRIC'];
  $Faculty = $_POST["Faculty"];
  $Course = $_POST["Course"];
  $StudentID = $_POST['StudentID'];
  $Address = $_POST['Address'];
  $Postcode = $_POST['Postcode'];
  $State = $_POST['State'];
  $Phone = $_POST['Phone'];


if(isset($_POST["submit"])){ 

    
        // Get file info 
        $fileName = basename($_FILES["image"]["name"]); 
        $fileType = pathinfo($fileName, PATHINFO_EXTENSION); 
         
        // Allow certain file formats 
        $allowTypes = array('jpg','png','jpeg','gif'); 
        // if(in_array($fileType, $allowTypes)){ 
            $image = $_FILES['image']['tmp_name']; 
            if(empty($image)){
              $insert = $con->query("UPDATE student SET studentName='".$Name."', IC_No='".$NRIC."', faculty='".$Faculty."', course='".$Course."', address='".$Address."', postcode='".$Postcode."', state='".$State."', studentPhNo='".$Phone."' WHERE studentID = '".$StudentID."'"); 
            }
            else{
            $imgContent = addslashes(file_get_contents($image)); 
            $insert = $con->query("UPDATE student SET studentName='".$Name."', IC_No='".$NRIC."', faculty='".$Faculty."', course='".$Course."', address='".$Address."', postcode='".$Postcode."', state='".$State."', studentPhNo='".$Phone."', Image='".$imgContent."' WHERE studentID = '".$StudentID."'"); 
            }
 ?>            
            <head><script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script></head>
            <body>
            <script>

      <?php if($insert){ ?> 
            
        swal('Update Successful!', '', 'success').then((value) => {

window.open("StudentInformation.php","_self");

});

<?php 
  }

  else { 
  ?>
      swal('Update Failed!', '', 'error') 
      window.open("StudentInformation.php","_self");
    <?php } 
        
   
} 
?>

            </script>
            </body>
  
