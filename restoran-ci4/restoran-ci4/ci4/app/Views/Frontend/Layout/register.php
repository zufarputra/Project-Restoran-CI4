<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Register Page</title>
    <link rel="icon" href="<?= base_url("uploud/logo.jpg") ?>">
    <link rel="stylesheet" href="<?= base_url('/bootstrap/css/bootstrap.min.css') ?>">
    <link rel="stylesheet" href="<?= base_url('css/style.css') ?>">
</head>
<style>
    .form-signin {
        width: 100%;
        max-width: 330px;
        padding: 15px;
        margin: auto;
    }

    .alert {
        width: 100%;
        max-width: 330px;
        padding: 15px;
        margin: auto;
    }

    .form-signin .email {
        margin-bottom: -1px;
        border-bottom-left-radius: 0;
        border-bottom-right-radius: 0;
    }

    .form-signin .pass {
        border-top-left-radius: 0;
        border-top-right-radius: 0;
    }
</style>

<!-- <body class="register"> -->

<body class="register">
    <div class="container">
        <!-- <div class="kotak"> -->
        <div class="row">
            <div class="col-lg-6" style="margin-top: 20%;">
                <h2><a href="<?= base_url('front/homepage') ?>" class="link-about-us"> About Us</a></h2>
                <p class="mt-4"> <span>Join with Foodture.com to learn many recipt food</span> </p>
            </div>
            <div class="col-lg-6 kotak">
                <?php if (session()->getFlashdata('pesan')) : ?>
                    <div class="m-auto col-8 alert alert-danger" role="alert">
                        <?= session()->getFlashdata('pesan'); ?>
                    </div>
                <?php endif; ?>
                <form class="form-signin" method="post" action="<?= base_url('front/register/create') ?>">
                    <h3 class="d-flex justify-content-center mb-3 register-text">Register</h3>
                    <label for="inputEmail" class="sr-only">Username</label>
                    <input type="text" name="pelanggan" id="username" class="form-control mt-2" placeholder="Username" required="" autofocus="">

                    <label for="inputPassword" class="sr-only">Email</label>
                    <input type="email" name="email" id="email" class="form-control mt-2" placeholder="Email" required="">

                    <label for="inputPassword" class="sr-only">Password</label>
                    <input type="password" name="password" id="inputPassword" class="form-control mt-2" placeholder="Password" required="">

                    <label for="inputPassword" class="sr-only">Konfirmasi Password</label>
                    <input type="password" name="kpassword" id="inputPassword" class="form-control mt-2" placeholder="Konfirmasi Password" required="">

                    <label for="telepon" class="sr-only">Telepon</label>
                    <input type="numeric" name="telp" id="telepon" class="form-control mt-2" placeholder="Telepon" required="">

                    <label for="alamat" class="sr-only">Alamat</label>
                    <input type="text" name="alamat" id="alamat" class="form-control mt-2" placeholder="Alamat" required="">

                    <button class="btn btn-lg btn-success btn-block mt-3" type="submit">Sign in</button>

                </form>
            </div>

        </div>
    </div>
</body>

</html>

<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous"></script>
<script src="<?= base_url('bootstrap/js/fontawesome.js') ?>"></script>