<?php 
session_start();
$conn = mysqli_connect("localhost" , "root" , "");
        mysqli_select_db($conn , "addpost");

        session_destroy();
        header('location:log.php?logout');


?>