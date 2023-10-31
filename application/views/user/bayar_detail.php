<div class="container">
    <div class="jumbotron">
        <h1 class="display-4">Detail Pembayaran</h1>
    </div>

    <div class="card">
        <div class="card-body">
            <div class="row">
                <div class="col-md-6">
                    <h5 class="card-title font-weight-bold">Nama Pelanggan:</h5>
                    <p class="card-text"><?= $riwayat['nama_pelanggan']; ?></p>
                </div>
                <div class="col-md-6">
                    <h5 class="card-title font-weight-bold">ID Pemesanan:</h5>
                    <p class="card-text"><?= $riwayat['pemesanan_id']; ?></p>
                </div>
            </div>

            <hr>

            <div class="row">
                <div class="col-md-6">
                    <h5 class="card-title font-weight-bold">Tanggal Bayar:</h5>
                    <p class="card-text"><?= $riwayat['tanggal_bayar']; ?></p>
                </div>
                <div class="col-md-6">
                    <h5 class="card-title font-weight-bold">Status:</h5>
                    <p class="card-text"><?= $riwayat['status']; ?></p>
                </div>
            </div>

            <hr>

            <div class="row">
                <div class="col-md-6">
                    <h5 class="card-title font-weight-bold">Merk:</h5>
                    <p class="card-text"><?= $riwayat['merk']; ?></p>
                </div>
                <div class="col-md-6">
                    <h5 class="card-title font-weight-bold">Tipe:</h5>
                    <p class="card-text"><?= $riwayat['tipe']; ?></p>
                </div>
            </div>

            <hr>

            <div class="row">
                <div class="col-md-6">
                    <h5 class="card-title font-weight-bold">Harga:</h5>
                    <p class="card-text"><?= $riwayat['harga']; ?></p>
                </div>
                <div class="col-md-6">
                    <h5 class="card-title font-weight-bold">Total Pesan:</h5>
                    <p class="card-text"><?= $riwayat['total_pesan']; ?></p>
                </div>
            </div>

            <hr>

            <div class="row">
                <div class="col-md-4">
                    <h5 class="card-title font-weight-bold">Total Harga:</h5>
                    <p class="card-text"><?= $riwayat['total_harga']; ?></p>
                </div>
                <div class="col-md-4">
                    <h5 class="card-title font-weight-bold">Nominal Pembayaran:</h5>
                    <p class="card-text"><?= $riwayat['nominal']; ?></p>
                </div>
                <div class="col-md-4">
                    <h5 class="card-title font-weight-bold">Kembalian:</h5>
                    <p class="card-text"><?= $riwayat['kembalian']; ?></p>
                </div>
            </div>
        </div>
    </div>
</div>
