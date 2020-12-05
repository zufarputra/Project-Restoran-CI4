<?php echo $this->extend('template/admin') ?>

<?php echo $this->section('content') ?>


<?php

if (isset($_GET['page_page'])) {
    $page = $_GET['page_page'];
    $jumlah = 3;
    $no = ($jumlah * $page) - $jumlah + 1;
} else {
    $no = 1;
}

?>
<div class="row">
    <div class="col-12">

        <form action="<?= base_url('/admin/orderdetail/cari') ?>" method="post">
            <div class="form-group col-6 float-left">
                <label for="Kategori">Awal</label>
                <input type="date" name="awal" required class="form-control">
            </div>
            <div class="form-group col-6 float-left">
                <label for="Keterangan">Sampai</label>
                <input type="date" name="sampai" required class="form-control">
            </div>
            <div class="form-group ml-3">
                <input type="submit" name="cari" value="CARI">
            </div>



        </form>
    </div>
</div>
<div class="row">
    <div class="col">
        <h3><?php echo $judul; ?></h3>
    </div>
</div>






<div class="row mt-3">

    <div class="col">

        <table class="table">

            <tr>

                <th>No</th>
                <th>Tanggal</th>
                <th>Menu</th>
                <th>Harga</th>
                <th>Jumlah</th>
                <th>Total</th>


            </tr>
            <?php $no ?>
            <?php foreach ($orderdetail as $value) :
            ?>
                <tr>

                    <td><?php echo $no++ ?></td>
                    <td><?php echo $value['tglorder'] ?></td>
                    <td><?php echo $value['menu'] ?></td>
                    <td><?php echo $value['harga'] ?></td>
                    <td><?php echo $value['jumlah'] ?></td>
                    <td><?php echo $value['jumlah'] * $value['harga'] ?></td>


                </tr>
            <?php endforeach; ?>
        </table>


        <?= $pager->links('page', 'bootstrap') ?>
    </div>
</div>



<?php echo $this->endSection() ?>