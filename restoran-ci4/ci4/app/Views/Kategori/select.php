<?php echo $this->extend('template/admin') ?>

<?php echo $this->section('content') ?>

<h1><?php echo $judul; ?></h1>

<table border="1px">

    <tr>

        <th>No</th>
        <th>Kategori</th>
        <th>Keterangan</th>

    </tr>
    <?php $no = 1 ?>
    <?php foreach ($kategori as $key => $value) :
    ?>
        <tr>

            <td><?php echo $no++ ?></td>
            <td><?php echo $value['kategori'] ?></td>
            <td><?php echo $value['keterangan'] ?></td>

        </tr>
    <?php endforeach; ?>
</table>



<?php echo $this->endSection() ?>