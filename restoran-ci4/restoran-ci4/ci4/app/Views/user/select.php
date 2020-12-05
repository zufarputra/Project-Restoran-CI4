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
        <a class="btn btn-primary" href="<?= base_url('/admin/user/create') ?>" role="button">Tambah Data</a>
    </div>

    <div class="col">
        <h3><?php echo $judul ?></h3>
    </div>

</div>






<div class="row mt-3">

    <div class="col">

        <table class="table">

            <tr>

                <th>No</th>
                <th>User</th>
                <th>Email</th>
                <th>Level</th>
                <th>Status</th>
                <th>Aksi</th>


            </tr>
            <?php $no ?>
            <?php foreach ($user as $key => $value) :
            ?>
                <tr>

                    <td><?php echo $no++ ?></td>
                    <td><?php echo $value['user'] ?></td>
                    <td><?php echo $value['email'] ?></td>
                    <td><?php echo $value['level'] ?></td>
                    <?php if ($value['aktif'] == 1) $aktif = "Aktif";
                    else $aktif = "Banned"; ?>
                    <td><a href="<?php echo base_url() ?>/admin/user/update/<?php echo $value['iduser'] ?>/<?php echo $value['aktif'] ?>"><?= $aktif ?></a>
                    </td>
                    <td><a href="<?php echo base_url() ?>/admin/user/delete/<?php echo $value['iduser'] ?>"><img src="<?= base_url('icon/can.svg') ?>" alt=""></a>
                        <a href="<?php echo base_url() ?>/admin/user/find/<?php echo $value['iduser'] ?>"><img src="<?= base_url('icon/pen.svg') ?>" alt=""></a></td>

                </tr>
            <?php endforeach; ?>
        </table>


        <?= $pager->links('page', 'bootstrap') ?>
    </div>
</div>



<?php echo $this->endSection() ?>