<div id="hilang"> 
  <?= $this->session->flashdata('alert')?>
</div>
<div class="col-lg-12 col-md-124">
  <div class="mt-1 mb-7">
    <!-- Button trigger modal -->
    <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#modalCenter">
      Tambah User
    </button>
    <!-- Modal -->
    <div class="modal fade" id="modalCenter" tabindex="-1" aria-hidden="true">
      <div class="modal-dialog modal-md" role="document">
        <form action="<?= base_url('admin/user/simpan') ?>" method="post">
        <div class="modal-content">
          <div class="modal-header">
            <h5 class="modal-title" id="modalCenterTitle">Tambah User</h5>
            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
          </div>
          <div class="modal-body">
            <div class="row">
              <div class="col mb-6">
                <label class="form-label">Name</label>
                <input type="text" class="form-control" placeholder="Name" name="name" required>
              </div>
            </div>
            <div class="row">
              <div class="col mb-6">
                <label class="form-label">Username</label>
                <input type="text" class="form-control" placeholder="Username" name="username" required>
              </div>
            </div>
                <div class="row">
                  <div class="col mb-6">
                    <label class="form-label">Password</label>
                    <input type="password" class="form-control" placeholder="Password" name="password" required>
                  </div>
                </div>
                <div class="row">
                  <div class="col mb-6">
                    <label class="form-label">Level</label>
                    <select name="level" class="form-control">
                      <option value="Admin">Admin</option>
                      <option value="Kontributor">Kontributor</option>
                    </select>
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
    <h5 class="card-header">Data Pengguna</h5>
    <div class="table-responsive text-nowrap">
        <table class="table">
            <thead>
                <tr class="border-2 border-bottom border-primary border-0"> 
                    <th scope="col" class="ps-5">Username</th>
                    <th scope="col">Nama</th>
                    <th scope="col">Level</th>
                    <th scope="col">Aksi</th>
                </tr>
            </thead>
            <tbody class="table-border-bottom-0">
                <?php foreach($user as $aa) { ?>
                <tr>
                    <td scope="col" class="ps-5"> <?= $aa['username' ] ?></td>
                    <td scope="col"> <?= $aa['nama' ] ?></td>
                    <td scope="col"> <?= $aa['level' ] ?></td>
                    <td scope="col">
                      <a href=" <?php echo site_url('admin/user/delete_data/'.$aa['id_user']);?>" class="btn btn-sm btn-danger" onClick="return confirm('Apakah anda yakin menghapus data ini?')"><span class="ti ti-trash"></span></a>
                      <button type="button" class="btn btn-sm btn-warning" data-bs-toggle="modal" data-bs-target="#edit<?= $aa['id_user']?>">
                        <span class="ti ti-edit"></span>
                      </button>
                    </td>
                      <!-- Modal -->
                    <div class="modal fade" id="edit<?= $aa['id_user']?>" tabindex="-1" aria-hidden="true">
                      <div class="modal-dialog modal-md" role="document"> 
                        <form action="<?= base_url('admin/user/update') ?>" method="post">
                          <input type="hidden" name="id_user" value="<?= $aa['id_user']?>">
                        <div class="modal-content">
                          <div class="modal-header">
                            <h5 class="modal-title" id="modalCenterTitle">Perbarui Nama User</h5>
                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                          </div>
                          <div class="modal-body">
                            <div class="row">
                              <div class="col mb-6">
                                <label class="form-label">Name</label>
                                <input type="text" class="form-control" value="<?= $aa['nama']?>" name="nama">
                              </div>
                            </div>
                            <div class="row">
                              <div class="col mb-6">
                                <label class="form-label">Username</label>
                                <input type="text" class="form-control" value="<?= $aa['username']?>" name="username" readonly>
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
                <?php } ?>
            </tbody>
        </table>
    </div>
</div>