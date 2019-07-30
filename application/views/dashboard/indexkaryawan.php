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
            <div class="widget widget-12 has-shadow">
                <a href="<?= base_url("karyawan/debit")?>"><div class="widget-body">
                    <div class="media">
                        <div class="align-self-center ml-5 mr-5">
                            <i class="ion-social-facebook text-facebook"></i>
                        </div>
                        <div class="media-body align-self-center">
                            <div class="title text-facebook">Debit</div>
                            <div class="number"><?= $kios?> Debit</div>
                        </div>
                    </div>
                    </div></a>
            </div>
        </div>
    <div class="col-xl-4 col-md-6 col-sm-6">
        <div class="widget widget-12 has-shadow">
            <a href="<?= base_url("karyawan/kredit")?>"><div class="widget-body">
                    <div class="media">
                        <div class="align-self-center ml-5 mr-5">
                            <i class="ion-social-facebook text-facebook"></i>
                        </div>
                        <div class="media-body align-self-center">
                            <div class="title text-facebook">Kredit</div>
                            <div class="number"><?= $kios?> Kredit</div>
                        </div>
                    </div>
                </div></a>
        </div>
    </div>
    </div>
