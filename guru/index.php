<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.6/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/js/bootstrap.min.js"></script>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
  <title>Halaman Guru</title>
</head>
<body>
<div class="container mt-3" style="background-color: #E6E6FA;">
  <!-- Nav tabs -->
  <ul class="nav nav-tabs" role="tablist">
    <li class="nav-item">
      <a class="nav-link text-dark" href="#"><strong>Home</strong></a>
    </li>
    <li class="nav-item">
      <a class="nav-link text-dark" data-bs-toggle="tab" href="#"><strong>Guru</strong></a>
    </li>
  </ul>
</div>

<center>
<div class="container">

  <br><br>
  <h2><i>Data Guru</i></h2>
  <br>
  <div class="card-header">
    <a href="create.php" class="btn btn-dark">Tambah Data</a>
  </div>
  <div class="container mt-3">
  
  <br>
  <div class="table-responsive">
    <table class="table table-success table-striped">
      <thead>
        <tr>
          <th>No</th>
          <th>NIP</th>
          <th>Nama</th>
          <th>Alamat</th>
          <th>Action</th>
        </tr>
      </thead>
      <tbody>
        <?php
          include'../database.php';
          $guru =  new guru();
          $no = 1;
          foreach ($guru->index() as $data){
          ?>
          <tr>
            <th scope="row"><?php echo $no++ ?></th>
              <td><?php echo $data['nip'] ?></td>
              <td><?php echo $data['nama'] ?></td>
              <td><?php echo $data['alamat'] ?></td>
              <td>
                <a href="show.php?no=<?php echo $data['no']; ?>" class="btn btn-warning rounded-pill">Show</a> ||
                <a href="edit.php?no=<?php echo $data['no']; ?>" class="btn btn-success rounded-pill">Edit</a> ||
                <form action="proses.php" method="post">
                  <input type="hidden" name="no" value="<?php echo $data['no']; ?>">
                  <input type="hidden" name="aksi" value="delete">
                  <button type="submit" class="btn btn-danger rounded-pill" name="save" onclick="return confirm('Are you sure you want to delete this data ?')">
                    Delete
                  </button>
                </form>
              </td>
            </tr>
            <?php
              }
            ?>
      </tbody>
    </table>
  </div>
</div>
</div>
</center>

</body>
</html>