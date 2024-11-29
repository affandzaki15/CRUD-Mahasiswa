<?php
include 'koneksi_db.php';
$sql = "SELECT * FROM mahasiswa";
$result = $conn->query($sql);
?>

<!DOCTYPE html>
<html>
<head>
    <title>My Friend</title>
    <link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
    <h1>Daftar Mahasiswa</h1>
<a href="tambah.php" class="btn">Tambah Mahasiswa</a>
    <table>
        <tr>
            <th>NIM</th>
            <th>Nama</th>
            <th>Aksi</th>
        </tr>
        <?php while ($row = $result->fetch_assoc()) { ?>
        <tr>
            <td><?= $row['nim']; ?></td>
            <td><?= $row['nama']; ?></td>
            <td>
                <a href="edit.php?nim=<?= $row['nim']; ?>" class="btn-edit">Edit</a>
                <a href="hapus.php?nim=<?= $row['nim']; ?>" class="btn-delete">Hapus</a>
            </td>
        </tr>
        <?php } ?>
    </table>
</body>
<div>
        <h5 style="text-align: center;">Copyright &copy; Affan Dzaki 2024</h5>
    </div>
</html>
