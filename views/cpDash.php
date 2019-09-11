<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <link rel="stylesheet" href="CSS/estilo.css">

    <script src="https://kit.fontawesome.com/a056040057.js"></script>

    <link href="https://fonts.googleapis.com/css?family=Montserrat&display=swap" rel="stylesheet">

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
                    <span style="color: #ff000f;">
                        <i class="fas fa-user-tie"></i>
                    </span>
                    Minha Conta
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

    <div class="row col-sm-12">
        <nav class="col-sm-3 d-md-block sidebar position-sticky" style="background-color: #666666;">

            <div class="row">
                <div class="col-sm-12 mr-0 pr-0" id="navbarDashboard">
                    <span class="" style="font-size: 40px !important; color: whitesmoke !important;">
                        <i class="fas fa-user-circle"></i>
                    </span>
                    <br>
                    <br>
                    <span class="mb-0" style="color: whitesmoke">
                        Matheus Felipe Antonio
                    </span>
                    <small class="form-text mt-0" style="color: whitesmoke">
                        matheusantoniof@gmail.com
                    </small>

                </div>
                <div class="col-sm pt-2" style="background-color: #d9d9d9;">
                    <p>
                        <span style="color: #ff000f !important;">
                            <i class="fas fa-angle-right"></i>
                        </span>
                        Menu de navegação
                    </p>
                </div>
            </div>

            <div class="sidebar-sticky">
                <ul class="nav flex-column">
                    <li class="nav-item mt-0">
                        <div class="col-sm mt-0 mb-0">
                            <hr>
                        </div>
                    </li>

                    <h6 class="sidebar-heading d-flex justify-content-between align-items-center px-3 mt-1 mb-1">
                        <span style="color: whitesmoke;">Arquivos</span>
                    </h6>
                    <ul class="nav flex-column mb-2">
                        <li class="nav-item">
                            <a class="nav-link btnNavBar" href="#" style="color: #333333 !important;"
                                id="btnUloadArquivo" onclick="mostraDivUpload();">
                                <span style="color: #ff000f !important;">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"
                                        fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                        stroke-linejoin="round" class="feather feather-file-text">
                                        <path d="M14 2H6a2 2 0 0 0-2 2v16a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2V8z"></path>
                                        <polyline points="14 2 14 8 20 8"></polyline>
                                        <line x1="16" y1="13" x2="8" y2="13"></line>
                                        <line x1="16" y1="17" x2="8" y2="17"></line>
                                        <polyline points="10 9 9 9 8 9"></polyline>
                                    </svg>
                                </span>
                                Upload arquivo
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link btnNavBar" href="#" style="color: #333333 !important;"
                                id="btnListaArquivos" onclick="monstaDivLista();">
                                <span style="color: #ff000f !important">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"
                                        fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                        stroke-linejoin="round" class="feather feather-file-text">
                                        <path d="M14 2H6a2 2 0 0 0-2 2v16a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2V8z"></path>
                                        <polyline points="14 2 14 8 20 8"></polyline>
                                        <line x1="16" y1="13" x2="8" y2="13"></line>
                                        <line x1="16" y1="17" x2="8" y2="17"></line>
                                        <polyline points="10 9 9 9 8 9"></polyline>
                                    </svg>
                                </span>
                                Listar arquivos
                            </a>
                        </li>

                        <li class="nav-item mt-0">
                            <div class="col-sm mt-0 mb-0">
                                <hr>
                            </div>
                        </li>
                    </ul>


            </div>

        </nav>


        <div class="col-sm-9">

            <!-- Div de apresentação -->
            <div class="jumbotron " id="divApresentacao">
                <div class="container">
                    <h1 class="display-3 text-center">Olá, mundo!</h1>
                    <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been
                        the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley
                        of type and scrambled it to make a type specimen book. It has survived not only five centuries,
                        but also the leap into electronic typesetting, remaining essentially unchanged. It was
                        popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages,
                        and more recently with desktop publishing software like Aldus PageMaker including versions of
                        Lorem Ipsum.</p>
                    <p><a class="btn btn-primary btn-lg" href="#" role="button">Saiba mais »</a></p>
                </div>
            </div>

            <!-- Div para submeter o arquivo -->
            <div class="container" style="display: none !important;" id="divSubmitArquivo">
                <div class="text-center mt-4">
                    <p class="display-4"> Submeter arquivo</p>
                    <div class="col-md-6 offset-md-3 ">
                        <hr>
                    </div>
                </div>

                <fieldset>

                    <form action="?r=/dashboad/uploadArquivo" method="post" enctype="multipart/form-data">
                        <div class="">
                            <div class="form-group mb-4">
                                <label for="inputNomeArquivo">Nome do arquivo</label>
                                <input type="text" class="form-control" name="arquivoNome" id="inputNomeArquivo"
                                    placeholder="Digite o nome do arquivo...">
                            </div>
                            <div class="form-group mb-5">
                                <label for="inputDescriçãoDoArquivo">Descrição</label>
                                <textarea class="form-control" name="arquivoDesc" id="exampleFormControlTextarea1"
                                    rows="2" placeholder="Digite uma descrição para o arquivo..."></textarea>
                            </div>
                            <div class="custom-file col-sm-4">
                                <input type="file" name="arquivo" class="custom-file-input" id="inputArquivo" lang="pt"
                                    required>
                                <label class="custom-file-label" for="inputArquivo">Escolher arquivo...</label>

                            </div>

                            <div class="form-row mt-5 ml-1">
                                <button type="submit" class="btn btn-outline-success">
                                    <i class="far fa-paper-plane"></i>
                                    Enviar
                                </button>
                            </div>

                        </div>

                    </form>

                </fieldset>
            </div>

            <!-- Div para listar os arquivos submetidos -->
            <div class="container" style="display: none !important;" id="divListaArquivos">
                <div class="text-center mt-4">
                    <p class="display-4"> Arquivos submetidos</p>
                    <div class="col-md-6 offset-md-3 ">
                        <hr>
                    </div>
                </div>

                <div class="ml-3 mb-0">
                    <label for="inputPesquisa">Pesquisar</label>
                </div>
                <form class="form-inline ml-3 mb-4 mt-0">

                    <input class="form-control mr-sm-2" type="search" placeholder="Buscar" aria-label="Search"
                        name="inputPesquisa" id="inputPesquisa">
                    <button class="btn btn-outline-success my-2 my-sm-0" type="submit">
                        <i class="fas fa-search"></i>
                        Pesquisar
                    </button>
                </form>

                <div class="container">
                    <table class="table table-hover table-striped">
                        <thead>
                            <tr>
                                <th scope="col">#</th>
                                <th scope="col">Nome do arquivo</th>
                                <th scope="col">Data de upload</th>
                                <th scope="col">Download</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <th scope="row">1</th>
                                <td>Mark</td>
                                <td>Otto</td>
                                <td>@mdo</td>
                            </tr>
                            <tr>
                                <th scope="row">2</th>
                                <td>Jacob</td>
                                <td>Thornton</td>
                                <td>@fat</td>
                            </tr>
                            <tr>
                                <th scope="row">3</th>
                                <td colspan="2">Larry the Bird</td>
                                <td>@twitter</td>
                            </tr>
                        </tbody>
                    </table>

                </div>


            </div>

        </div>
    </div>

    <script type="text/javascript">
        function mostraDivUpload() {

            document.getElementById("divSubmitArquivo").style.display = "block";
            document.getElementById("divListaArquivos").style.display = "none";
            document.getElementById("divApresentacao").style.display = "none";

        }
        function monstaDivLista() {

            document.getElementById("divListaArquivos").style.display = "block";
            document.getElementById("divSubmitArquivo").style.display = "none";
            document.getElementById("divApresentacao").style.display = "none";
        }
        function mostraDivApresentacao() {

            document.getElementById("divListaArquivos").style.display = "none";
            document.getElementById("divSubmitArquivo").style.display = "none";
            document.getElementById("divApresentacao").style.display = "block";
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