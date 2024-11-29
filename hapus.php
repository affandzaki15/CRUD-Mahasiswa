<?php
include 'koneksi_db.php';

// Ambil NIM dari URL
if (isset($_GET['nim'])) {
    $nim = $_GET['nim'];
    $sql = "DELETE FROM mahasiswa WHERE nim='$nim'";

    if ($conn->query($sql) === TRUE) {
        header("Location: index.php");
    } else {
        echo "Error: " . $conn->error;
    }
} else {
    echo "Data tidak ditemukan!";
}
?>
