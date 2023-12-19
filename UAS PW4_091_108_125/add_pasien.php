<?php
include 'connect.php';
if(isset($_POST['submit'])){
    $nama=$_POST['nama'];
    $gejala=$_POST['gejala'];
    $penyakit=$_POST['penyakit'];
    $no_hp=$_POST['no_hp'];

    // Memeriksa apakah input 'penyakit' kosong
    if(empty($penyakit)) {
        $penyakit = 'UNDIAGNOSED';
    }

    $sql = "INSERT INTO `pasien` (nama, gejala, penyakit, no_hp)
        VALUES ('$nama', '$gejala', '$penyakit', '$no_hp')";
    $result=mysqli_query($con,$sql);
    if ($result) {
        header('location:display_pasien.php');
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
                <input type="text" class="form-control" placeholder="ex: Alucard Syahputra" name="nama" autocomplete="off">
            </div>
            <div class="mb-3">
                <label class="form-label">Gejala</label>
                <input type="text" class="form-control" placeholder="ex: Demam, pusing, batuk." name="gejala" autocomplete="off">
            </div>
            <div class="mb-3">
                <label class="form-label">Penyakit</label>
                <input type="text" class="form-control" placeholder="(Kosongkan jika belum terdiagnosis)" name="penyakit" autocomplete="off">
            </div>
            <div class="mb-3">
                <label class="form-label">Nomor HP</label>
                <input type="number" class="form-control" placeholder="ex: 082161029268" name="no_hp" autocomplete="off">
            </div>
            <div class="mb-3">
                <label class="form-label">Pilih Dokter</label>
                <select class="form-select" name="id_dokter">
                <option value="">Pilih Dokter</option>
                <?php
                // Mengambil data dokter dari basis data
                $sql = "SELECT id, nama FROM dokter";
                $result = mysqli_query($con, $sql);

                // Menampilkan pilihan dokter dalam dropdown select
                while ($row = mysqli_fetch_assoc($result)) {
                    echo '<option value="' . $row['id'] . '">' . $row['nama'] . '</option>'; //NTAH KNP ID NYA TIDAK TAMPIL
                }
                ?>
                </select>
            </div>
        
            <button type="submit" class="btn btn-primary" name="submit">Submit</button>
        </form>
    </div>
</body>
</html>