<!-- Begin Page Content -->
<div class="container-fluid">

    <!-- Page Heading -->
    <h1 class="h3 mb-2 text-gray-800">Category & Sub Category</h1>
    <a class="btn btn-primary mb-3 text-white" data-toggle="modal" data-target="#addcategory"><i class="fas fa-fw fa-plus"></i>Tambah Category</a>

    <div class="conatier mb-3">
        <?= form_open_multipart('cp_admin/addSubCategory') ?>
        <div class="row">
            <div class="col-md-4 mt-2">
                <input type="text" class="form-control" id="nama" placeholder="Name Sub Category" name="nama" autofocus required>
            </div>
            <div class="col-md-4 mt-2">
                <select class="form-control" id="category" name="category">
                    <option>Select Category</option>
                    <?php foreach ($category as $c) : ?>
                        <option value="<?= $c['nama'] ?>"><?= $c['nama'] ?></option>
                    <?php endforeach; ?>
                </select>
            </div>
            <div class="col-md-4 mt-2">
                <button type="submit" class="btn btn-secondary">Add Sub Category</button>
            </div>
        </div>
        <?= form_close() ?>
    </div>

    <div class="row">
        <div class="col-lg-3">
            <?= $this->session->flashdata('message'); ?>
        </div>
    </div>

    <!-- DataTales Example -->
    <div class="row">
        <div class="col-md-7">
            <div class="card shadow mb-4">
                <div class="card-header py-3">
                    <h6 class="m-0 font-weight-bold text-primary">Category</h6>
                </div>
                <div class="card-body">
                    <div class="table-responsive">
                        <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                            <thead>
                                <tr>
                                    <th>Nomor</th>
                                    <th>Category</th>
                                    <th>Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php $no = 1; ?>
                                <?php foreach ($category as $p) : ?>
                                    <tr>
                                        <td><?= $no ?></td>
                                        <td><?= $p['nama'] ?></td>
                                        <td>
                                            <a href="<?= base_url('cp_admin/deleteCategory/' . $p['id']) ?>" class="btn btn-sm btn-danger"><i class=" fas fa-trash-alt"></i></a>
                                        </td>
                                    </tr>
                                    <?php $no++; ?>
                                <?php endforeach; ?>
                            </tbody>
                            <tfoot>
                                <tr>
                                    <th>Nomor</th>
                                    <th>Name</th>
                                    <th>Action</th>
                                </tr>
                            </tfoot>
                        </table>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-md-5">
            <div class="card shadow mb-4">
                <div class="card-header py-3">
                    <h6 class="m-0 font-weight-bold text-primary">Sub Category</h6>
                </div>
                <div class="card-body">
                    <div class="table-responsive">
                        <table class="table table-bordered" width="100%" cellspacing="0">
                            <thead>
                                <tr>
                                    <th>Nomor</th>
                                    <th>Sub Category</th>
                                    <th>Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php $no = 1; ?>
                                <?php foreach ($subcategory as $p) : ?>
                                    <tr>
                                        <td><?= $no ?></td>
                                        <td><?= $p['nama'] ?></td>
                                        <td>
                                            <a href="<?= base_url('cp_admin/deleteSubCategory/' . $p['id']) ?>" class="btn btn-sm btn-danger"><i class=" fas fa-trash-alt"></i></a>
                                        </td>
                                    </tr>
                                    <?php $no++; ?>
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

<!-- Modal -->
<div class="modal fade" id="addcategory" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Add Category</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <?= form_open_multipart('cp_admin/addCategory') ?>
            <div class="modal-body">
                <div class="form-group">
                    <label for="nama">Name</label>
                    <input type="text" class="form-control" id="nama" name="nama" autofocus>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                    <button type="submit" class="btn btn-primary">Save</button>
                </div>
                <?= form_close() ?>
            </div>
        </div>
    </div>

    <script src="<?= base_url('assets/') ?>js/demo/datatables-demo.js"></script>