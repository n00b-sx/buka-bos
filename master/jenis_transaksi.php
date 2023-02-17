<div class="col-md-8">
  <div class="row">
    <div class="col-md-8">
      <div class="card shadow-card">
        <div class="card-header bg-info text-bg-dark">
          <h5>Data Jenis Transaksi</h5>
        </div>
        <div class="card-body">
          <table class="table table-hover">
            <thead>
              <tr>
                <th>No.</th>
                <th>Kode Transaksi</th>
                <th>Kode Rekening</th>
                <th>jenis Transaksi</th>
                <th>Aksi</th>
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
                  <td>
                    <div class="d-grid gap-1 d-md-block">
                      <a href="#" class="btn btn-success btn-sm" type="button">Edit</a>
                      <a href="#" class="btn btn-danger btn-sm" type="button">Hapus</a>
                    </div>
                  </td>
                </tr>
              <?php endforeach; ?>
            </tbody>
          </table>
        </div>
      </div>
    </div>
    <div class="col-md-4">
      <div class="card shadow-card">
        <div class="card-header bg-info text-bg-dark">
          <h5>Tambah Data Jenis Transaksi</h5>
        </div>
        <form action="POST">
          <div class="card-body">
            <div class="mb-3">
              <label for="kodeTransaksi" class="form-label">Kode Transaksi</label>
              <input type="text" class="form-control" id="kodeTransaksi" aria-describedby="kodeTransaksi">
              <div id="kodeTransaksi" class="form-text">Masukan Kode Transaksi.</div>
            </div>
            <div class="mb-3">
              <label for="kodeRekening" class="form-label">Kode Rekening</label>
              <input type="text" class="form-control" id="kodeRekening" aria-describedby="kodeRekening">
              <div id="kodeRekening" class="form-text">Masukan Kode Rekening.</div>
            </div>
            <div class="mb-3">
              <label for="jenisTransaksi" class="form-label">Jenis Transaksi</label>
              <input type="text" class="form-control" id="jenisTransaksi" aria-describedby="jenisTransaksi">
              <div id="jenisTransaksi" class="form-text">Masukan Jenis Transaksi.</div>
            </div>
          </div>
          <div class="card-footer">
            <div class="d-grid gap-2 d-md-flex justify-content-md-end">
              <button class="btn btn-secondary me-md-2" type="reset">Batal</button>
              <button class="btn btn-primary" type="button">Simpan</button>
            </div>
          </div>
        </form>
      </div>
    </div>
  </div>
</div>