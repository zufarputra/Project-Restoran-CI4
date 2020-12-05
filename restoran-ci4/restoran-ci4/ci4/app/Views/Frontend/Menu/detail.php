<?php echo $this->extend('Frontend/Layout/template') ?>
<?php echo $this->section('content') ?>
<?php
if (isset($_GET['page'])) {
    $jumlah = 4;
    $page = $_GET['page'];
    $no = ($page * $jumlah) - $jumlah + 1;
} else {
    $no = 1;
}
?>
<div class="jumbotron jumbotron-fluid">
    <div class="container">
        <h1 class="display-4"><span> Adventure Your Food</h1></span>
        <h3 class="text-white">Make your day with eat foodture</h3>
    </div>
</div>

</div>
<section class="cart-area mt-5">
    <div class="container">
        <div class="cart_inner">
            <div class="table-responsive">
                <table class="table">
                    <thead>
                        <tr>
                            <th scope="col">No</th>
                            <th scope="col">Tanggal</th>
                            <th scope="col">Menu</th>
                            <th scope="col">Harga</th>
                            <th scope="col">Jumlah</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php if (!empty($menu)) {
                            foreach ($menu as $key) : ?>
                                <tr>
                                    <td> <?= $no++ ?> </td>
                                    <td><?= $key['tglorder'] ?></td>
                                    <td><?= $key['menu'] ?></td>
                                    <td><?= $key['harga'] ?></td>
                                    <td><?= $key['jumlah'] ?></td>
                                </tr>
                            <?php endforeach; ?>
                        <?php } ?>
                    </tbody>
                </table>
                <div class="container mr-5 mb-4">
                    <?= $pager->makeLinks(1, $tampil, $total, 'bootstrap') ?>

                </div>
            </div>
        </div>
    </div>
</section>
</div>
<?php echo $this->endSection() ?>