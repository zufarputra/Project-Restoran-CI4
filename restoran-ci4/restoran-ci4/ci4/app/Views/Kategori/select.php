<?php echo $this->extend('template/admin') ?>

<?php echo $this->section('content') ?>

<div class="row">
    <div class="col-4">
        <a class="btn btn-primary" href="<?= base_url('/admin/kategori/create') ?>" role="button">Tambah Data</a>
    </div>

    <div class="col">
        <h3><?php echo $judul; ?></h3>
    </div>

</div>






<div class="row mt-3">



    <table class="table">

        <tr>

            <th>No</th>
            <th>Kategori</th>
            <th>Keterangan</th>
            <th>Hapus</th>
            <th>Ubah</th>

        </tr>
        <?php $no = 1 ?>
        <?php foreach ($kategori as $key => $value) :
        ?>
            <tr>

                <td><?php echo $no++ ?></td>
                <td><?php echo $value['kategori'] ?></td>
                <td><?php echo $value['keterangan'] ?></td>
                <td><a href="<?php echo base_url() ?>/admin/kategori/delete/<?php echo $value['idkategori'] ?>">Hapus</a></td>
                <td><a href="<?php echo base_url() ?>/admin/kategori/find/<?php echo $value['idkategori'] ?>">Update</a></td>

            </tr>
        <?php endforeach; ?>
    </table>

    <?= $pager->links('group1', 'bootstrap') ?>
</div>



<?php echo $this->endSection() ?>