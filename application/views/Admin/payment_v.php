<!-- Begin Page Content -->
<div class="container-fluid">

    <!-- Page Heading -->
    <h1 class="h3 mb-2 text-gray-800">Pembayaran & Ongkir</h1>
    <a class="btn btn-primary mb-3 text-white" href="<?= base_url('cp_admin/addBank') ?>"><i class="fas fa-fw fa-plus"></i> Bank</a>

    <div class="row">
        <div class="col-lg-3">
            <?= $this->session->flashdata('message'); ?>
        </div>
    </div>

    <!-- DataTales Example -->
    <div class="row">
        <div class="col-md-9">
            <div class="card shadow mb-4">
                <div class="card-header py-3">
                    <h6 class="m-0 font-weight-bold text-primary">Bank</h6>
                </div>
                <div class="card-body">
                    <div class="table-responsive">
                        <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                            <thead>
                                <tr>
                                    <th>Nomor</th>
                                    <th>Bank Name</th>
                                    <th>Rekening</th>
                                    <th>Nama Rekening</th>
                                    <th>Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php $no = 1; ?>
                                <?php foreach ($payment as $p) : ?>
                                    <tr>
                                        <td><?= $no ?></td>
                                        <td><?= $p['bank'] ?></td>
                                        <td><?= $p['no_bank'] ?></td>
                                        <td><?= $p['nama_bank'] ?></td>
                                        <td>
                                            <a href="<?= base_url('cp_admin/deletePayment/' . $p['id']) ?>" class="btn btn-sm btn-danger"><i class=" fas fa-trash-alt"></i></a>
                                            <a href="<?= base_url('cp_admin/editBank/' . $p['id']) ?>" class="btn btn-sm btn-success"><i class=" fas fa-edit"></i></a>
                                        </td>
                                    </tr>
                                    <?php $no++; ?>
                                <?php endforeach; ?>
                            </tbody>
                            <tfoot>
                                <tr>
                                    <th>Bank Nomor</th>
                                    <th>Name</th>
                                    <th>Rekening</th>
                                    <th>Nama Rekening</th>
                                    <th>Action</th>
                                </tr>
                            </tfoot>
                        </table>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-md-3">
            <div class="card shadow mb-4">
                <div class="card-header py-3">
                    <h6 class="m-0 font-weight-bold text-primary">Jasa Pengiriman</h6>
                </div>
                <div class="card-body">
                    <div class="table-responsive">
                        <table class="table table-bordered" width="100%" cellspacing="0">
                            <thead>
                                <tr>
                                    <th>Slug</th>
                                    <th>Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php foreach ($jasa as $j) : ?>
                                    <tr>
                                        <td><?= $j['nama'] ?></td>
                                        <td>
                                            <a data-toggle="modal" data-target="#editJasa<?= $j['id'] ?>" class="btn btn-sm btn-success text-white"><i class=" fas fa-edit"></i></a>
                                        </td>
                                    </tr>
                                <?php endforeach; ?>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>

</div>
<!-- /.container-fluid -->

</div>
<!-- End of Main Content -->


<!-- Edit jasa -->
<?php foreach ($jasa as $j) : ?>
    <div class="modal fade" id="editJasa<?= $j['id'] ?>" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Add Jasa Pengiriman</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <?= form_open_multipart('cp_admin/editJasa') ?>
                <div class="modal-body">
                    <div class="form-group">
                        <input type="number" name="id" id="id" hidden value="<?= $j['id'] ?>">
                        <label for="nama">Nama Jasa</label>
                        <input type="text" class="form-control" id="nama" name="nama" value="<?= $j['nama'] ?>" autofocus>
                    </div>
                    <div class="form-group">
                        <label for="nama">Harga</label>
                        <input type="text" class="form-control" id="harga" name="harga" value="<?= $j['harga'] ?>">
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                        <button type="submit" class="btn btn-primary">Save</button>
                    </div>
                    <?= form_close() ?>
                </div>
            </div>
        </div>
    <?php endforeach; ?>

    <script src="<?= base_url('assets/') ?>js/demo/datatables-demo.js"></script>