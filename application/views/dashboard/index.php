<div class="container-fluid">
    <!-- Begin Page Header-->
    <div class="row">
        <div class="page-header">
            <div class="d-flex align-items-center">
                <h2 class="page-header-title"><?= $title?></h2>
            </div>
        </div>
    </div>
<div class="row flex-row">
        <div class="col-xl-4 col-md-6 col-sm-6">
            <a href="<?= base_url("transaksi/daftar/default")?>"><div class="widget widget-12 has-shadow">
                <div class="widget-body">
                    <div class="media">
                        <div class="align-self-center ml-5 mr-5">
                            <img src="<?= base_url()?>assets/img/transaction.png" width="50px" height="50px" >
                        </div>
                        <div class="media-body align-self-center">
                            <div class="title text-facebook">Semua Transaksi</div>
                            <div class="number"><?= $semua?> Transaksi</div>
                        </div>
                    </div>
                </div>
            </div></a>
        </div>

        <div class="col-xl-4 col-md-6 col-sm-6">
            <a href="<?= base_url("transaksi/sekarang/default")?>"><div class="widget widget-12 has-shadow">
                <div class="widget-body">
                    <div class="media">
                        <div class="align-self-center ml-5 mr-5">
                            <img src="<?= base_url()?>assets/img/history.png" width="50px" height="50px" >
                        </div>
                        <div class="media-body align-self-center">
                            <div class="title text-facebook">Transaksi Hari Ini</div>
                            <div class="number"><?= $sekarang?> Transaksi</div>
                        </div>
                    </div>
                </div>
                </div></a>
        </div>
        <div class="col-xl-4 col-md-6 col-sm-6">
            <div class="widget widget-12 has-shadow">
                <a href="<?= base_url("transaksi/bulan/default")?>"><div class="widget-body">
                    <div class="media">
                        <div class="align-self-center ml-5 mr-5">
                            <img src="<?= base_url()?>assets/img/history.png" width="50px" height="50px" >
                        </div>
                        <div class="media-body align-self-center">
                            <div class="title text-facebook">Transaksi Bulan Ini</div>
                            <div class="number"><?= $bulan?> Transaksi</div>
                        </div>
                    </div>
                    </div></a>
            </div>
        </div>
        <div class="col-xl-4 col-md-6 col-sm-6">
            <div class="widget widget-12 has-shadow">
                <a href="<?= base_url("transaksi/tahun/default")?>"><div class="widget-body">
                    <div class="media">
                        <div class="align-self-center ml-5 mr-5">
                            <img src="<?= base_url()?>assets/img/history.png" width="50px" height="50px" >
                        </div>
                        <div class="media-body align-self-center">
                            <div class="title text-facebook">Transaksi Tahun Ini</div>
                            <div class="number"><?= $tahun?> Transaksi</div>
                        </div>
                    </div>
                    </div></a>
            </div>
        </div>
        <div class="col-xl-4 col-md-6 col-sm-6">
            <div class="widget widget-12 has-shadow">
                <a href="<?= base_url("pengguna")?>"><div class="widget-body">
                    <div class="media">
                        <div class="align-self-center ml-5 mr-5">
                            <img src="<?= base_url()?>assets/img/user.png" width="50px" height="50px" >
                        </div>
                        <div class="media-body align-self-center">
                            <div class="title text-facebook">Pengguna</div>
                            <div class="number"><?= $pengguna?> Pengguna</div>
                        </div>
                    </div>
                    </div></a>
            </div>
        </div>
        <div class="col-xl-4 col-md-6 col-sm-6">
            <div class="widget widget-12 has-shadow">
                <a href="<?= base_url("paket")?>"><div class="widget-body">
                    <div class="media">
                        <div class="align-self-center ml-5 mr-5">
                            <img src="<?= base_url()?>assets/img/checklist.png" width="50px" height="50px" >
                        </div>
                        <div class="media-body align-self-center">
                            <div class="title text-facebook">Paket</div>
                            <div class="number"><?= $paket?> Paket Tersedia</div>
                        </div>
                    </div>
                    </div></a>
            </div>
        </div>
        <div class="col-xl-4 col-md-6 col-sm-6">
            <div class="widget widget-12 has-shadow">
                <a href="<?= base_url("provider")?>"><div class="widget-body">
                    <div class="media">
                        <div class="align-self-center ml-5 mr-5">
                            <img src="<?= base_url()?>assets/img/sim-card.png" width="50px" height="50px" >
                        </div>
                        <div class="media-body align-self-center">
                            <div class="title text-facebook">Provider</div>
                            <div class="number"><?= $provider?> Provider Bergabung</div>
                        </div>
                    </div>
                    </div></a>
            </div>
        </div>
        <div class="col-xl-4 col-md-6 col-sm-6">
            <div class="widget widget-12 has-shadow">
                <a href="<?= base_url("kios")?>"><div class="widget-body">
                    <div class="media">
                        <div class="align-self-center ml-5 mr-5">
                            <img src="<?= base_url()?>assets/img/shop.png" width="50px" height="50px" >
                        </div>
                        <div class="media-body align-self-center">
                            <div class="title text-facebook">Kios</div>
                            <div class="number"><?= $kios?> Kios Terdaftar</div>
                        </div>
                    </div>
                    </div></a>
            </div>
        </div>
    </div>
