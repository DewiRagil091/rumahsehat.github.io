<?php
include 'connect.php';
if(isset($_POST['submit'])){
    $nama=$_POST['nama'];
    $spesialisasi=$_POST['spesialisasi'];
    $no_hp=$_POST['no_hp'];

    $sql = "INSERT INTO `dokter` (nama, spesialisasi, no_hp)
        VALUES ('$nama', '$spesialisasi', '$no_hp')";
    $result=mysqli_query($con,$sql);
    if ($result) {
        header('location:display_dokter.php');
    }else {
        die(mysqli_error($con));
    }
}
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/@docsearch/css@3">

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">

    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.min.css" rel="stylesheet">

</head>
<body>
    <div class="container my-5">
        <form method="post">
            <div class="mb-3">
                <label class="form-label">Nama</label>
                <input type="text" class="form-control" placeholder="ex: dr. Muhammad Al Ghifari S.P.J." name="nama" autocomplete="off">
            </div>
            <div class="mb-3">
                <label class="form-label">Spesialisasi</label>
                <input type="text" class="form-control" placeholder="ex: Penyakit Jantung" name="spesialisasi" autocomplete="off">
            </div>
            <div class="mb-3">
                <label class="form-label">Nomor HP</label>
                <input type="number" class="form-control" placeholder="ex: 082161029268" name="no_hp" autocomplete="off">
            </div>
        
            <button type="submit" class="btn btn-primary" name="submit">Submit</button>
        </form>
    </div>
</body>
</html>