<div class="card shadow mb-4">
    <div class="card-header py-3">
        <h6 class="m-0 font-weight-bold text-primary">Data Riwayat</h6>
    </div>
    <div class="card-body">
        <button type="button" class="btn btn-primary mb-3" data-toggle="modal" data-target="#tambahRiwayatModal">
            Tambah Riwayat
        </button>

        <div class="table-responsive">
            <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                <thead>
                    <tr>
                        <th>No</th>
                        <th>Pemesanan ID</th>
                        <th>Tanggal Bayar</th>
                        <th>Status</th>
                        <th>Harga</th>
                        <th>Total Pesan</th>
                        <th>Total Harga</th>
                        <th>Nominal</th>
                        <th>Kembalian</th>
                        <th>Action</th>
                    </tr>
                </thead>
                <tfoot>
                    <tr>
                        <th>No</th>
                        <th>Pemesanan ID</th>
                        <th>Tanggal Bayar</th>
                        <th>Status</th>
                        <th>Harga</th>
                        <th>Total Pesan</th>
                        <th>Total Harga</th>
                        <th>Nominal</th>
                        <th>Kembalian</th>
                        <th>Action</th>
                    </tr>
                </tfoot>
                <tbody>
                    <?php foreach ($riwayat as $no => $data) { ?>
                        <tr>
                            <td>
                                <?= $no + 1; ?>
                            </td>
                            <td>
                                <?= $data['pemesanan_id'] ?>
                            </td>
                            <td>
                                <?= $data['tanggal_bayar'] ?>
                            </td>
                            <td>
                                <?= $data['status'] ?>
                            </td>
                            <td>
                                <?= $data['harga'] ?>
                            </td>
                            <td>
                                <?= $data['total_pesan'] ?>
                            </td>
                            <td>
                                <?= $data['total_harga'] ?>
                            </td>
                            <td>
                                <?= $data['nominal'] ?>
                            </td>
                            <td>
                                <?= $data['kembalian'] ?>
                            </td>
                            <td>
                                <button class="btn btn-info editBtn" data-toggle="modal"
                                    data-target="#editRiwayatModal<?= $data['id'] ?>">Edit</button>
                                <button class="btn btn-danger deleteBtn" data-toggle="modal"
                                    data-target="#hapusRiwayatModal">Delete</button>
                            </td>
                        </tr>

                        <div class="modal fade" id="editRiwayatModal<?= $data['id'] ?>" tabindex="-1" role="dialog"
                            aria-labelledby="editRiwayatModalLabel" aria-hidden="true">
                            <div class="modal-dialog" role="document">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <h5 class="modal-title" id="editRiwayatModalLabel">Edit Riwayat</h5>
                                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                            <span aria-hidden="true">&times;</span>
                                        </button>
                                    </div>
                                    <form action="<?= base_url('riwayat/edit/') . $data['id'] ?>" method="post"
                                        enctype="multipart/form-data">
                                        <div class="modal-body">
                                            <div class="form-group">
                                                <label for="pemesanan_id">Pemesanan ID</label>
                                                <input type="text" class="form-control" id="pemesanan_id"
                                                    name="pemesanan_id" value="<?= $data['pemesanan_id']; ?>">
                                            </div>
                                            <div class="form-group">
                                                <label for="tanggal_bayar">Tanggal Bayar</label>
                                                <input type="text" class="form-control" id="tanggal_bayar"
                                                    name="tanggal_bayar" value="<?= $data['tanggal_bayar']; ?>">
                                            </div>
                                            <!-- Isi form edit Riwayat sesuai kebutuhan Anda -->
                                        </div>
                                        <div class="modal-footer">
                                            <button type="button" class="btn btn-secondary"
                                                data-dismiss="modal">Tutup</button>
                                            <button type="submit" class="btn btn-primary" id="updateRiwayat">Simpan
                                                Perubahan</button>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>

                        <div class="modal fade" id="hapusRiwayatModal<?= $data['id'] ?>" tabindex="-1" role="dialog"
                            aria-labelledby="hapusRiwayatModalLabel" aria-hidden="true">
                            <div class="modal-dialog" role="document">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <h5 class="modal-title" id="hapusRiwayatModalLabel">Hapus Riwayat</h5>
                                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                            <span aria-hidden="true">&times;</span>
                                        </button>
                                    </div>
                                    <div class="modal-body">
                                        <p>Apakah Anda yakin ingin menghapus riwayat ini?</p>
                                    </div>
                                    <div class="modal-footer">
                                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Tutup</button>
                                        <a href="<?= base_url('riwayat/hapus/') . $data['id'] ?>" class="btn btn-danger"
                                            id="konfirmasiHapusRiwayat">Hapus</a>
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

<!-- Modal Tambah Riwayat -->
<div class="modal fade" id="tambahRiwayatModal" tabindex="-1" role="dialog" aria-labelledby="tambahRiwayatModalLabel"
    aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="tambahRiwayatModalLabel">Tambah Riwayat</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <form action="<?= base_url('riwayat/tambah') ?>" method="post">
                <div class="modal-body">
                    <div class="form-group">
                        <label for="pemesanan_id">ID Pemesanan</label>
                        <input type="text" class="form-control" id="pemesanan_id" name="pemesanan_id">
                    </div>
                    <div class="form-group">
                        <label for="tanggal_bayar">Tanggal Bayar</label>
                        <input type="date" class="form-control" id="tanggal_bayar" name="tanggal_bayar">
                    </div>
                    <div class="form-group">
                        <label for="status">Status</label>
                        <input type="text" class="form-control" id="status" name="status">
                    </div>
                    <div class="form-group">
                        <label for="harga">Harga</label>
                        <input type="number" class="form-control" id="harga" name="harga">
                    </div>
                    <div class="form-group">
                        <label for="total_pesan">Total Pesan</label>
                        <input type="number" class="form-control" id="total_pesan" name="total_pesan">
                    </div>
                    <div class="form-group">
                        <label for="total_harga">Total Harga</label>
                        <input type="number" class="form-control" id="total_harga" name="total_harga">
                    </div>
                    <div class="form-group">
                        <label for="nominal">Nominal</label>
                        <input type="number" class="form-control" id="nominal" name="nominal">
                    </div>
                    <div class="form-group">
                        <label for="kembalian">Kembalian</label>
                        <input type="number" class="form-control" id="kembalian" name="kembalian">
                    </div>
                    <!-- Isi form tambah Riwayat sesuai kebutuhan Anda -->
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Tutup</button>
                    <button type="submit" class="btn btn-primary" id="simpanRiwayat">Simpan</button>
                </div>
            </form>
        </div>
    </div>
</div>