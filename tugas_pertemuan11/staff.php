<?php
    include_once("./koneksi.php");
    $query = mysqli_query($db, "SELECT * FROM staff");
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Daftar Buku</title>
    <style>
        table {
            border-collapse: collapse;
            width: 100%;
        }
        th, td {
            border: 1px solid #dddddd;
            text-align: left;
            padding: 8px;
        }
        th {
            background-color: #9519ee;
        }
        a {
            text-decoration: none;
            color: #9519ee;
            display: block;
            margin-bottom: 10px;
            transition: color 0.3s ease;
        }

        a:hover {
            color: #0056b3;
        }
    </style>
    </style>
</head>
<body>
    <h1>Daftar Staff</h1>
    
    <table>
        <thead>
            <tr>
                <th>NAMA</th>
                <th>NO TELP</th>
                <th>EMAIL</th>
                <th>ACTION</th>
            </tr>
        </thead>
        <tbody>
            <?php 
            foreach ($query as $data) {
            ?>
                <tr>
                    <td><?php echo $data["nama"] ?></td>
                    <td><?php echo $data["no_telp"] ?></td>
                    <td><?php echo $data["email"] ?></td>
                    <td>
                        <a href="<?php echo "edit-staff.php?id=" . $data["id"] ?>">Edit</a>
                        <a href="<?php echo "delete-staff.php?id=" . $data["id"] ?>">Hapus</a>
                    </td>
                </tr>
            <?php 
            }
            ?>
        </tbody>
    </table>
    <br>
    <a href="./tambah-staff.php">Tambah Staff</a>
    <br>

<a href="./index.php">Kembali ke Halaman Utama</a>
</body>
</html>
