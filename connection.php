<?php
    include 'constants.php';
    
    $con = mysqli_connect($Host_Name, $Database_User, $Password);
    $db = mysqli_select_db($con, $Database_name);
?>

