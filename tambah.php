<!DOCTYPE html>
<html>
<head>
    <title>Tambah Mahasiswa</title>
    <link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
    <h1>Tambah Mahasiswa</h1>
    <form action="proses.php" method="POST">
        <label for="nim">NIM:</label>
        <input type="text" id="nim" name="nim" required>
        
        <label for="nama">Nama:</label>
        <input type="text" id="nama" name="nama" required>
        
        <button type="submit" class="subm">Simpan</button>
    </form>
    <a href="index.php" class="btn-back">Kembali</a>
</body>
    <div>
        <h5 style="text-align: center;">Copyright &copy; Affan Dzaki 2024</h5>
    </div>
</html>

