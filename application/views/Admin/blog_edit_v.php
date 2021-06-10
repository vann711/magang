<script src="<?= base_url('assets/ckeditor/ckeditor.js'); ?>"></script>
<!-- Begin Page Content -->
<div class="container-fluid">

    <!-- Page Heading -->
    <div class="row">
        <div class="col-lg-3">
            <?= $this->session->flashdata('message'); ?>
        </div>
    </div>

    <!-- DataTales Example -->
    <div class="row">
        <div class="col-lg-9">
            <div class="card shadow mb-4">
                <div class="card-header py-3">
                    <h6 class="m-0 font-weight-bold text-primary"><?= $blog['judul'] ?></h6>
                </div>
                <div class="card-body">
                    <div class="row">
                        <div class="col-lg-4">
                            <img src="<?= base_url('assets/images/blog/') ?><?= $blog['image'] ?>" alt="jual sepeda tangerang" width="100%" class="img-thumbnail">
                        </div>
                        <div class="col-lg-8">
                            <?= form_open_multipart('cp_admin/editingBlog') ?>
                            <input type="text" name="id" value="<?= $blog['id'] ?>" hidden>
                            <div class="form-group">
                                <label for="judul">Judul <span class="text-danger">*</span></label>
                                <input type="text" class="form-control" id="judul" name="judul" value="<?= $blog['judul'] ?>">
                            </div>
                            <div class="form-group">
                                <label for="isi">Isi <span class="text-danger">*</span></label>
                                <textarea class="form-control" id="isi" name="isi" rows="3"><?= $blog['isi'] ?></textarea>
                            </div>
                            <div class="modal-footer">
                                <a type="button" class="btn btn-secondary" href="<?= base_url('cp_admin/blog') ?>">Close</a>
                                <button type="submit" class="btn btn-primary">Save changes</button>
                            </div>
                        </div>
                    </div>
                </div>
                <?= form_close() ?>
            </div>
        </div>
    </div>
</div>
</div>
</div>
</div>
<!-- /.container-fluid -->

</div>
<!-- End of Main Content -->


<script>
    CKEDITOR.replace('isi')
</script>