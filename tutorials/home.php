<?php
// echo "welcome". $_COOKIE['firstname']." ".$_COOKIE['lastname'];


?><!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard</title>
    <?php 
include('header.php');
?>
</head>
<body>
<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
        <div class="container-fluid">
            <a class="navbar-brand" href="#">Schedule Management System</a>
            <a class="navbar-brand" href="#"><?php  echo $_COOKIE['firstname']." ".$_COOKIE['lastname']; ?></a>
        </div>
        <a href = "logout.php">Logout </a>
    </nav>
    <br>
    <div class="container-fluid">
        <div class="row">
            <!-- Sidebar -->
            <nav id="sidebar" class="col-md-3 col-lg-2 d-md-block bg-light sidebar">
                <div class="position-sticky">
                    <ul class="nav flex-column nav-pills">
                        <li class="nav-item">
                            <a class="nav-link active" href="#">Home</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#">Class</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#">Schedule</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#">Teacher</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="http://localhost/app/tutorials/users/">User</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#">Maintenance</a>
                        </li>
                    </ul>
                </div>
            </nav>

            <!-- Main Content -->
            <main class="col-md-9 ms-sm-auto col-lg-10 px-md-4">
                <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
                    <h1 class="h2">Dashboard Overview</h1>
                </div>

                <!-- Dashboard Cards -->
                <div class="row">
                    <div class="col-lg-4">
                        <div class="card text-white bg-primary mb-3">
                            <div class="card-body">
                                <h5 class="card-title">Classes</h5>
                                <p class="card-text">3</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4">
                        <div class="card text-white bg-success mb-3">
                            <div class="card-body">
                                <h5 class="card-title">Teaching Load</h5>
                                <p class="card-text">8</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4">
                        <div class="card text-white bg-warning mb-3">
                            <div class="card-body">
                                <h5 class="card-title">Peding Tasks</h5>
                                <p class="card-text">15</p>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Chart Section -->
                <div class="row">
                    <div class="col-lg-12">
                        <canvas id="myChart"></canvas>
                    </div>
                </div>
            </main>
        </div>
    </div>


</body>
</html>

<?php 
include('footer.php');
?>