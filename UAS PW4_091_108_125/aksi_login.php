<?php

session_start();
include ("connect.php");

$username = $_POST['username'];
$password = $_POST['password'];

$query = mysqli_query($con, "select * from user where username = '$username' and password = '$password'");

$cek = mysqli_num_rows($query);

if($cek==true){
    $_SESSION['username'] = $username;
    header("location:home.php");
}else{
    echo "<script> alert ('username dan password anda salah');</script>";
}



?>