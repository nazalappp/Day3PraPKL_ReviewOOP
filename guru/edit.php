<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/css/bootstrap.min.css" integrity="sha384-B0vP5xmATw1+K9KRQjQERJvTumQW0nPEzvF6L/Z6nronJ3oUOFUFpCjEUQouq2+l" crossorigin="anonymous">

    <title>Hello, world!</title>
  </head>
  <body>
  <br><br><br>
            <center><h2 class="text-primary">Ubah Data Guru</h2></center>
        <!-- CARDs -->
        <div class="container">
        <div class="card">
            <div class="m-4">
            <?php
                include '../database.php';
                $guru = new guru();
                foreach ($guru->edit($_GET['no']) as $data) {
                    $no = $data['no'];
                    $nip = $data['nip'];
                    $nama = $data['nama'];
                    $alamat = $data['alamat'];
                }
            ?>
    <form action="../guru/proses.php" method="post" style="background-color = #E6E6FA;">
    <input type="hidden" name="aksi" value="update">
    <input type="hidden" name="no" value="<?= $no ?>">

        <div class="row mb-3">
            <label class="col-sm-2 col-form-label"><strong>NIP</strong></label>
            <p>
            <div class="col-sm-10">
                <input type="number" class="form-control" name="nip" value="<?php echo $nip ?>" required>
            </div>
            </p>
        </div>
        <div class="row mb-3">
            <label class="col-sm-2 col-form-label"><strong>Nama</strong></label>
            <p>
            <div class="col-sm-10">
                <input type="text" class="form-control" name="nama" value="<?php echo $nama ?>" required>
            </div>
            </p>
        </div>
        <div class="row mb-3">
            <label class="col-sm-2 col-form-label"><strong>Alamat</strong></label>
            <p>
            <div class="col-sm-10">
                <input type="text" class="form-control" name="alamat" value="<?php echo $alamat ?>" required>
            </div>
            </p>
        </div>
        <div class="row">
            <div class="col-sm-10 offset-sm-2">
                <button type="submit" name="save" class="btn btn-dark">Save</button>
            </div>
        </div>
            </input>
    </form>
</div>
        </div>
        </div>



    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: jQuery and Bootstrap Bundle (includes Popper) -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-Piv4xVNRyMGpqkS2by6br4gNJ7DXjqk09RmUpJ8jgGtD7zP9yug3goQfGII0yAns" crossorigin="anonymous"></script>

    <!-- Option 2: Separate Popper and Bootstrap JS -->
    <!--
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/js/bootstrap.min.js" integrity="sha384-+YQ4JLhjyBLPDQt//I+STsc9iw4uQqACwlvpslubQzn4u2UU2UFM80nGisd026JF" crossorigin="anonymous"></script>
    -->
  </body>
</html>