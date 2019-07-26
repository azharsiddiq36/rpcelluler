<div class="container-fluid">
    <!-- Begin Page Header-->
    <?php if ($this->session->flashdata('msg')){
        ?>
        <div class="auto-hide alert alert-success" role="alert">
            <strong>Selamat !</strong> <?= $this->session->flashdata('msg')?>
        </div>
        <?php
    }?>

    <div class="row">
        <div class="col-xl-12">
            <!-- Sorting -->
            <div class="widget has-shadow">
                <div class="widget-header bordered no-actions d-flex align-items-center">
                    <h4>Table Transaksi</h4>
                </div>
                <div class="widget-body sliding-tabs">
                    <ul class="nav nav-tabs" id="example-one" role="tablist">
                        <li class="nav-item">
                            <a class="nav-link active" id="base-tab-1" data-toggle="tab" href="#tab-1" role="tab" aria-controls="tab-1" aria-selected="true">Semua</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" id="base-tab-2" data-toggle="tab" href="#tab-2" role="tab" aria-controls="tab-2" aria-selected="false">Debit</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" id="base-tab-3" data-toggle="tab" href="#tab-3" role="tab" aria-controls="tab-3" aria-selected="false">Kredit</a>
                        </li>
                    </ul>
                    <div class="tab-content pt-3">
                        <div class="tab-pane fade show active" id="tab-1" role="tabpanel" aria-labelledby="base-tab-1">
                            <div class="table-responsive">
                                <table id="sorting-table" class="table mb-0">
                                    <thead>
                                    <tr>
                                        <th>No</th>
                                        <th>Pegawai</th>
                                        <th>Kios</th>
                                        <th>Paket</th>
                                        <th>Jumlah</th>
                                        <th>Total</th>
                                        <th>Jenis</th>
                                        <th>Waktu</th>
                                        <th>Keterangan</th>
                                    </tr>
                                    </thead>
                                    <tbody>

                                    <?php
                                    $no = 1;
                                    foreach ($data as $key){?>
                                        <tr>
                                            <td><span class="text-primary"><?= $no++?></span></td>
                                            <td><?= $key->pengguna_nama?></td>
                                            <td><?= $key->kios_nama?></td>
                                            <td><?= $key->provider_nama." - ".$key->paket_nama?></td>
                                            <td><?= $key->transaksi_jumlah?></td>
                                            <td><?= $key->transaksi_total?></td>
                                            <td><?= $key->transaksi_jenis?></td>
                                            <td><?= date_indo(date("Y-m-d",strtotime($key->transaksi_waktu)))?></td>
                                            <td><?= $key->transaksi_keterangan?></td>
                                        </tr>
                                    <?php }?>


                                    </tbody>
                                </table>
                            </div>
                        </div>
                        <div class="tab-pane fade" id="tab-2" role="tabpanel" aria-labelledby="base-tab-2">
                            <div class="table-responsive">
                                <table id="sorting-table" class="table mb-0">
                                    <thead>
                                    <tr>
                                        <th>No</th>
                                        <th>Pegawai</th>
                                        <th>Kios</th>
                                        <th>Paket</th>
                                        <th>Jumlah</th>
                                        <th>Total</th>
                                        <th>Jenis</th>
                                        <th>Waktu</th>
                                        <th>Keterangan</th>
                                    </tr>
                                    </thead>
                                    <tbody>

                                    <?php
                                    $no = 1;
                                    foreach ($data as $key){
                                        if($key->transaksi_jenis == "debit"){

                                        ?>

                                        <tr>
                                            <td><span class="text-primary"><?= $no++?></span></td>
                                            <td><?= $key->pengguna_nama?></td>
                                            <td><?= $key->kios_nama?></td>
                                            <td><?= $key->provider_nama." - ".$key->paket_nama?></td>
                                            <td><?= $key->transaksi_jumlah?></td>
                                            <td><?= $key->transaksi_total?></td>
                                            <td><?= $key->transaksi_jenis?></td>
                                            <td><?= date_indo(date("Y-m-d",strtotime($key->transaksi_waktu)))?></td>
                                            <td><?= $key->transaksi_keterangan?></td>
                                        </tr>
                                    <?php
                                        }
                                    }?>


                                    </tbody>
                                </table>
                            </div>
                        </div>
                        <div class="tab-pane fade" id="tab-3" role="tabpanel" aria-labelledby="base-tab-3">
                            <div class="table-responsive">
                                <table id="sorting-table" class="table mb-0">
                                    <thead>
                                    <tr>
                                        <th>No</th>
                                        <th>Pegawai</th>
                                        <th>Kios</th>
                                        <th>Paket</th>
                                        <th>Jumlah</th>
                                        <th>Total</th>
                                        <th>Jenis</th>
                                        <th>Waktu</th>
                                        <th>Keterangan</th>
                                    </tr>
                                    </thead>
                                    <tbody>

                                    <?php
                                    $no = 1;
                                    foreach ($data as $key){
                                        if($key->transaksi_jenis == "kredit"){
                                            ?>
                                            <tr>
                                                <td><span class="text-primary"><?= $no++?></span></td>
                                                <td><?= $key->pengguna_nama?></td>
                                                <td><?= $key->kios_nama?></td>
                                                <td><?= $key->provider_nama." - ".$key->paket_nama?></td>
                                                <td><?= $key->transaksi_jumlah?></td>
                                                <td><?= $key->transaksi_total?></td>
                                                <td><?= $key->transaksi_jenis?></td>
                                                <td><?= date_indo(date("Y-m-d",strtotime($key->transaksi_waktu)))?></td>
                                                <td><?= $key->transaksi_keterangan?></td>
                                            </tr>
                                            <?php
                                        }
                                    }?>


                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Begin Centered Modal -->

    <div id="modal_transaksi" class="modal fade">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content">
                <div class="modal-header">
                    <h4 class="modal-title">Rincian Pengguna</h4>
                    <button type="button" class="close" data-dismiss="modal">
                        <span aria-hidden="true">×</span>
                        <span class="sr-only">close</span>
                    </button>
                </div>
                <div class="modal-body">
                    <div class="widget-body">
                        <div class="mt-5">
                            <img src="assets/img/avatar/avatar-01.jpg" alt="..." style="width: 120px;" class="avatar rounded-circle d-block mx-auto">
                        </div>
                        <h3 class="text-center mt-3 mb-1"><label id = "nama"></label></h3>
                        <p class="text-center"><label id = "email"></label></p>
                        <div class="em-separator separator-dashed"></div>
                        <ul class="nav flex-column">
                            <li class="nav-item">
                                <a class="nav-link" href="javascript:void(0)"><i class="la la-phone la-2x align-middle pr-2"></i><label id = "nomor"></label></a>
                            </li>

                            <li class="nav-item">
                                <a class="nav-link" href="javascript:void(0)"><i class="la la-key la-2x align-middle pr-2"></i><label id = "hak_akses"></label></a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="javascript:void(0)"><i class="la la-intersex la-2x align-middle pr-2"></i><label id="jk"></label></a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="javascript:void(0)"><i class="la la-map-marker la-2x align-middle pr-2"></i><label id = "alamat"></label></a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="javascript:void(0)"><i class="la la-user la-2x align-middle pr-2"></i><label id = "status"></label></a>
                            </li>
                        </ul>
                        <div id="percobaan"></div>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-shadow" data-dismiss="modal">Close</button>
                    <button type="button" class="btn btn-primary">Save</button>
                </div>
            </div>
        </div>
    </div>