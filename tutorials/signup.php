<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sign Up</title>
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <!-- Custom CSS -->
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <div class="container d-flex justify-content-center align-items-center vh-100">
        <div class="card p-4 shadow" style="width: 400px;">
            <h2 class="text-center mb-4">Sign Up</h2>
            <form id="signupForm" method = "POST" action ="signupform.php">
                <div class="mb-3">
                    <label for="username" class="form-label">Username</label>
                    <input type="text" class="form-control" name = "username" id="username" placeholder="Enter username" required>
                </div>
                <div class="mb-3">
                    <label for="password" class="form-label">Password</label>
                    <input type="text" class="form-control" name = "password" id="password" placeholder="Enter password" >
                </div>
                <div class="mb-3">
                    <label for="lastname" class="form-label">Lastname </label>
                    <input type="text" class="form-control" name="lastname" id="lastname" placeholder="Enter lastane" >
                </div>
                <div class="mb-3">
                    <label for="password" class="form-label">Firstname</label>
                    <input type="text" class="form-control"  name="firstname" id="firstname" placeholder="Enter firstname" >
                </div>
                <div class="mb-3">
                    <label for="password" class="form-label">Middle name</label>
                    <input type="text" class="form-control" name="middlename" id="middlename" placeholder="Enter middlename" >
                </div>
                <div class="mb-3">
                    <label for="password" class="form-label">Birthday</label>
                    <input type="text" class="form-control" name="birthday" id="birthday" placeholder="Enter birthday" >
                </div>
                <div class="mb-3">
                    <label for="password" class="form-label">Address</label>
                    <input type="text" class="form-control" name="address" id="address" placeholder="Enter address" >
                </div>
                <div class="mb-3">
                    <label for="password" class="form-label">Mobile Number</label>
                    <input type="text" class="form-control" name="mobile" id="mobile" placeholder="Enter mobilenumber" >
                </div>

                <button type="submit" class="btn btn-primary w-100">Sign Up</button>
            </form>
            <div id="message" class="mt-3 text-center"></div>
        </div>
    </div>

    <!-- Bootstrap JS -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
    <!-- Custom JS -->
    <script src="signup.js"></script>
</body>
</html>
