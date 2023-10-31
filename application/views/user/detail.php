<div class="container mt-5"
    style="background-image: url('https://plus.unsplash.com/premium_photo-1671297707553-14091918813e?auto=format&fit=crop&q=80&w=1632&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D'); background-size: cover; background-position: center; padding: 20px;">
    <!-- Helmet Detail -->
    <div class="row">
        <div class="col-md-8">
            <img src="<?= base_url('assets/img/helm/') . $helm['gambar'] ?>" alt="Helmet" class="img-fluid">
        </div>
        <div class="col-md-4">
            <h2>
                <?= $helm['merk'] ?> -
                <?= $helm['tipe'] ?>
            </h2>
            <p>Ukuran:
                <?= $helm['ukuran'] ?>
            </p>
            <p>Harga: $
                <?= $helm['harga'] ?>
            </p>
            <?php if (!$this->session->userdata('username')) { ?>
                <a href="<?= base_url('login') ?>" class="btn btn-primary" >Login Dulu ya</a>
            <?php } else { ?>
                <a class="btn btn-primary me-2" data-toggle="modal" data-target="#beliModal">Beli</a>
                <a class="btn btn-success" data-toggle="modal" data-target="#keranjangModal">
                    <i class="fas fa-shopping-cart"></i>
                </a>
            <?php } ?>


        </div>
    </div>
</div>

<!-- Modal untuk Tombol "Beli" -->
<div class="modal fade" id="beliModal" tabindex="-1" role="dialog" aria-labelledby="beliModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="beliModalLabel">Konfirmasi Pembelian</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <form action="<?= base_url('beranda/bayar') ?>" method="post">
                <div class="modal-body">
                    <input type="hidden" class="form-control" name="nama_pelanggan"
                        value="<?= $_SESSION['nama_user'] ?>" readonly>
                    <div class="col-mb-6">
                        <label for="">Merk</label>
                        <input type="text" class="form-control" name="merk" value="<?= $helm['merk'] ?>" readonly>
                    </div>
                    <div class="col-mb-6">
                        <label for="">tipe</label>
                        <input type="text" class="form-control" name="tipe" value="<?= $helm['tipe'] ?>" readonly>
                    </div>
                    <div class="col-mb-6">
                        <label for="">ukuran</label>
                        <input type="text" class="form-control" name="ukuran" value="<?= $helm['ukuran'] ?>" readonly>
                    </div>
                    <div class="col-mb-6">
                        <label for="">harga</label>
                        <input type="text" class="form-control" name="harga" value="<?= $helm['harga'] ?>" readonly>
                    </div>
                    <div class="col-mb-6">
                        <label for="">Jumlah</label>
                        <input type="number" class="form-control" name="total_pesanan">
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Batal</button>
                    <button type="submit" class="btn btn-warning">Beli</button>
                </div>
            </form>
        </div>
    </div>
</div>

<!-- Modal untuk Tombol "Keranjang" -->
<div class="modal fade" id="keranjangModal" tabindex="-1" role="dialog" aria-labelledby="keranjangModalLabel"
    aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="keranjangModalLabel">Tambah ke Keranjang</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <?= $helm['merk'] ?> -
                <?= $helm['tipe'] ?> telah ditambahkan ke keranjang.
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Tutup</button>
                <a class="btn btn-success" href="link_ke_keranjang.php">Lihat Keranjang</a>
            </div>
        </div>
    </div>
</div>