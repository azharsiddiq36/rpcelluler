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
            <div class="row flex-row">
                <div class="col-xl-12 col-md-6">

                    <div class="widget widget-09 has-shadow">

                        <div class="widget-header bordered no-actions d-flex align-items-center">
                            <h4>Select Tanggal</h4>
                        </div>

                        <div class="widget-body">
                            <div class="row">
                                <div class="col-xl-10 col-12 no-padding">

                                    <form class="needs-validation" action="<?= base_url("transaksi/".$this->uri->segment(2)."/".$this->uri->segment(3))?>" method="post" novalidate>
                                            <div class="form-group row">
                                                <label class="col-lg-2 form-control-label d-flex justify-content-lg-end"></label>
                                                <div class="col-sm-10">
                                                    <div class="row">
                                                        <label class="col-lg-2">Pilih Kios</label>
                                                        <div class="select col-lg-4">
                                                            <select name="kios" class="custom-select form-control" required>
                                                                <option value="">Pilih Kios</option>
                                                                <?php foreach ($kios as $key):
                                                                    ?>
                                                                    <option value="<?= $key->kios_id?>"><?= $key->kios_nama?></option>
                                                                <?php
                                                                endforeach;
                                                                ?>
                                                            </select>
                                                            <div class="invalid-feedback">
                                                                Please select an option
                                                            </div>
                                                        </div>
                                                        <div class="col-lg-2">
                                                            <button class="btn btn-gradient-04" name = "submit" type="submit">Select</button>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </form>
                                </div>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
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
                                    $debit = 0;
                                    $kredit = 0;
                                    foreach ($data as $key){

                                        if ($select == null){
                                            if ($key->transaksi_jenis == "kredit"){
                                                $kredit += $key->transaksi_total;
                                            }
                                            else{
                                                $debit += $key->transaksi_total;
                                            }
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
                                        else{
                                            if ($key->kios_id == $select){
                                                if ($key->transaksi_jenis == "kredit"){
                                                    $kredit += $key->transaksi_total;
                                                }
                                                else{
                                                    $debit += $key->transaksi_total;
                                                }
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
                                            }?>

                                            <?php
                                        }
                                        ?>


                                    <?php }?>


                                    </tbody>

                                </table>
                                <h4 style="float: right;margin: 10px">Total : Rp <?= $debit-$kredit?></h4>
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
                                    $debit = 0;
                                    foreach ($data as $key){
                                        if($select == null){
                                            if($key->transaksi_jenis == "debit"){
                                                $debit += $key->transaksi_total;
                                                ?>

                                                <tr>
                                                    <td><span class="text-primary"><?= $no++?></span></td>
                                                    <td><?= $key->pengguna_nama?></td>
                                                    <td><?= $key->kios_nama?></td>
                                                    <td><?= $key->provider_nama." - ".$key->paket_nama?></td>
                                                    <td><?= $key->transaksi_jumlah?></td>
                                                    <td><?= $key->transaksi_total?></td>
                                                    <td><?= 'pemasukan'?></td>
                                                    <td><?= date_indo(date("Y-m-d",strtotime($key->transaksi_waktu)))?></td>
                                                    <td><?= $key->transaksi_keterangan?></td>
                                                </tr>
                                                <?php
                                            }
                                        }
                                        else{
                                            if($select == $key->kios_id){
                                                if ($key->transaksi_jenis == 'debit'){
                                                ?>
                                                <tr>
                                                    <td><span class="text-primary"><?= $no++?></span></td>
                                                    <td><?= $key->pengguna_nama?></td>
                                                    <td><?= $key->kios_nama?></td>
                                                    <td><?= $key->provider_nama." - ".$key->paket_nama?></td>
                                                    <td><?= $key->transaksi_jumlah?></td>
                                                    <td><?= $key->transaksi_total?></td>
                                                    <td><?= 'Pemasukan'?></td>
                                                    <td><?= date_indo(date("Y-m-d",strtotime($key->transaksi_waktu)))?></td>
                                                    <td><?= $key->transaksi_keterangan?></td>
                                                </tr>

                                    <?php
                                                }
                                            }
                                        }

                                    }?>


                                    </tbody>
                                </table>
                                <h4 style="float: right;margin: 10px">Total Debit : Rp <?= $debit?></h4>
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
                                    $kredit = 0;
                                    foreach ($data as $key){
                                        if ($select == null){
                                            if($key->transaksi_jenis == "kredit"){
                                                $kredit += $key->transaksi_total;
                                                ?>
                                                <tr>
                                                    <td><span class="text-primary"><?= $no++?></span></td>
                                                    <td><?= $key->pengguna_nama?></td>
                                                    <td><?= $key->kios_nama?></td>
                                                    <td><?= $key->provider_nama." - ".$key->paket_nama?></td>
                                                    <td><?= $key->transaksi_jumlah?></td>
                                                    <td><?= $key->transaksi_total?></td>
                                                    <td><?= 'pengeluaran'?></td>
                                                    <td><?= date_indo(date("Y-m-d",strtotime($key->transaksi_waktu)))?></td>
                                                    <td><?= $key->transaksi_keterangan?></td>
                                                </tr>
                                                <?php
                                            }
                                        }
                                        else{
                                            if ($select == $key->kios_id){
                                                if($key->transaksi_jenis == "kredit"){
                                                    $kredit += $key->transaksi_total;
                                                    ?>
                                                    <tr>
                                                        <td><span class="text-primary"><?= $no++?></span></td>
                                                        <td><?= $key->pengguna_nama?></td>
                                                        <td><?= $key->kios_nama?></td>
                                                        <td><?= $key->provider_nama." - ".$key->paket_nama?></td>
                                                        <td><?= $key->transaksi_jumlah?></td>
                                                        <td><?= $key->transaksi_total?></td>
                                                        <td><?= 'pengeluaran'?></td>
                                                        <td><?= date_indo(date("Y-m-d",strtotime($key->transaksi_waktu)))?></td>
                                                        <td><?= $key->transaksi_keterangan?></td>
                                                    </tr>
                                                    <?php
                                                }
                                            }
                                        }

                                    }?>


                                    </tbody>
                                </table>
                                <h4 style="float: right;margin: 10px">Total Kredit : Rp <?= $kredit?></h4>
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