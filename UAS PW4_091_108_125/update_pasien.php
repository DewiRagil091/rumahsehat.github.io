<?php
include 'connect.php';
$id = $_GET['updateid'];

$sql = "SELECT * FROM `pasien` WHERE id=$id";
$result = mysqli_query($con, $sql);

$row = mysqli_fetch_assoc($result);
$nama = $row['nama'];
$gejala = $row['gejala'];
$penyakit = $row['penyakit'];
$no_hp = $row['no_hp'];
$id_dokter = $row['id_dokter']; // Menambahkan nilai dokter yang terkait dengan pasien

if (isset($_POST['submit'])) {
    // Tangani form submission dan update data ke basis data
    // ...
    $id_dokter = isset($_POST['id_dokter']) ? $_POST['id_dokter'] : $id_dokter;

    // Memeriksa apakah input 'penyakit' kosong
    if (empty($penyakit)) {
        $penyakit = 'UNDIAGNOSED';
    }

    // Membuat query update
    if (isset($id_dokter)) {
        $sql = "UPDATE `pasien` SET nama='$nama', gejala='$gejala', penyakit='$penyakit', no_hp='$no_hp', id_dokter=$id_dokter WHERE id=$id";
    } else {
        // Jika $id_dokter tidak terdefinisi, gunakan kembali nilai dari database
        $sql = "UPDATE `pasien` SET nama='$nama', gejala='$gejala', penyakit='$penyakit', no_hp='$no_hp' WHERE id=$id";
    }

    $result = mysqli_query($con, $sql);
    if ($result) {
        header('location:display_pasien.php');
    } else {
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
                <input type="text" class="form-control" placeholder="ex: Alucard Syahputra" name="nama" autocomplete="off" value=<?php echo $nama ?>>
            </div>
            <div class="mb-3">
                <label class="form-label">Gejala</label>
                <input type="text" class="form-control" placeholder="ex: Demam, pusing, batuk." name="gejala" autocomplete="off" value=<?php echo $gejala ?>>
            </div>
            <div class="mb-3">
                <label class="form-label">Penyakit</label>
                <input type="text" class="form-control" placeholder="(Kosongkan jika belum terdiagnosis)" name="penyakit" autocomplete="off" value=<?php echo $penyakit ?>>
            </div>
            <div class="mb-3">
                <label class="form-label">Pilih Dokter</label>
                <select class="form-select" name="id_dokter">
                    <option value="<?php echo $id_dokter; ?>" selected>(unchanged)</option>
                    <?php
                    // Mengambil data dokter dari basis data
                    $sql = "SELECT id, nama FROM dokter";
                    $result = mysqli_query($con, $sql);

                    // Menampilkan pilihan dokter dalam dropdown select
                    while ($row = mysqli_fetch_assoc($result)) {
                        echo '<option value="' . $row['id'] . '">' . $row['nama'] . '</option>';
                    }
                    ?>
                </select>
            </div>

            <button type="submit" class="btn btn-primary" name="submit">Update</button>
            
        </form>
    </div>
</body>
</html>
