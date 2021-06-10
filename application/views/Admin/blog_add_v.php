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
                    <h6 class="m-0 font-weight-bold text-primary">Add Blog</h6>
                </div>
                <div class="card-body">
                    <div class="">
                        <?= form_open_multipart('cp_admin/addBlog') ?>
                        <div class="form-group">
                            <label for="judul">Judul<span class="text-danger">*</span></label>
                            <input type="text" class="form-control" id="judul" name="judul" required>
                        </div>
                        <div class="form-group">
                            <label for="category">Category<span class="text-danger">*</span></label>
                            <input type="text" class="form-control" id="category" name="category" required>
                        </div>
                        <div class="form-group">
                            <label for="isi">Isi<span class="text-danger">*</span></label>
                            <textarea class="form-control" id="isi" name="isi" rows="3"></textarea>
                        </div>
                        <div class="form-group">
                            <label for="image">Image<span class="text-danger">*</span></label>
                            <input type="file" id="image" class="form-control-file" name="image" id="exampleFormControlFile1">
                        </div>
                        <div class="modal-footer">
                            <a href="<?= base_url('cp_admin/blog') ?>" class="btn btn-secondary">Close</a>
                            <button type="submit" class="btn btn-primary">Save changes</button>
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