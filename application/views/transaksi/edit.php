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
                    <h4>Form Edit Transaksi</h4>
                </div>
                <div class="widget-body">
                    <form class="needs-validation" action="<?= base_url("edit_transaksi/" . $row['transaksi_id']) ?>"
                          method="post" novalidate>
                        <div class="form-group row d-flex align-items-center mb-5">
                            <label class="col-lg-4 form-control-label d-flex justify-content-lg-end">Nama</label>
                            <div class="col-lg-5">
                                <input type="text" class="form-control" value="<?= $row['transaksi_nama'] ?>"
                                       name="transaksi_nama" placeholder="Masukkan Nama Kamu" required>
                                <div class="invalid-feedback">
                                    Nama Tidak Boleh Kosong
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