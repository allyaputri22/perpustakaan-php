<?php
include "koneksi.php";

// Mengambil data dari database untuk ditampilkan dalam tabel
$proses = mysqli_query($koneksi, "SELECT * FROM mahasiswa") or die(mysqli_error($koneksi));

// Mengecek apakah ada parameter id di URL untuk mode edit
$edit_mode = isset($_GET['id']);
if ($edit_mode) {
    $npm = $_GET['id'];
    $proses_ambil = mysqli_query($koneksi, "SELECT * FROM mahasiswa WHERE id = $npm") or die(mysqli_error($koneksi));
    $data_edit = mysqli_fetch_assoc($proses_ambil);
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Data Mahasiswa</title>
    <link href="library/bootstrap/css/bootstrap.min.css" rel="stylesheet" media="screen"> 
    <link href="library/bootstrap/css/bootstrap-responsive.min.css" rel="stylesheet" media="screen">
    <link href="library/assets/styles.css" rel="stylesheet" media="screen">
    <script src="library/vendors/modernizr-2.6.2-respond-1.1.0.min.js"></script>
</head>
<body>
    <form action="cari.php" method="POST">
        <input type="text" name="tcari" placeholder="Masukkan Kata Kunci">
        <button type="submit" name="bcari">Cari</button>
    </form>

    <div class="span9" id="content">
        <div class="row-fluid">
            <div class="block">
                <div class="navbar navbar-inner block-header">
                    <div class="muted pull-left">Input Nilai Mahasiswa</div>
                </div>
                <div class="block-content collapse in">
                    <div class="span12">
                        <form action="<?php echo $edit_mode ? 'pert13-edit.php?id=' . $data_edit['id'] . '&proses=1' : 'proses_pert11.php'; ?>" method="POST">
                            <fieldset>
                                <legend>Input Mahasiswa</legend>
                                <div class="control-group">
                                    <label class="control-label" for="nama">Nama Mahasiswa</label>
                                    <div class="controls">
                                        <input type="hidden" class="input-xlarge focused" id="id" name="id" value="<?php echo $edit_mode ? $data_edit['id'] : ''; ?>">
                                        <input type="text" class="input-xlarge focused" id="nama" name="nama" value="<?php echo $edit_mode ? $data_edit['nama'] : ''; ?>">
                                    </div>
                                </div>
                                <div class="control-group">
                                    <label class="control-label" for="prodi">Prodi Mahasiswa</label>
                                    <div class="controls">
                                        <input type="text" class="input-xlarge focused" id="prodi" name="prodi" value="<?php echo $edit_mode ? $data_edit['prodi'] : ''; ?>">
                                    </div>
                                </div>
                                <div class="form-actions">
                                    <button type="submit" class="btn btn-primary">Proses data</button>
                                    <button type="reset" class="btn">Cancel</button>
                                </div>
                            </fieldset>
                        </form>
                    </div>
                </div>
            </div>

            <div class="block">
                <div class="navbar navbar-inner block-header">
                    <div class="muted pull-left">Data Mahasiswa</div>
                </div>
                <div class="block-content collapse in">
                    <div class="span12">
                        <table class="table">
                            <thead>
                                <tr>
                                    <th>NPM Mahasiswa</th>
                                    <th>Nama Mahasiswa</th>
                                    <th>Prodi Mahasiswa</th>
                                    <th>Aksi</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php
                                while ($data = mysqli_fetch_assoc($proses)) {
                                ?>
                                <tr>
                                    <td><?php echo $data['id']; ?></td>
                                    <td><?php echo $data['nama']; ?></td>
                                    <td><?php echo $data['prodi']; ?></td>
                                    <td><a href="pert11.php?id=<?php echo $data['id']; ?>">Edit</a> | <a href="pert12-hapus.php?id=<?php echo $data['id']; ?>">Hapus</a></td>
                                </tr>
                                <?php
                                }
                                ?>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>
</html>
