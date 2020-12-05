<?php echo $this->extend('template/admin') ?>

<?php echo $this->section('content') ?>

<div class="row">
    <div class="col">
        <h3><?= $judul ?></h3>
    </div>
</div>

<?php

if (isset($_GET['page'])) {
    $page = $_GET['page'];
    $jumlah = 3;
    $no = ($jumlah * $page) - $jumlah + 1;
} else {
    $no = 1;
}

?>

<div class="row mt-3">
    <div class="col">

        <table class="table">
            <tr>
                <th>No</th>
                <th>ID Order</th>
                <th>Pelanggan</th>
                <th>Tanggal</th>
                <th>Total</th>
                <th>Bayar</th>
                <th>Kembali</th>
                <th>Status</th>
            </tr>
            <?php foreach ($order as $value) :   ?>
                <tr>

                    <td><?php echo $no++ ?></td>
                    <td><?php echo $value['idorder'] ?></td>
                    <td><?php echo $value['pelanggan'] ?></td>
                    <td><?php echo $value['tglorder'] ?></td>
                    <td><?php echo $value['total'] ?></td>
                    <td><?php echo $value['bayar'] ?></td>
                    <td><?php echo $value['kembali'] ?></td>
                    <?php
                    if ($value['status'] == 1) {
                        $status = "Lunas";
                    } else {
                        $status =  "<a href='" . base_url("admin/order/find") . "/" . $value['idorder'] . "'>Bayar</a>";
                    }

                    ?>
                    <td><?php echo $status ?></td>


                </tr>
            <?php endforeach; ?>
        </table>
        <?= $pager->makeLinks(1, $perPage, $total, 'bootstrap') ?>

    </div>

</div>


<?php echo $this->endSection() ?>