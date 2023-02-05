<section>
  <div class="d-flex w-100 mb-4">
    <p class="h2">Daftar Pelanggan</p>
    <button type="button" class="btn btn-primary ms-auto" data-bs-toggle="modal"
      data-bs-target="#tambahPelangganModal">Tambah Pelanggan</button>
  </div>

  <div class="row">
    <div class="col-lg-6">
      <?php Flasher::flash() ?>
    </div>
  </div>

  <table class="table table-bordered">
    <thead>
      <tr>
        <th>#</th>
        <th>Nama Pelanggan</th>
        <th>No Hp</th>
        <th>Alamat</th>
        <th>Action</th>
      </tr>
    </thead>
    <tbody>
      <?php foreach ($params["data"] as $pelanggan): ?>
        <tr>
          <td>
            <?= $pelanggan["IdPelanggan"] ?>
          </td>
          <td>
            <?= $pelanggan["NamaPelanggan"] ?>
          </td>
          <td>
            <?= $pelanggan["NoHp"] ?>
          </td>
          <td>
            <?= $pelanggan["Alamat"] ?>
          </td>
          <td>
            <a type="button" class="btn btn-danger" href="<?= BASE_URL; ?>/pelanggan/delete/<?= $pelanggan["IdPelanggan"] ?>"
              onclick="return confirm('Apakah anda yakin akan menghapus data?')">Delete</a>
          </td>
          </td>
        </tr>
      <?php endforeach ?>
    </tbody>
  </table>
</section>

<!-- Modal Tambah Pengguna -->
<div class="modal fade" id="tambahPelangganModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-lg">
    <form action="<?= BASE_URL; ?>/pelanggan/add" method="post">
      <input type="hidden" id="idPelanggan" name="idPelanggan" value="<?= $pengguna["idPelanggan"] ?>">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title">Tambah Pengguna</h5>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body">
          <div class="row mb-3">
            <label for="namaPelanggan" class="col-sm-4 col-form-label">Nama Pelanggan</label>
            <div class="col-sm-8">
              <input type="text" class="form-control" id="namaPelanggan" name="namaPelanggan">
            </div>
          </div>
          <div class="row mb-3">
            <label for="noHp" class="col-sm-4 col-form-label">No. HP</label>
            <div class="col-sm-8">
              <input type="noHp" class="form-control" id="noHp" name="noHp">
            </div>
          </div>
          <div class="row mb-3">
            <label for="alamat" class="col-sm-4 col-form-label">Alamat</label>
            <div class="col-sm-8">
              <input type="text" class="form-control" id="alamat" name="alamat">
            </div>
          </div>
          <div class="row mb-3">
            <label for="idPengguna" class="col-sm-4 col-form-label">Pengguna</label>
            <div class="col-sm-8">
              <select class="form-select" id="idPengguna" name="idPengguna">
                <?php foreach ($params["pengguna"] as $pengguna): ?>
                  <option value="<?= $pengguna["IdPengguna"] ?>"><?= $pengguna["NamaPengguna"] ?></option>
                <?php endforeach ?>
              </select>
            </div>
          </div>

        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
          <button type="submit" class="btn btn-primary">Tambah Data</button>
        </div>
    </form>

  </div>
</div>
</div>