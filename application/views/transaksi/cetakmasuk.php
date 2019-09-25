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
        <div class="page-header">
            <div class="d-flex align-items-center">
                <h2 class="page-header-title"><?= $title?></h2>
                <div>
                    <div class="page-header-tools">
                        <button class="btn btn-gradient-01" href="" onclick="printContent('oke')">Cetak</button>
                    </div>
                </div>
            </div>
        </div>

        <div class="col-xl-12">
            <div class="row flex-row">
                <div class="col-xl-12 col-md-6">

                    <div class="widget widget-09 has-shadow">

                        <div class="widget-header bordered no-actions d-flex align-items-center">
                            <h4>Select</h4>
                        </div>

                        <div class="widget-body">
                            <div class="row">
                                <div class="col-xl-10 col-12 no-padding">
                                    <?php
                                        if ($this->uri->segment(3)=='masuk'){
                                            ?>
                                    <form class="needs-validation" action="<?= base_url("administrator/riwayat/masuk/cetak")?>" method="post" novalidate>
                                    <?php
                                        }
                                        else{
                                            ?>
                                        <form class="needs-validation" action="<?= base_url("administrator/riwayat/keluar/cetak")?>" method="post" novalidate>
                                        <?php
                                        }
                                    ?>

                                        <div class="form-group row">
                                            <label class="col-lg-2 form-control-label d-flex justify-content-lg-end"></label>
                                            <div class="col-sm-10">
                                                <div class="row">
                                                        <label class="col-lg-2">Mulai</label>
                                                    <div class="col-lg-3">
                                                        <input type="date" required name="mulai" class="form-control">
                                                    </div>

                                                        <label class = "col-lg-2">Selesai</label>

                                                    <div class="col-lg-3">
                                                        <input type="date" required name="selesai" class="form-control">
                                                    </div>

                                                </div>
                                            </div>

                                        </div>
                                            <div class="form-group row">
                                                <label class="col-lg-2 form-control-label d-flex justify-content-lg-end"></label>
                                                <div class="col-sm-10">
                                                    <div class="row">
                                                        <label class="col-lg-2">Kios</label>
                                                        <div class="col-lg-8">
                                                            <div class="select">
                                                                <select name="kios" class="custom-select form-control" required>
                                                                    <option value="">Pilih Kios</option>
                                                                    <?php foreach ($kios as $key):
                                                                        ?>
                                                                        <option value="<?= $key->kios_nama."(".$key->kios_cabang.")"?>"><?= $key->kios_nama."(".$key->kios_cabang.")"?></option>
                                                                    <?php
                                                                    endforeach;
                                                                    ?>
                                                                </select>
                                                                <div class="invalid-feedback">
                                                                    Please select an option
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="form-group row">
                                                <label class="col-lg-2 form-control-label d-flex justify-content-lg-end"></label>
                                                <div class="col-sm-10">
                                                    <div class="row">
                                                        <label class="col-lg-2">Transaksi</label>
                                                        <div class="col-lg-8">
                                                            <div class="select">
                                                                <select name="transaksi" class="custom-select form-control" required>
                                                                    <option value="">Pilih Transaksi</option>
                                                                         <option value="pulsa">Pulsa</option>
                                                                    <option value="paket">Paket</option>
                                                                 </select>
                                                                <div class="invalid-feedback">
                                                                    Please select an option
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-lg-2 float-right">
                                                <button class="btn btn-gradient-04" name = "submit" type="submit">Select</button>
                                            </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
            <!-- Sorting -->

            <div class="widget has-shadow" id="oke">
                <div class="widget-header bordered no-actions d-flex align-items-center">
                    <h4>Tabel Pemasukan</h4>
                </div>
                <div class="widget-body">
                    <div class="table-responsive">
                        <table class="table mb-0">
                            <thead>
                            <tr>
                                <th>No</th>
                                <th>Keterangan</th>
                                <th>Kios</th>
                                <th>Pulsa</th>
                                <th>Jumlah</th>
                                <th>Total</th>
                                <th>Waktu</th>
                                <th>Jenis</th>
                                <th>Transaksi</th>
                            </tr>
                            </thead>
                            <tbody>

                            <?php
                            $totaldebit= 0;
                            $totalkredit= 0;
                            $no = 1;
                            foreach ($data as $key) {
                                if ($key->transaksi_jenis == 'debit' && $this->uri->segment(3)=='masuk' ){
                                    $totaldebit+= $key->transaksi_total;
                                    if ($kios_param == null && $transaksi_param==null){
                                        ?>
                                        <tr>
                                            <td><span class="text-primary"><?= $no++ ?></span></td>
                                            <td><?= $key->transaksi_keterangan ?></td>
                                            <td><?= $key->kios_nama."(".$key->kios_cabang.")"?> </td>
                                            <td><?= $key->paket_nama ?></td>
                                            <td><?= $key->transaksi_jumlah ?></td>
                                            <td><?= $key->transaksi_total ?></td>
                                            <td><?= date_indo(date("Y-m-d", strtotime($key->transaksi_waktu))) ?></td>
                                            <td>Pemasukan</td>
                                            <td><?= $key->transaksi_pilihan?></td>
                                        </tr>
                                        <?php
                                    }
                                    else{
                                        if ($kios_param == $key->kios_nama."(".$key->kios_cabang.")"){
                                            echo $transaksi_param;
                                            if ($transaksi_param == $key->transaksi_pilihan){
                                                ?>
                                                <tr>
                                                    <td><span class="text-primary"><?= $no++ ?></span></td>
                                                    <td><?= $key->transaksi_keterangan ?></td>
                                                    <td><?= $key->kios_nama."(".$key->kios_cabang.")"?> </td>
                                                    <td><?= $key->paket_nama ?></td>
                                                    <td><?= $key->transaksi_jumlah ?></td>
                                                    <td><?= $key->transaksi_total ?></td>
                                                    <td><?= date_indo(date("Y-m-d", strtotime($key->transaksi_waktu))) ?></td>
                                                    <td>Pemasukan</td>
                                                    <td><?= $key->transaksi_pilihan?></td>
                                                </tr>
                                                <?php
                                            }

                                        }
                                    }
}
                                else if( $key->transaksi_jenis == 'kredit' && $this->uri->segment(3)=='keluar' ){
                                    $totalkredit += $key->transaksi_total;
                                    if ($kios_param == null && $transaksi_param==null){
                                        ?>
                                        <tr>
                                            <td><span class="text-primary"><?= $no++ ?></span></td>
                                            <td><?= $key->transaksi_keterangan ?></td>
                                            <td><?= $key->kios_nama."(".$key->kios_cabang.")"?> </td>
                                            <td><?= $key->paket_nama ?></td>
                                            <td><?= $key->transaksi_jumlah ?></td>
                                            <td><?= $key->transaksi_total ?></td>
                                            <td><?= date_indo(date("Y-m-d", strtotime($key->transaksi_waktu))) ?></td>
                                            <td>Pemasukan</td>
                                            <td><?= $key->transaksi_pilihan?></td>
                                        </tr>
                                        <?php
                                    }
                                    else{
                                        if ($kios_param == $key->kios_nama."(".$key->kios_cabang.")"){
                                            if ($transaksi_param == $key->transaksi_pilihan){
                                                ?>
                                                <tr>
                                                    <td><span class="text-primary"><?= $no++ ?></span></td>
                                                    <td><?= $key->transaksi_keterangan ?></td>
                                                    <td><?= $key->kios_nama."(".$key->kios_cabang.")"?> </td>
                                                    <td><?= $key->paket_nama ?></td>
                                                    <td><?= $key->transaksi_jumlah ?></td>
                                                    <td><?= $key->transaksi_total ?></td>
                                                    <td><?= date_indo(date("Y-m-d", strtotime($key->transaksi_waktu))) ?></td>
                                                    <td>Pemasukan</td>
                                                    <td><?= $key->transaksi_pilihan?></td>
                                                </tr>
                                                <?php
                                            }
                                        }
                                    }
                                }

                            }?>
                            <tr><td colspan="7"></td>
                                <td >Total Keseluruhan</td>
                                <td>Rp. <?php
                                    if ($this->uri->segment(3)=='masuk'){
                                        echo $totaldebit;
                                    }
                                    else{
                                        echo $totalkredit;
                                    }
                                    ?></td></tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
            <!-- End Sorting -->

        </div>
    </div>
    <!-- Begin Centered Modal -->

    <div id="modal_pengguna" class="modal fade">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content">
                <div class="modal-header">
                    <h4 class="modal-title">Riwayat</h4>
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