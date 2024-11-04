<?php
    include('../config.php');
    $sql = 'SELECT * from users';
    $results = mysqli_query($conn,$sql);
    foreach($results as $result){

    echo '<tr>';
        echo '<td>' . $result['id'].'</td>';
        echo '<td>' . $result['username'].'</td>';
        echo '<td>' . $result['email'].'</td>';
        echo '<td>' . $result['lastname'].'</td>';
        echo '<td>' . $result['firstname'].'</td>';
        echo '<td>' . $result['middlename'].'</td>';
        echo '<td>' . $result['birthday'].'</td>';
        echo '<td>' . $result['address'].'</td>';
        echo '<td>' . $result['mobile'].'</td>';
        echo '<td>' . $result['lastlogin'].'</td>';
        echo '<td>
            <a class = "btn btn-primary" href="http://localhost/app/tutorials/users/edit.php?id="'.$result['id'].'"> Edit</a>
            <a class = "btn btn-danger"> Delete</a></td>';
    echo '</tr>';

    }
?>
            

