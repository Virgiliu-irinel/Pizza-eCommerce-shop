<?php
$con = mysqli_connect("localhost", "root", "", "pizza");

if (mysqli_connect_errno()){
    echo "failed to connect to DB:" . mysqli_connect_error();
}
?>