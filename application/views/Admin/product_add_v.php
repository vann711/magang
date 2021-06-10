<script src="<?= base_url('assets/ckeditor/ckeditor.js'); ?>"></script>
<!-- Begin Page Content -->
<div class="container-fluid">

    <div class="row">
        <div class="col-lg-9">
            <div class="card shadow mb-4">
                <div class="card-header py-3">
                    <h6 class="m-0 font-weight-bold text-primary">Add Produk</h6>
                </div>
                <div class="card-body">
                    <div class="row">
                        <div class="col-lg-12">
                            <?= form_open_multipart('cp_admin/addProduk') ?>
                            <div class="modal-body">
                                <div class="form-group">
                                    <label for="name">Name</label>
                                    <input type="text" class="form-control" id="name" name="name" autofocus required>
                                </div>
                                <div class="form-group">
                                    <label for="merk">Merk</label>
                                    <input type="text" class="form-control" id="merk" name="merk" required>
                                </div>
                                <div class="form-group">
                                    <label for="warna">Warna</label>
                                    <input type="text" class="form-control" id="warna" name="warna" required>
                                    <small class="text-danger">Gunakan satu bahasa, contoh Merah, biru. jangan campur 2 bahasa</small>
                                </div>
                                <div class="form-group">
                                    <label for="categoty">Category</label>
                                    <select class="form-control" id="category" name="category">
                                        <option>Select Category</option>
                                        <?php foreach ($category as $c) : ?>
                                            <option value="<?= $c['nama'] ?>"><?= $c['nama'] ?></option>
                                        <?php endforeach; ?>
                                    </select>
                                </div>
                                <div class="form-group">
                                    <label for="sub">Sub Cateogry</label>
                                    <select class="form-control" id="sub" name="sub">
                                        <option value="">Select Sub</option>
                                        <?php foreach ($subcategory as $s) : ?>
                                            <option value="<?= $s['nama'] ?>"><?= $s['nama'] ?> | <?= $s['category'] ?></option>
                                        <?php endforeach; ?>
                                    </select>
                                </div>
                                <div class="form-group">
                                    <label for="stok">Stok</label>
                                    <input type="number" class="form-control" id="stok" name="stok" required>
                                </div>
                                <div class="form-group">
                                    <label for="berat">Berat (gram)</label>
                                    <input type="number" class="form-control" id="berat" name="berat" required>
                                </div>
                                <div class="form-group form-check">
                                    <input type="checkbox" class="form-check-input" name="popular" id="popular" value="1">
                                    <label class="form-check-label" for="popular">Popular</label>
                                </div>
                                <div class="form-group form-check">
                                    <input type="checkbox" class="form-check-input" name="diskon" id="diskon" value="1" onclick="myFunction()">
                                    <label class="form-check-label" for="popular">Diskon</label>
                                </div>
                                <div class="form-group" style="display: none;" id="hargaD">
                                    <label for="harga">Harga Setelah Diskon</label>
                                    <input type="number" class="form-control" id="harga_d" name="harga_d">
                                </div>
                                <div class="form-group">
                                    <label for="harga">Harga</label>
                                    <input type="number" class="form-control" id="harga" name="harga" required>
                                </div>
                                <div class="form-group">
                                    <label for="image">Image</label>
                                    <input type="file" class="form-control-file" id="image" name="image" required>
                                </div>
                                <div class="form-group">
                                    <label for="deskripsi">Deskripsi Produk<span class="text-danger">*</span></label>
                                    <textarea class="form-control" id="deskripsi" name="deskripsi" rows="3"></textarea>
                                </div>
                                <div class="modal-footer">
                                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                                    <button type="submit" class="btn btn-primary">Save</button>
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