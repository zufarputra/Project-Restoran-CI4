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

    <div class="col">
        <h3><?php echo $judul; ?></h3>
    </div>

</div>






<div class="row mt-3">

    <div class="col">

        <table class="table">

            <tr>

                <th>No</th>
                <th>Pelanggan</th>
                <th>Alamat</th>
                <th>Telepon</th>
                <th>Email</th>
                <th>Aksi</th>
                <th>Status</th>


            </tr>
            <?php $no ?>
            <?php foreach ($pelanggan as $key => $value) :
            ?>
                <tr>

                    <td><?php echo $no++ ?></td>
                    <td><?php echo $value['pelanggan'] ?></td>
                    <td><?php echo $value['alamat'] ?></td>
                    <td><?php echo $value['telp'] ?></td>
                    <td><?php echo $value['email'] ?></td>
                    <td><a href="<?php echo base_url() ?>/admin/pelanggan/delete/<?php echo $value['idpelanggan'] ?>"><img src="<?= base_url('icon/can.svg') ?>" alt=""></a>
                    </td>
                    <?php
                    if ($value['aktif'] == 1) {
                        $aktif = 'Aktif';
                    } else {
                        $aktif = "Non-Aktif";
                    }

                    ?>
                    <td><a href="<?php echo base_url() ?>/admin/pelanggan/delete/<?php echo $value['idpelanggan'] ?>/<?php echo $value['aktif'] ?>"><?= $aktif ?></a>
                    </td>

                </tr>
            <?php endforeach; ?>
        </table>


        <?= $pager->links('page', 'bootstrap') ?>
    </div>
</div>



<?php echo $this->endSection() ?>