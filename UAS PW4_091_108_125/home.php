<?php

session_start();
include "connect.php";
if(!isset($_SESSION['username'])){
    header("location:login.php");
}elseif(!isset($_SESSION['username'])){
    $username = $_SESSION['username']; 
}

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Website RS</title>
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">

</head>

<body onload="startTime()">
    <!-- Navbar -->
    <nav class="navbar navbar-expand-lg text-bg-primary navbar-light fixed-top">
        <div class="container">
            <a class="nav-item " href="#" ><a class="nav-link active fs-1" aria-current="page" href="#home">Rumah Sakit</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav"
                aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse " id="navbarNav">
                <ul class="navbar-nav ms-auto">
                    <li class="nav-item">
                        <a class="nav-link active text-bg-primary fs-3" aria-current="page" href="home.php">Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link text-bg-primary fs-3" href="about_us.php">About Us</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link text-bg-primary fs-3" href="logout.php">Log Out</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>
    <!-- Akhir Navbar -->
    
    <!-- JAM -->
    <div id="jam" style="font-size: 28px; text-align: center;"></div>
    <script src="jam.js"></script>
    <!-- Akhir JAM -->

    <!-- Pilihan Dokter/Pasien -->
    <div class="container-option">
        <div class="row">
            <div class="col-md-6">
                <div class="card" style="width: 100%;">
                    <img src="img/dokter.jpg" class="card-img-top img-fluid" alt="dokter">
                    <div class="card-body">
                        <h5 class="card-title">Lihat Data Dokter</h5>
                        <a href="display_dokter.php" class="btn btn-primary">Go</a>
                    </div>
                </div>
            </div>

            <div class="col-md-6">
                <div class="card" style="width: 100%;">
                    <img src="img/pasien.jpg" class="card-img-top img-fluid" alt="pasien">
                    <div class="card-body">
                        <h5 class="card-title">Lihat Data Pasien</h5>
                        <a href="display_pasien.php" class="btn btn-primary">Go</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Akhir Pilihan Dokter/Pasien -->

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
</body>

</html>