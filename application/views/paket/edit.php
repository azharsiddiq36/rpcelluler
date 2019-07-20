<div class="container-fluid">
    <!-- Begin Page Header-->
    <div class="row">
        <div class="page-header">
            <div class="d-flex align-items-center">
                <h2 class="page-header-title"><?= $title ?></h2>
            </div>
        </div>
    </div>
    <div class="row flex-row">
        <div class="col-xl-12">
            <!-- Form -->
            <div class="widget has-shadow">
                <div class="widget-header bordered no-actions d-flex align-items-center">
                    <h4>Form Edit Paket</h4>
                </div>
                <div class="widget-body">
                    <form class="needs-validation" action="<?= base_url("edit_paket/" . $row['paket_id']) ?>"
                          method="post" novalidate>
                        <div class="form-group row d-flex align-items-center mb-5">
                            <label class="col-lg-4 form-control-label d-flex justify-content-lg-end">Nama</label>
                            <div class="col-lg-5">
                                <input type="text" class="form-control" value="<?= $row['paket_nama'] ?>"
                                       name="paket_nama" placeholder="Masukkan Nama Paket" required>
                                <div class="invalid-feedback">
                                    Nama Tidak Boleh Kosong
                                </div>
                            </div>
                        </div>
                        <div class="form-group row d-flex align-items-center mb-5">
                            <label class="col-lg-4 form-control-label d-flex justify-content-lg-end">Provider *</label>
                            <div class="col-lg-5">
                                <div class="select">
                                    <select name="paket_provider_id" class="custom-select form-control" required>
                                        <option value="">Pilih Provider</option>
                                        <?php foreach ($provider as $key):
                                            if ($key->provider_id == $row['paket_provider_id']){
                                            ?>
                                                <option selected value="<?= $key->provider_id?>"><?= $key->provider_nama?></option>
                                        <?php

                                            }
                                            else{
                                            ?>
                                                <option value="<?= $key->provider_id?>"><?= $key->provider_nama?></option>
                                        <?php
                                            }
                                            ?>

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
                        <div class="form-group row d-flex align-items-center mb-5">
                            <label class="col-lg-4 form-control-label d-flex justify-content-lg-end">Harga Satuan</label>
                            <div class="col-lg-5">
                                <input type="text" class="form-control" value="<?= $row['paket_harga_satuan']?>" name = "paket_harga_satuan" placeholder="Masukkan Harga" required>
                                <div class="invalid-feedback">
                                    Harga Tidak Boleh Kosong
                                </div>
                            </div>
                        </div>
                        <div class="form-group row d-flex align-items-center mb-5">
                            <label class="col-lg-4 form-control-label d-flex justify-content-lg-end">Stok</label>
                            <div class="col-lg-5">
                                <input type="number" value="<?= $row['paket_stok']?>" class="form-control" name = "paket_stok" placeholder="Masukkan Stok" required>
                                <div class="invalid-feedback">
                                    Stok Tidak Boleh Kosong
                                </div>
                            </div>
                        </div>
                        <div class="text-right">
                            <button class="btn btn-gradient-01" name="submit" type="submit">Update</button>
                            <button class="btn btn-shadow" type="reset">Reset</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>