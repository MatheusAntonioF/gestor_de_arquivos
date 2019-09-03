<!doctype html>
<html lang="pt-br">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <link rel="stylesheet" href="CSS/estilo.css">

    <link rel="stylesheet" href="CSS/estilo.css">

    <link href="https://fonts.googleapis.com/css?family=Montserrat&display=swap" rel="stylesheet">

    <script src="https://kit.fontawesome.com/a056040057.js"></script>

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css"
        integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

    <title>Gestor de Arquivos</title>
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
                    <a class="nav-link linkNavBar" href="/">Visualizar arquivos <span
                            class="sr-only">(current)</span></a>
                </li>
                <li class="nav-item">
                    <a class="nav-link linkNavBar" href="#">Professores</a>
                </li>
                <li class="nav-item dropdown">
                </li>
            </ul>

            <div class="dropdown form-inline my-2 my-lg-0">
                <button class="nav-link dropdown-toggle btn btn-dark" id="navbarDropdown" role="button"
                    data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" style="text-decoration: none">
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
                    <a class="dropdown-item btn btn-outline-dark" href="#">
                        <span style="color: #ff000f !important;">
                            <i class="fas fa-angle-double-right"></i>
                        </span>
                        Cadastrar
                    </a>
                </div>
            </div>
        </div>
    </nav>

    <div class="container">
        <div class="col-sm-8 ml-auto mt-5 mr-auto mb-5 shadow-lg p-2 mb-5 rounded"
            style="background-color: whitesmoke;">
            <div class="text-center pt-2">
                <p class="display-4" style="color: #ff000f;">Cadastre-se</p>
                <div class="col-md-6 offset-md-3 ">
                    <hr>
                </div>
            </div>
            <fieldset>
                <form action="#" method="post" class="mt-3 mb-3 ml-2 mr-2">
                    <div class="col-sm-4">
                        <label for="inputNomeCadastro">Email</label>
                        <input type="text" class="form-control" id="inputNomeCadastro" name="nomeUsuario"
                            placeholder="Digite seu nome...">

                    </div>
                    <div class="col-sm-7 mt-4">
                        <label for="inputEmailCadastro">Email</label>

                        <div class="input-group">
                            <div class="input-group-prepend">
                                <div class="input-group-text">@</div>
                            </div>
                            <input type="email" class="form-control" id="inputEmailCadastro" name="emailUsuario"
                                placeholder="Seu email...">
                        </div>

                    </div>
                    <div class="col-sm-5 mt-4">
                        <label for="">Senha</label>
                        <input type="password" class="form-control" name="senhaUsuario" id=""
                            placeholder="Escolha uma senha...">
                    </div>
                    <div class="row">

                        <div class="col-sm-12 ml-4 mt-4 custom-control custom-radio custom-control-inline">
                            <input type="radio" id="radioDocente" name="radioDocente" class="custom-control-input"
                                onclick="exibeDivProfessor();">
                            <label class="custom-control-label" for="radioDocente">Docente</label>
                        </div>
                        <div class="col-sm-12 ml-4 mt-2 custom-control custom-radio custom-control-inline">
                            <input type="radio" id="radioDiscente" name="radioDiscente" class="custom-control-input"
                                onclick="ocultaDivProfessor();">
                            <label class="custom-control-label" for="radioDiscente">Discente</label>
                        </div>

                    </div>

                    <div class="container pt-4" id="divProfessor" style="display: none !important;">
                        <fieldset class="col-sm-12 degradeBranco">
                            <legend style="color: #ff000f;">Dados do docente</legend>
                            <div class="mt-2 ml-2">
                                <label>Disciplinas</label>
                                <div class="row">
                                    <div class="col-sm-6">
                                        <div class="custom-control custom-checkbox">
                                            <input type="checkbox" class="custom-control-input" id="matematica"
                                                name="matematica">
                                            <label class="custom-control-label" for="matematica">Matemática</label>
                                        </div>
                                        <div class="custom-control custom-checkbox">
                                            <input type="checkbox" class="custom-control-input" id="portugues"
                                                name="portugues">
                                            <label class="custom-control-label" for="portugues">Português</label>
                                        </div>
                                        <div class="custom-control custom-checkbox">
                                            <input type="checkbox" class="custom-control-input" id="ciencia"
                                                name="ciencia">
                                            <label class="custom-control-label" for="ciencia">Ciência</label>
                                        </div>
                                    </div>
                                    <div class="col-sm-6">
                                        <div class="custom-control custom-checkbox">
                                            <input type="checkbox" class="custom-control-input" id="historia"
                                                name="historia">
                                            <label class="custom-control-label" for="historia">História</label>
                                        </div>
                                        <div class="custom-control custom-checkbox">
                                            <input type="checkbox" class="custom-control-input" id="geografia"
                                                name="geografia">
                                            <label class="custom-control-label" for="geografia">Geografia</label>
                                        </div>
                                        <div class="custom-control custom-checkbox">
                                            <input type="checkbox" class="custom-control-input" id="biologia"
                                                name="biologia">
                                            <label class="custom-control-label" for="biologia">Biologia</label>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="row mt-4">
                                <div class="col-sm-12">
                                    <div class="form-group">
                                        <label for="">Biografia</label>
                                        <small> - Campo opcional</small>
                                        <textarea class="form-control" name="biografial" id="profBiografia" rows="2"
                                            placeholder="Digite sua biografia..."></textarea>
                                    </div>

                                </div>
                            </div>

                        </fieldset>
                    </div>

                    <button type="submit" class="ml-2 mt-4 btn btn-outline-success">
                        <i class="fas fa-user-plus"></i>
                        Cadastrar
                    </button>

                </form>
            </fieldset>
        </div>
    </div>


    <footer class="container fixed-bottom position-relative">
        <p class="float-right"><a href="#" style="text-decoration: none;">Início da página</a></p>
        <p>© 2019</p>
        <p>Developed by: <i>Lucas Gabriel Mauricio Coimbra Varela e Matheus Felipe Antonio</i></p>
    </footer>

    <script type="text/javascript">
        function exibeDivProfessor() {
            document.getElementById("divProfessor").style.display = "block";
        }

        function ocultaDivProfessor() {
            document.getElementById("divProfessor").style.display = "none";
        }

    </script>

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"
        integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo"
        crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"
        integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1"
        crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"
        integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM"
        crossorigin="anonymous"></script>


</body>

</html>