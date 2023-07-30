<!DOCTYPE html>
<html lang="pt">

<head>

  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

  <link rel="icon" type="image/x-icon" href="assets/img/favicon.ico">
  <title>Start BI- Login</title>

  <!-- Bootstrap core CSS-->
  <link href="assets/theme/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

  <!-- Custom fonts for this template-->
  <link href="assets/theme/vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">

  <!-- Custom styles for this template-->
  <link href="assets/theme/css/sb-admin.css" rel="stylesheet">

</head>

<body class="">

  <div class="container">

    <div class="columns is-centered mx-auto mt-5" style="width: 150px; height: 150px;">

      <div class="">

        <figure class="figure-img img-fluid rounded" alt="Start BI Análises">
          <img class="figure-img img-fluid mb-0" src="assets/img/Start_BI_logo_png_white.png">
        </figure>
      </div>
    </div>

    <div class="card card-login mx-auto mt-3">

      <?php if (session()->getFlashdata('msg') !== null) : ?>

        <div class="alert alert-warning alert-dismissible fade show" role="alert">
          <?php echo session()->getFlashdata('msg'); ?>
          <button type="button" class="close" data-dismiss="alert" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>

      <?php endif ?>

      <div class="card-body">

        <form action="<?php echo base_url('Login/signIn'); ?>" method="POST">
          <div class="form-group">
            <div class="form-label-group">
              <input type="text" id="inputUsuario" name="inputUsuario" class="form-control" placeholder="Usuário" required="required" autofocus="autofocus">
              <label for="inputUsuario">Usuario</label>
            </div>
          </div>
          <div class="form-group">
            <div class="form-label-group">
              <input type="password" id="inputSenha" name="inputSenha" class="form-control" placeholder="Senha" required="required">
              <label for="inputSenha">Senha</label>
            </div>
          </div>
          <div class="form-group">
            <div class="checkbox">
              <label>
                <input type="checkbox" value="lembrar">
                Lembrar senha.
              </label>
            </div>
          </div>
          <input type="submit" class="btn btn-primary btn-block" value="Login">
        </form>

      </div>
    </div>
  </div>

  <!-- Bootstrap core JavaScript-->
  <script src="assets/theme/vendor/jquery/jquery.min.js"></script>
  <script src="assets/theme/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

  <!-- Core plugin JavaScript-->
  <script src="assets/theme/vendor/jquery-easing/jquery.easing.min.js"></script>

</body>

</html>