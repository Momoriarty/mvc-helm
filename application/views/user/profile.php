<div class="container mt-5">
    <div class="row">
        <div class="col-md-4 offset-md-4 text-center">
            <img src="<?= base_url('assets/img/profile/') . $user['profile'] ?>" alt="Profile Picture"
                class="img-fluid rounded-circle" style="max-width: 150px;">
            <h2 class="mt-3">
                <?= $user['nama'] ?>
            </h2>
            <div class="mt-3">
                <p><strong>Email:</strong>
                    <?= $user['gmail'] ?>
                </p>
                <p><strong>Role:</strong>
                    <?= $user['level'] ?>
                </p>
            </div>
        </div>
    </div>
</div>