<div class="col-md-8">
  <div class="row">
    <div class="col-md-8">
      <div class="card">
        <div class="card-header bg-warning text-bg-dark">
          <h5>Data Komponen</h5>
        </div>
        <div class="card-body">
          <table class="table table-hover">
            <thead>
              <tr>
                <th>No.</th>
                <th>Nama Komponen</th>
                <th>aksi</th>
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
      <div class="card">
        <div class="card-header bg-warning text-bg-dark">
          <h5>Tambah Data Komponen</h5>
        </div>
        <form action="POST">
          <div class="card-body">
            <label for="namaKomponen" class="form-label">Nama Komponen</label>
            <input type="text" class="form-control" id="namaKomponen" aria-describedby="namaKomponenHelp">
            <div id="namaKomponenHelp" class="form-text">Masukan nama Komponen.</div>
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