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
    <div class="col-4">
        <a class="btn btn-primary" href="<?= base_url('/admin/kategori/create') ?>" role="button">Tambah Data</a>
    </div>

    <div class="col">
        <h3><?php echo $judul; ?></h3>
    </div>

</div>






<div class="row mt-3">

    <div class="col">

        <table class="table">

            <tr>

                <th>No</th>
                <th>Kategori</th>
                <th>Keterangan</th>
                <th>Aksi</th>


            </tr>
            <?php $no ?>
            <?php foreach ($kategori as $key => $value) :
            ?>
                <tr>

                    <td><?php echo $no++ ?></td>
                    <td><?php echo $value['kategori'] ?></td>
                    <td><?php echo $value['keterangan'] ?></td>
                    <td><a href="<?php echo base_url() ?>/admin/kategori/delete/<?php echo $value['idkategori'] ?>"><img src="<?= base_url('icon/can.svg') ?>" alt=""></a>
                        <a href="<?php echo base_url() ?>/admin/kategori/find/<?php echo $value['idkategori'] ?>"><img src="<?= base_url('icon/pen.svg') ?>" alt=""></a></td>

                </tr>
            <?php endforeach; ?>
        </table>


        <?= $pager->links('page', 'bootstrap') ?>
    </div>
</div>



<?php echo $this->endSection() ?>