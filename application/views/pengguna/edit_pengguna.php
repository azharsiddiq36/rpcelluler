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
                    <h4>Form Tambah Pengguna</h4>
                </div>
                <div class="widget-body">
                    <form class="needs-validation" action="<?= base_url("edit_pengguna/" . $row['pengguna_id']) ?>"
                          method="post" novalidate>
                        <div class="form-group row d-flex align-items-center mb-5">
                            <label class="col-lg-4 form-control-label d-flex justify-content-lg-end">Nama</label>
                            <div class="col-lg-5">
                                <input type="text" class="form-control" value="<?= $row['pengguna_nama'] ?>"
                                       name="pengguna_nama" placeholder="Masukkan Nama Kamu" required>
                                <div class="invalid-feedback">
                                    Nama Tidak Boleh Kosong
                                </div>
                            </div>
                        </div>
                        <div class="form-group row d-flex align-items-center mb-5">
                            <label class="col-lg-4 form-control-label d-flex justify-content-lg-end">Alamat
                                Email</label>
                            <div class="col-lg-5">
                                <div class="input-group">
                                    <input type="text" class="form-control" name="pengguna_email"
                                           value="<?= $row['pengguna_email'] ?>" placeholder="Masukkan Email Kamu"
                                           required>
                                    <div class="invalid-feedback">
                                        Email Tidak Boleh Kosong
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="form-group row mb-5">
                            <label class="col-lg-4 form-control-label d-flex justify-content-lg-end">Jenis Kelamin
                                *</label>
                            <div class="col-lg-1">
                                <div class="custom-control custom-radio styled-radio mb-3">
                                    <?php
                                    if ($row['pengguna_jk'] == "pria") {
                                        ?>
                                        <input class="custom-control-input" type="radio" name="jk" value="pria"
                                               id="opt-01" required checked>
                                    <?php } else {
                                        ?>
                                        <input class="custom-control-input" type="radio" name="jk" value="pria"
                                               id="opt-01" required>
                                        <?php
                                    }
                                    ?>
                                    <label class="custom-control-descfeedback" for="opt-01">Pria</label>
                                    <div class="invalid-feedback">
                                        Klik disini
                                    </div>

                                </div>
                            </div>
                            <div class="col-lg-1">
                                <div class="custom-control custom-radio styled-radio mb-3">
                                    <?php
                                    if ($row['pengguna_jk'] == "wanita") {
                                        ?>
                                        <input class="custom-control-input" type="radio" name="jk" value="wanita"
                                               id="opt-02" required checked>
                                    <?php } else {
                                        ?>
                                        <input class="custom-control-input" type="radio" name="jk" value="wanita"
                                               id="opt-02" required>
                                        <?php
                                    }
                                    ?>
                                    <label class="custom-control-descfeedback" for="opt-02">Wanita</label>
                                    <div class="invalid-feedback">
                                        Atau Klik disini
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="form-group row d-flex align-items-center mb-5">
                            <label class="col-lg-4 form-control-label d-flex justify-content-lg-end">Nomor
                                Handphone</label>
                            <div class="col-lg-5">
                                <div class="input-group">
                                                        <span class="input-group-addon addon-primary">
                                                            <i class="la la-phone"></i>
                                                        </span>
                                    <input type="text" class="form-control" value="<?= $row['pengguna_nomor'] ?>"
                                           placeholder="Nomor Handphone" name="pengguna_nomor">
                                </div>
                            </div>
                        </div>
                        <div class="form-group row d-flex align-items-center mb-5">
                            <label class="col-lg-4 form-control-label d-flex justify-content-lg-end">Hak Akses *</label>
                            <div class="col-lg-5">
                                <div class="select">
                                    <select name="pengguna_hak_akses" class="custom-select form-control" required>
                                        <option value="">Pilih Hak Akses</option>
                                        <?php
                                        $i = 0;
                                        while ($i < sizeof($akses)) {
                                            if ($row['pengguna_hak_akses'] == $akses[$i]) {
                                                ?>
                                                <option value="<?= $akses[$i] ?>"
                                                        selected><?= ucfirst($akses[$i]) ?></option>
                                                <?php
                                            } else {
                                                ?>
                                                <option value="<?= $akses[$i] ?>"><?= ucfirst($akses[$i]) ?></option>
                                                <?php
                                            }
                                            ?>
                                            <?php
                                            $i++;
                                        }
                                        ?>
                                    </select>
                                    <div class="invalid-feedback">
                                        Please select an option
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="form-group row d-flex align-items-center mb-5">
                            <label class="col-lg-4 form-control-label d-flex justify-content-lg-end">Alamat *</label>
                            <div class="col-lg-5">
                                <textarea class="form-control" name="pengguna_alamat" placeholder="Alamat"
                                          required><?= $row['pengguna_alamat']?></textarea>
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