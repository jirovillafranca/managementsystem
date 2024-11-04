<?php
include('../config.php');
include('../class/read.php');
include('../class/create.php');
$username = $_POST['username'];
$email = $_POST['email'];
$firstname = $_POST['firstname'];
$middlename = $_POST['middlename'];
$lastname = $_POST['lastname'];
$birthday = $_POST['birthday'];
$address = $_POST['address'];
$mobile = $_POST['mobile'];
$role = $_POST['role'];


// mysqli_query($conn, $sql_user);
if(is_user_exist($username)){
    header("Location: http://localhost/app/tutorials/users/index.php?error=exist");
}else{
   
    create_user($username,$email,$firstname,$middlename,$lastname,$birthday,$address,$mobile);
    $userid = get_userid($username);
    // assign_role($role);
}
?>

