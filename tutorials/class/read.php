<?php

function is_user_exist($username){
    include('../config.php');
    $sql = "SELECT * FROM `users` WHERE username = '$username'";
    $result = mysqli_query($conn, $sql);
    if (mysqli_num_rows($result) > 0) {
        return true;
    }else{
        return false;  
    }
}
function get_userid($username){
    include('../config.php');
    $sql = "SELECT * FROM `users` WHERE username = '$username'";
    $result = mysqli_query($conn, $sql);
    while($row = mysqli_fetch_assoc($result)) {
       return $row["id"];
    }

}
?>