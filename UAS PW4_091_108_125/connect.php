<?php 

$con = new mysqli('localhost', 'root', '', 'rumah_sakit');

if (!$con) {
    die(mysqli_error($con));
}


?>