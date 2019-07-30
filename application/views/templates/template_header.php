<!DOCTYPE html>
<!--
Item Name: Elisyam - Web App & Admin Dashboard Template
Version: 1.5
Author: SAEROX

** A license must be purchased in order to legally use this template for your project **
-->
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Elisyam - Dashboard</title>
    <meta name="description" content="Elisyam is a Web App and Admin Dashboard Template built with Bootstrap 4">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <!-- Google Fonts -->
    <script src="https://ajax.googleapis.com/ajax/libs/webfont/1.6.26/webfont.js"></script>
    <script>
        WebFont.load({
            google: {"families":["Montserrat:400,500,600,700","Noto+Sans:400,700"]},
            active: function() {
                sessionStorage.fonts = true;
            }
        });
    </script>
    <!-- Favicon -->
    <link rel="apple-touch-icon" sizes="180x180" href="<?= base_url()?>assets/img/apple-touch-icon.png">
    <link rel="icon" type="image/png" sizes="32x32" href="<?= base_url()?>assets/img/favicon-32x32.png">
    <link rel="icon" type="image/png" sizes="16x16" href="<?= base_url()?>assets/img/favicon-16x16.png">
    <!-- Stylesheet -->
    <link rel="stylesheet" href="<?= base_url()?>assets/vendors/css/base/bootstrap.min.css">
    <link rel="stylesheet" href="<?= base_url()?>assets/vendors/css/base/elisyam-1.5.min.css">
    <link rel="stylesheet" href="<?= base_url()?>assets/css/owl-carousel/owl.carousel.min.css">
    <link rel="stylesheet" href="<?= base_url()?>assets/css/owl-carousel/owl.theme.min.css">
    <link rel="stylesheet" href="<?= base_url()?>assets/css/datatables/datatables.min.css">
    <link rel="stylesheet" href="<?= base_url()?>assets/css/animate/animate.min.css">
    <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
    <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script><![endif]-->
</head>
<body id="page-top">
<!-- Begin Preloader -->
<div id="preloader">
    <div class="canvas">
        <img src="<?= base_url()?>assets/img/logo.png" alt="logo" class="loader-logo">
        <div class="spinner"></div>
    </div>
</div>
<!-- End Preloader -->
<div class="page">
    <!-- Begin Header -->
    <header class="header">
        <nav class="navbar fixed-top">
            <!-- Begin Search Box-->
            <div class="search-box">
                <button class="dismiss"><i class="ion-close-round"></i></button>
                <form id="searchForm" action="#" role="search">
                    <input type="search" placeholder="Search something ..." class="form-control">
                </form>
            </div>
            <!-- End Search Box-->
            <!-- Begin Topbar -->
            <div class="navbar-holder d-flex align-items-center align-middle justify-content-between">
                <!-- Begin Logo -->
                <div class="navbar-header">
                    <a href="db-default.html" class="navbar-brand">
                        <div class="brand-image brand-big">
                            <img src="<?= base_url()?>assets/img/logo-big.png" alt="logo" class="logo-big">
                        </div>
                        <div class="brand-image brand-small">
                            <img src="<?= base_url()?>assets/img/logo.png" alt="logo" class="logo-small">
                        </div>
                    </a>
                    <!-- Toggle Button -->
                    <a id="toggle-btn" href="#" class="menu-btn active">
                        <span></span>
                        <span></span>
                        <span></span>
                    </a>
                    <!-- End Toggle -->
                </div>
                <!-- End Logo -->
                <!-- Begin Navbar Menu -->
                <ul class="nav-menu list-unstyled d-flex flex-md-row align-items-md-center pull-right">
                    <!-- Search -->
                    <li class="nav-item d-flex align-items-center"><a id="search" href="#"><i class="la la-search"></i></a></li>
                    <!-- End Search -->
                    <!-- Begin Notifications -->
                    <li class="nav-item dropdown"><a id="notifications" rel="nofollow" data-target="#" href="#" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" class="nav-link"><i class="la la-bell animated infinite swing"></i><span class="badge-pulse"></span></a>
                        <ul aria-labelledby="notifications" class="dropdown-menu notification">
                            <li>
                                <div class="notifications-header">
                                    <div class="title">Notifications (4)</div>
                                    <div class="notifications-overlay"></div>
                                    <img src="<?= base_url()?>assets/img/notifications/01.jpg" alt="..." class="img-fluid">
                                </div>
                            </li>
                            <li>
                                <a href="#">
                                    <div class="message-icon">
                                        <i class="la la-user"></i>
                                    </div>
                                    <div class="message-body">
                                        <div class="message-body-heading">
                                            New user registered
                                        </div>
                                        <span class="date">2 hours ago</span>
                                    </div>
                                </a>
                            </li>
                            <li>
                                <a href="#">
                                    <div class="message-icon">
                                        <i class="la la-calendar-check-o"></i>
                                    </div>
                                    <div class="message-body">
                                        <div class="message-body-heading">
                                            New event added
                                        </div>
                                        <span class="date">7 hours ago</span>
                                    </div>
                                </a>
                            </li>
                            <li>
                                <a href="#">
                                    <div class="message-icon">
                                        <i class="la la-history"></i>
                                    </div>
                                    <div class="message-body">
                                        <div class="message-body-heading">
                                            Server rebooted
                                        </div>
                                        <span class="date">7 hours ago</span>
                                    </div>
                                </a>
                            </li>
                            <li>
                                <a href="#">
                                    <div class="message-icon">
                                        <i class="la la-twitter"></i>
                                    </div>
                                    <div class="message-body">
                                        <div class="message-body-heading">
                                            You have 3 new followers
                                        </div>
                                        <span class="date">10 hours ago</span>
                                    </div>
                                </a>
                            </li>
                            <li>
                                <a rel="nofollow" href="#" class="dropdown-item all-notifications text-center">View All Notifications</a>
                            </li>
                        </ul>
                    </li>
                    <!-- End Notifications -->
                    <!-- User -->
                    <li class="nav-item dropdown"><a id="user" rel="nofollow" data-target="#" href="#" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" class="nav-link"><img src="<?= base_url()?>assets/img/avatar/avatar-01.jpg" alt="..." class="avatar rounded-circle"></a>
                        <ul aria-labelledby="user" class="user-size dropdown-menu">
                            <li class="welcome">
                                <a href="#" class="edit-profil"><i class="la la-gear"></i></a>
                                <img src="<?= base_url()?>assets/img/avatar/avatar-01.jpg" alt="..." class="rounded-circle">
                            </li>
                            <li>
                                <a href="pages-profile.html" class="dropdown-item">
                                    Profile
                                </a>
                            </li>
                            <li>
                                <a href="app-mail.html" class="dropdown-item">
                                    Messages
                                </a>
                            </li>
                            <li>
                                <a href="#" class="dropdown-item no-padding-bottom">
                                    Settings
                                </a>
                            </li>
                            <li class="separator"></li>
                            <li>
                                <a href="pages-faq.html" class="dropdown-item no-padding-top">
                                    Faq
                                </a>
                            </li>
                            <li><a rel="nofollow" onclick="return confirm('Apakah anda yakin ingin keluar?')" href="<?= base_url('logout')?>" class="dropdown-item logout text-center"><i class="ti-power-off"></i></a></li>
                        </ul>
                    </li>
                    <!-- End User -->
                    <!-- Begin Quick Actions -->
                    <li class="nav-item"><a href="#off-canvas" class="open-sidebar"><i class="la la-ellipsis-h"></i></a></li>
                    <!-- End Quick Actions -->
                </ul>
                <!-- End Navbar Menu -->
            </div>
            <!-- End Topbar -->
        </nav>
    </header>
    <!-- End Header -->
    <!-- Begin Page Content -->
    <div class="page-content d-flex align-items-stretch">
        <div class="default-sidebar">
            <!-- Begin Side Navbar -->
            <nav class="side-navbar box-scroll sidebar-scroll">
                <!-- Begin Main Navigation -->
                <ul class="list-unstyled">
                    <li <?php if ($this->uri->segment(1)=='dashboard'){echo "class = 'active'";}?>><a href="<?= base_url("dashboard")?>"><i class="la la-spinner"></i><span>Dashboard</span></a></li>
                    <?php if ($this->session->userdata['pengguna_hak_akses'] == "administrator"){ ?>
                    <li><a href="#dropdown-db" aria-expanded="false" data-toggle="collapse"><i class="la la-columns"></i><span>Table Master</span></a>
                        <ul id="dropdown-db" class="collapse list-unstyled pt-0 <?php if ($this->uri->segment(1)=='pengguna'||$this->uri->segment(1)=='provider'||$this->uri->segment(1)=='paket'||$this->uri->segment(1)=='kios'){echo 'show';}?>">
                            <li><a <?php if ($this->uri->segment(1)=='pengguna'){echo "class = 'active'";}?> href="<?= base_url("pengguna")?>">Pengguna</a></li>
                            <li><a <?php if ($this->uri->segment(1)=='provider'){echo "class = 'active'";}?> href="<?= base_url("provider")?>">Provider</a></li>
                            <li><a <?php if ($this->uri->segment(1)=='paket'){echo "class = 'active'";}?> href="<?= base_url("paket")?>">Paket</a></li>
                            <li><a <?php if ($this->uri->segment(1)=='kios'){echo "class = 'active'";}?> href="<?= base_url("kios")?>">Kios</a></li>
                        </ul>
                    </li>
                    <?php } ?>
                    <?php if ($this->session->userdata['pengguna_hak_akses'] == "administrator" || $this->session->userdata['pengguna_hak_akses'] == "ketua"){ ?>
                    <li><a href="#dropdown-app" aria-expanded="false" data-toggle="collapse"><i class="la la-puzzle-piece"></i><span>Table Transaksi</span></a>
                        <ul id="dropdown-app" class="collapse list-unstyled <?php if ($this->uri->segment(1)=='transaksi'){echo 'show';}?> pt-0">
                            <li><a <?php if ($this->uri->segment(2)=='daftar'){echo "class = 'active'";}?> href="<?= base_url("transaksi/daftar/default")?>">Daftar Transaksi</a></li>
                            <li><a <?php if ($this->uri->segment(2)=='sekarang'){echo "class = 'active'";}?> href="<?= base_url("transaksi/sekarang/default")?>">Hari ini</a></li>
                            <li><a <?php if ($this->uri->segment(2)=='bulan'){echo "class = 'active'";}?> href="<?= base_url("transaksi/bulan/default")?>">Bulan ini</a></li>
                            <li><a <?php if ($this->uri->segment(2)=='tahun'){echo "class = 'active'";}?> href="<?= base_url("transaksi/tahun/default")?>">Tahun ini</a></li>

                        </ul>
                    </li>
                <?php }
                if ($this->session->userdata['pengguna_hak_akses'] == 'karyawan'){
                        ?>
                    <li><a href="#dropdown-app" aria-expanded="false" data-toggle="collapse"><i class="la la-puzzle-piece"></i><span>Laporan Penjualan</span></a>
                        <ul id="dropdown-app" class="collapse list-unstyled <?php if ($this->uri->segment(1)=='karyawan'){echo 'show';}?> pt-0">
                            <li><a <?php if ($this->uri->segment(2)=='debit'){echo "class = 'active'";}?> href="<?= base_url("karyawan/debit")?>">Laporan Debit</a></li>
                            <li><a <?php if ($this->uri->segment(2)=='kredit'){echo "class = 'active'";}?> href="<?= base_url("karyawan/kredit")?>">Laporan Kredit</a></li>
                            <li><a <?php if ($this->uri->segment(2)=='Riwayat'){echo "class = 'active'";}?> href="<?= base_url("karyawan/riwayat")?>">Riwayat Laporan</a></li>

                        </ul>
                    </li>
                    <?php
                }
                ?>

                </ul>

            </nav>
            <!-- End Side Navbar -->
        </div>
        <!-- End Left Sidebar -->

        <div class="content-inner">



