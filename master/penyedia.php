<div class="col-md-8">
  <div class="row">
    <div class="col-md-8">
      <div class="card">
        <div class="card-header bg-success text-bg-dark">
          <h5>Data Penyedia</h5>
        </div>
        <div class="card-body">
          <table class="table table-hover">
            <thead>
              <tr>
                <th>No.</th>
                <th>Nama Penyedia</th>
                <th>Nomor Telepon</th>
                <th>NPWP</th>
                <th>Aksi</th>
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
                  <td>
                    <div class="d-grid gap-1 d-md-block">
                      <a href="#" class="btn btn-success btn-sm" type="button">Edit</a>
                      <a href="#" class="btn btn-danger btn-sm" type="button">Hapus</a>
                      <a href="#" class="btn btn-info btn-sm" type="button">Detail</a>
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
      <div class="card">
        <div class="card-header bg-success text-bg-dark">
          <h5>Tambah Data Jenis Transaksi</h5>
        </div>
        <form action="POST">
          <div class="card-body">
            <div class="mb-3">
              <label for="namaPenyedia" class="form-label">Nama Penyedia</label>
              <input type="text" class="form-control" id="namaPenyedia" aria-describedby="namaPenyedia">
              <div id="namaPenyedia" class="form-text">Masukan Nama Penyedia.</div>
            </div>
            <div class="mb-3">
              <label for="nomorTelepon" class="form-label">Nomor Telepon</label>
              <input type="text" class="form-control" id="nomorTelepon" aria-describedby="nomorTelepon">
              <div id="nomorTelepon" class="form-text">Masukan Nomor Telepon Penyedia.</div>
            </div>
            <div class="mb-3">
              <label for="npwp" class="form-label">NPWP</label>
              <input type="text" class="form-control" id="npwp" aria-describedby="npwp">
              <div id="npwp" class="form-text">Masukan NPWP Penyedia Jika Ada.</div>
            </div>
            <div class="mb-3">
              <div class="form-floating">
                <textarea class="form-control" placeholder="Masukan alamat penyedia" id="alamat" style="height: 100px"></textarea>
                <label for="alamat">Alamat Penyedia</label>
              </div>
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