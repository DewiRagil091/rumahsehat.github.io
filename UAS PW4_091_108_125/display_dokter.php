
<?php
include 'connect.php';?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dokter</title>
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/@docsearch/css@3">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.min.css" rel="stylesheet">
</head>

<body onload="startTime()">
    <!-- Navbar -->
    <nav class="navbar navbar-expand-lg text-bg-primary navbar-light fixed-top">
        <div class="container">
            <a class="nav-item " href="#" ><a class="nav-link active fs-5" aria-current="page" href="#home">Data Dokter</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav"
                aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse " id="navbarNav">
                <ul class="navbar-nav ms-auto">
                    <li class="nav-item">
                        <a class="nav-link active text-bg-primary fs-6" aria-current="page" href="home.php">Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link text-bg-primary fs-6" href="about_us.php">About Us</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link text-bg-primary fs-6" href="logout.php">Log Out</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>
    <!-- Navbar -->

    <!-- JAM -->
    <div id="jam" style="font-size: 28px; text-align: center;"></div>
    <script src="jam.js"></script>
    <!-- JAM -->

    <!-- Tabel Dokter -->
    <div class="container-table mx-5 my-2">
        <table class="table">
            <thead>
                <tr>
                <th scope="col">No</th>
                <th scope="col">Nama</th>
                <th scope="col">Spesialisasi</th>
                <th scope="col">Nomor HP</th>
                <th scope="col">Operation</th>
            </tr>
        </thead>
        
        <tbody>
            <?php
                    $sql = "select * from `dokter`";
                    $result = mysqli_query($con,$sql);
                    $no = 1;
                    if ($result) {
                        
                        while ($row=mysqli_fetch_assoc($result)) {
                            $id=$row['id'];
                            $nama=$row['nama'];
                            $spesialisasi=$row['spesialisasi'];
                            $no_hp=$row['no_hp'];
                            echo '<tr>
                            <th scope="row">'.$no++.'</th>
                            <td>'.$nama.'</td>
                            <td>'.$spesialisasi.'</td>
                            <td>'.$no_hp.'</td>
                            <td>
                                <button class="btn btn-success"><a href="update_dokter.php?updateid='.$id.'" class="text-white">Ubah</a></button>
                                <button class="btn btn-danger"><a href="delete_dokter.php?deleteid='.$id.'" class="text-white">Hapus</a></button>
                            </td>
                            </tr>';
                        }
                    }
                ?>
            </tbody>
        </table>
    </div>
    <!-- Akhir Tabel Dokter -->

<button type="button" class="btn btn-primary mx-5"><a href="add_dokter.php" class="text-white">Tambah Data</a></button>

</body>
</html>