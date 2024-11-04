<?php
include ('config.php');

    if($_POST['username']  == '' || $_POST['password'] == '' ){
        header('Location: loginform.php?error=1');
        exit();
    }
    $username = $_POST['username'];
    $password = base64_encode($_POST['password']);

    $sql = "SELECT * FROM users WHERE username = '$username' AND password = '$password'";
    $results = mysqli_query($conn,$sql);
    if(!$results){
        header('Location: loginform.php?error=1');
    }else{
    foreach($results as $result){
        $username = $result['username'];
        $firstname = $result['firstname'];
        $lastname = $result['lastname'];
    }
    setcookie('username',$username,time()+(86400*30),'/');
    setcookie('firstname',$firstname,time()+(86400*30),'/');
    setcookie('lastname',$lastname,time()+(86400*30),'/');
    header('Location: home.php?redirect=0');
    }

?>