<?php
include 'koneksi_db.php';

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $nim = $_POST['nim'];
    $nama = $_POST['nama'];

    // Periksa apakah NIM sudah ada
    $sql_check = "SELECT * FROM mahasiswa WHERE nim='$nim'";
    $result = $conn->query($sql_check);

    if ($result->num_rows > 0) {
        // Jika NIM sudah ada, lakukan update
        $sql_update = "UPDATE mahasiswa SET nama='$nama' WHERE nim='$nim'";
        if ($conn->query($sql_update) === TRUE) {
            header("Location: index.php");
        } else {
            echo "Error: " . $conn->error;
        }
    } else {
        // Jika NIM belum ada, lakukan insert
        $sql_insert = "INSERT INTO mahasiswa (nim, nama) VALUES ('$nim', '$nama')";
        if ($conn->query($sql_insert) === TRUE) {
            header("Location: index.php");
        } else {
            echo "Error: " . $conn->error;
        }
    }
}
?>
