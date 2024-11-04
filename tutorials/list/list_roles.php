<?php
    include('../config.php');
    $sql = 'SELECT * from role';
    $results = mysqli_query($conn,$sql);
    echo ' <option value="" disabled selected>Select your role</option>';
    foreach($results as $result){
         echo ' <option value='.$result['id'].'>'.$result['name'].'</option>';
    }
 
?>