<!-- Begin Page Content -->
<div class="container-fluid">

    <!-- Page Heading -->
    <div class="d-sm-flex align-items-center justify-content-between mb-4">
        <h1 class="h3 mb-0 text-gray-800">Dashboard</h1>
        <?= $this->session->flashdata('message'); ?>
    </div>

    <!-- Content Row -->
    <div class="row">

        <!-- menghitung jumlah gross_amount -->
        <?php $total=0;?>
        <?php foreach ($gross_amount as $g) : ?>
            <?php if($g['status_code'] == "200") {?>
            <?php
            $total+=$g['gross_amount'];
            } ?>
        <?php endforeach; ?>
        <!-- Earnings (Monthly) Card Example -->
        
        <div class="col-xl-3 col-md-6 mb-4">
            <div class="card border-left-success shadow h-100 py-2">
                <div class="card-body">
                    <div class="row no-gutters align-items-center">
                        <div class="col mr-2">
                            <div class="text-xs font-weight-bold text-success text-uppercase mb-1">Pesanan Diterima</div>
                            <div class="h5 mb-0 font-weight-bold text-gray-800">Rp <?php echo number_format($total, 0, ',', '.'); ?></div>
                        </div>
                        <div class="col-auto">
                            <i class="fas fa-dollar-sign fa-2x text-gray-300"></i>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Earnings (Monthly) Card Example -->
        <div class="col-xl-3 col-md-6 mb-4">
            <div class="card border-left-info shadow h-100 py-2">
                <div class="card-body">
                    <div class="row no-gutters align-items-center">
                        <div class="col mr-2">
                            <div class="text-xs font-weight-bold text-info text-uppercase mb-1">Total Produk</div>
                            <div class="row no-gutters align-items-center">
                                <div class="col-auto">
                                    <div class="h5 mb-0 mr-3 font-weight-bold text-gray-800"><?= $produk ?></div>
                                </div>
                            </div>
                        </div>
                        <div class="col-auto">
                            <i class="fas fa-clipboard-list fa-2x text-gray-300"></i>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </div>

    <!-- DataTales Example -->
    <!-- <div class="card shadow mb-4">
        <div class="card-header py-3">
            <h6 class="m-0 font-weight-bold text-primary">Data Stok Barang</h6>
        </div>
        <div class="card-body">
            <div class="table-responsive">
                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                    <thead>
                        <tr>
                            <th>Kode Pesanan</th>
                            <th>Qty</th>
                            <th>Nama Item</th>
                            <th>Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php foreach ($pesanan_list as $p) : ?>
                            <tr>
                                <td><?= $p['kode_pesan'] ?></td>
                                <td><?= $p['qty'] ?></td>
                                <td><?= $p['item_pesanan'] ?></td>
                                <td>
                                    <a href="<?= base_url('cp_admin/detail_pesanan/') ?><?= $p['id'] ?>" class="btn btn-sm btn-primary"><i class="fa fa-eye" aria-hidden="true"></i></a>
                                    <?php if ($p['is_acc'] == 1) { ?>
                                        <a href="<?= base_url('cp_admin/change_pesanan/' . $p['id']) ?>" class="btn btn-sm btn-success" onclick="return confirm('do you want change this order?')"><i class="fa fa-check" aria-hidden="true"></i></a>
                                    <?php } else { ?>
                                        <a href="<?= base_url('cp_admin/acc_pesanan/' . $p['id']) ?>" class="btn btn-sm btn-secondary" onclick="return confirm('do you want ACC this order?')"><i class="fa fa-times" aria-hidden="true"></i></a>
                                    <?php } ?>
                                    <a href="<?= base_url('cp_admin/delete_pesanan/') ?><?= $p['id'] ?>" class="btn btn-sm btn-danger" onclick="return confirm('do you want delete this order?')"><i class="fa fa-trash" aria-hidden="true"></i></a>
                                </td>
                            </tr>
                        <?php endforeach; ?>
                    </tbody>
                    <tfoot>
                        <tr>
                            <th>Kode Pesanan</th>
                            <th>Qty</th>
                            <th>Nama Item</th>
                            <th>Action</th>
                        </tr>
                    </tfoot>
                </table>
            </div>
        </div>
    </div> -->

    <!-- orderan-->
    <div class="card shadow mb-4">
        <div class="card-header py-3">
            <h6 class="m-0 font-weight-bold text-primary">Orderan</h6>
        </div>
        <div class="card-body">
            <div class="table-responsive">
                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                    <thead>
                        <tr>
                            <th>order_id</th>
                            <th>Nama</th>
                            <th>Email</th>
                            <th>No. HP</th>
                            <th>Alamat</th>
                            <th>gross_amount</th>
                            <th>payment_type</th>
                            <th>transaction_time</th>
                            <th>status_code</th>
                            <th>Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php foreach ($history_list as $o) : ?>
                            <tr>
                                <td><?php echo $o['order_id']; ?></td>
                                <td><?php echo $o['nama']; ?></td>
                                <td><?php echo $o['email']; ?></td>
                                <td><?php echo $o['no']; ?></td>
                                <td><?php echo $o['alamat']; ?></td>
                                <td><?php echo number_format($o['gross_amount'], 0, ',', '.'); ?></td>
                                <td><?php echo $o['payment_type']; ?></td>
                                <td><?php echo date("d F Y, H:i:s", strtotime($o['transaction_time'])); ?></td>
                                <td>
                                    <?php if($o['status_code'] == "201") {
                                    ?>
                                    <span class="badge bg-warning">Pending</span>
                                    <?php
                                    }elseif($o['status_code'] == "200") {
                                    ?>
                                    <span class="badge bg-success">success</span>
                                    <?php
                                    }elseif($o['status_code'] == "202") {
                                    ?>
                                    <span class="badge bg-danger">expired</span>
                                    <?php
                                    }
                                    ?>
                                </td>
                                <td><a href="<?= base_url('cp_admin/deleteHistory/' . $o['order_id']) ?>" class="btn btn-sm btn-danger"><i class=" fas fa-trash-alt"></i></a></td>
                            
                            </tr>
                        <?php endforeach; ?>
                        <?= $this->pagination->create_links(); ?>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>
<!-- /.container-fluid -->

<script src="<?= base_url('assets/') ?>js/demo/datatables-demo.js"></script>
<!-- Page level plugins -->
<script src="<?= base_url('assets/') ?>vendor/chart.js/Chart.min.js"></script>

<!-- Page level custom scripts -->
<script src="<?= base_url('assets/') ?>js/demo/chart-area-demo.js"></script>
<script src="<?= base_url('assets/') ?>js/demo/chart-pie-demo.js"></script>