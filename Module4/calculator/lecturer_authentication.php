<?php      

if (session_status() === PHP_SESSION_NONE) {
    session_start();
}

    include('connection.php');  
    $username = $_POST['user'];  
    $password = $_POST['pass'];  
      
        //to prevent from mysqli injection  
        $username = stripcslashes($username);  
        $password = stripcslashes($password);  
        $username = mysqli_real_escape_string($con, $username);  
        $password = mysqli_real_escape_string($con, $password);  
      
        $sql = "select *from lecturer where lec_id = '$username' and lec_ic = '$password'";  
        $result = mysqli_query($con, $sql);  
        $row = mysqli_fetch_array($result, MYSQLI_ASSOC);  
        $count = mysqli_num_rows($result);  
          
        if($count == 1){  

            $_SESSION['userID'] = $username;
?>
            <head></head>
            <body><script>
            window.open("LectureMenu.php","_self");
            </script></body>
<?php
        }  
        else{  
?>
            <head><script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script></head>
            <body>
            <script>
            swal('Login Failed!', 'Please try again later.', 'error').then((value) => {
                  window.open('/Group4/MainMenu/LectureLogin.php','_self').close();
                });
            </script>
            </body>
<?php
        }     
?> 