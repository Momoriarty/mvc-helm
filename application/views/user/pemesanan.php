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
                        <?= $data['tanggal_bayar']; ?>
                    </td>
                    <td>
                        <?= $data['status']; ?>
                    </td>
                    <td>
                        <?= '$' . $data['harga']; ?>
                    </td>
                    <td>
                        <?= $data['total_pesan']; ?>
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
                    <?php if ($data['status'] == 'selesai') { ?>
                        <td>
                            <a href="<?= base_url('beranda/bayar_detail/') . $data['pemesanan_id'] ?>">Detail</a>
                        </td>
                    <?php } else { ?>

                    <?php } ?>

                </tr>
            <?php } ?>
        </tbody>
    </table>
</div>