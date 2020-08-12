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
    <div class="row justify-content-center">
        <div class="col-md-4">
            <div class="card">
                <div class="card-header text-center bg-danger text-white"><strong>Edit Stasiun</strong></div>
                 <div class="card-body">
                    <form action="<?= base_url('editStasiun') ?>" method="POST">
                      <input type="hidden" name="id" value="<?= $data_stasiun->id ?>" >
                        <div class="form-group">
                            <label>Nama Stasiun</label>
                            <input type="text" class="form-control" name="nama_stasiun" value="<?= $data_stasiun->nama_setasiun ?>">
                        </div>

                        <button class="btn btn-success btn-block">Edit Nama Stasiun</button>
                    </form>
                </div>
           </div>
        </div>
    </div>
</div>

<script src="<?= base_url('assets/js/bootstrap.min.js')?>"></script>
</body>
</html>
