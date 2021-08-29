<!DOCTYPE html>
<html lang="pt-br">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <!-- Google Font: Source Sans Pro -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
  <!-- Icones do Projeto (Font-Awesome) -->
  <link rel="stylesheet" href="templates/AdminLTE-3.1.0/plugins/fontawesome-free/css/all.min.css">
  <!-- Estilo das caixas de seleção -->
  <link rel="stylesheet" href="templates/AdminLTE-3.1.0/plugins/icheck-bootstrap/icheck-bootstrap.min.css">
  <!-- Estilo do template Admin LTDE -->
  <link rel="stylesheet" href="templates/AdminLTE-3.1.0/dist/css/adminlte.min.css">
  <link rel="stylesheet" href="selfcss.css">
  <title>Autenticação</title>
</head>

<body class="hold-transition login-page">
  <div class="login-box">
    <!-- /.login-logo -->
    <div class="card card-outline card-primary">
      <div class="card-header text-center">
        <a href="../../index2.html" class="h1"><b>TURMA</b>ADS</a>
      </div>
      <div class="card-body">
      <div class="callout callout-warning">
                  <h5>Atenção! </h5>

                  <p>Todos os campos sinalizados com ** são obrigatorios.</p>
                </div>

        <form action="../../index3.html" method="post">
          <div class="input-group mb-3">
            <input type="email" class="form-control" placeholder="Digite pelo seu celular ou E-mail *">
            <div class="input-group-append">
              <div class="input-group-text">
                <span class="fas fa-envelope"></span>
              </div>
            </div>
          </div>
          <div class="input-group mb-3">
            <input type="password" class="form-control" placeholder="Digite sua senha *">
            <div class="input-group-append">
              <div class="input-group-text">
                <span class="fas fa-lock"></span>
              </div>
            </div>
          </div>
          <div class="row">
            <!-- /.col -->
            <div class="col-12">
              <button type="submit" class="btn btn-primary btn-block">Entrar</button>
            </div>
            <!-- /.col -->
          </div>
        </form>
        <p class="mt-2">
        <a href="cadastro.php" class="btn btn-success col-12">Cadastre-se!</a>
        </p>
        <p class="mb-0">
          <a href="register.html" class="text-center" class="esqsenha">Esqueci minha Senha</a>
        </p>
      </div>
      <!-- /.card-body -->
    </div>
    <!-- /.card -->
  </div>




  <!-- Biblioteca JavaScript -->
  <!-- jQuery -->
  <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
  <!-- Bootstrap 4 -->
  <script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/5.1.0/js/bootstrap.bundle.min.js"></script>
  <!-- AdminLTE App -->
  <script src="https://cdnjs.cloudflare.com/ajax/libs/admin-lte/3.1.0/js/adminlte.min.js"></script>
</body>

</html>