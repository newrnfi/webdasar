<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>EDIT DATA DIRI</title>
    <link rel="stylesheet" href="./css/style.css">
    <link rel="stylesheet" href="./css/bootstrap.min.css">
    <link rel="stylesheet" href="./font/bootstrap-icons.css">
</head>
<body>
    <div class="col-lg-4 col-xxl-4 my-5 mx-auto">
    <h1 class="text-center">Edit Data Diri</h1>

<?php

include_once("conn.php");

if(isset($_POST['update'])) {   
    $id = $_POST['id'];
    
    $nim = $_POST['nim'];
    $nama = $_POST['nama'];
    $jk = $_POST['jk'];
    $tempat_lahir = $_POST['tempat_lahir'];
    $tgl_lahir = $_POST['tgl_lahir'];
    $alamat = $_POST['alamat'];
        
    $result = mysqli_query($conn, "UPDATE data_diri SET nim='$nim', nama='$nama', jk='$jk', tempat_lahir='$tempat_lahir', tgl_lahir='$tgl_lahir', alamat='$alamat' WHERE id='$id'");

    if($result){
        header("Location: index.php");
    } else {
        echo "Error: " . mysqli_error($conn);
    }
}
?>
<?php
$id = $_GET['id'];

$result = mysqli_query($conn, "SELECT * FROM data_diri WHERE id='$id'");
 
while($row = mysqli_fetch_array($result)) {
        $nim = $row['nim'];
        $nama = $row['nama'];
        $jk = $row['jk'];
        $tempat_lahir = $row['tempat_lahir'];
        $tgl_lahir = $row['tgl_lahir'];
        $alamat = $row['alamat'];
}
?>
<?php if(isset($_GET['id'])): ?>
    <form class="row needs-validation" action="edit.php" method="post" novalidate>
        <div class="col-md-12">
            <label for="validationCustom01" class="form-label">NIM</label>
            <input type="text" class="form-control" id="validationCustom01" name="nim" value="<?php echo $nim;?>" required>
            <div class="valid-feedback">
            Looks good!
            </div>
        </div>
        <div class="col-md-12">
            <label for="validationCustom02" class="form-label">NAMA</label>
            <input type="text" class="form-control" id="validationCustom02" name="nama" value="<?php echo $nama;?>" required>
            <div class="valid-feedback">
            Looks good!
            </div>
        </div>
        <div class="col-md-12">
            <label for="validationCustom03" class="form-label">JENIS KELAMIN</label>
            <input type="text" class="form-control" id="validationCustom03" name="jk" value="<?php echo $jk;?>" required>
            <div class="valid-feedback">
            Looks good!
            </div>
            <div class="invalid-feedback">
            Please select a valid gender.
            </div>
        </div>
        <div class="col-md-12">
            <label for="validationCustom04" class="form-label">TEMPAT LAHIR</label>
            <input type="text" class="form-control" id="validationCustom04" name="tempat_lahir" value="<?php echo $tempat_lahir;?>" required>
            <div class="valid-feedback">
            Looks good!
            </div>
        </div>
        <div class="col-md-12">
            <label for="validationCustom05" class="form-label">TANGGAL LAHIR</label>
            <input type="text" class="form-control" id="validationCustom05" name="tgl_lahir" value="<?php echo $tgl_lahir;?>" required>
            <div class="valid-feedback">
            Looks good!
            </div>
        </div>
        <div class="col-md-12">
            <label for="validationCustom06" class="form-label">ALAMAT</label>
            <textarea class="form-control" id="validationCustom06" name="alamat" required><?php echo $alamat;?></textarea>
        </div>
        <div>
        <td><input type="hidden" name="id" value="<?php echo $_GET['id'];?>"></td>
        </div>
        <div class="mt-3">
            <button class="btn btn-primary btn-large" type="submit" name="update" value="Update">Tambah</button>
        </div>
    </form>
<?php endif; ?>
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