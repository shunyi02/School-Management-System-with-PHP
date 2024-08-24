<?php 

$servername = "localhost";
$username = "root";
$password = "";
$dbname = "aas";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
die("Connection failed: " . $conn->connect_error);
}

$userID=$_GET['userID'];
$sql = "SELECT * FROM student where studentID = '".$userID."'";
$result = $conn->query($sql);


if ($result->num_rows > 0) {
// output data of each row
while($row = $result->fetch_assoc()) {
?>
<!DOCTYPE html>
<html>
    <head>
        <link rel="stylesheet" type="text/css" href="resume.css"/>
        <script src="https://kit.fontawesome.com/b99e675b6e.js"></script>
        <link rel="stylesheet" href="css/bootstrap.min.css">
        <script src="https://cdnjs.cloudflare.com/ajax/libs/jspdf/2.5.1/jspdf.umd.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/html2pdf.js/0.10.1/html2pdf.bundle.min.js" integrity="sha512-GsLlZN/3F2ErC5ifS5QtgpiJtWd43JWSuIgh7mbzZ8zBps+dvLusV+eNQATqgA/HdeKFVgA5v3S/cIrLF7QnIg==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
        <script type="text/javascript" src="js/jquery-3.4.1.min.js"></script>
        <script type="text/javascript" src="js/bootstrap.bundle.min.js"></script>
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
        <script src="https://kit.fontawesome.com/bfe5b73d0b.js" crossorigin="anonymous"></script>
    </head>

<body class="bg-secondary">
<div class="text-right">
        <button type="button" class="button rounded p-2 bg-transparent border border-dark mt-5 mr-5" onclick="save()"><i class="fa fa-floppy-o" style="font-size: 50px;" aria-hidden="true"></i><br>Save Resume</button>
    </div>
    <div class="resume" id="main">
        <div class="resume_left">
          <div class="resume_profile">
          <img src="data:image/jpg;charset=utf8;base64,<?php echo base64_encode($row['Image']); ?>" alt="Student Image" class="profile" />
          </div>
          <div class="resume_content">
            <div class="resume_item resume_info">
              <div class="title">
                <p class="bold"><?php echo $row['studentName'] ?></p>
                <p class="regular"><?php echo $row['Course'] ?></p>
              </div>
              <ul>
                <li>
                  <div class="icon">
                    <i class="fas fa-map-signs"></i>
                  </div>
                  <div class="data">
                  <?php echo $row['Address'] ?> <br /> <?php echo $row['Postcode'] .', '. $row['State'] ?>
                  </div>
                </li>
                <li>
                  <div class="icon">
                    <i class="fas fa-mobile-alt"></i>
                  </div>
                  <div class="data">
                  <?php echo $row['studentPhNo'] ?>
                  </div>
                </li>
                <li>
                  <div class="icon">
                    <i class="fas fa-envelope"></i>
                  </div>
                  <div class="data">
                  <?php echo $row['studentEmail'] ?>
                  </div>
                </li>
                <li>
                  <div class="icon">
                  <i class="fa-solid fa-venus-mars"></i>
                  </div>
                  <div class="data">
                  <?php echo $row['Gender'] ?>
                  </div>
                </li>
                <li>
                  <div class="icon">
                  <i class="fa-solid fa-person"></i>
                  </div>
                  <div class="data">
                  <?php echo $row['Race'] ?>
                  </div>
                </li>
              </ul>
              <?php
				}
			}
?>


            </div>
    </div>
       </div>
       <div class="resume_right">

         <div class="resume_item resume_work">
             <div class="title">
                <p class="bold">Education</p>
              </div>
              <?php
			
      $sql2 = "SELECT * FROM qualification where studentID = '".$userID."'";
      $result2 = $conn->query($sql2);
      $no ="1";

      if ($result2->num_rows > 0) {
      while($row2 = $result2->fetch_assoc()) {
      ?>
              <p class="font-weight-bold"><?php echo $no .". ". $row2['qualification'] ?></p>
      <p id="p-4"><i class="fa fa-graduation-cap" aria-hidden="true"></i>&nbsp;&nbsp;<?php echo $row2['higher_education'] ?></p>
      <p id="p-4"><i class="fa fa-calendar" aria-hidden="true"></i>&nbsp;&nbsp;<?php echo date("d-m-Y", strtotime($row2["date"])) ?></p>
      <br>
      <?php
      $no++;
        }
      }
      ?>
         </div>
         <div class="resume_item resume_about">
              <?php
			
			$sql1 = "SELECT * FROM softskill where approved=1 and studentID = '".$userID."'";
			$result1 = $conn->query($sql1);
      $no = "1";

			if ($result1->num_rows > 0) {
				?>
			<div class="title">
                <p class="bold">Soft Skill</p>
              </div>
			<ul id="skill" class="skills">
				<?php
			while($row1 = $result1->fetch_assoc()) {
			?>
				<li><span><?php echo $no . '. '. $row1['softskill'] ?></span></li>
			<?php
      $no++;
				}
			}
			?>

			</ul>
         </div>
         <div class="resume_item resume_education">
              <?php
			
      $sql3 = "SELECT * FROM curricular where approved=1 and studentID = '".$userID."'";
      $result3 = $conn->query($sql3);
      $no ="1";

      if ($result3->num_rows > 0) {
        ?>
                       <div class="title">
                <p class="bold">Curricular</p>
              </div>
        <?php

      while($row3 = $result3->fetch_assoc()) {
      ?>

    <p class="font-weight-bold"><?php echo $no .". ".  $row3['activity'] ?></p>
    <p id="p-4"><b>Society: </b><?php echo $row3['society'] ?></p>
    <p id="p-4"><b>Position: </b><?php echo $row3['position'] ?></p>
    <p id="p-4"><b>Date: </b><?php echo date("d-m-Y", strtotime($row3["date"])) ?></p>
    <br>
    <?php
    $no++;
      }
    }
    ?>
         </div>

     </div>
     <script src="https://cdnjs.cloudflare.com/ajax/libs/html2pdf.js/0.8.1/html2pdf.bundle.min.js"></script>
     <script type="text/javascript">
        function save(){
            var element = document.getElementById("main");
    
            var opt = {
                margin : 0,
                filename : "resume.pdf",
                image : { type: "jpeg", quality: 5 },
                html2canvas: {scale: 2},
                jspdf: {unit: "in", format: "letter", orientation: "portrait"}
    
            };
    
            html2pdf(element,opt);
        };
        </script>
</body>
</html>