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
<body class="text-bg-dark">
<div class="col-lg-4 col-xxl-4 my-5 mx-auto mask-custom text-white">
    <h3 class="text-center mt-2">Tambah Data Diri Mahasiswa</h3>
    <div class="mt-3 ms-4 me-4 mb-2">
        <a href="./" class="btn btn-sm btn-light" role="button">Kembali</a>
    </div>
    <?php

    if(isset($_POST['tambah'])) {

        require_once "./conn.php";

        $nim = $_POST['nim'];
        $nama = $_POST['nama'];
        $jk = $_POST['jk'];
        $tempat_lahir = $_POST['tempat_lahir'];
        $tgl_lahir = $_POST['tgl_lahir'];
        $alamat = $_POST['alamat'];


        $sql = "INSERT INTO `data_diri`
                (`nim`,`nama`,`jk`,`tempat_lahir`,`tgl_lahir`,`alamat`)
                VALUES
                ('$nim','$nama','$jk','$tempat_lahir','$tgl_lahir','$alamat')";

        if (mysqli_query($conn, $sql)) {
    ?>
        <div class="alert alert-success" role="alert">
            <i class="bi bi-info-circle"></i> Data Berhasil Ditambah. <a class="btn btn-link" href="./">Halaman Utama</a>
        </div>
    <?php
        }

    }

    ?>
    <div class="ms-4 me-4">
        <form class="row needs-validation" action="tambah.php" method="post" novalidate>
            <div class="col-md-12 mb-2">
                <label for="validationCustom01" class="form-label">NIM</label>
                <input type="text" class="form-control" id="validationCustom01" name="nim" required>
                <div class="valid-feedback">
                Looks good!
                </div>
            </div>
            <div class="col-md-12 mb-2">
                <label for="validationCustom02" class="form-label">Nama</label>
                <input type="text" class="form-control" id="validationCustom02" name="nama" required>
                <div class="valid-feedback">
                Looks good!
                </div>
            </div>
            <div class="col-md-12 mb-2">
                <label for="validationCustom03" class="form-label">Jenis Kelamin</label>
                <select class="form-select" id="validationCustom03" name="jk" required>
                    <option selected disabled value="">Pilih</option>
                    <option value="Laki-Laki">Laki-Laki</option>
                    <option value="Perempuan">Perempuan</option>
                </select>
                <div class="invalid-feedback">
                Please select a valid gender.
                </div>
            </div>
            <div class="col-md-12 mb-2">
                <label for="validationCustom04" class="form-label">Tempat Lahir</label>
                <input type="text" class="form-control" id="validationCustom04" name="tempat_lahir" required>
                <div class="valid-feedback">
                Looks good!
                </div>
            </div>
            <div class="col-md-12 mb-2">
                <label for="validationCustom05" class="form-label">Tanggal Lahir</label>
                <input type="text" class="form-control" id="validationCustom05" name="tgl_lahir" required>
                <div class="valid-feedback">
                Looks good!
                </div>
            </div>
            <div class="col-md-12 mb-2">
                <label for="validationCustom06" class="form-label">Alamat</label>
                <textarea class="form-control" id="validationCustom06" name="alamat" required>
                </textarea>
                <div class="valid-feedback">
                Looks good!
                </div>
            </div>
            <div class="mt-2">
                <button class="btn btn-primary btn-large mb-3" type="submit" name="tambah" value="Tambah">Tambah</button>
            </div>
        </form>
    </div>
</div>
    <script src="./js/bootsrap.min.js"></script>
    <script src="./js/bootsrap.bundle.min.js"></script>
    <script type="text/javascript">
        (() => {
        'use strict'

        const forms = document.querySelectorAll('.needs-validation')

        Array.from(forms).forEach(form => {
            form.addEventListener('submit', event => {
            if (!form.checkValidity()) {
                event.preventDefault()
                event.stopPropagation()
            }

            form.classList.add('was-validated')
            }, false)
        })
        })()
    </script>
</body>
</html>