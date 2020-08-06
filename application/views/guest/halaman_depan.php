<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Halaman Depan</title>
    <link rel="stylesheet" href="<?= base_url('assets/css/bootstrap.min.css') ?>">

</head>
<body>

    <nav class="navbar navbar-expand-lg navbar-light bg-light">
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarTogglerDemo01" aria-controls="navbarTogglerDemo01" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
  <div class="collapse navbar-collapse" id="navbarTogglerDemo01">
    <a class="navbar-brand" href="#">iKereta</a>
    <ul class="navbar-nav mr-auto mt-2 mt-lg-0">
      <li class="nav-item active">
        <a class="nav-link" href="#">Home <span class="sr-only">(current)</span></a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="#">Konfirmasi Pembayaran</a>
      </li>
    </ul>
  </div>
</nav>
<!-- jumbo tron -->
<div class="jumbotron jumbotron-fluid">
  <div class="container">
   <div class="row">
      <div class="col-md-8">
      <h1 class="display-4">Selamat Datang di Ikereta</h1>    
          <p>Kemudahan di tangan anda untuk mendaptkan kenyamanan dalam perjalanan kereta anda. Dengan iKereta anda bisa mendapatkan kemudahan untuk perjalanan anda.</p>
          </div>

        <div class="col-md-4">
          <form action="" method="POST">
            <div class="form-group">
              <label>Setasiun Asal</label>
              <select name="" class="form-control">
                <option  value="">MALANG</option>
              </select>
            </div>

            <div class="form-group">
              <label>Setasiun Tujuan</label>
              <select name="" class="form-control">
                <option  value="">SURABAYA</option>
              </select>
            </div>

            <div class="form-group">
              <label>Tanggal Berenggkat</label>
             <input type="date" name="tanggal" class="form-control">
            </div>

              <div class="form-group">
                <label>Jumlah Penumpang</label>
                <select name=""  class="form-control">
                  <option  value="">5 Penumpang</option>
                </select>
              </div>
              
                <button class="btn btn-dark btn-block">Cari Tket</button>
              
          </form>
        </div>
     </div>

    </div>
  </div>
</div>
    <script src="<?= base_url('assets/js/bootstrap.min.js')?>"></script>
</body>
</html>