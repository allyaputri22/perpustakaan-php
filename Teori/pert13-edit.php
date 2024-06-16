<?php
include "koneksi.php";

$npm = $_GET['id'];
$apakah_proses = isset($_GET['proses']) ? $_GET['proses'] : 0;

if ($apakah_proses == 1) {
    $nm_mhs = $_POST['nama'];
    $prodi_mhs = $_POST['prodi'];

    $proses_update_data = mysqli_query($koneksi, "UPDATE mahasiswa SET nama = '$nm_mhs', prodi = '$prodi_mhs' WHERE id = '$npm'")
        or die(mysqli_error($koneksi));

    if ($proses_update_data) {
        echo "
            <script>
                alert('Data Berhasil Disimpan');
                window.location.href='pert11.php';
            </script>";
    } else {
        echo "
            <script>
                alert('Data Gagal Disimpan');
                window.location.href='pert11.php';
            </script>";
    }
}
?>
