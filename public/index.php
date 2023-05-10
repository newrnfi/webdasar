<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Halaman Utama CRUD</title>
    <link rel="stylesheet" href="./css/style.css">
    <link rel="stylesheet" href="./css/bootstrap.min.css">
    <link rel="stylesheet" href="./font/bootstrap-icons.css">
</head>
<body>
    <div class="col-9 my-5 mx-auto">
    <h1>Daftar Data Diri Mahasiswa</h1>
        <div class="col align-self-end">
            <a class="btn btn-small btn-success mb-2" href="./tambah.php"><i class="bi bi-clipboard-plus"></i> Tambah</a>
        </div>
        <div id="main" class="d-grid mask-custom">
            
            <?php 
                require_once "./conn.php"; 

                $sql = "SELECT * FROM `data_diri`";
            ?>
            
            <table class="table table-striped text-center">
                <thead>
                <tr>
                    <td>NO.</td>
                    <td>NIM</td>
                    <td>NAMA</td>
                    <td>JENIS KELAMIN</td>
                    <td>TEMPAT LAHIR</td>
                    <td>TANGGAL LAHIR</td>
                    <td>ALAMAT</td>
                    <td>AKSI</td>
                </tr>
                </thead>
                <tbody>
                    
            <?php

                $no = 1;

                if($result = mysqli_query($conn, $sql)) {
                    while ($row = mysqli_fetch_assoc($result)) {
            ?>
                <tr>
                    <td><?php echo $no; $no++ ?></td>
                    <td><?php echo $row['nim'] ?></td>
                    <td><?php echo $row['nama'] ?></td>
                    <td><?php echo $row['jk'] ?></td>
                    <td><?php echo $row['tempat_lahir'] ?></td>
                    <td><?php echo $row['tgl_lahir'] ?></td>
                    <td><?php echo $row['alamat'] ?></td>
                    <td>
                        <div class="col-8 mx-auto">
                        <a class="btn btn-warning mb-1" href="./edit.php"><i class="bi bi-pencil-square"></i> Ubah</a>
                        <br/>
                        <a class="btn btn-danger" href="./hapus.php"><i class="bi bi-trash"></i> Hapus</a>
                        </div>
                    </td>
                </tr>
            <?php
                    }
                }
            ?>
                    
                </tbody>
            </table>
        </div>
    </div>
    
    <script src="./js/bootsrap.min.js"></script>
    <script src="./js/bootsrap.bundle.min.js"></script>
</body>
</html>