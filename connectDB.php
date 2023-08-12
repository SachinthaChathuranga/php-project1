<?php 
    $hostName = 'localhost';
    $userName = 'root';
    $password = '';
    $dbName = 'project';

    $con = mysqli_connect($hostName,$userName,$password,$dbName);

    if(!$con){
        die("Failed to connect");
    }

?>