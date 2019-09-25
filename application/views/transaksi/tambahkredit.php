<div class="container-fluid">
    <!-- Begin Page Header-->
    <?php if ($this->session->flashdata('msg')){
        ?>
        <div class="alert alert-success" role="alert">
            <strong>Selamat !</strong> <?= $this->session->flashdata('msg')?>
        </div>
        <?php
    }?>
    <div class="row">
        <div class="page-header">
            <div class="d-flex align-items-center">
                <h2 class="page-header-title"><?= $title?></h2>
            </div>
        </div>
    </div>
    <div class="row flex-row">
        <div class="col-xl-12">
            <!-- Form -->
            <div class="widget has-shadow">
                <div class="widget-header bordered no-actions d-flex align-items-center">
                    <h4>Form Tambah Kredit</h4>
                </div>
                <div class="widget-body">
                    <form class="needs-validation" action="<?= base_url("karyawan/kredit")?>" method="post" novalidate>

                        <div class="form-group row d-flex align-items-center mb-5">
                            <label class="col-lg-4 form-control-label d-flex justify-content-lg-end">Keterangan</label>
                            <div class="col-lg-5">
                                <textarea class="form-control" name = "keterangan" placeholder="Keterangan pengeluaran ..." required=""></textarea>
                                <div class="invalid-feedback">
                                    Keterangan Tidak Boleh Kosong
                                </div>
                            </div>
                        </div>
                        <div class="form-group row d-flex align-items-center mb-5">
                            <label class="col-lg-4 form-control-label d-flex justify-content-lg-end">Jumlah</label>
                            <div class="col-lg-5">
                                <input type="text" class="form-control" name = "jumlah" name = "transaksi_nama" placeholder="Masukkan Nama" required>
                                <div class="invalid-feedback">
                                    Jumlah Pengeluaran Tidak Boleh Kosong
                                </div>
                            </div>
                        </div>
                        <div class="form-group row d-flex align-items-center mb-5">
                            <label class="col-lg-4 form-control-label d-flex justify-content-lg-end">Jenis</label>
                            <div class="col-lg-5">
                                <div class="select">
                                    <select id="code-paket2" name="jenis" class="custom-select form-control" required>
                                        <option value="0">--Pilih--</option>
                                        <option value="pulsa">Pulsa</option>
                                        <option value="paket">Paket</option>
                                    </select>
                                    <div class="invalid-feedback">
                                        Please select an option
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="form-group row d-flex align-items-center mb-5">
                            <label class="col-lg-4 form-control-label d-flex justify-content-lg-end">Kios</label>
                            <div class="col-lg-5">
                                <div class="select">
                                    <select id="code-paket2" name="kios" class="custom-select form-control" required>
                                        <option value="0">--Pilih--</option>
                                        <?php foreach ($kios as $key):
                                            if ($key->kios_id=='3'){
                                                continue;
                                            }
                                            ?>
                                            <option value="<?= $key->kios_id?>"><?=$key->kios_nama."(".$key->kios_cabang.")"?></option>
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
                        <div class="text-right">
                            <button class="btn btn-gradient-01" name = "submit"type="submit">Submit Form</button>
                            <button class="btn btn-shadow" type="reset">Reset</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>