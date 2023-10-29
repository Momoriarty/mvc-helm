<div class="card shadow mb-4">
    <div class="card-header py-3">
        <h6 class="m-0 font-weight-bold text-primary">Data Pemesanan</h6>
    </div>
    <div class="card-body">
        <button type="button" class="btn btn-primary mb-3" data-toggle="modal" data-target="#tambahPemesananModal">
            Tambah Pemesanan
        </button>

        <div class="table-responsive">
            <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                <thead>
                    <tr>
                        <th>No</th>
                        <th>Profile</th>
                        <th>Nama Pelanggan</th>
                        <th>Tanggal Pesan</th>
                        <th>Harga</th>
                        <th>Total Pesanan</th>
                        <th>Total Harga</th>
                        <th>Action</th>
                    </tr>
                </thead>
                <tfoot>
                    <tr>
                        <th>No</th>
                        <th>Profile</th>
                        <th>Nama Pelanggan</th>
                        <th>Tanggal Pesan</th>
                        <th>Harga</th>
                        <th>Total Pesanan</th>
                        <th>Total Harga</th>
                        <th>Action</th>
                    </tr>
                </tfoot>
                <tbody>
                    <?php foreach ($pemesanan as $no => $data) { ?>
                        <tr>
                            <td>
                                <?= $no + 1; ?>
                            </td>
                            <td>
                                <img src="<?= base_url('assets/uploads/') . $data['profile'] ?>" width="80" alt="">
                            </td>
                            <td>
                                <?= $data['nama_pelanggan'] ?>
                            </td>
                            <td>
                                <?= $data['tanggal_pesan'] ?>
                            </td>
                            <td>
                                <?= $data['harga'] ?>
                            </td>
                            <td>
                                <?= $data['total_pesanan'] ?>
                            </td>
                            <td>
                                <?= $data['total_harga'] ?>
                            </td>
                            <td>
                                <button class="btn btn-info editBtn" data-toggle="modal"
                                    data-target="#editPemesananModal<?= $data['pemesanan_id'] ?>">Edit</button>
                                <button class="btn btn-danger deleteBtn" data-toggle="modal"
                                    data-target="#hapusPemesananModal">Delete</button>
                            </td>
                        </tr>

                        <div class="modal fade" id="editPemesananModal<?= $data['pemesanan_id'] ?>" tabindex="-1"
                            role="dialog" aria-labelledby="editPemesananModalLabel" aria-hidden="true">
                            <div class="modal-dialog" role="document">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <h5 class="modal-title" id="editPemesananModalLabel">Edit Pemesanan</h5>
                                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                            <span aria-hidden="true">&times;</span>
                                        </button>
                                    </div>
                                    <form action="<?= base_url('pemesanan/edit/') . $data['pemesanan_id'] ?>" method="post"
                                        enctype="multipart/form-data">
                                        <div class="modal-body">
                                            <div class="form-group">
                                                <label for="nama_pelanggan">Nama Pelanggan</label>
                                                <input type="text" class="form-control" id="nama_pelanggan"
                                                    name="nama_pelanggan" value="<?= $data['nama_pelanggan']; ?>">
                                            </div>
                                            <div class="form-group">
                                                <label for="tanggal_pesan">Tanggal Pesan</label>
                                                <input type="text" class="form-control" id="tanggal_pesan"
                                                    name="tanggal_pesan" value="<?= $data['tanggal_pesan']; ?>">
                                            </div>
                                            <!-- Isi form edit Pemesanan sesuai kebutuhan Anda -->
                                        </div>
                                        <div class="modal-footer">
                                            <button type="button" class="btn btn-secondary"
                                                data-dismiss="modal">Tutup</button>
                                            <button type="submit" class="btn btn-primary" id="updatePemesanan">Simpan
                                                Perubahan</button>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>

                        <div class="modal fade" id="hapusPemesananModal<?= $data['pemesanan_id'] ?>" tabindex="-1"
                            role="dialog" aria-labelledby="hapusPemesananModalLabel" aria-hidden="true">
                            <div class="modal-dialog" role="document">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <h5 class="modal-title" id="hapusPemesananModalLabel">Hapus Pemesanan</h5>
                                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                            <span aria-hidden="true">&times;</span>
                                        </button>
                                    </div>
                                    <div class="modal-body">
                                        <p>Apakah Anda yakin ingin menghapus Pemesanan ini?</p>
                                    </div>
                                    <div class="modal-footer">
                                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Tutup</button>
                                        <a href="<?= base_url('pemesanan/hapus/') . $data['pemesanan_id'] ?>"
                                            class="btn btn-danger" id="konfirmasiHapus">Hapus</a>
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

<!-- Modal Tambah Pemesanan -->
<div class="modal fade" id="tambahPemesananModal" tabindex="-1" role="dialog"
    aria-labelledby="tambahPemesananModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="tambahPemesananModalLabel">Tambah Pemesanan</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <form action="<?= base_url('pemesanan/tambah') ?>" method="post">
                <div class="modal-body">
                    <div class="form-group">
                        <label for="nama_pelanggan">Nama Pelanggan</label>
                        <input type="text" class="form-control" id="nama_pelanggan" name="nama_pelanggan">
                    </div>
                    <div class="form-group">
                        <label for="tanggal_pesan">Tanggal Pesan</label>
                        <input type="date" class="form-control" id="tanggal_pesan" name="tanggal_pesan">
                    </div>
                    <div class="form-group">
                        <label for="harga">Harga</label>
                        <input type="number" class="form-control" id="harga" name="harga">
                    </div>
                    <!-- Isi form tambah Pemesanan sesuai kebutuhan Anda -->
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Tutup</button>
                    <button type="submit" class="btn btn-primary" id="simpanPemesanan">Simpan</button>
                </div>
            </form>
        </div>
    </div>
</div>