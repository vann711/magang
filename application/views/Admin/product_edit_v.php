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
                    <h6 class="m-0 font-weight-bold text-primary"><?= $produk['nama'] ?></h6>
                </div>
                <div class="card-body">
                    <div class="row">
                        <div class="col-lg-4">
                            <img src="<?= base_url('assets/images/produk/') ?><?= $produk['gambar'] ?>" alt="jual sepeda tangerang" width="100%" class="img-thumbnail">
                        </div>
                        <div class="col-lg-8">
                            <?= form_open_multipart('cp_admin/editProduk') ?>
                            <input type="text" name="id" value="<?= $produk['id'] ?>" hidden>
                            <div class="form-group">
                                <label for="nama">Nama <span class="text-danger">*</span></label>
                                <input type="text" class="form-control" id="nama" name="nama" value="<?= $produk['nama'] ?>">
                            </div>
                            <div class="form-group">
                                <label for="merk">Merk</label>
                                <input type="text" class="form-control" id="merk" name="merk" value="<?= $produk['merk'] ?>" required>
                            </div>
                            <div class="form-group">
                                <label for="warna">Warna</label>
                                <input type="text" class="form-control" id="warna" name="warna" value="<?= $produk['warna'] ?>" required>
                                <small class="text-danger">Gunakan satu bahasa, contoh Merah, biru. jangan campur 2 bahasa</small>
                            </div>
                            <div class="form-group">
                                <label for="deskripsi">Deskripsi Produk<span class="text-danger">*</span></label>
                                <textarea class="form-control" id="deskripsi" name="deskripsi" rows="3"> <?= $produk['deskripsi'] ?></textarea>
                            </div>
                            <div class="form-group">
                                <label for="category">Category <span class="text-danger">*</span></label>
                                <select class="form-control" id="category" name="category">
                                    <option value="<?= $produk['category'] ?>">-- Now <?= $produk['category'] ?> --</option>
                                    <?php foreach ($category as $c) : ?>
                                        <option value="<?= $c['nama'] ?>"><?= $c['nama'] ?></option>
                                    <?php endforeach; ?>
                                </select>

                            </div>
                            <div class="form-group">
                                <?php if ($produk['subcategory'] == null) { ?>
                                    <input type="text" value="<?= $produk['subcategory'] ?>" hidden>

                                <?php } else { ?>
                                    <label for="sub">Sub Category </label>
                                    <select class="form-control" id="sub" name="sub">
                                        <option value="<?= $produk['subcategory'] ?>"> <?= $produk['subcategory'] ?> </option>
                                        <?php foreach ($subcategory as $s) : ?>
                                            <option value="<?= $s['nama'] ?>"><?= $s['nama'] ?></option>
                                        <?php endforeach; ?>
                                    </select>
                                <?php } ?>
                            </div>
                            <?php if ($produk['list_popular'] == 1) { ?>
                                <div class="form-group form-check">
                                    <input type="checkbox" class="form-check-input" checked name="popular" id="popular" value="1">
                                    <label class="form-check-label" for="popular">Popular</label>
                                </div>
                            <?php } else { ?>
                                <div class="form-group form-check">
                                    <input type="checkbox" class="form-check-input" name="popular" id="popular" value="1">
                                    <label class="form-check-label" for="popular">Popular</label>
                                </div>
                            <?php } ?>
                            <?php if ($produk['diskon'] == 1) { ?>
                                <div class="form-group form-check">
                                    <input type="checkbox" class="form-check-input" name="diskon" id="diskon" checked value="1">
                                    <label class="form-check-label" for="popular">Diskon</label>
                                </div>
                                <div class="form-group" id="hargaD">
                                    <label for="harga">Harga Setelah Diskon</label>
                                    <input type="number" class="form-control" id="harga_d" name="harga_d" value="<?= $produk['harga_diskon'] ?>">
                                </div>
                            <?php } else { ?>
                                <div class="form-group form-check">
                                    <input type="checkbox" class="form-check-input" name="diskon" id="diskon" onclick="myFunction()" value="1">
                                    <label class="form-check-label" for="popular">Diskon</label>
                                </div>
                                <div class="form-group" style="display: none;" id="hargaD">
                                    <label for="harga">Harga Setelah Diskon</label>
                                    <input type="number" class="form-control" id="harga_d" name="harga_d">
                                </div>
                            <?php } ?>
                            <div class="form-group">
                                <label for="stok">Stok <span class="text-danger">*</span></label>
                                <input type="number" class="form-control" id="stok" name="stok" value="<?= $produk['stok'] ?>">
                            </div>
                            <div class="form-group">
                                <label for="berat">Berat (gram) <span class="text-danger">*</span></label>
                                <input type="number" class="form-control" id="berat" name="berat" value="<?= $produk['berat'] ?>">
                            </div>
                            <div class="form-group">
                                <label for="harga">Harga <span class="text-danger">*</span></label>
                                <input type="number" class="form-control" id="harga" name="harga" value="<?= $produk['harga'] ?>">
                            </div>
                            <div class="modal-footer">
                                <a type="button" class="btn btn-secondary" href="<?= base_url('cp_admin/product') ?>">Close</a>
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
    CKEDITOR.replace('deskripsi');

    function myFunction() {
        // Get the checkbox
        var checkBox = document.getElementById("diskon");
        // Get the output text
        var text = document.getElementById("hargaD");

        // If the checkbox is checked, display the output text
        if (checkBox.checked == true) {
            text.style.display = "block";
        } else {
            text.style.display = "none";
        }
    }
</script>