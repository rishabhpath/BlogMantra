<?php

    // credentials

$db = "blogmantra";
$username = "root";
$password = "";
$host = "localhost";

$connection = mysqli_connect($host,$username,$password,$db);

$fname = "kaushik";
$lname = "giri1";
$query = "insert into users (fname,lname) values ('$fname','$lname')";

mysqli_query($connection,$query);
?>