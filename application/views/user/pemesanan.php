<div class="container mt-5">
    <h1 class="text-center">Detail Pemesanan Hotel</h1>
    <table class="table table-bordered mt-4">
        <thead class="bg-light">
            <tr>
                <th>No. Pemesanan</th>
                <th>Tanggal Pesan</th>
                <th>Status</th>
                <th>Harga Kamar</th>
                <th>Total Pesanan</th>
                <th>Total Harga</th>
                <th>Nominal</th>
                <th>Kembalian</th>
                <th>Aksi</th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($pesanan as $no => $data) { ?>
                <tr>
                    <td>
                        <?= $data['pemesanan_id']; ?>
                    </td>
                    <td>
                        <?= $data['tanggal_pesan']; ?>
                    </td>
                    <td>
                        <?= $data['status']; ?>
                    </td>
                    <td>
                        <?= '$' . $data['harga']; ?>
                    </td>
                    <td>
                        <?= $data['total_pesanan']; ?>
                    </td>
                    <td>
                        <?= '$' . $data['total_harga']; ?>
                    </td>
                    <td>
                        <?= '$' . $data['nominal']; ?>
                    </td>
                    <td>
                        <?= '$' . $data['kembalian']; ?>
                    </td>
                    <td>
                        <a href="<?= base_url('Beranda/bayar') ?>">Bayar</a>
                    </td>
                </tr>
            <?php } ?>
        </tbody>
    </table>
</div>