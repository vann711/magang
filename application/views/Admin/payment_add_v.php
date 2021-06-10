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
                    <h6 class="m-0 font-weight-bold text-primary">Add Bank</h6>
                </div>
                <div class="card-body">
                    <div class="">
                        <?= form_open_multipart('cp_admin/addPayment') ?>
                        <div class="form-group">
                            <label for="nama">Nama Bank <span class="text-danger">*</span></label>
                            <input type="text" class="form-control" id="nama" name="nama" required>
                        </div>
                        <div class="form-group">
                            <label for="no_rek">No Rek <span class="text-danger">*</span></label>
                            <input type="number" class="form-control" id="no_rek" name="no_rek" required>
                        </div>
                        <div class="form-group">
                            <label for="namap">Atas Nama <span class="text-danger">*</span></label>
                            <input type="text" class="form-control" id="namap" name="namap" required>
                        </div>
                        <div class="modal-footer">
                            <a href="<?= base_url('cp_admin/payment') ?>" class="btn btn-secondary">Close</a>
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