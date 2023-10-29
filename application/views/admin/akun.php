<div class="card shadow mb-4">
    <div class="card-header py-3">
        <h6 class="m-0 font-weight-bold text-primary">DataTables Example</h6>
    </div>
    <div class="card-body">
        <button type="button" class="btn btn-primary mb-3" data-toggle="modal" data-target="#tambahModal">
            Tambah Akun
        </button>

        <div class="table-responsive">
            <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                <thead>
                    <tr>
                        <th>No</th>
                        <th>Profile</th>
                        <th>Nama</th>
                        <th>Username</th>
                        <th>Gmail</th>
                        <th>No HP</th>
                        <th>Password</th>
                        <th>Level</th>
                        <th>Is Active</th>
                        <th>Action</th>
                    </tr>
                </thead>
                <tfoot>
                    <tr>
                        <th>No</th>
                        <th>Profile</th>
                        <th>Nama</th>
                        <th>Username</th>
                        <th>Gmail</th>
                        <th>No HP</th>
                        <th>Password</th>
                        <th>Level</th>
                        <th>Is Active</th>
                        <th>Action</th>
                    </tr>
                </tfoot>
                <tbody>
                    <?php foreach ($akun as $no => $data) { ?>
                        <tr>
                            <td>
                                <?= $no + 1; ?>
                            </td>
                            <td>
                                <img src="<?= base_url('assets/img/profile/') . $data['profile'] ?>" width="80" alt="">
                            </td>
                            <td>
                                <?= $data['nama'] ?>
                            </td>
                            <td>
                                <?= $data['username'] ?>
                            </td>
                            <td>
                                <?= $data['gmail'] ?>
                            </td>
                            <td>
                                <?= $data['no_hp'] ?>
                            </td>
                            <td>
                                <?= $data['password'] ?>
                            </td>
                            <td>
                                <?= $data['level'] ?>
                            </td>
                            <td>
                                <?= $data['is_active'] ?>
                            </td>
                            <td>
                                <button class="btn btn-info editBtn" data-toggle="modal"
                                    data-target="#editModal<?= $data['id'] ?>">Edit</button>
                                <button class="btn btn-danger deleteBtn" data-toggle="modal"
                                    data-target="#hapusModal<?= $data['id'] ?>">Delete</button>
                            </td>
                        </tr>

                        <div class="modal fade" id="editModal<?= $data['id'] ?>" tabindex="-1" role="dialog"
                            aria-labelledby="editModalLabel" aria-hidden="true">
                            <div class="modal-dialog" role="document">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <h5 class="modal-title" id="editModalLabel">Edit Akun</h5>
                                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                            <span aria-hidden="true">&times;</span>
                                        </button>
                                    </div>
                                    <form action="<?= base_url('login/edit/') . $data['id'] ?>" method="post"
                                        enctype="multipart/form-data">
                                        <div class="modal-body">
                                            <div class="form-group">
                                                <label for="nama">Nama</label>
                                                <input type="text" class="form-control" id="nama" name="nama"
                                                    value="<?= $data['nama'] ?>">
                                            </div>
                                            <div class="form-group">
                                                <label for="username">Username</label>
                                                <input type="text" class="form-control" id="username" name="username"
                                                    value="<?= $data['username'] ?>">
                                            </div>
                                            <div class="form-group">
                                                <label for="profile">Profile</label>
                                                <input type="file" class="form-control" id="profile" name="profile">
                                            </div>
                                        </div>
                                        <div class=" modal-footer">
                                            <button type="button" class="btn btn-secondary"
                                                data-dismiss="modal">Tutup</button>
                                            <button type="submit" class="btn btn-primary" id="updateAkun">Simpan
                                                Perubahan</button>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>


                        <div class="modal fade" id="hapusModal<?= $data['id'] ?>" tabindex="-1" role="dialog"
                            aria-labelledby="hapusModalLabel" aria-hidden="true">
                            <div class="modal-dialog" role="document">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <h5 class="modal-title" id="hapusModalLabel">Hapus Akun</h5>
                                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                            <span aria-hidden="true">&times;</span>
                                        </button>
                                    </div>
                                    <div class="modal-body">
                                        <p>Apakah Anda yakin ingin menghapus akun ini?</p>
                                    </div>
                                    <div class="modal-footer">
                                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Tutup</button>
                                        <a href="<?= base_url('login/hapus/') . $data['id'] ?>" class="btn btn-danger"
                                            id="konfirmasiHapus">Hapus</a>
                                    </div>
                                </div>
                            </div>
                        </div>

                    <?php } ?>
                </tbody>
            </table>
        </div>
    </div>
</div>

<div class="modal fade" id="tambahModal" tabindex="-1" role="dialog" aria-labelledby="tambahModalLabel"
    aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="tambahModalLabel">Tambah Akun</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <form action="<?= base_url('login/register') ?>" method="post" enctype="multipart/form-data">
                <div class="modal-body">
                    <div class="form-group">
                        <label for="nama">Nama</label>
                        <input type="text" class="form-control" id="nama" name="nama">
                    </div>
                    <div class="form-group">
                        <label for="username">Username</label>
                        <input type="text" class="form-control" id="username" name="username">
                    </div>
                    <div class="form-group">
                        <label for="Gmail">Gmail</label>
                        <input type="text" class="form-control" id="Gmail" name="gmail">
                    </div>
                    <div class="form-group">
                        <label for="No Hp">No Hp</label>
                        <input type="number" class="form-control" id="No Hp" name="no_hp">
                    </div>
                    <div class="form-group">
                        <label for="password">Password</label>
                        <input type="password" class="form-control" id="password" name="password">
                    </div>
                    <div class="form-group">
                        <label for="Level">Level</label>
                        <input type="text" class="form-control" id="Level" name="level">
                    </div>
                    <div class="form-group">
                        <label for="Profile">Profile</label>
                        <input type="file" class="" id="Profile" name="profile">
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Tutup</button>
                    <button type="submit" class="btn btn-primary" id="simpanAkun">Simpan</button>
                </div>
            </form>
        </div>
    </div>
</div>