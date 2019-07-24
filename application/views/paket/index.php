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
                        <a class="btn btn-gradient-01" href="<?= base_url("tambah_paket")?>">Tambah Paket</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="row flex-row">
        <div class="col-xl-12 col-md-6">

            <div class="widget widget-09 has-shadow">

                <div class="widget-header bordered no-actions d-flex align-items-center">
                    <h4>Update Stok</h4>
                </div>

                <div class="widget-body">
                    <div class="row">
                        <div class="col-xl-10 col-12 no-padding">
                            <form class="needs-validation" action="<?= base_url("update_stok")?>" method="post" novalidate>
                                <div class="form-group row">
                                    <label class="col-lg-2 form-control-label d-flex justify-content-lg-end">Code Paket *</label>
                                    <div class="col-sm-10">
                                        <div class="row">
                                            <div class="col-lg-2">
                                                <div class="select">
                                                    <select id="code-paket" name="paket_provider_id" class="custom-select form-control" required>
                                                        <option value="0">Code</option>
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
                                            <div class="col-lg-3">
                                                <input id="nama" type="text" readonly required placeholder="Nama" class="form-control">
                                            </div>
                                            <div class="col-lg-3">
                                                <input id="provider" type="text" required readonly="" placeholder="Provider" class="form-control">
                                            </div>
                                            <div class="col-lg-2">
                                                <input required id="stok" name = "stok" type="number" placeholder="Stok" class="form-control">
                                            </div>
                                            <div class="col-lg-2">
                                                <button class="btn btn-gradient-04" name = "submit"type="submit">Update</button>
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


    <div class="row">
        <div class="col-xl-12">
            <!-- Sorting -->
            <div class="widget has-shadow">
                <div class="widget-header bordered no-actions d-flex align-items-center">
                    <h4>Tabel Paket</h4>
                </div>
                <div class="widget-body">
                    <div class="table-responsive">
                        <table id="sorting-table" class="table mb-0">
                            <thead>
                            <tr>
                                <th>No</th>
                                <th>Code Paket</th>
                                <th>Nama Paket</th>
                                <th>Provider</th>
                                <th>Harga Satuan</th>
                                <th>Stok</th>
                                <th>Aksi</th>
                            </tr>
                            </thead>
                            <tbody>
                            <?php
                            $no = 1;
                            foreach ($data as $key){?>
                            <tr>
                                <td><span class="text-primary"><?= $no++?></span></td>
                                <td><?= substr($key->provider_nama,0,2)."-".$key->paket_id?></td>
                                <td><?= $key->paket_nama?></td>
                                <td><?= $key->provider_nama?></td>
                                <td>Rp. <?= $key->paket_harga_satuan?></td>
                                <td><?= $key->paket_stok?></td>
                                <td class="td-actions">
                                    <a href="<?= base_url("edit_paket/".$key->paket_id)?>"><i class="la la-edit edit"></i></a>
                                    <a onclick="return confirm('Apakah anda yakin ingin menghapus data ini?')" href="<?= base_url("delete_paket/".$key->paket_id)?>"><i class="la la-close delete"></i></a>
                                </td>
                            </tr>
                            <?php }?>


                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
            <!-- End Sorting -->

        </div>
    </div>
    <!-- Begin Centered Modal -->

    <div id="modal_paket" class="modal fade">
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