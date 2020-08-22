<!-- jumbo tron -->
<div class="jumbotron jumbotron-fluid">
  <div class="container">
   <div class="row">
      <div class="col-md-8">
        <br> <br> <br> 
      <h1 class="display-4">Selamat Datang di Ikereta</h1>    
          <p>Kemudahan anda dalam menggunakan Kerets Api dengan hadirnya iKereta</p>
          </div>

        <div class="col-md-4">
          <form action="<?= base_url('cariTiket')?>" method="POST">
            <div class="form-group">
              <label>Setasiun Asal</label>
              <select name="asal" class="form-control">

              <?php foreach($stasiun as $stn): ?>
                <option  value="<?= $stn->id ?>"><?= $stn->nama_setasiun?></option>
              <?php endforeach; ?>

              </select>
            </div>

            <div class="form-group">
              <label>Setasiun Tujuan</label>
              <select name="tujuan" class="form-control">

                <?php foreach($stasiun as $stn): ?>
                <option  value="<?= $stn->id ?>"><?= $stn->nama_setasiun?></option>
              <?php endforeach; ?>

              </select>
            </div>

            <div class="form-group">
              <label>Tanggal Berenggkat</label>
             <input type="date" name="tanggal" class="form-control">
            </div>

              <div class="form-group">            
                <label>Jumlah Penumpang</label>             
                <select name="jumlah"  class="form-control">
                  <?php for($i=1; $i <= 4; $i++):?>
                    <option  value="<?= $i ?>"><?= $i ?>Penumpang</option>
                  <?php endfor; ?>
                </select>              
              </div>
              
                <button class="btn btn-dark btn-block">Cari Tket</button>
              
          </form>
        </div>
     </div>

    </div>
  </div>
</div>

  <div class="container">
  <hr>
  <div class="table table-responsive">
    <table class="table table-hover table-bordered">
      <thead class="bg-warning text-center">
        <tr>
          <th>No</th>
          <th>Nama Kereta</th>
          <th>Tanggal Berangkat</th>
          <th>Tanggal Sampai</th>
          <th>Aksi</th>
        </tr>
      </thead>
      <tbody class="text-center">
        <?php $no = 1; ?>
        <?php foreach($tiket as $tkt): ?>
        <tr>
          <td><?= $no++ ?></td>
          <td><?= $tkt->nama_kereta ?></td>
          <td><?php $date = date_create($tkt->tgl_berangkat); echo date_format($date, "d-m-y h:i:s"); ?></td>
          <td><?php $date = date_create($tkt->tgl_sampai); echo date_format($date, "d-m-y h:i:s"); ?></td>
          <td>
          <div ><a href="" class="btn btn-primary text-white">Pesan</a></div>
        </td>
        </tr>
        <?php endforeach; ?>
      </tbody>
    </table>
  </div>
</div>
