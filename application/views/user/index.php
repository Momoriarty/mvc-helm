<!-- Helm Sales-->
<section class="page-section" id="helm-sales">
    <div class="container">
        <div class="text-center">
            <h2 class="section-heading text-uppercase">Our Helm Collection</h2>
            <h3 class="section-subheading text-muted">Discover the finest helmets for your safety.</h3>
        </div>
        <div class="row text-center">
            <div class="col-md-4">
                <span class="fa-stack fa-4x">
                    <i class="fas fa-circle fa-stack-2x text-primary"></i>
                    <i class="fas fa-motorcycle fa-stack-1x fa-inverse"></i>
                </span>
                <h4 class="my-3">Various Helmet Types</h4>
                <p class="text-muted">Explore a range of helmet types, from full-face helmets to off-road helmets,
                    catering to your riding style.</p>
            </div>
            <div class="col-md-4">
                <span class="fa-stack fa-4x">
                    <i class="fas fa-circle fa-stack-2x text-primary"></i>
                    <i class="fas fa-shield-alt fa-stack-1x fa-inverse"></i>
                </span>
                <h4 class="my-3">Maximum Protection</h4>
                <p class="text-muted">We prioritize your safety. Our helmets are designed to provide maximum protection
                    while riding.</p>
            </div>
            <div class="col-md-4">
                <span class="fa-stack fa-4x">
                    <i class="fas fa-circle fa-stack-2x text-primary"></i>
                    <i class="fas fa-user-check fa-stack-1x fa-inverse"></i>
                </span>
                <h4 class="my-3">Premium Quality</h4>
                <p class="text-muted">Our helmets are crafted from high-quality materials and designed for your comfort
                    during your journeys.</p>
            </div>
        </div>
    </div>
</section>

<!-- Helmet Collection-->
<section class="page-section bg-light" id="helm-collection">
    <div class="container">
        <div class="text-center">
            <h2 class="section-heading text-uppercase">Explore Our Latest Helm Collection</h2>
            <h3 class="section-subheading text-muted">Browse through a variety of high-quality helmet options.</h3>
        </div>
        <div class="row">

            <?php foreach ($helm as $no => $data) { ?>
                <!-- Helmet 1 -->
                <div class="col-lg-4 col-sm-6 mb-4">
                    <div class="portfolio-item card">
                        <a class="portfolio-link" data-bs-toggle="modal" href="#portfolioModal1<?= $data['id'] ?>">
                            <div class="portfolio-hover">
                                <div class="portfolio-hover-content"></div>
                            </div>
                            <img class="img-fluid card-img-top" src="<?= base_url('assets/img/helm/') . $data['gambar'] ?>"
                                alt="Helmet 1" />
                        </a>
                        <hr>
                        <div class="portfolio-caption card-body">
                            <div class="d-flex justify-content-between align-items-center">
                                <div>
                                    <h2 class="portfolio-caption-heading" data-type="Full-Face">
                                        Merk:
                                        <?= $data['merk'] ?>
                                    </h2>
                                    <div class="portfolio-caption-subheading text-muted">
                                        Tipe:
                                        <?= $data['tipe'] ?>
                                    </div>
                                    <div class="portfolio-caption-subheading text-muted">
                                        Ukuran:
                                        <?= $data['ukuran'] ?>
                                    </div>
                                </div>
                                <div class="text-right">
                                    <div class="mb-2">
                                        Harga: $
                                        <?= $data['harga'] ?>
                                    </div>
                                    <div class="d-flex align-items-center">
                                        <a class="btn btn-primary me-2" href="<?= base_url('beranda/detail/') . $data['id'] ?>">Learn more</a>
                                        <a class="btn btn-success" href="link_ke_keranjang.php">
                                            <i class="fas fa-shopping-cart"></i>
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>

                    </div>
                </div>


                <div class="portfolio-modal modal fade" id="portfolioModal1<?= $data['id'] ?>" tabindex="-1" role="dialog"
                    aria-hidden="true">
                    <div class="modal-dialog">
                        <div class="modal-content">
                            <div class="close-modal" data-bs-dismiss="modal"><img
                                    src="<?= base_url('') ?>assets/user/img/close-icon.svg" alt="Close modal" />
                            </div>
                            <div class="container">
                                <div class="row justify-content-center">
                                    <div class="col-lg-8">
                                        <div class="modal-body">
                                            <!-- Project details-->
                                            <h2 class="text-uppercase">
                                                <?= $data['merk'] ?>
                                            </h2>
                                            <p class="item-intro text-muted">
                                                <?= $data['tipe'] ?>
                                            </p>
                                            <img class="img-fluid d-block mx-auto"
                                                src="<?= base_url('assets/img/helm/') . $data['gambar'] ?>" alt="..." />
                                            <ul class="list-inline">
                                                <li>
                                                    <strong>Harga:</strong>
                                                    <?= $data['harga'] ?>
                                                </li>
                                                <li>
                                                    <strong>ukuran:</strong>
                                                    <?= $data['ukuran'] ?>
                                                </li>
                                                <li>
                                                    <strong>Stok:</strong>
                                                    <?= $data['stok'] ?>
                                                </li>
                                            </ul>
                                            <button class="btn btn-primary btn-xl text-uppercase" data-bs-dismiss="modal"
                                                type="button">
                                                <i class="fas fa-xmark me-1"></i>
                                                Close
                                            </button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            <?php } ?>

        </div>
    </div>
</section>



<!-- Tentang Kami-->
<section class="page-section" id="about-us">
    <div class="container">
        <div class="text-center">
            <h2 class="section-heading text-uppercase">Tentang Kami</h2>
            <h3 class="section-subheading text-muted">Kami peduli akan keselamatan Anda di jalan.</h3>
        </div>
        <ul class="timeline">
            <li>
                <div class="timeline-image"><img class="rounded-circle img-fluid" src="assets/img/about/1.jpg"
                        alt="Helm Sales" /></div>
                <div class="timeline-panel">
                    <div class="timeline-heading">
                        <h4>2009-2011</h4>
                        <h4 class="subheading">Kami Buka</h4>
                    </div>
                    <div class="timeline-body">
                        <p class="text-muted">Kami memulai perjalanan kami dengan tujuan utama untuk menyediakan helm
                            berkualitas tinggi kepada para pengendara.</p>
                    </div>
                </div>
            </li>
            <li class="timeline-inverted">
                <div class="timeline-image"><img class="rounded-circle img-fluid" src="assets/img/about/2.jpg"
                        alt="Helm Sales" /></div>
                <div class="timeline-panel">
                    <div class="timeline-heading">
                        <h4>Maret 2011</h4>
                        <h4 class="subheading">Pilihan Helm Luas</h4>
                    </div>
                    <div class="timeline-body">
                        <p class="text-muted">Kami terus berkembang dan sekarang memiliki berbagai jenis helm yang
                            memenuhi kebutuhan semua pengendara.</p>
                    </div>
                </div>
            </li>
            <!-- Lanjutkan dengan entri lainnya sesuai kebutuhan -->
        </ul>
    </div>
</section>

<!-- Tim Kami-->
<section class="page-section bg-light" id="our-team">
    <div class="container">
        <div class="text-center">
            <h2 class="section-heading text-uppercase">Tim Kami</h2>
            <h3 class="section-subheading text-muted">Kami tim yang peduli dengan keselamatan Anda.</h3>
        </div>
        <div class="row">
            <!-- Tim Member 1 -->
            <div class="col-lg-4">
                <div class="team-member">
                    <img class="mx-auto rounded-circle" src="assets/img/team/1.jpg" alt="Parveen Anand" />
                    <h4>Parveen Anand</h4>
                    <p class="text-muted">Lead Designer</p>
                </div>
            </div>
            <!-- Tim Member 2 -->
            <div class="col-lg-4">
                <div class="team-member">
                    <img class="mx-auto rounded-circle" src="assets/img/team/2.jpg" alt="Diana Petersen" />
                    <h4>Diana Petersen</h4>
                    <p class="text-muted">Lead Marketer</p>
                </div>
            </div>
            <!-- Tim Member 3 -->
            <div class="col-lg-4">
                <div class="team-member">
                    <img class="mx-auto rounded-circle" src="assets/img/team/3.jpg" alt="Larry Parker" />
                    <h4>Larry Parker</h4>
                    <p class="text-muted">Lead Developer</p>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-lg-8 mx-auto text-center">
                <p class="large text-muted">Kami adalah tim yang berdedikasi untuk menghadirkan helm berkualitas tinggi
                    dan meningkatkan keselamatan berkendara Anda.</p>
            </div>
        </div>
    </div>
</section>