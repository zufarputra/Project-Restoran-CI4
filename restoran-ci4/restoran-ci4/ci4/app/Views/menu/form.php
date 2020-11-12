<?php echo $this->extend('template/admin') ?>

<?php echo $this->section('content') ?>

<div class="row">
    <?= view_cell('\App\Controllers\Admin\Menu::option') ?>
</div>

<div class="row">



    <h1>Uploud Image</h1>

    <form action="<?php echo base_url('/admin/menu/insert') ?>" method="post" enctype="multipart/form-data">

        Gambar : <input type="file" name="gambar" required>
        <br>
        <input type="submit" name="simpan" value="Simpan">



    </form>
</div>

<?php echo $this->endSection() ?>