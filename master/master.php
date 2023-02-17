<div class="col-md-8">
  <div class="row">
    <div class="col-md-6">
      <div class="card">
        <div class="card-header bg-danger text-bg-dark">
          <h5>Program</h5>
        </div>
        <div class="card-body">
          <table class="table table-hover">
            <thead>
              <tr>
                <th>No.</th>
                <th>Nama Program</th>
              </tr>
            </thead>
            <tbody>
              <?php
              $noPrograms = 1;
              $programs = load("program");
              foreach ($programs as $program) :
              ?>
                <tr>
                  <td><?= $noPrograms++; ?></td>
                  <td><?= $program['nama_program']; ?></td>
                </tr>
              <?php endforeach; ?>
            </tbody>
          </table>
        </div>
      </div>
    </div>
    <div class="col-md-6">
      <div class="card">
        <div class="card-header bg-info text-bg-dark">
          <h5>Jenis Transaksi</h5>
        </div>
        <div class="card-body">
          <table class="table table-hover">
            <thead>
              <tr>
                <th>No.</th>
                <th>Kode Transaksi</th>
                <th>Kode Rekening</th>
                <th>jenis Transaksi</th>
              </tr>
            </thead>
            <tbody>
              <?php
              $noJenis_transaksi = 1;
              $transactions = load("jenis_transaksi");
              foreach ($transactions as $transaction) :
              ?>
                <tr>
                  <td><?= $noJenis_transaksi++; ?></td>
                  <td><?= $transaction['kode_transaksi']; ?></td>
                  <td><?= $transaction['kode_rekening']; ?></td>
                  <td><?= $transaction['jenis_transaksi']; ?></td>
                </tr>
              <?php endforeach; ?>
            </tbody>
          </table>
        </div>
      </div>
    </div>
  </div>
  <div class="row mt-2">
    <div class="col-md-6">
      <div class="card">
        <div class="card-header bg-warning text-bg-dark">
          <h5>Komponen</h5>
        </div>
        <div class="card-body">
          <table class="table table-hover">
            <thead>
              <tr>
                <th>No.</th>
                <th>Nama Komponen</th>
              </tr>
            </thead>
            <tbody>
              <?php
              $noKomponen = 1;
              $components = load("komponen");
              foreach ($components as $component) :
              ?>
                <tr>
                  <td><?= $noKomponen++; ?></td>
                  <td><?= $component['nama_komponen']; ?></td>
                </tr>
              <?php endforeach; ?>
            </tbody>
          </table>
        </div>
      </div>
    </div>
    <div class="col-md-6">
      <div class="card">
        <div class="card-header bg-success text-bg-dark">
          <h5>Penyedia</h5>
        </div>
        <div class="card-body">
          <table class="table table-hover">
            <thead>
              <tr>
                <th>No.</th>
                <th>Nama Penyedia</th>
                <th>Nomor Telepon</th>
                <th>NPWP</th>
              </tr>
            </thead>
            <tbody>
              <?php
              $noPenyedia = 1;
              $suppliers = load("penyedia");
              foreach ($suppliers as $supply) :
              ?>
                <tr>
                  <td><?= $noPenyedia++; ?></td>
                  <td><?= $supply['nama_penyedia']; ?></td>
                  <td><?= $supply['telepon_hp']; ?></td>
                  <td><?= $supply['npwp_penyedia']; ?></td>
                </tr>
              <?php endforeach; ?>
            </tbody>
          </table>
        </div>
      </div>
    </div>
  </div>
</div>