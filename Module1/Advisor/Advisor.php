<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Lecture Appointment Page</title>
  <?php
  if (session_status() === PHP_SESSION_NONE) {
    session_start();
  }
  ?>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"></script>
  <style type="text/css">
    body {
      margin-top: 20px;
    }

    .card-style1 {
      box-shadow: 0px 0px 10px 0px rgb(89 75 128 / 9%);
    }

    .border-0 {
      border: 0 !important;
    }

    .card {
      position: relative;
      display: flex;
      flex-direction: column;
      min-width: 0;
      word-wrap: break-word;
      background-color: #fff;
      background-clip: border-box;
      border: 1px solid rgba(0, 0, 0, .125);
      border-radius: 0.25rem;
    }

    section {
      padding: 120px 0;
      overflow: hidden;
      background: #fff;
    }

    .mb-2-3,
    .my-2-3 {
      margin-bottom: 2.3rem;
    }

    .section-title {
      font-weight: 600;
      letter-spacing: 2px;
      text-transform: uppercase;
      margin-bottom: 10px;
      position: relative;
      display: inline-block;
    }

    .text-primary {
      color: #ceaa4d !important;
    }

    .text-secondary {
      color: #15395A !important;
    }

    .font-weight-600 {
      font-weight: 600;
    }

    .display-26 {
      font-size: 1.3rem;
    }

    @media screen and (min-width: 992px) {
      .p-lg-7 {
        padding: 4rem;
      }
    }

    @media screen and (min-width: 768px) {
      .p-md-6 {
        padding: 3.5rem;
      }
    }

    @media screen and (min-width: 576px) {
      .p-sm-2-3 {
        padding: 2.3rem;
      }
    }

    .p-1-9 {
      padding: 1.9rem;
    }

    .bg-secondary {
      background: #15395A !important;
    }

    @media screen and (min-width: 576px) {

      .pe-sm-6,
      .px-sm-6 {
        padding-right: 3.5rem;
      }
    }

    @media screen and (min-width: 576px) {

      .ps-sm-6,
      .px-sm-6 {
        padding-left: 3.5rem;
      }
    }

    .pe-1-9,
    .px-1-9 {
      padding-right: 1.9rem;
    }

    .ps-1-9,
    .px-1-9 {
      padding-left: 1.9rem;
    }

    .pb-1-9,
    .py-1-9 {
      padding-bottom: 1.9rem;
    }

    .pt-1-9,
    .py-1-9 {
      padding-top: 1.9rem;
    }

    .mb-1-9,
    .my-1-9 {
      margin-bottom: 1.9rem;
    }

    @media (min-width: 992px) {
      .d-lg-inline-block {
        display: inline-block !important;
      }
    }

    .rounded {
      border-radius: 0.25rem !important;
    }
  </style>

</head>

<body>
  <?php
  $host     = 'localhost';
  $username = 'root';
  $password = '';
  $dbname   = 'aas';


  $conn = new mysqli($host, $username, $password, $dbname);
  if (!$conn) {
    die("Cannot connect to the database." . $conn->error);
  }
  $lec = $_SESSION['userID'];
  $sql = "SELECT * FROM lecturer where lec_id ='$lec'";
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

  <section class="bg-light">
    <?php while ($row = $result->fetch_assoc()) { ?>
      <div class="container">
        <div class="row">
          <div class="col-lg-12 mb-4 mb-sm-5">
            <div class="card card-style1 border-0">
              <div class="card-body p-1-9 p-sm-2-3 p-md-6 p-lg-7">
                <div class="row align-items-center">
                  <div class="col-lg-6 mb-4 mb-lg-0">
                    <img src="https://bootdey.com/img/Content/avatar/avatar7.png" alt="...">
                  </div>
                  <div class="col-lg-6 px-xl-10">
                    <div class="bg-secondary d-lg-inline-block py-1-9 px-1-9 px-sm-6 mb-1-9 rounded">
                      <h3 class="h2 text-white mb-0">
                        <?php echo $row["lec_name"]; ?>
                      </h3>
                      <span class="text-primary"><?php echo $row["lec_id"]; ?></span>
                    </div>
                    <ul class="list-unstyled mb-1-9">
                      <li class="mb-2 mb-xl-3 display-28"><span class="display-26 text-secondary me-2 font-weight-600">Department:</span> <?php echo $row["lec_department"]; ?></li>
                      <li class="mb-2 mb-xl-3 display-28"><span class="display-26 text-secondary me-2 font-weight-600">Email:</span> <?php echo $row["lec_email"]; ?></li>
                      <li class="mb-2 mb-xl-3 display-28"><span class="display-26 text-secondary me-2 font-weight-600">Phone:</span><?php echo $row["lec_phoneNo"]; ?></li>
                      <li class="mb-2 mb-xl-3 display-28"><span class="display-26 text-secondary me-2 font-weight-600">Advisee List:</span>
                        <a href="/Group4/Module1/Advisor/viewstudent.php">
                          <button>list</button>
                        </a>
                      </li>
                    </ul>
                  </div>
                </div>
              </div>
            </div>
          </div>

        </div>
      <?php } ?>
  </section>


</body>

</html>