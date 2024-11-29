<?php
include 'koneksi_db.php';

// Ambil NIM dari URL
if (isset($_GET['nim'])) {
    $nim = $_GET['nim'];
    $sql = "SELECT * FROM mahasiswa WHERE nim='$nim'";
    $result = $conn->query($sql);

    if ($result->num_rows > 0) {
        $row = $result->fetch_assoc();
    } else {
        echo "Data tidak ditemukan!";
        exit;
    }
}

// Proses penyimpanan perubahan
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $nama = $_POST['nama'];
    $sql_update = "UPDATE mahasiswa SET nama='$nama' WHERE nim='$nim'";
    if ($conn->query($sql_update) === TRUE) {
        header("Location: index.php");
    } else {
        echo "Error: " . $conn->error;
    }
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>Edit Mahasiswa</title>
    <link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
    <h1>Edit Data Mahasiswa</h1>
    <form method="POST">
        <label for="nim">NIM:</label>
        <input type="text" id="nim" name="nim" value="<?= $row['nim']; ?>" required>
        
        <label for="nama">Nama:</label>
        <input type="text" id="nama" name="nama" value="<?= $row['nama']; ?>" required>
        
        <button class="subm" type="submit">Simpan Perubahan</button>
    </form>
    <a href="index.php" class="btn-back">Kembali</a>
</body>
<div>
        <h5 style="text-align: center;">Copyright &copy; Affan Dzaki 2024</h5>
    </div>
</html>
