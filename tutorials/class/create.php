<?php

function create_user($username,$email,$firstname,$middlename=null,$lastname,$birthday,$address,$mobile){
    include('../config.php');
    $sql = "INSERT INTO `users`( `username`, `email`, `lastname`, `firstname`, `middlename`, `birthday`, `address`, `mobile`) VALUES ('$username','$email','$lastname','$firstname','$middlename','$birthday','$address','$mobile')";
    if (mysqli_query($conn, $sql)) {
        return true;
      } else {
       return mysqli_error($conn);
      }
      
}
function assign_role($username){
    // $sql_user = "INSERT INTO `users`( `username`, `email`, `lastname`, `firstname`, `middlename`, `birthday`, `address`, `mobile`, `lastlogin`, `datecreated`) VALUES ('$username','$email','$firstname','$middlename','$lastname','$birthday','$address','$mobile')";
}
?>