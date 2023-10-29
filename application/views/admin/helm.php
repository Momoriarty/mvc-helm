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
                        <th>ID</th>
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
                        <th>ID</th>
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
                            <td>1</td>
                            <td>Sample Merk</td>
                            <td>Sample Tipe</td>
                            <td>Sample Ukuran</td>
                            <td>$100</td>
                            <td>Sample Warna</td>
                            <td>10</td>
                            <td>
                                <button class="btn btn-info editBtn" data-toggle="modal"
                                    data-target="#editModal">Edit</button>
                                <button class="btn btn-danger deleteBtn" data-toggle="modal"
                                    data-target="#hapusModal">Delete</button>
                            </td>
                        </tr>
                        <div class="modal fade" id="editModal" tabindex="-1" role="dialog" aria-labelledby="editModalLabel"
                            aria-hidden="true">
                            <div class="modal-dialog" role="document">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <h5 class="modal-title" id="editModalLabel">Edit Helm</h5>
                                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                            <span aria-hidden="true">&times;</span>
                                        </button>
                                    </div>
                                    <div class="modal-body">
                                    </div>
                                    <div class="modal-footer">
                                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Tutup</button>
                                        <button type="button" class="btn btn-primary" id="updateHelm">Simpan
                                            Perubahan</button>
                                    </div>
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
                                        Apakah Anda yakin ingin menghapus helm ini?
                                    </div>
                                    <div class="modal-footer">
                                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Tutup</button>
                                        <button type="button" class="btn btn-danger" id="konfirmasiHapus">Hapus</button>
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
            <div class="modal-body">
                <!-- Form untuk menambahkan data helm -->
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Tutup</button>
                <button type="button" class="btn btn-primary" id="simpanHelm">Simpan</button>
            </div>
        </div>
    </div>
</div>