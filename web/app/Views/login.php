<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Login</title>
    <!-- Bootstrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
  </head>
  <body>
      <!-- Navbar -->
      <nav class="navbar navbar-expand-lg fixed-top py-0" style="position: sticky;">
          <div class="container-fluid">
              <a href="" class="navbar-brand mx-md-4 py-0">
                <img src="<?= base_url(); ?>/assets/rapodig.png" height="55px" alt="Logo Rapodig">
              </a>
              <a href="" class="navbar-brand mx-md-4 py-0">
                <img src="<?= base_url(); ?>/assets/tut-wuri-handayani-7777.png" height="55px" alt="Logo Tut Wuri Handayani">
              </a>
          </div>
      </nav>
    <!-- Card -->
    <div class="container d-flex justify-content-center align-item-center flex-column" style="height: 90vh;">
        <div class="card justify-content-center w-100 align-self-center shadow py-5" style="max-width: 25rem; height:auto; border-radius:16px;">
            <div class="container justify-content-center d-flex my-auto">
                <h2 class="mt-3">Selamat Datang!</h2>
            </div>
            <div class="container justify-content-center d-flex pb-4">
                <p style="color: #74838B">Silahkan Masuk Terlebih Dahulu</p>
            </div>
            <!-- Isi Form -->
            <div class="container my-auto pt-2">
                <form method="POST" action="<?= base_url(); ?>/">
                    <div class="mb-2 px-4">
                        <label for="username" class="form-label">Username</label>
                        <input type="text" class="form-control" id="username" name="username" placeholder="Nama">
                    </div>
                    <div class="mb-3 mx-3">
                        <label for="password" class="form-label d-flex justify-content-start" >Password</label>
                        <input type="password" class="form-control" name="password" id="password" placeholder="NIP">
                    </div>
                    <div class="container d-flex justify-content-end px-4 pb-4">
                        <button class="btn" style="min-width: 24vh; min-height: 1rem; border-radius: 16px; background-color: #845EF7; color: white" id="loginBtn" type="submit">Login</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>
  </body>
</html>