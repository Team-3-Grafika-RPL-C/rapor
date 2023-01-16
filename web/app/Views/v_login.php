<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <!-- Bulma -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bulma@0.9.4/css/bulma.min.css">
    <!-- Remix Icon -->
    <link href="https://cdn.jsdelivr.net/npm/remixicon@2.5.0/fonts/remixicon.css" rel="stylesheet">

</head>
<body>
    <!-- Navbar -->
    <nav class="navbar level" role="navigation" aria-label="main navigation">
        <div class="level-left">
            <div class="level-item">
                <img src="<?= base_url(); ?>/assets/rapodig.png" width="99px" height="118px" alt="Logo Rapodig">
            </div>
        </div>
        <div class="level-right">
            <div class="level-item">
                <img src="<?= base_url(); ?>/assets/tut-wuri-handayani-7777.png" width="91px" height="94px" alt="Logo Tut wuri handayani">
            </div>
        </div>
    </nav>
    <!-- Card -->
    <div class="container mx-auto pt-3">
        <div class="columns is-mobile is-flex is-justify-content-center">
            <div class="column is-three-quarters-mobile is-two-thirds-tablet is-half-desktop is-one-third-widescreen is-one-quarter-fullhd">
                <div class="card is-flex is-justify-content-center">
                    <div class="card-content">
                        <h1 class="title is-1">Selamat Datang!</h1>
                        <p class="subtitle is-flex is-justify-content-center" style="color: #74838B">Silahkan Masuk Terlebih Dahulu</p>
                    <div class="content py-6">
                        <form action="" method="post">
                            <div class="field">
                                <label for="label">Username</label>
                                <div class="control has-icons-left has-icons-right">
                                    <input class="input" type="text" name="text" id="" placeholder="Nama">
                                    <span class="icon is-small is-left">
                                        <i class="ri-user-3-fill"></i>
                                    </span>
                                </div>
                            </div>
                            <div class="field">
                                <label for="label">Password</label>
                                <div class="control has-icons-left has-icons-right">
                                    <input class="input" type="password" name="password" id="" placeholder="NIP">
                                    <span class="icon is-small is-left">
                                        <i class="ri-lock-fill"></i>
                                    </span>
                                </div>
                            </div>
                            <div class="control is-flex is-justify-content-end py-3">
                                <button class="button is-rounded" style="min-width: 16vh;background-color: #845EF7; color: white" id="login-btn" type="submit">Login</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
</body>
</html>