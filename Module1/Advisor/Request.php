<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <script src="https://code.jquery.com/jquery-1.10.2.min.js"></script>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"></script>
</head>

<body>
    <?php
    if (session_status() === PHP_SESSION_NONE) {
        session_start();
    }
    $host     = 'localhost';
    $username = 'root';
    $password = '';
    $dbname   = 'aas';


    $conn = new mysqli($host, $username, $password, $dbname);
    if (!$conn) {
        die("Cannot connect to the database." . $conn->error);
    }
    $lec = $_SESSION['userID'];
    $sql = "SELECT * FROM student s,appointment a where lec_id ='$lec' and s.studentID = a.stu_id and IsAccept='0'";
    $result = $conn->query($sql);
    ?>
    <div class="m-4">
        <nav class="navbar navbar-expand-lg navbar-light bg-light">
            <div class="container-fluid">
                <a href="/Group4/MainMenu/LectureMenu.php" class="navbar-brand">
                    <img src="/Group4/Module1/Advisor/Image/UTAR Logo.jpg" height="28" alt="UTAR">
                </a>
                <button type="button" class="navbar-toggler" data-bs-toggle="collapse" data-bs-target="#navbarCollapse">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarCollapse">
                    <div class="navbar-nav">
                        <a href="/Group4/Module1/Advisor/Advisor.php" class="nav-item nav-link active">Home</a>
                        <a href="/Group4/Module1/Advisor/schedule/index.php" class="nav-item nav-link">Timetable</a>
                        <a href="/Group4/Module1/Advisor/Request.php" class="nav-item nav-link">Appointment</a>
                    </div>
                    <div class="navbar-nav ms-auto">
                        <a href="/Group4/MainMenu/index.html" class="nav-item nav-link">Logout</a>
                    </div>
                </div>
            </div>
        </nav>
    </div>

    <div class="row">
        <?php while ($row = $result->fetch_assoc()) { ?>
            <div class="col-sm-6">
                <div class="card">
                    <div class="card-body">
                        <h5 class="card-title">Appointment Request</h5>
                        <p class="card-text">
                            <strong>Student ID:</strong>
                            <span><?php echo $row["stu_id"]; ?>
                            </span>
                        </p>
                        <p class="card-text"><strong>Name:</strong> <span><?php echo $row["studentName"]; ?></span></p>
                        <p class="card-text"><strong>Appointment Title:</strong> <span><?php echo $row["title"]; ?></span></p>
                        <p class="card-text"><strong>Appointment Start Date and Time:</strong> <span><?php echo $row["apmtStart_date"]; ?></span></p>
                        <p class="card-text"><strong>Appointment End Date and Time:</strong> <span><?php echo $row["apmtEnd_time"]; ?></span></p>
                        <form method="POST" action="RequestAccept.php?title=&<?php echo $row['title'] ?>&<?php echo $row['apmtStart_date'] ?>&<?php echo $row['apmtEnd_time'] ?>&<?php echo $row['stu_id'] ?>">
                            <input type="submit" name="Accept" value="Accept" />
                            <input type="hidden" name="id" value="<?php echo $row['id'] ?>">
                        </form>
                    </div>
                </div>
            </div>
        <?php } ?>
    </div>

    <?php
    $conn->close();
    ?>

</body>

</html>