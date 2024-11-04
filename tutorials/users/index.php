<?php
// echo "welcome". $_COOKIE['firstname']." ".$_COOKIE['lastname'];


?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard</title>
    <?php 
include('../header.php');
?>
</head>

<body>
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
        <div class="container-fluid">
            <a class="navbar-brand" href="#">Schedule Management System</a>
            <a class="navbar-brand" href="#"><?php  echo $_COOKIE['firstname']." ".$_COOKIE['lastname']; ?></a>
        </div>
        <a href="logout.php">Logout </a>
    </nav>

    <div class="container-fluid">
        <div class="row">
            <!-- Sidebar -->
            <nav id="sidebar" class="col-md-3 col-lg-2 d-md-block bg-light sidebar">
                <div class="position-sticky">
                    <ul class="nav flex-column nav-pills">
                        <li class="nav-item">
                            <a class="nav-link " href="http://localhost/app/tutorials/home.php">Home</a>
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
                            <a class="nav-link active" href="http://localhost/app/tutorials/users">User</a>
                        </li>
                        <li class="nav-item"><a class="nav-link" href="#">Maintenance</a>
                        </li>
                    </ul>
                </div>
            </nav>

            <!-- Main Content -->
            <main class="col-md-9 ms-sm-auto col-lg-10 px-md-4">
                <div
                    class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
                    <h1 class="h2">Dashboard Overview</h1>
                </div>
                <div class="row">
                    <div class="col-lg-12">
                        <!-- Button trigger modal -->
                        <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#usermodal"
                            style="float:right;">
                            Add User
                        </button>
                        <h3 class="mt-4 mb-3">User Table</h3>
                        <table class="table table-striped table-bordered" id="usertable" class="display">
                            <thead class="thead-dark">
                                <tr>
                                    <th>#</th>
                                    <th>Username</th>
                                    <th>Email</th>
                                    <th>Last name</th>
                                    <th>First name</th>
                                    <th>Middle name</th>
                                    <th>Birthday</th>
                                    <th>Address</th>
                                    <th>Mobile</th>
                                    <th>Last Login</th>
                                    <th>Action</th>
                                </tr>
                            </thead>
                            <?php include('../tables/table_users.php'); ?>
                            <tbody>

                            </tbody>
                        </table>
                    </div>
                </div>
            </main>
        </div>
    </div>

    <?php 
include('../footer.php');
?>
</body>

</html>
<!-- Modal for adding user -->
<?php include('../modal/modal_users.php'); ?>

<script>
$(document).ready(function() {
    $('#usertable').DataTable();
});

$('#usermodal').on('shown.bs.modal', function() {
    //   $('#myInput').trigger('focus')
})
</script>