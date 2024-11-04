<?php
$db_servername = "localhost";
$db_username = "root";
$db_password = "";
$db_dbname = "managementsystem";


// Create connection
$conn = mysqli_connect($db_servername, $db_username, $db_password,$db_dbname);
if(!$conn){
    die();
}
?>