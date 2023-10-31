<div class="container mt-4">
    <h1>Detail Pembayaran</h1>
    <div class="card payment-card mt-3">
        <form action="<?= base_url('riwayat/tambah') ?>" method="post">
            <div class="card-body">
                <input type="hidden" name="nama_pelanggan" value="<?= $bayar['nama_pelanggan'] ?>">
                <div class="form-group">
                    <label for="pemesananID"><strong>Pemesanan ID:</strong></label>
                    <input type="text" class="form-control" id="pemesananID" name="pemesanan_id" value="<?= $bayar['pemesanan_id'] ?>" readonly>
                </div>
                <div class="form-group">
                    <label for="jenisHelm"><strong>Jenis Helm:</strong></label>
                    <input type="text" class="form-control" id="jenisHelm" name="merk" value="<?= $bayar['merk'] ?>" readonly>
                </div>
                <div class="form-group">
                    <label for="jenisHelm"><strong>Tipe</strong></label>
                    <input type="text" class="form-control" id="jenisHelm" name="tipe" value="<?= $bayar['tipe'] ?>" readonly>
                </div>
                <div class form-group="">
                    <label for="tanggalBayar"><strong>Tanggal Bayar:</strong></label>
                    <input type="text" class="form-control" id="tanggalBayar" name="tanggal_bayar" value="<?= $bayar['tanggal_bayar'] ?>" readonly>
                </div>
                <div class="form-group">
                    <label for="status"><strong>Status:</strong></label>
                    <input type="text" class="form-control" id="status" name="status" value="Paid" readonly>
                </div>
                <div class="form-group">
                    <label for="harga"><strong>Harga:</strong></label>
                    <input type="text" class="form-control" id="harga" name="harga" value="<?= $bayar['harga'] ?>" readonly>
                </div>
                <div class="form-group">
                    <label for="totalPesan"><strong>Total Pesan:</strong></label>
                    <input type="text" class="form-control" id="totalPesan" name="total_pesan" value="<?= $bayar['total_pesanan'] ?>" readonly>
                </div>
                <div class="form-group">
                    <label for="totalHarga"><strong>Total Harga:</strong></label>
                    <input type="text" class="form-control" id="totalHarga" name="total_harga" value="<?= $bayar['total_harga'] ?>" readonly>
                </div>
                <div class="form-group">
                    <label for="nominal"><strong>Nominal Pembayaran:</strong></label>
                    <input type="text" class="form-control" id="nominal" name="nominal">
                </div>
                <button type="submit" class="btn btn-warning mt-3">Bayar</button>
            </div>
        </form>
    </div>
</div>
