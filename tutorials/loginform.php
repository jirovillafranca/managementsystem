<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login Form</title>
<?php 
include('header.php');
?>
</head>
<body>
    <div class="container d-flex justify-content-center align-items-center vh-100">
        <div class="card p-4 shadow" style="width: 400px;">
            <h2 class="text-center mb-4">Login</h2>
            <form action = "login.php" method = "POST">
                <div class="mb-3">
                    <label for="email" class="form-label">Email address</label>
                    <input type="email" name = "username" class="form-control" id="email" placeholder="Enter email"  required>
                </div>
                <!-- value = 'jiro@mail.com' -->
                <div class="mb-3">
                    <label for="password" class="form-label">Password</label>
                    <input type="password" name = "password" class="form-control" id="password" placeholder="Password" required>
                </div>
                <!-- value = 'admin1234'  -->
                <input type="submit" class="btn btn-primary w-100" value = "LOGIN"/>
            </form>
            <div id="message" class="mt-3 text-center"></div>
        </div>
    </div>

 
</body>
</html>
<?php 
include('footer.php');
?>