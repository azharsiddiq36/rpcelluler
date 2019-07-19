<div class="container-fluid">
    <!-- Begin Page Header-->
    <div class="row">
        <div class="page-header">
            <div class="d-flex align-items-center">
                <h2 class="page-header-title"><?= $title?></h2>
                <div>
                    <div class="page-header-tools">
                        <a class="btn btn-gradient-01" href="<?= base_url("tambah_pengguna")?>">Tambah Pengguna</a>
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
                    <h4>Tabel Pengguna</h4>
                </div>
                <div class="widget-body">
                    <div class="table-responsive">
                        <table id="sorting-table" class="table mb-0">
                            <thead>
                            <tr>
                                <th>No</th>
                                <th>Email</th>
                                <th>Nama</th>
                                <th>Hak Akses</th>
                                <th>Nomor HP</th>
                                <th><span style="width:100px;">Status</span></th>
                                <th>Aksi</th>
                            </tr>
                            </thead>
                            <tbody>

                            <?php
                            $no = 1;
                            foreach ($data as $key){?>
                            <tr>
                                <td><span class="text-primary"><?= $no++?></span></td>
                                <td><?= $key->pengguna_nama?></td>
                                <td><?= $key->pengguna_email?></td>
                                <td><?= $key->pengguna_hak_akses?></td>
                                <td><?= $key->pengguna_nomor?></td>
                                <?php
                                if($key->pengguna_status == "aktif"){
                                ?>
                                    <td><span style="width:100px;"><span class="badge-text badge-text-small info"><?= $key->pengguna_status?></span></span></td>
                                <?php
                                }
                                else{
                                ?>
                                    <td><span style="width:100px;"><span class="badge-text badge-text-small danger"><?= $key->pengguna_status?></span></span></td>
                                <?php
                                }
                                ?>

                                <td class="td-actions">
                                    <a href="<?= base_url("edit_pengguna/".$key->pengguna_id)?>"><i class="la la-edit edit"></i></a>
                                    <a href="<?= base_url("detail_pengguna/".$key->pengguna_id)?>"><i class="la la-eye edit"></i></a>
                                    <a href="<?= base_url("delete_pengguna/".$key->pengguna_id)?>"><i class="la la-close delete"></i></a>
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