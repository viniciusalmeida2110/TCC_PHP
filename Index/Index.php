<html>

<head>
    <title>PROJETO TCC</title>
    <meta http-equiv="X-UA-Compatible" content="IE-edge">
    <meta name="viewport" content="width=devide-width, initial-scale=1">

    <link href="../Bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <link href="../_CSS/styles.css" rel="stylesheet">



</head>

<body>
    <header>
        <div id="Principal">

            <div class="background01">
                <!----------------------------------------------------------------------------------------->
                <!--<object type="text/html" data="../nav-bar.html"></object>-->
                <div id="Nav-Bar">

                    <nav class="navbar navbar-expand-lg navbar-light">
                        <div class="container-fluid">
                            <div class="navbar-header">
                                <a href="../IndexProject/Index.html" class="navbar-brand">
                        Logo Site
                        </a>

                                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#menuCelular" aria-controls="menu" aria-expanded="false" aria-label="Menu Colapso">
                                <span class="navbar-toggler-icon text-black"></span>
                        </button>
                            </div>

                            <div id="menuCelular" class="collapse navbar-collapse">

                                <ul class="navbar-nav ml-auto text-light nav-menu">
                                    <li class="navbar-text"><a class="nav-link text-black-50 font-weight-bold" href="../Index/Index.php">Home</a></li>
                                    <li class="navbar-text navHistorias"><a class="nav-link text-black-50 font-weight-bold" href="#historias">Historia</a></li>
                                    <li class="navbar-text nav-instituicoes"><a class="nav-link text-black-50 font-weight-bold" href="../Institutions/Institutions.php">Instituições</a></li>
                                    <li>
                                        <a class="nav-link" href="#">
                                            <button type="button" class="btn btn-outline-success janelaLogin" data-toggle="modal" data-target="#telaLogin">Login</button>
                                        </a>


                                        <!--Mostrar Janela Login-->
                                        <div class="container-fluid">
                                            <div class="modal fade" id="telaLogin" tabindex="-1" role="dialog" aria-labelledby="" aria-hidden="true">
                                                <div class="modal-dialog modal-dialog-centered" role="login">
                                                    <div class="modal-content">
                                                        <div class="modal-header">
                                                            <h5 class="modal-title text-black-50" id="tituloTela">Faca seu Login</h5>
                                                            <button type="button" class="close" data-dismiss="modal" aria-label="Fechar">
                                                                <span aria-hidden="true">&times;</span>
                                                            </button>
                                                        </div>
                                                        <div class="modal-body">
                                                            <form class="form-horizontal">
                                                                <div class="form-group row">
                                                                    <div class="col-sm-10">
                                                                        <input class="form-control" type="text" id="login-email" placeholder="Login/Email:">
                                                                    </div>
                                                                </div>
                                                                <div class="form-group row">
                                                                    <div class="col-sm-10">
                                                                        <input class="form-control" type="password" id="senha" placeholder="Senha:">
                                                                    </div>
                                                                </div>
                                                            </form>
                                                        </div>
                                                        <div class="modal-footer">
                                                            <button type="button" class="btn btn-info" data-dismiss="modal">Login</button>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <!--Fechando modal/ Fechando tela login-->

                                        </div>


                                    </li>

                                    <!---------------------------------------------------------------------------->
                                    <!--Botao Cadastro--> 
                                    <li>
                                        <div class="nav-link">
                                            <button type="button" class="btn btn-outline-info" data-toggle="dropdown" data-target="">Cadastro</button>


                                            <form class="dropdown-menu p-3 dropdown-menu-right mr-5 ">
                                                <div class="form-group">
                                                    <button type="button" class="btn btn-info" routerLinkActive="active">Dependente</button>
                                                </div>
                                                <div class="form-group">
                                                    <button type="button" class="btn btn-secondary" routerLinkActive="active">Instituição</button>

                                                </div>

                                            </form>

                                        </div>
                                    </li>



                                </ul>
                            </div>
                        </div>
                    </nav>


                </div>
            </div>
    </header>
    <!--Fechando o Div:Nav-Bar-->


    <!----------------------------------------------------------------------------------------->






    <!----------------------------------------------------------------------------------------->

    <section class="background2">

        <div class="container-fluid">
            <div id="historias">
                <h1 class="text-center">Inicio da Historia</h1>
                <p class="text-center">Proin quis sapien id mi fringilla pharetra. Nullam vitae sapien sit amet risus elementum vehicula ac sed felis. Nullam molestie lobortis magna ac finibus. Aenean consequat sagittis tempor. Morbi mollis nibh et turpis tincidunt, nec aliquam
                    sem tempor. Phasellus mattis ligula ac urna mollis, in porttitor justo faucibus. In efficitur vitae metus tristique varius. Praesent id arcu auctor, ornare odio eget, aliquet urna. Nam a ornare dui.</p>

                <p class="text-center"> Pellentesque rutrum vulputate risus, in placerat ex facilisis vitae. Quisque hendrerit rutrum lorem, vitae venenatis velit porta non. Suspendisse at urna dapibus, volutpat risus at, lobortis ex. Morbi et nisl eget arcu ultrices rutrum.
                    Praesent et enim et orci euismod mattis. Mauris rhoncus, sem sit amet porttitor condimentum, metus ex laoreet lorem, ac blandit nisi libero a diam. Aliquam erat volutpat. Mauris faucibus lorem eu imperdiet porta. Etiam vitae egestas
                    nisl. Curabitur ac erat nunc. Morbi dictum blandit felis, a feugiat ligula luctus eget. Sed pharetra fringilla placerat. In facilisis auctor risus. Nulla vel lectus sapien. Pellentesque vel mauris libero. Mauris placerat dictum diam
                    sed tincidunt.</p>

                <p class="text-center"> Fusce ac libero non justo volutpat venenatis in non elit. Cras fermentum ultricies rhoncus. Aliquam nec nisl ut erat congue faucibus et at ex. Nunc rhoncus nisi leo, in sagittis tellus ullamcorper id. Sed sit amet massa lacinia, euismod
                    nulla in, gravida leo. Etiam cursus porta felis ut tempus. Phasellus tincidunt finibus nulla et laoreet. Nunc est ex, pretium at odio sit amet, euismod volutpat ex. Vestibulum et justo at libero imperdiet gravida. Fusce sed egestas
                    enim. Pellentesque euismod, sapien eget pellentesque ornare, sem sem blandit neque, vel consequat dolor mauris in diam. Etiam accumsan id nisl ut dignissim. Nullam ac vulputate sem. Etiam et nunc pharetra dui viverra venenatis in ac
                    dolor. Sed maximus urna a volutpat egestas. Vivamus in interdum nisi.</p>

                <p class="text-center"> Etiam non scelerisque neque. Donec tincidunt sollicitudin neque, et fermentum orci imperdiet a. Praesent sagittis ultricies elit eu consectetur. Nam non molestie ligula. Aenean ornare feugiat leo, ut porta ante volutpat sed. Fusce porttitor
                    bibendum justo nec suscipit. Donec mattis tristique nulla sed viverra. Suspendisse id turpis a nunc sodales faucibus. Proin eu ligula feugiat, malesuada velit vitae, tempus lacus. Nulla finibus volutpat urna, et egestas mi egestas
                    eget. Phasellus urna ligula, finibus vitae lacinia quis, cursus ac nunc.</p>

                <p class="text-center"> Cras a fermentum massa. Pellentesque suscipit ut mauris at ultrices. Nulla malesuada eget leo ac condimentum. Maecenas ultrices neque nibh, at dictum libero pulvinar at. Praesent euismod sagittis neque, eget eleifend nisl accumsan a. Suspendisse
                    euismod tristique lorem, ac dictum urna mattis id. Sed nec lectus dui.</p>
            </div>
        </div>


    </section>


    <!----------------------------------------------------------------------------------------->












    </div>
    <!--Fechando o DivPrincipal-->



    <!----------------------------------------------------------------------------------------->
    <script src="https://unpkg.com/popper.js@1.15.0/dist/umd/popper.min.js"></script>
    <script src="../Bootstrap/js/jquery-3.4.1.min.js "></script>
    <script src="../Bootstrap/js/bootstrap.min.js"></script>
    <script src="Index.js" type="text/javascript"></script>

</body>

</html>