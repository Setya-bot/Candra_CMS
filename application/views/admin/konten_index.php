<div id="hilang"> 
  <?= $this->session->flashdata('alert')?>
</div>
<div class="col-lg-12 col-md-124">
  <div class="mt-1 mb-3">
    <!-- Button trigger modal -->
    <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#modalCenter">
      Tambah Konten
    </button>
    <!-- Modal -->
    <div class="modal fade" id="modalCenter" tabindex="-1" aria-hidden="true">
      <div class="modal-dialog modal-lg" role="document">
        <form action="<?= base_url('admin/konten/simpan') ?>" method="post" enctype="multipart/form-data">
        <div class="modal-content">
          <div class="modal-header">
            <h5 class="modal-title" id="modalCenterTitle">Tambah Konten</h5>
            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
          </div>
          <div class="modal-body">
            <div class="row">
              <div class="col mb-6">
                <label class="form-label">Nama</label>
                <input type="text" class="form-control" placeholder="Nama" name="judul" required>
              </div>
            </div>
            <div class="row">
              <div class="col mb-6">
                <label class="form-label">Kategori</label>
                <select name="id_kategori" class="form-control">
                    <?php foreach($kategori as $aa) { ?>
                        <option value=" <?= $aa['id_kategori' ] ?> "><?= $aa['nama_kategori' ] ?></option>
                    <?php } ?>
                </select>
              </div>
            </div>
            <div class="row">
              <div class="col mb-6">
                <label class="form-label">Quotes</label>
                <textarea name="keterangan" class="form-control"></textarea>
              </div>
            </div>
            <div class="row">
              <div class="col mb-6">
                <label class="form-label">Instagram</label>
                <input type="text" class="form-control" placeholder="Salin Link URL Instagram" name="instagram">
              </div>
            </div>
            <div class="row">
              <div class="col mb-6">
                <label class="form-label">Foto</label>
                <input type="file" name="foto" class="form-control"
                accept="image/png, image/jpeg">
              </div>
            </div>
          </div>
          <div class="modal-footer">
            <button type="button" class="btn btn-outline-secondary" data-bs-dismiss="modal">Close</button>
            <button type="submit" class="btn btn-primary">Save</button>
          </div>
        </div>
        </form>
      </div>
    </div>
  </div>
</div>
<div class="card">
    <h5 class="card-header">Konten</h5>
    <div class="table-responsive text-nowrap">
        <!-- <table class="table table-striped table-hover" id="myTable"> -->
          <table class="table table-striped" id="myTable">
            <thead>
              <tr class="border-2 border-bottom border-primary border-0" scope="col">
                <th scope="col" class="ps-5">No</th>
                <th scope="col">Nama</th>
                <th scope="col">Kategori Konten</th>
                <th scope="col">Tanggal</th>
                <th scope="col">Kreator</th>
                <th scope="col">Instagram</th>
                <th scope="col">Foto</th>
                <th scope="col">Aksi</th>
              </tr>
            </thead>
            <!-- <tbody class="table-group-divider"> -->
              <tbody>
                <?php $no=1; foreach($konten as $aa) { ?>
                  <tr>
                    <td scope="row" class="ps-5 fw-medium"> <?= $no; ?></td>
                    <td scope="row"> <?= $aa['judul' ] ?></td>
                    <td scope="row"> <?= $aa['nama_kategori' ] ?></td>
                    <td scope="row"> <?= $aa['tanggal' ] ?></td>
                    <td scope="row"> <?= $aa['nama' ] ?></td>
                    <td scope="row"> <?= $aa['instagram' ] ?></td>
                    <td>
                      <a href="<?= base_url('assets/upload/konten/'.$aa['foto'])?>" target="_blank">
                        <span class="ti ti-search bx bx-search"></span>Lihat
                      </a>
                    </td>
                    <td>
                    <a href=" <?php echo site_url('admin/konten/delete_data/'.$aa['foto']);?>" class="btn btn-sm btn-danger" onClick="return confirm('Apakah anda yakin menghapus data ini?')"><span class="ti ti-trash"></span></a>
                        <!-- Button trigger modal -->
                        <button type="button" class="btn btn-sm btn-warning" data-bs-toggle="modal" data-bs-target="#konten<?= $no; ?>"><span class="ti ti-edit"></span>
                        </button>
                        <!-- Modal -->
                        <div class="modal fade" id="konten<?= $no; ?>" tabindex="-1" aria-hidden="true">
                          <div class="modal-dialog modal-lg" role="document">
                            <form action="<?= base_url('admin/konten/update') ?>" method="post" enctype="multipart/form-data">
                              <input type="hidden" name="nama_foto" value="<?= $aa['foto'] ?>">
                            <div class="modal-content">
                              <div class="modal-header">
                                <h5 class="modal-title" id="modalCenterTitle"><?= $aa['judul'] ?></h5>
                                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                              </div>
                              <div class="modal-body">
                                <div class="row">
                                  <div class="col mb-6">
                                    <label class="form-label">Nama</label>
                                    <input type="text" class="form-control" value="<?= $aa['judul'] ?>" name="judul" >
                                  </div>
                                </div>
                                <div class="row">
                                  <div class="col mb-6">
                                    <label class="form-label">Kategori</label>
                                    <select name="id_kategori" class="form-control">
                                        <?php foreach($kategori as $uu) { ?>
                                            <option <?php if($uu['id_kategori']==$aa['id_kategori']){ echo"selected";} ?> value=" <?= $uu['id_kategori'] ?> ">
                                            <?= $uu['nama_kategori' ] ?></option>
                                        <?php } ?>
                                    </select>
                                  </div>
                                </div>
                                <div class="row">
                                  <div class="col mb-6">
                                    <label class="form-label">Quotes</label>
                                    <textarea name="keterangan" class="form-control"><?= $aa['keterangan' ] ?></textarea>
                                  </div>
                                </div>
                                <div class="row">
                                  <div class="col mb-6">
                                    <label class="form-label">Instagram</label>
                                    <input type="text" class="form-control" value="<?= $aa['instagram'] ?>" name="instagram" >
                                  </div>
                                </div>
                                <div class="row">
                                  <div class="col mb-6">
                                    <label class="form-label">Foto</label>
                                    <input type="file" name="foto" class="form-control"
                                    accept="image/png, image/jpeg">
                                  </div>
                                </div>
                              </div>
                              <div class="modal-footer">
                                <button type="button" class="btn btn-outline-secondary" data-bs-dismiss="modal">Close</button>
                                <button type="submit" class="btn btn-primary">Save</button>
                              </div>
                            </div>
                            </form>
                          </div>
                        </div>
                    </td>
                </tr>
                <?php $no++;} ?>
            </tbody>
          </table>
    </div>
</div>