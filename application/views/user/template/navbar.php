<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <meta name="description" content="" />
    <meta name="author" content="" />
    <title>Agency - Start Bootstrap Theme</title>
    <!-- Favicon-->
    <link rel="icon" type="image/x-icon" href="assets/favicon.ico" />
    <!-- Font Awesome icons (free version)-->
    <script src="https://use.fontawesome.com/releases/v6.3.0/js/all.js" crossorigin="anonymous"></script>
    <!-- Google fonts-->
    <link href="https://fonts.googleapis.com/css?family=Montserrat:400,700" rel="stylesheet" type="text/css" />
    <link href="https://fonts.googleapis.com/css?family=Roboto+Slab:400,100,300,700" rel="stylesheet" type="text/css" />
    <!-- Core theme CSS (includes Bootstrap)-->
    <link href="<?= base_url('assets/user/') ?>css/styles.css" rel="stylesheet" />
</head>

<body id="page-top">
    <!-- Navigation-->
    <nav class="navbar navbar-expand-lg navbar-dark fixed-top" id="mainNav">
        <div class="container">
            <a class="navbar-brand" href="#page-top">Helm Shop</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarResponsive"
                aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
                Menu
                <i class="fas fa-bars ms-1"></i>
            </button>
            <div class="collapse navbar-collapse" id="navbarResponsive">
                <?php if ($this->session->userdata('username')) { ?>
                    <?php if (isset($beranda) && $beranda) { ?>
                        <ul class="navbar-nav text-uppercase ms-auto py-4 py-lg-0">
                            <li class="nav-item"><a class="nav-link" href="<?= base_url('beranda') ?>">Beranda</a></li>
                            <div class="dropdown">
                                <button class="btn btn-secondary" type="button" data-bs-toggle="dropdown" aria-expanded="false">
                                    <i class="fa-solid fa-user"></i>
                                </button>
                                <div class="dropdown-menu dropdown-menu-right shadow animated--grow-in"
                                    aria-labelledby="userDropdown">
                                    <a class="dropdown-item" href="<?= base_url('beranda/profile') ?>">
                                        <i class="fas fa-user fa-sm fa-fw mr-2 text-gray-400"></i>
                                        Profile
                                    </a>
                                    <a class="dropdown-item" href="<?= base_url('beranda/pemesanan') ?>">
                                        <i class="fa-solid fa-envelope"></i>
                                        Riwayat Pesanan Anda
                                    </a>
                                    <div class="dropdown-divider"></div>
                                    <a class="dropdown-item" href="<?= base_url('login/logout') ?>">
                                        <i class="fas fa-sign-out-alt fa-sm fa-fw mr-2 text-gray-400"></i>
                                        Logout
                                    </a>
                                </div>
                            </div>
                        </ul>
                    <?php } else { ?>
                        <ul class="navbar-nav text-uppercase ms-auto py-4 py-lg-0">
                            <li class="nav-item"><a class="nav-link" href="#helm-sales">Helm Sales</a></li>
                            <li class="nav-item"><a class="nav-link" href="#helm-collection">Produk</a></li>
                            <li class="nav-item"><a class="nav-link" href="#about">About Us</a></li>
                            <li class="nav-item"><a class="nav-link" href="#our-team">Our Team</a></li>
                            <li class="nav-item"><a class="nav-link" href="#contact">Contact Us</a></li>
                            <div class="dropdown">
                                <button class="btn btn-secondary" type="button" data-bs-toggle="dropdown" aria-expanded="false">
                                    <i class="fa-solid fa-user"></i>
                                </button>
                                <div class="dropdown-menu dropdown-menu-right shadow animated--grow-in"
                                    aria-labelledby="userDropdown">
                                    <a class="dropdown-item" href="<?= base_url('beranda/profile') ?>">
                                        <i class="fas fa-user fa-sm fa-fw mr-2 text-gray-400"></i>
                                        Profile
                                    </a>
                                    <a class="dropdown-item" href="<?= base_url('beranda/pemesanan') ?>">
                                        <i class="fa-solid fa-envelope"></i>
                                        Riwayat Pesanan Anda
                                    </a>
                                    <div class="dropdown-divider"></div>
                                    <a class="dropdown-item" href="<?= base_url('login/logout') ?>">
                                        <i class="fas fa-sign-out-alt fa-sm fa-fw mr-2 text-gray-400"></i>
                                        Logout
                                    </a>
                                </div>
                            </div>
                        </ul>
                    <?php } ?>

                <?php } else { ?>
                    <ul class="navbar-nav text-uppercase ms-auto py-4 py-lg-0">
                        <li class="nav-item"><a class="nav-link" href="#helm-sales">Helm Sales</a></li>
                        <li class="nav-item"><a class="nav-link" href="#helm-collection">Produk</a></li>
                        <li class="nav-item"><a class="nav-link" href="#about">About Us</a></li>
                        <li class="nav-item"><a class="nav-link" href="#our-team">Our Team</a></li>
                        <li class="nav-item"><a class="nav-link" href="#contact">Contact Us</a></li>
                        <li class="nav-item"><a class="nav-link" href="<?= base_url('login') ?>">Login</a></li>
                    </ul>
                <?php } ?>
            </div>
        </div>
    </nav>

    <!-- Masthead-->
    <header class="masthead">
        <div class="container">
            <div class="masthead-subheading">Welcome To Our Studio!</div>
            <div class="masthead-heading text-uppercase">It's Nice To Meet You</div>
            <a class="btn btn-primary btn-xl text-uppercase" href="#services">Tell Me More</a>
        </div>
    </header>
    <!-- Services-->