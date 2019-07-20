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
                    <h4>Form Edit Kios</h4>
                </div>
                <div class="widget-body">
                    <form class="needs-validation" action="<?= base_url("edit_kios/" . $row['kios_id']) ?>"
                          method="post" novalidate>
                        <div class="form-group row d-flex align-items-center mb-5">
                            <label class="col-lg-4 form-control-label d-flex justify-content-lg-end">Nama</label>
                            <div class="col-lg-5">
                                <input type="text" class="form-control" value="<?= $row['kios_nama'] ?>"
                                       name="kios_nama" placeholder="Masukkan Nama Kios" required>
                                <div class="invalid-feedback">
                                    Nama Tidak Boleh Kosong
                                </div>
                            </div>
                        </div>
                        <div class="form-group row d-flex align-items-center mb-5">
                            <label class="col-lg-4 form-control-label d-flex justify-content-lg-end">Cabang</label>
                            <div class="col-lg-5">
                                <input type="text" class="form-control" value = <?= $row['kios_cabang']?> name = "kios_cabang" placeholder="Masukkan Cabang Kios" required>
                                <div class="invalid-feedback">
                                    Cabang Tidak Boleh Kosong
                                </div>
                            </div>
                        </div>
                        <div class="form-group row d-flex align-items-center mb-5">
                            <label class="col-lg-4 form-control-label d-flex justify-content-lg-end">Alamat *</label>
                            <div class="col-lg-5">
                                <textarea class="form-control" name = "kios_alamat" placeholder="Alamat" required><?= $row['kios_alamat']?></textarea>
                                <div class="invalid-feedback">
                                    Alamat tidak boleh kosong
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