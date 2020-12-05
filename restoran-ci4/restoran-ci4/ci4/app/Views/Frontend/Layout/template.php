<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Foodture.com</title>
    <link rel="icon" href="<?= base_url("uploud/logo.jpg") ?>">
    <link rel="stylesheet" href="<?= base_url('/bootstrap/css/bootstrap.min.css') ?>">
    <link rel="stylesheet" href="<?= base_url('css/style.css') ?>">
</head>

<body>
    <nav class="navbar navbar-expand-lg navbar-light bg-dark">
        <div class="container">
            <a class="navbar-brand tengah color" href="<?= base_url('front/homepage') ?>">Foodture.com</a>
            <button class="navbar-toggler " type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>

            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav">
                    <?php
                    if (session()->get('email')) : ?>

                        <li class="nav-item active">
                            <a class="nav-link color" href="<?= base_url('front/histori') ?>"><i class="fas fa-history mr-2"></i> History<span class="sr-only">(current)</span></a>
                        </li>
                        <li class="nav-item active">
                            <a class="nav-link color" href="<?= base_url('front/cart') ?>"><i class="fas fa-cart-plus mr-2"></i> Cart<span class="sr-only">(current)</span></a>
                        </li>
                        <li class="nav-item active">
                            <a class="nav-link color" href="<?= base_url('front/') ?>"><i class="fas fa-users mr-2"></i><?= session()->get('email') ?> <span class="sr-only">(current)</span></a>
                        </li>
                        <li class="nav-item active">
                            <a class="nav-link color" href="<?= base_url('front/loginp/logout') ?>"><i class="fas fa-toggle-off mr-2"></i>Log-out <span class="sr-only">(current)</span></a>
                        </li>
                    <?php endif; ?>


                    <?php
                    if (!session()->get('email')) : ?>

                        <li class="nav-item active">
                            <a class="nav-link color" href="<?= base_url('front/homepage') ?>"><i class="fas fa-home mr-2"></i>Home <span class="sr-only">(current)</span></a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link color" href="<?= base_url('front/loginp') ?>"><i class="far fa-user-circle mr-2"></i>Login</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link color" href="<?= base_url('front/register') ?>"><i class="fas fa-registered mr-2"></i>Register</a>
                        </li>
                </ul>
            <?php endif; ?>
            <form class="form-control-sm mb-3" action="<?= base_url('front/homepage/read') ?>" method="get">
                <?= view_cell('\App\Controllers\front\homepage::option') ?>
            </form>
            </div>
        </div>
    </nav>
    <?php echo $this->renderSection('content') ?>

    <footer>
        <!-- footer area -->
        <footer class="page-footer bg-dark">
            <div class="bg-primary">
                <div class="container">
                    <div class="row py-4 d-flex align-items-center">
                        <div class="col-md-12 text-center">
                            <a href="#"><i class="fab fa-facebook-square text-white mr-4"></i></a>
                            <a href="#"><i class="fab fa-twitter text-white mr-4"></i></a>
                            <a href="#"><i class="fab fa-google-play text-white"></i></a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="container text-white text-center text-md-left mt-5">
                <div class="row">
                    <div class="col-md-3 mx-auto mb-4">
                        <h6 class="text-uppercase font-weight-bold">About us</h6>
                        <hr class="bg-primary mb-4 mt-0 d-inline-block mx-auto" style="width: 80px; height: 2px;">
                        <div>
                            <img mt width="60" height="60" class="d-inline-block mx-auto" alt="" loading="lazy" src="<?= base_url('uploud/logo.jpg') ?>" alt="">
                            <p class="mt-2">Culinary Food In Indonesian </p>
                        </div>
                    </div>
                    <div class="col-md-2 mx-auto mb-4">
                        <h6 class="text-uppercase font-weight-bold">Products</h6>
                        <hr class="bg-primary mb-4 mt-0 d-inline-block mx-auto" style="width: 85px; height: 2px;">
                        <ul class="list-unstyled">
                            <li class="my-2"><a class="text-white" href="#">Our apps</a></li>
                        </ul>
                    </div>
                    <div class="col-md-2 mx-auto mb-4">
                        <h6 class="text-uppercase font-weight-bold">Usefull Links</h6>
                        <hr class="bg-primary mb-4 mt-0 d-inline-block mx-auto" style="width: 115px; height: 2px;">
                        <ul class="list-unstyled">
                            <li class="my-2"><a class="text-white" href="#">About Us</a></li>
                            <li class="my-2"><a class="text-white" href="#">Terms & Conditions</a></li>
                            <li class="my-2"><a class="text-white" href="#">Contact Us</a></li>
                        </ul>
                    </div>
                    <div class="col-md-3 mx-auto mb-4">
                        <h6 class="text-uppercase font-weight-bold">Contacts</h6>
                        <hr class="bg-primary mb-4 mt-0 d-inline-block mx-auto" style="width: 115px; height: 2px;">
                        <ul class="list-unstyled">
                            <li class="my-2"><i class="fas fa-home mr-3"></i> Sidoarjo Foodture</li>
                            <li class="my-2"><i class="fas fa-envelope mr-3"></i>Foodture2@gmail.com</li>
                            <li class="my-2"><i class="fas fa-phone mr-3"></i> 092145211</li>
                        </ul>
                    </div>
                </div>

        </footer>
        <!-- End Footer area -->
    </footer>
</body>

</html>
<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous"></script>
<script src="<?= base_url('bootstrap/js/fontawesome.js') ?>"></script>