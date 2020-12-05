<?php echo $this->extend('Frontend/Layout/template') ?>

<?php echo $this->section('content') ?>

<div class="jumbotron jumbotron-fluid">
    <div class="container">
        <h1 class="display-4"><span> <?= $judul ?></h1></span>
        <h3 class="text-white">Make your day with eat foodture</h3>
    </div>
</div>
<div class="container">
    <div class="row row-cols-1 row-cols-md-2">
        <?php foreach ($menus as $menu) : ?>
            <div class="col mb-4">
                <div class="card">
                    <img style="width:50px;" src="<?= base_url('uploud/' . $menu['gambar'] . '') ?>" class="card-img-top" alt="...">
                    <div class="card-body">
                        <h5 class="card-title"><?= $menu['menu'] ?></h5>
                        <p class="card-text">Rp.<?= $menu['harga'] ?></p>
                        <form action="<?= base_url('front/cart/') ?>" method="POST">
                            <input type="hidden" name="idmenu" value="<?= $menu['idmenu'] ?>">
                            <button class="btn btn-primary mb-0" type="submit"> Add to cart <i class="fas fa-check-square"></i></button>
                        </form>
                    </div>
                </div>
            </div>
        <?php endforeach; ?>
    </div>
</div>
<div class="container">
    <?= $pager->makeLinks(1, $tampil, $total, 'bootstrap') ?>
</div>

<?php echo $this->endSection() ?>