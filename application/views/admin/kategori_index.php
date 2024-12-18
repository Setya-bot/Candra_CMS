<div id="hilang"> 
  <?= $this->session->flashdata('alert')?>
</div>
<div class="col-lg-12 col-md-124">
  <div class="mt-1 mb-3">
    <!-- Button trigger modal -->
    <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#modalCenter">
      Tambah Kategori
    </button>
    <!-- Modal -->
    <div class="modal fade" id="modalCenter" tabindex="-1" aria-hidden="true">
      <div class="modal-dialog modal-md" role="document">
        <form action="<?= base_url('admin/kategori/simpan') ?>" method="post">
        <div class="modal-content">
          <div class="modal-header">
            <h5 class="modal-title" id="modalCenterTitle">Tambah Kategori</h5>
            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
          </div>
          <div class="modal-body">
            <div class="row">
              <div class="col mb-6">
                <label class="form-label">Name Kategori</label>
                <input type="text" class="form-control" placeholder="Name" name="nama_kategori" required>
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
    <h5 class="card-header">Kategori Konten</h5>
    <div class="table-responsive text-nowrap">
        <table class="table">
            <thead>
                <tr class="border-2 border-bottom border-primary border-0" scope="col">
                    <th scope="col" class="ps-5">No</th>
                    <th scope="col">Nama Kategori Konten</th>
                    <th scope="col">Aksi</th>
                </tr>
            </thead>
            <tbody class="table-group-divider">
                <?php $no=1; foreach($kategori as $aa) { ?>
                <tr>
                    <td scope="row" class="ps-5 fw-medium"> <?= $no; ?></td>
                    <td scope="row"> <?= $aa['nama_kategori' ] ?></td>
                    <td scope="row">
                      <a href=" <?php echo site_url('admin/kategori/delete_data/'.$aa['id_kategori']);?>"
                      class="btn btn-sm btn-danger" onClick="return confirm('Apakah anda yakin menghapus data ini?')"><span class="ti ti-trash"></span></a>
                      <button type="button" class="btn btn-sm btn-warning" data-bs-toggle="modal" data-bs-target="#edit<?= $aa['id_kategori']?>">
                        <span class="ti ti-edit"></span>
                      </button>
                    </td>
                      <!-- Modal -->
                    <div class="modal fade" id="edit<?= $aa['id_kategori']?>" tabindex="-1" aria-hidden="true">
                      <div class="modal-dialog modal-md" role="document">
                        <form action="<?= base_url('admin/kategori/update') ?>" method="post">
                          <input type="hidden" name="id_kategori" value="<?= $aa['id_kategori']?>">
                        <div class="modal-content">
                          <div class="modal-header">
                            <h5 class="modal-title" id="modalCenterTitle">Perbarui Kategori</h5>
                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                          </div>
                          <div class="modal-body">
                            <div class="row">
                              <div class="col mb-6">
                                <label class="form-label">Name Kategori Konten</label>
                                <input type="text" class="form-control" value="<?= $aa['nama_kategori']?>" name="nama_kategori">
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