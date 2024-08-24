<html lang="en">
<head>
	<meta charset="UTF-8">
	<link rel="stylesheet" href="Menu.css">
	<link rel="stylesheet" href="css/normalize.css">
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <script type="text/javascript" src="js/jquery-3.4.1.min.js"></script>
    <script type="text/javascript" src="js/bootstrap.bundle.min.js"></script>
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
	<title>Utar Adcademic Advisory System</title>
</head>
<body>
<?php      

if (session_status() === PHP_SESSION_NONE) {
    session_start();
}

    include('connection.php');  
	$userID = $_SESSION['userID'];
      $sql = "SELECT * FROM lecturer where lec_id = '".$userID."'";
      $result = $con->query($sql);


      if ($result->num_rows > 0) {
      // output data of each row
      while($row = $result->fetch_assoc()) {
?>

	<header>
		<img id="MDB-logo" src="https://upload.wikimedia.org/wikipedia/en/f/f1/Universiti_Tunku_Abdul_Rahman_Logo.jpg" alt="UTAR LOGO" height="60" />
                <h4 class="text-light mt-3">
                  UNIVERSITY TUNKU ABDUL RAHMAN
                  <br> <p class="h5 mt-3 font-weight-bold"> ACADEMIC ADVISORY SYSTEM</p>  
                </h4>
                <div class="d-flex">
                  <h6 class="welcome">Welcome, <?php echo $row["lec_name"] . " " . $row["lec_id"];?></h6>
                </div>
<?php
      }
    }
?>
	</header>
	<nav>
			<ul>
				<a class="text-light" href="/Group4/Module1/Advisor/Advisor.php"><li>Appointment Booking</li></a>
				<a class="text-light" href="/Group4/Module2/advisor.php"><li>Consultation Record</li></a>
				<a class="text-light" href="/Group4/Module3/Lecturer/search.html"><li>Student Information</li></a>
				<a class="text-light" href="/Group4/Module5/Lecturer.php"><li>Student Monthly Progress Report</li></a>
				<a class="text-light" href="/Group4/Module4/list.php"><li>Student Academic Perfomance</li></a>
				<a class="text-light" href="index.html"><li>Log Out</li></a>
			</ul>
			<div class="handle">
				<p class="menu">Menu</p>
				<div class="menu_icon">
			      <div></div>
			      <div></div>
			      <div></div>
		      </div>
			</div>
		</nav>
		<section class="slideshow">
  <div class="content">
     
    <div class="slider-content">
		<figure class="shadow"><figcaption class="text-light text-center">Student Academic Perfomance</figcaption><a href=""><img class="rounded mx-auto d-block" style="width:100px; height:100px;" src="https://cdn-icons-png.flaticon.com/512/3094/3094910.png"></a></figure>
		<figure class="shadow"><figcaption class="text-light text-center">Student Monthly Progress Report</figcaption><a href="/Group4/Module5/Lecturer.php"><img class="rounded mx-auto d-block" style="width:100px; height:100px;" src="https://cdn-icons-png.flaticon.com/512/3093/3093846.png"></a></figure>
		<figure class="shadow"><figcaption class="text-light text-center">Student Information</figcaption><a href="/Group4/Module3/Lecturer/search.html"><img class="rounded mx-auto d-block" style="width:100px; height:100px;" src="https://cdn-icons-png.flaticon.com/512/3413/3413240.png"></a></figure>
		<figure class="shadow"><figcaption class="text-light text-center">Consultation Record</figcaption><a href="/Group4/Module2/advisor.php"><img class="rounded mx-auto d-block" style="width:100px; height:100px;" src="https://cdn-icons-png.flaticon.com/512/1469/1469975.png"></a></figure>
		<figure class="shadow"><figcaption class="text-light text-center">Appointment Booking</figcaption><a href="/Group4/Module1/Advisor/Advisor.php"><img class="rounded mx-auto d-block" style="width:100px; height:100px;" src="https://cdn-icons-png.flaticon.com/512/942/942759.png"></a></figure>
		
	</div>
  </div>
  
    <div>
</section>
 
  


        

	<script>
		$('.handle').on('click', function(){
			$('nav ul').toggleClass('showing');
		});

	</script>
	<footer class="text-light">
		&copy; Oct 2022 UCCA2513 Group4
	</footer>
</body>
</html>