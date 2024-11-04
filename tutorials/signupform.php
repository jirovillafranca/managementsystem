<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "managementsystem";


// Create connection
$conn = mysqli_connect($servername, $username, $password,$dbname);

//encode text
// echo base64_encode($str);

//decode text
// echo base64_decode(base64_encode($str));

$username = $_POST['username'];
$password = base64_encode($_POST['password']);
$firstname = $_POST['firstname'];
$lastname = $_POST['lastname'];
$middlename = $_POST['middlename'];
$birthday = $_POST['birthday'];
$address = $_POST['address'];
$mobile = $_POST['mobile'];
$time = time(); //epoch
// echo $username;
$sql = "INSERT INTO `users`( `username`, `email`, `password`, `lastname`, `firstname`, `middlename`, `birthday`, `address`, `mobile`, `datecreated`) VALUES ('$username','$username','$password','$lastname','$firstname','$middlename','$birthday','$address','$mobile',$time)";
// echo $sql;
if (mysqli_query($conn, $sql)) {
    header('Location: login.php');
  } else {
    echo "Error: " . $sql . "<br>" . mysqli_error($conn);
  }
  
?>