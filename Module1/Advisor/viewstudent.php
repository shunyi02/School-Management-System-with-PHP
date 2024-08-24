<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">

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
    $sql = "SELECT * FROM student where lec_id = '$lec'";
    $result = $conn->query($sql);
    ?>

    <!--  This file has been downloaded from bootdey.com @bootdey on twitter -->
    <!--  All snippets are MIT license http://bootdey.com/license -->
    <title>User list page - Bootdey.com</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <script src="https://code.jquery.com/jquery-1.10.2.min.js"></script>
    <link href="https://netdna.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://netdna.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"></script>
</head>

<body>
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
                        <a href="/Academic_Advisory_System/Mainpage/Login.php" class="nav-item nav-link">Logout</a>
                    </div>
                </div>
            </div>
        </nav>
    </div>
    <link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css" rel="stylesheet">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="main-box clearfix">
                    <div class="table-responsive">
                        <table class="table user-list">
                            <thead>
                                <tr>
                                    <th><span>Student</span></th>
                                    <th><span>Name</span></th>
                                    <th><span>Student ID</span></th>
                                    <th><span>Faculty</span></th>
                                    <th><span>Course</span></th>
                                    <th><span>Email</span></th>
                                    <th>&nbsp;</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php while ($row = $result->fetch_assoc()) { ?>
                                    <tr>
                                        <td>
                                            <img src="https://bootdey.com/img/Content/avatar/avatar1.png" alt="">
                                        </td>
                                        <td>
                                            <span><?php echo $row["studentName"]; ?></span>
                                        </td>
                                        <td>
                                            <span><?php echo $row["studentID"]; ?></span>
                                        </td>
                                        <td>
                                            <span> <?php echo $row["Faculty"]; ?></span>
                                        </td>
                                        <td>
                                            <span><?php echo $row["Course"]; ?></span>
                                        </td>
                                        <td>
                                            <span><?php echo $row["studentEmail"]; ?></span>
                                        </td>
                                    </tr>
                                <?php } ?>
                            </tbody>

                        </table>
                    </div>
                </div>
            </div>

            <a class="btn btn-primary" href="/Group4/Module1/Advisor/Advisor.php" role="button">Back</a>

            <style type="text/css">
                body {
                    margin-top: 20px;
                }


                /* USER LIST TABLE */
                .user-list tbody td>img {
                    position: relative;
                    max-width: 50px;
                    float: left;
                    margin-right: 15px;
                }

                .user-list tbody td .user-link {
                    display: block;
                    font-size: 1.25em;
                    padding-top: 3px;
                    margin-left: 60px;
                }

                .user-list tbody td .user-subhead {
                    font-size: 0.875em;
                    font-style: italic;
                }

                /* TABLES */
                .table {
                    border-collapse: separate;
                }

                .table-hover>tbody>tr:hover>td,
                .table-hover>tbody>tr:hover>th {
                    background-color: #eee;
                }

                .table thead>tr>th {
                    border-bottom: 1px solid #C2C2C2;
                    padding-bottom: 0;
                }

                .table tbody>tr>td {
                    font-size: 0.875em;
                    background: #f5f5f5;
                    border-top: 10px solid #fff;
                    vertical-align: middle;
                    padding: 12px 8px;
                }

                .table tbody>tr>td:first-child,
                .table thead>tr>th:first-child {
                    padding-left: 20px;
                }

                .table thead>tr>th span {
                    border-bottom: 2px solid #C2C2C2;
                    display: inline-block;
                    padding: 0 5px;
                    padding-bottom: 5px;
                    font-weight: normal;
                }

                .table thead>tr>th>a span {
                    color: #344644;
                }

                .table thead>tr>th>a span:after {
                    content: "\f0dc";
                    font-family: FontAwesome;
                    font-style: normal;
                    font-weight: normal;
                    text-decoration: inherit;
                    margin-left: 5px;
                    font-size: 0.75em;
                }

                .table thead>tr>th>a.asc span:after {
                    content: "\f0dd";
                }

                .table thead>tr>th>a.desc span:after {
                    content: "\f0de";
                }

                .table thead>tr>th>a:hover span {
                    text-decoration: none;
                    color: #2bb6a3;
                    border-color: #2bb6a3;
                }

                .table.table-hover tbody>tr>td {
                    -webkit-transition: background-color 0.15s ease-in-out 0s;
                    transition: background-color 0.15s ease-in-out 0s;
                }

                .table tbody tr td .call-type {
                    display: block;
                    font-size: 0.75em;
                    text-align: center;
                }

                .table tbody tr td .first-line {
                    line-height: 1.5;
                    font-weight: 400;
                    font-size: 1.125em;
                }

                .table tbody tr td .first-line span {
                    font-size: 0.875em;
                    color: #969696;
                    font-weight: 300;
                }

                .table tbody tr td .second-line {
                    font-size: 0.875em;
                    line-height: 1.2;
                }

                .table a.table-link {
                    margin: 0 5px;
                    font-size: 1.125em;
                }

                .table a.table-link:hover {
                    text-decoration: none;
                    color: #2aa493;
                }

                .table a.table-link.danger {
                    color: #fe635f;
                }

                .table a.table-link.danger:hover {
                    color: #dd504c;
                }

                .table-products tbody>tr>td {
                    background: none;
                    border: none;
                    border-bottom: 1px solid #ebebeb;
                    -webkit-transition: background-color 0.15s ease-in-out 0s;
                    transition: background-color 0.15s ease-in-out 0s;
                    position: relative;
                }

                .table-products tbody>tr:hover>td {
                    text-decoration: none;
                    background-color: #f6f6f6;
                }

                .table-products .name {
                    display: block;
                    font-weight: 600;
                    padding-bottom: 7px;
                }

                .table-products .price {
                    display: block;
                    text-decoration: none;
                    width: 50%;
                    float: left;
                    font-size: 0.875em;
                }

                .table-products .price>i {
                    color: #8dc859;
                }

                .table-products .warranty {
                    display: block;
                    text-decoration: none;
                    width: 50%;
                    float: left;
                    font-size: 0.875em;
                }

                .table-products .warranty>i {
                    color: #f1c40f;
                }

                .table tbody>tr.table-line-fb>td {
                    background-color: #9daccb;
                    color: #262525;
                }

                .table tbody>tr.table-line-twitter>td {
                    background-color: #9fccff;
                    color: #262525;
                }

                .table tbody>tr.table-line-plus>td {
                    background-color: #eea59c;
                    color: #262525;
                }

                .table-stats .status-social-icon {
                    font-size: 1.9em;
                    vertical-align: bottom;
                }

                .table-stats .table-line-fb .status-social-icon {
                    color: #556484;
                }

                .table-stats .table-line-twitter .status-social-icon {
                    color: #5885b8;
                }

                .table-stats .table-line-plus .status-social-icon {
                    color: #a75d54;
                }
            </style>

            <script type="text/javascript">

            </script>
</body>

</html>