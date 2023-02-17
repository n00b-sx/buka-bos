<div class="col-md-8">
  <div class="row">
    <div class="col-md-8">
      <div class="card">
        <div class="card-header bg-danger text-bg-dark">
          <h5>Data Program</h5>
        </div>
        <div class="card-body">
          <table class="table table-hover">
            <thead>
              <tr>
                <th>No.</th>
                <th>Nama Program</th>
                <th>aksi</th>
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
        <div class="card-header bg-danger text-bg-dark">
          <h5>Tambah Data Program</h5>
        </div>
        <form action="POST">
          <div class="card-body">
            <label for="namaProgram" class="form-label">Nama Program</label>
            <input type="text" class="form-control" id="namaProgram" aria-describedby="namaProgramHelp">
            <div id="namaProgramHelp" class="form-text">Masukan nama program.</div>
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