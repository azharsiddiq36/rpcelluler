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
                        <a class="btn btn-gradient-01" href="<?= base_url("tambah_paket")?>">Daftar Code Paket</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="row flex-row">
        <div class="col-xl-12 col-md-6">

            <div class="widget widget-09 has-shadow">

                <div class="widget-header bordered no-actions d-flex align-items-center">
                    <h4>Tambah Debit</h4>
                </div>

                <div class="widget-body">
                    <div class="row">
                        <div class="col-xl-10 col-12 no-padding">
                            <form class="needs-validation" action="<?= base_url("karyawan/debit")?>" method="post" novalidate>

                                <div class="form-group row d-flex align-items-center mb-5">
                                    <label class="col-lg-4 form-control-label d-flex justify-content-lg-end">Code-Paket</label>
                                    <div class="col-lg-5">
                                        <div class="select">
                                            <select id="code-paket2" name="paket_provider_id" class="custom-select form-control" required>
                                                <option value="0">--Code--</option>
                                                <?php foreach ($data as $key):
                                                    ?>
                                                    <option value="<?= $key->paket_id?>"><?= substr($key->provider_nama,0,2)."-".$key->paket_id?></option>
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
                                    <label class="col-lg-4 form-control-label d-flex justify-content-lg-end">Nama</label>
                                    <div class="col-lg-5">
                                        <input id="nama2" type="text" readonly name="nama" required placeholder="Nama" class="form-control">
                                        <div class="invalid-feedback">
                                            Nama Tidak Boleh Kosong
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group row d-flex align-items-center mb-5">
                                    <label class="col-lg-4 form-control-label d-flex justify-content-lg-end">Provider</label>
                                    <div class="col-lg-5">
                                        <input id="provider2" type="text" name="providerpaket" required readonly="" placeholder="Provider" class="form-control">
                                        <div class="invalid-feedback">
                                            Nama Tidak Boleh Kosong
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group row d-flex align-items-center mb-5">
                                    <label class="col-lg-4 form-control-label d-flex justify-content-lg-end">Jumlah</label>
                                    <div class="col-lg-5">
                                        <input id="provider2" type="number" name = "jumlah" required placeholder="Jumlah" class="form-control">
                                        <div class="invalid-feedback">
                                            Jumlah Tidak Boleh Kosong
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
                                                    <option value="<?= $key->kios_id?>"><?=$key->kios_nama?></option>
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
        </div>
    </div>


