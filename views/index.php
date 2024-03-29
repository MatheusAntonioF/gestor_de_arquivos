<!doctype html>
<html lang="en">

<head>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

  <link rel="stylesheet" href="CSS/estilo.css">

  <link href="https://fonts.googleapis.com/css?family=Montserrat&display=swap" rel="stylesheet">

  <script src="https://kit.fontawesome.com/a056040057.js"></script>

  <!-- Bootstrap CSS -->
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css"
    integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

  <title>Gestor de Arquivos</title>

  <link rel="apple-touch-icon" sizes="57x57" href="/assets/favicon/apple-icon-57x57.png">
  <link rel="apple-touch-icon" sizes="60x60" href="/assets/favicon/apple-icon-60x60.png">
  <link rel="apple-touch-icon" sizes="72x72" href="/assets/favicon/apple-icon-72x72.png">
  <link rel="apple-touch-icon" sizes="76x76" href="/assets/favicon/apple-icon-76x76.png">
  <link rel="apple-touch-icon" sizes="114x114" href="/assets/favicon/apple-icon-114x114.png">
  <link rel="apple-touch-icon" sizes="120x120" href="/assets/favicon/apple-icon-120x120.png">
  <link rel="apple-touch-icon" sizes="144x144" href="/assets/favicon/apple-icon-144x144.png">
  <link rel="apple-touch-icon" sizes="152x152" href="/assets/favicon/apple-icon-152x152.png">
  <link rel="apple-touch-icon" sizes="180x180" href="/assets/favicon/apple-icon-180x180.png">
  <link rel="icon" type="image/png" sizes="192x192"  href="/assets/favicon/android-icon-192x192.png">
  <link rel="icon" type="image/png" sizes="32x32" href="/assets/favicon/favicon-32x32.png">
  <link rel="icon" type="image/png" sizes="96x96" href="/assets/favicon/favicon-96x96.png">
  <link rel="icon" type="image/png" sizes="16x16" href="assets/favicon/favicon-16x16.png">
  <link rel="manifest" href="/manifest.json">
  <meta name="msapplication-TileColor" content="#ffffff">
  <meta name="msapplication-TileImage" content="/assets/favicon/ms-icon-144x144.png">
  <meta name="theme-color" content="#ffffff">
</head>

<body>
  <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
    <h1 class="navbar-brand" href="/">
      <span style="color: #ff000f !important;">
        <i class="fab fa-asymmetrik"></i>
      </span>
      Gestor de Arquivos
    </h1>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent"
      aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>

    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav mr-auto">
        <li class="nav-item">
          <a class="nav-link linkNavBar" href="/">Visualizar arquivos <span class="sr-only"></span></a>
        </li>
        <li class="nav-item">
          <a class="nav-link linkNavBar" href="?r=/viewProfessores">Professores</a>
        </li>
        <li class="nav-item dropdown">
        </li>
      </ul>

      <div class="dropdown form-inline my-2 my-lg-0">
        <button class="nav-link dropdown-toggle btn btn-dark" id="navbarDropdown" role="button" data-toggle="dropdown"
          aria-haspopup="true" aria-expanded="false" style="text-decoration: none">
          Acessar sistema
        </button>
        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
          <button type="button" class="dropdown-item btn btn-outline-dark" data-toggle="modal"
            data-target=".modalLogin">
            <span style="color: #ff000f !important;">
              <i class="fas fa-sign-in-alt"></i>
            </span>
            Login

          </button>
          <a class="dropdown-item btn btn-outline-dark" href="?r=/viewCadastrar">
            <span style="color: #ff000f !important;">
              <i class="fas fa-angle-double-right"></i>
            </span>
            Cadastrar
          </a>
        </div>
      </div>


    </div>
  </nav>

  <div class="container" style="margin-top: 5% !important;">
    <?php 
            $mensagensExists = \Gestor\Controller\IndexController::$mensagens;
            if(!is_null($mensagensExists)):
        ?>


    <div id="divErros" class="col align-self-center mb-4 shadow p-3 mb-5 rounded sombraTexto">

      <?php 
        $mensagens = \Gestor\Controller\IndexController::$mensagens;
        foreach($mensagens as $mensagem): ?>

      <p id="pErros" class="text-center h4 ">
        <strong>
          Atenção:
          <?php echo $mensagem; ?>
        </strong>
      </p>

      <?php endforeach; ?>
    </div>

    <?php
      endif;
    ?>

    <div id="alertTable" class="alert alert-success alert-dismissible fade show " role="alert">
      <strong>Aguarde!</strong> Carregando arquivos.
      <button type="button" class="close" data-dismiss="alert" aria-label="Close">
        <span aria-hidden="true">&times;</span>
      </button>
    </div>
    <table class="table table-hover table-striped">

      <thead>
        <tr>
          <th scope="col" class="text-center">#</th>
          <th scope="col" class="text-center">Nome do arquivo</th>
          <th scope="col" class="text-center">Data de upload</th>
          <th scope="col" class="text-center">Download</th>
        </tr>
      </thead>
      <tbody id="tableArquivos">

      </tbody>
    </table>


  </div>


  <footer class="container fixed-bottom">
    <p class="float-right"><a href="#" style="text-decoration: none;">Início da página</a></p>
    <p>© 2019</p>
    <p>Developed by: <i>Lucas Gabriel Mauricio Coimbra Varela e Matheus Felipe Antonio</i></p>
  </footer>


  <!-- Modal Login -->
  <div class="modal fade modalLogin" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
      <div class="modal-content">
        <div class="modal-header fundoNavbarCollapse">
          <h5 class="modal-title" id="exampleModalLabel">
            <span style="color: #ff000f !important;">
              <i class="fas fa-user-lock"></i>
            </span>
            Login
          </h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <div class="modal-body">
          <form action="?r=/loginUsuario" method="POST" id="formLogin" novalidate>
            <div class="form-group">
              <label for="userLogin">Login</label>
              <input type="email" class="form-control" id="userLogin" aria-describedby="emailHelp"
                placeholder="Login..." name="userLogin" required>
              <small id="emailHelp" class="form-text text-muted">Seu email não será
                compartilhado.</small>
              <div class="invalid-feedback">
                Campo obrigatório
              </div>
            </div>
            <div class="form-group">
              <label for="userSenha">Senha</label>
              <input type="password" class="form-control" id="userSenha" placeholder="Insira sua senha" name="userSenha"
                required>
              <div class="invalid-feedback">
                Campo obrigatório
              </div>
            </div>
            <div class="mb-3">
              <div class="custom-control custom-radio custom-control-inline">
                <input type="radio" id="radioDiscente" name="radio" class="custom-control-input" value="discente"
                  required>
                <label class="custom-control-label" for="radioDiscente">Discente</label>
              </div>
              <div class="custom-control custom-radio custom-control-inline">
                <input type="radio" id="radioDocente" name="radio" class="custom-control-input" value="docente"
                  required>
                <label class="custom-control-label" for="radioDocente">Docente</label>
              </div>
            </div>

            <button type="subtmit" class="btn btn-outline-success">
              <i class="fas fa-paper-plane"></i>
              Entrar
            </button>
          </form>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-danger" data-dismiss="modal">Fechar</button>
        </div>
      </div>
    </div>
  </div>

  <script src="assets/jquery/jquery.min.js"></script>
  <script>
    (function () {
      'use strict';

      window.addEventListener('load', function () {
        var form = document.getElementById('formLogin');
        form.addEventListener('submit', function (event) {
          if (form.checkValidity() === false) {
            event.preventDefault();
            event.stopPropagation();
          }
          form.classList.add('was-validated');
        }, false);
      }, false);
    })();

    $(document).ready(function () {
      $.ajax({
        url: '/assets/ajax/listaArquivosIndex.php',
        type: 'POST',
        data: {},

        //Antes da requisição
        beforeSend: function () {
          $('.alert').fadeIn('900000');
          $('.alert').fadeOut('90000');
        },

        //Requisição bem sucedida
        success: function (data) {
          $('.alert').fadeIn('90000');

          $('#tableArquivos').html(data);
        },

        //Erro na requisição
        error: function () {
          alert("Erro ao carregar arquivos! Por favor contate o responsável pelo sistema");
        }
      });
    });

  </script>

  <!-- Optional JavaScript -->
  <!-- jQuery first, then Popper.js, then Bootstrap JS -->
  <!-- <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"
    integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo"
    crossorigin="anonymous"></script> -->
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"
    integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1"
    crossorigin="anonymous"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"
    integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM"
    crossorigin="anonymous"></script>


</body>

</html>