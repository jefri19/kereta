<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboart Admin</title>
    <link rel="stylesheet" href="<?= base_url('assets/css/bootstrap.min.css') ?>">

</head>
<body>

    <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarTogglerDemo01" aria-controls="navbarTogglerDemo01" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
  <div class="collapse navbar-collapse" id="navbarTogglerDemo01">
    <a class="navbar-brand" href="#">Admin Panel</a>
    <ul class="navbar-nav mr-auto mt-2 mt-lg-0">
      <li class="nav-item active">
        <a class="nav-link" href="<?php echo base_url() ?>">Home <span class="sr-only">(current)</span></a>
      </li>
    </ul>
    <span class="navbar-text">
       <a href="<?= base_url('logout')?>">Loguot</a>
    </span>
  </div>
</nav>

<div class="container-fluid my-4">
    <div class="row">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Daftar Stasiun</div>
                <div class="card-body">
                    <table class="table table-condnsed table-hover">
                        <thead>
                            <tr>
                                <th>No</th>
                                <th>Nama Stasiun</th>
                                <th>Aksi</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php $no = 1; ?>
                            <?php foreach($setasiun as $stn): ?>
                            <tr>
                                <th><?= $no++ ?></th>
                                <th><?= $stn->nama_setasiun ?></th>
                                <th>
                                  <a href="<?= base_url('hapusStasiun/'.$stn->id) ?>" class="btn btn-danger">Hapus</a>

                                  <a href=""class="btn btn-primary">Edit</a>
                                </th>
                            </tr>
                            <?php endforeach ?>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
        <div class="col-md-4">
          <div class="card">
              <div class="card-header">Form Tambah Stasiun</div>
              <div class="body">

              </div>
          </div>   
          <form action="<?= base_url('tambahSetasiun')?>" method="POST">
                <div class="form-group">
                    <label>Nama Stasiun</label>
                    <input type="text"class="form-control"name="setasiun"placeholder="Nama Stasiun"><br>
                    <button class="btn btn-block btn-success">Tambah Stasiun</button>
                </div>           
            </form>
        </div>
    </div>
</div>

<script src="<?= base_url('assets/js/bootstrap.min.js')?>"></script>
</body>
</html>
