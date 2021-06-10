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
                    <h6 class="m-0 font-weight-bold text-primary">No Pesanan : <?= $pesan['kode_pesan'] ?></h6>
                </div>
                <div class="card-body">
                    <div class="row">
                        <div class="col-lg-4">
                            <img src="<?= base_url('assets/images/pesanan/') ?><?= $pesan['gambar'] ?>" alt="jual sepeda tangerang" width="100%" class="img-thumbnail">
                        </div>
                        <div class="col-lg-8">
                            <input type="text" name="id" value="<?= $pesan['id'] ?>" hidden>
                            <div class="form-group">
                                <label for="nama">Nama pemesan <span class="text-danger">*</span></label>
                                <input type="text" class="form-control" id="nama" name="nama" value="<?= $pesan['nama'] ?>" disabled>
                            </div>
                            <div class="form-group">
                                <label for="email">Email pemesan <span class="text-danger">*</span></label>
                                <input type="text" class="form-control" id="email" name="email" value="<?= $pesan['email'] ?>" disabled>
                            </div>
                            <div class="form-group">
                                <label for="no">No pemesan <span class="text-danger">*</span></label>
                                <input type="text" class="form-control" id="no" name="no" value="<?= $pesan['no_hp'] ?>" disabled>
                            </div>
                            <div class="form-group">
                                <label for="namarek">Nama Rekening pemesan <span class="text-danger">*</span></label>
                                <input type="text" class="form-control" id="namarek" name="namarek" value="<?= $pesan['namarek'] ?>" disabled>
                            </div>
                            <div class="form-group">
                                <label for="namaItem">Nama Item <span class="text-danger">*</span></label>
                                <input type="text" class="form-control" id="namaItem" name="namaItem" value="<?= $pesan['item_pesanan'] ?>" disabled>
                            </div>
                            <div class="form-group">
                                <label for="qty">Jumlah Pesanan<span class="text-danger">*</span></label>
                                <input type="text" class="form-control" id="qty" name="qty" value="<?= $pesan['qty'] ?>" disabled>
                            </div>
                            <div class="form-group">
                                <label for="alamat">Alamat Pemesan<span class="text-danger">*</span></label>
                                <textarea type="text" class="form-control" id="alamat" name="alamat" disabled><?= $pesan['alamat'] ?></textarea>
                            </div>
                            <div class="form-group">
                                <label for="hargaT">Harga yang dibayar<span class="text-danger">*</span></label>
                                <input type="text" class="form-control" id="hargaT" name="hargaT" value="<?= number_format($pesan['harga_total'], 0, ',', '.')  ?>" disabled>
                            </div>
                            <div class="modal-footer">
                                <a type="button" class="btn btn-secondary" href="<?= base_url('cp_admin/dashboard') ?>">Close</a>
                                <?php if ($pesan['is_acc'] == 1) { ?>
                                    <a href="<?= base_url('cp_admin/change_pesanan/' . $pesan['id']) ?>" class="btn btn-success" onclick="return confirm('do you want change this order?')"><i class="fa fa-check" aria-hidden="true"> Telah Diterima</i></a>
                                <?php } else { ?>
                                    <a href="<?= base_url('cp_admin/acc_pesanan/' . $pesan['id']) ?>" class="btn btn-secondary" onclick="return confirm('do you want ACC this order?')"><i class="fa fa-times" aria-hidden="true"></i> Belum Diterima</a>
                                <?php } ?>
                            </div>
                        </div>
                    </div>
                </div>
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