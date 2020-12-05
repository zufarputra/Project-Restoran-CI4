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
                            <th scope="col">Total</th>
                            <th scope="col">Detail</th>
                        </tr>
                    </thead>
                    <tbody>

                        <?php foreach ($order as $key) : ?>
                            <tr>
                                <td><?= $no++ ?></td>
                                <td><?= $key['tglorder'] ?></td>
                                <td>Rp.<?= $key['total'] ?> </td>
                                <td><a href="<?= base_url('front/histori/detail/' . $key['idorder']) ?>" class="btn btn-primary">Detail</a></td>
                            </tr>
                        <?php endforeach ?>

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