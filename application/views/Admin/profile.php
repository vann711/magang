<!-- Begin Page Content -->
<div class="container-fluid">

    <!-- Page Heading -->
    <div class="row">
        <div class="col-lg-3">
            <h3>Edit Profile</h3>
            <?= $this->session->flashdata('message'); ?>
        </div>
    </div>

    <!-- DataTales Example -->
    <div class="row">
        <div class="col-lg-9">
            <div class="card shadow mb-4">
                <div class="card-header py-3">
                    <h6 class="m-0 font-weight-bold text-primary">Change Password</h6>
                </div>
                <div class="card-body">
                    <div class="">
                        <?= form_open_multipart('cp_admin/changePass') ?>
                        <div class="form-group">
                            <label for="email">Email<span class="text-danger">*</span></label>
                            <input type="text" class="form-control" id="email" name="email" value="<?= $this->session->userdata('email') ?>" disabled required>
                        </div>
                        <div class="form-group">
                            <label for="password1">Password <span class="text-danger">*</span></label>
                            <input type="password" class="form-control" id="password1" name="password1" required>
                            <?= form_error('password1', '<small class="text-danger pl-3">', '</small>') ?>
                        </div>
                        <div class="form-group">
                            <label for="password2">Confirm Password <span class="text-danger">*</span></label>
                            <input type="password" class="form-control" id="password2" name="password2" required>
                            <?= form_error('password1', '<small class="text-danger pl-3">', '</small>') ?>
                        </div>
                        <div class="modal-footer">
                            <a href="<?= base_url('cp_admin/dashboard') ?>" class="btn btn-secondary">Back</a>
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