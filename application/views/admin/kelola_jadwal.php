<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Kelola Jadwal Admin</title>
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
      <li class="nav-item ">
        <a class="nav-link" href="<?php echo base_url('admin/dashboard/kelola-jadwal') ?>">Kelola Jdwal </a>
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
                <div class="card-header text-center"><strong>Daftar Jadwal</strong></div>
                <div class="card-body">
                    <table class="table table-condnsed table-hover">
                        <thead>
                            <tr>
                                <th>No</th>
                                <th>Nama Kereta</th>
                                <th>Asal</th>
                                <th>Tujuan</th>
                                <th>Tanggal Berangkat</th>
                                <th>Tanggal sampai</th>
                                <th>Kelas</th>
                                <th>Aksi</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php $no=1; ?>
                            <?php foreach($jadwal as $jdw): ?>
                                <tr>
                                    <td><?= $no++ ?></td>
                                    <td><?= $jdw->nama_kereta ?></td>
                                    <td><?= $jdw->ASAL?></td>
                                    <td><?= $jdw->TUJUAN?></td>
                                    <td><?= $jdw->tgl_berangkat ?></td>
                                    <td><?= $jdw->tgl_sampai ?></td>
                                    <td><?= $jdw->kelas?></td>
                                    <td>
                                        <a class="btn btn-danger" href="">Hapus</a>
                                        <a class="btn btn-primary" href="">Edit</a>
                                    </td>
                                </tr>
                            <?php endforeach; ?>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
        <div class="col-md-4">
          <div class="card">
              <div class="card-header text-center "><strong>Form Tambah Jadwal</strong></div>
              <div class="body">

              </div>
          </div>   
          <form action="<?= base_url('tambahJadwal')?>" method="POST">
                <div class="form-group">
                    <label>Nama Kereta</label>
                    <input type="text" name="nama_kereta" placeholder="Nama Kereta" class="form-control" required>
                </div>  

                <div class="form-group">
                    <label> Stasiun Asal</label>
                    <select name="asal" class="form-control" required>
                        <?php foreach($setasiun as $stn): ?>
                            <option value="<?=$stn->id ?>"><?=$stn->nama_setasiun?></option>
                        <?php endforeach ?>    
                    </select>
                </div>  

                <div class="form-group">
                    <label> Stasiun Tujuan</label>
                    <select name="tujuan" class="form-control" required>
                        <?php foreach($setasiun as $stn): ?>
                            <option value="<?=$stn->id ?>"><?=$stn->nama_setasiun?></option>
                        <?php endforeach ?> 
                    </select>
                </div>  

                
                <div class="form-group">
                    <label>Tanggal Berangkat</label>
                    <input type="datetime-local" name="tgl_berangkat" min="<?= date('Y-m-d\TH:i') ?>" value="<?= date('Y-m-d\TH:i') ?>" class="form-control" required>
                </div>  

                <div class="form-group">
                    <label>Tanggal sampai</label>
                    <input type="datetime-local" name="tgl_sampai" min="<?= date('Y-m-d\TH:i') ?>" value="<?= date('Y-m-d\TH:i') ?>" class="form-control" required>
                </div>  

                <div class="form-group">
                    <label>Kelas</label>
                    <select name="kelas" class="form-control" required>
                        <option value=""></option>
                        <option value="EKONOMI">EKONOMI</option>
                        <option value="EKONOMI">EKSEKUTIF</option>
                        <option value="EKSEKUTIF">BISNIS</option>
                    </select>
                </div> 
                
                <button class="btn btn-block btn-success">Tambah Jadwal</button>
            </form>
        </div>
    </div>
</div>

<script src="<?= base_url('assets/js/bootstrap.min.js')?>"></script>
</body>
</html>
