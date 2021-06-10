<!-- Begin Page Content -->
<div class="container-fluid">

    <!-- Page Heading -->
    <h1 class="h3 mb-2 text-gray-800">Blog</h1>
    <a class="btn btn-primary mb-3 text-white" href="<?= base_url('cp_admin/tambahBlog') ?>"><i class="fas fa-fw fa-plus"></i>Tambah Blog</a>

    <div class="row">
        <div class="col-lg-3">
            <?= $this->session->flashdata('message'); ?>
        </div>
    </div>

    <!-- DataTales Example -->
    <div class="card shadow mb-4">
        <div class="card-header py-3">
            <h6 class="m-0 font-weight-bold text-primary">Data Stok Barang</h6>
        </div>
        <div class="card-body">
            <div class="table-responsive">
                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                    <thead>
                        <tr>
                            <th>Image</th>
                            <th>Judul</th>
                            <th>Pembuatan</th>
                            <th>Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php foreach ($blog as $p) : ?>
                            <tr>
                                <td>
                                    <div class="d-flex justify-content-center align-items-center"><img src="<?= base_url('assets/images/blog/') ?><?= $p['image'] ?>" alt="jual sepeda tangerang" width="120px" height="120px" class="img-thumbnail"></div>
                                </td>
                                <td><?= $p['judul'] ?></td>
                                <td><?= $p['create_at'] ?></td>
                                <td>
                                    <a href="<?= base_url('cp_admin/editBlog/') ?><?= $p['slug'] ?>" class="btn btn-sm btn-success"><i class=" fas fa-edit"></i></a>
                                    <a href="<?= base_url('cp_admin/deleteBlog/' . $p['id']) ?>" class="btn btn-sm btn-danger"><i class=" fas fa-trash-alt"></i></a>
                                </td>
                            </tr>
                        <?php endforeach; ?>
                    </tbody>
                    <tfoot>
                        <tr>
                            <th>Image</th>
                            <th>Judul</th>
                            <th>Pembuatan</th>
                            <th>Action</th>
                        </tr>
                    </tfoot>
                </table>
            </div>
        </div>
    </div>

</div>
<!-- /.container-fluid -->

</div>
<!-- End of Main Content -->

<script src="<?= base_url('assets/') ?>js/demo/datatables-demo.js"></script>