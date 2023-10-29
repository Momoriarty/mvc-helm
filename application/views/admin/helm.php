<div class="card shadow mb-4">
    <div class="card-header py-3">
        <h6 class="m-0 font-weight-bold text-primary">DataTables Example</h6>
    </div>
    <div class="card-body">
        <button type="button" class="btn btn-primary mb-3" data-toggle="modal" data-target="#tambahModal">
            Tambah Helm
        </button>

        <div class="table-responsive">
            <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                <thead>
                    <tr>
                        <th>No</th>
                        <th>Gambar</th>
                        <th>Merk</th>
                        <th>Tipe</th>
                        <th>Ukuran</th>
                        <th>Harga</th>
                        <th>Warna</th>
                        <th>Stok</th>
                        <th>Action</th>
                    </tr>
                </thead>
                <tfoot>
                    <tr>
                        <th>No</th>
                        <th>Gambar</th>
                        <th>Merk</th>
                        <th>Tipe</th>
                        <th>Ukuran</th>
                        <th>Harga</th>
                        <th>Warna</th>
                        <th>Stok</th>
                        <th>Action</th>
                    </tr>
                </tfoot>
                <tbody>

                    <?php foreach ($helm as $no => $data) { ?>
                        <tr>
                            <td>
                                <?= $no + 1; ?>
                            </td>
                            <td>
                                <img src="<?= base_url('assets/img/helm/') . $data['gambar'] ?>" width="80" alt="">
                            </td>
                            <td>
                                <?= $data['merk'] ?>
                            </td>
                            <td>
                                <?= $data['tipe'] ?>
                            </td>
                            <td>
                                <?= $data['ukuran'] ?>
                            </td>
                            <td>
                                <?= $data['harga'] ?>
                            </td>
                            <td>
                                <?= $data['warna'] ?>
                            </td>
                            <td>
                                <?= $data['stok'] ?>
                            </td>

                            <td>
                                <button class="btn btn-info editBtn" data-toggle="modal"
                                    data-target="#editModal<?= $data['id'] ?>">Edit</button>
                                <button class="btn btn-danger deleteBtn" data-toggle="modal"
                                    data-target="#hapusModal">Delete</button>
                            </td>
                        </tr>

                        <div class="modal fade" id="editModal<?= $data['id'] ?>" tabindex="-1" role="dialog"
                            aria-labelledby="editModalLabel" aria-hidden="true">
                            <div class="modal-dialog" role="document">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <h5 class="modal-title" id="editModalLabel">Edit Helm</h5>
                                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                            <span aria-hidden="true">&times;</span>
                                        </button>
                                    </div>
                                    <form action="<?= base_url('helm/edit/') . $data['id'] ?>" method="post"
                                        enctype="multipart/form-data">
                                        <div class="modal-body">
                                            <div class="form-group">
                                                <label for="merk">Merk</label>
                                                <input type="text" class="form-control" id="merk" name="merk"
                                                    value="<?= $data['merk']; ?>">
                                            </div>
                                            <div class="form-group">
                                                <label for="tipe">Tipe</label>
                                                <input type="text" class="form-control" id="tipe" name="tipe"
                                                    value="<?= $data['tipe']; ?>">
                                            </div>
                                            <div class="form-group">
                                                <label for="ukuran">Ukuran</label>
                                                <input type="text" class="form-control" id="ukuran" name="ukuran"
                                                    value="<?= $data['ukuran']; ?>">
                                            </div>
                                            <div class="form-group">
                                                <label for="harga">Harga</label>
                                                <input type="number" class="form-control" id="harga" name="harga"
                                                    value="<?= $data['harga']; ?>">
                                            </div>
                                            <div class="form-group">
                                                <label for="warna">Warna</label>
                                                <input type="text" class="form-control" id="warna" name="warna"
                                                    value="<?= $data['warna']; ?>">
                                            </div>
                                            <div class="form-group">
                                                <label for="stok">Stok</label>
                                                <input type="number" class="form-control" id="stok" name="stok"
                                                    value="<?= $data['stok']; ?>">
                                            </div>
                                            <div class="form-group">
                                                <label for="gambar">Gambar</label><br>
                                                <input type="file" class="form-control-file" id="gambar" name="gambar"><br>
                                                <span class="badge badge-secondary">Ubah jika ingin mengganti gambar</span>
                                            </div>
                                        </div>
                                        <div class="modal-footer">
                                            <button type="button" class="btn btn-secondary"
                                                data-dismiss="modal">Tutup</button>
                                            <button type="submit" class="btn btn-primary" id="updateHelm">Simpan
                                                Perubahan</button>
                                        </div>
                                    </form>

                                </div>
                            </div>
                        </div>

                        <div class="modal fade" id="hapusModal" tabindex="-1" role="dialog"
                            aria-labelledby="hapusModalLabel" aria-hidden="true">
                            <div class="modal-dialog" role="document">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <h5 class="modal-title" id="hapusModalLabel">Hapus Helm</h5>
                                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                            <span aria-hidden="true">&times;</span>
                                        </button>
                                    </div>
                                    <div class="modal-body">
                                        <p>Apakah Anda yakin ingin menghapus helm ini?</p>
                                    </div>

                                    <div class="modal-footer">
                                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Tutup</button>
                                        <a href="<?= base_url('helm/hapus/') . $data['id'] ?> " class="btn btn-danger"
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

<!-- Modal Tambah Helm -->
<div class="modal fade" id="tambahModal" tabindex="-1" role="dialog" aria-labelledby="tambahModalLabel"
    aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="tambahModalLabel">Tambah Helm</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <form action="<?= base_url('helm/tambah') ?>" method="post" enctype="multipart/form-data">
                <div class="modal-body">
                    <div class="form-group">
                        <label for="merk">Merk</label>
                        <input type="text" name="merk" class="form-control" id="merk">
                    </div>
                    <div class="form-group">
                        <label for="tipe">Tipe</label>
                        <input type="text" name="tipe" class="form-control" id="tipe">
                    </div>
                    <div class="form-group">
                        <label for="ukuran">Ukuran</label>
                        <input type="text" name="ukuran" class="form-control" id="ukuran">
                    </div>
                    <div class="form-group">
                        <label for="harga">Harga</label>
                        <input type="number" name="harga" class="form-control" id="harga">
                    </div>
                    <div class="form-group">
                        <label for="warna">Warna</label>
                        <input type="text" name="warna" class="form-control" id="warna">
                    </div>
                    <div class="form-group">
                        <label for="stok">Stok</label>
                        <input type="number" name="stok" class="form-control" id="stok">
                    </div>
                    <div class="form-group">
                        <label for="stok">Gambar</label>
                        <input type="file" name="gambar" class="" id="gambar">
                    </div>
                </div>

                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Tutup</button>
                    <button type="submit" class="btn btn-primary" id="simpanHelm">Simpan</button>
                </div>
            </form>
        </div>
    </div>
</div>