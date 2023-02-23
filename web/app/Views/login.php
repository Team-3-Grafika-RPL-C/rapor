<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Rapodig - Login</title>
    <!-- Custom styles for this template-->
    <link rel="stylesheet" href="<?= base_url(); ?>/css/style.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">

</head>

<body class="bg-indigo o-hidden">

    <div class="container">

        <!-- Outer Row -->
        <div class="row justify-content-center">

            <div class="col-xl-10 col-lg-12 col-md-9">

                <div class="card o-hidden border-0 shadow-lg my-4">
                    <div class="card-body p-0">
                        <!-- Nested Row within Card Body -->
                        <div class="row">
                            <div class="col-lg-6 d-none d-lg-block card-right">
                                <div class="d-flex justify-content-center pt-5">
                                    <div class="m-5 p-5">
                                        <img class="p-5" src="<?= base_url(); ?>/assets/rapodig.png" alt="Logo Rapodig">
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-6 pb-5">
                                <div class="p-5 mt-5">
                                    <div class="text-center">
                                        <h1>Selamat Datang!</h1>
                                        <h5 class="mb-4">Silahkan masuk terlebih dahulu</h5>
                                    </div>
                                    <form class="user" method="post" action="<?= base_url(); ?>/validasi-login">
                                        <?php if (session()->getFlashData('error')) { ?>
                                            <div class="alert alert-danger">
                                                <?php echo session()->getFlashdata('error') ?>
                                            </div>
                                        <?php } ?>
                                        <div class="form-group">
                                            <input type="text" class="form-control form-control-user login-placeholder" id="exampleInputEmail" name="username" aria-describedby="emailHelp" placeholder="Username" value="<?= old('username') ?>">
                                        </div>
                                        <div class="form-group">
                                            <input type="password" class="form-control form-control-user login-placeholder" id="exampleInputPassword" name="password" placeholder="Password " value="<?= old('password') ?>>
                                        </div>
                                        <div class=" my-5 pb-5">
                                            <button type="submit" class="btn btn-user btn-block" name="login" style="background-color: #845EF7; color: white">
                                                Login
                                            </button>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

            </div>

        </div>

    </div>

    <!-- Bootstrap core JavaScript-->
    <script src="<?= base_url(); ?>/package/jquery/jquery.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>

    <!-- Core plugin JavaScript-->
    <script src="<?= base_url(); ?>/package/jquery-easing/jquery.easing.min.js"></script>

    <!-- Custom scripts for all pages-->
    <script src="<?= base_url(); ?>/js/rapodig.min.js"></script>

</body>

</html>