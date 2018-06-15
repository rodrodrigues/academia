<?php
  include("../padrao/cabecalho.php");
  include("../requisicoesphp/funcoes.php");

  verificaLogin();
  verificaBloqueio();

 ?>

<?php

  include("../requisicoesphp/conexao.php");

  $matricula = $_SESSION['matricula'];

  $query = "SELECT * FROM serie WHERE mat_usuario = '$matricula'";

  $resultado = mysqli_query($conexao, $query);

  if ($resultado) {

      $row = mysqli_fetch_assoc($resultado);

 ?>

<html lang="en">

<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">
  <title>Home</title>
  <!-- Bootstrap core CSS-->
  <link href="../vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <!-- Custom fonts for this template-->
  <link href="../vendor/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">
  <!-- Page level plugin CSS-->
  <link href="../vendor/datatables/dataTables.bootstrap4.css" rel="stylesheet">
  <!-- Custom styles for this template-->
  <link href="../css/sb-admin.css" rel="stylesheet">
</head>

<body class="fixed-nav sticky-footer bg-dark" id="page-top">
  <!-- Navigation-->
  <nav class="navbar navbar-expand-lg navbar-dark bg-dark fixed-top" id="mainNav">
    <a class="navbar-brand" href="../usuario/dashboard.php">Seja bem vindo ao painel de controle GyMaravilha, <?= $_SESSION['nome'] ?></a>
    <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarResponsive">
      <ul class="navbar-nav navbar-sidenav" id="exampleAccordion">
        <li class="nav-item" data-toggle="tooltip" data-placement="right" title="Home">
          <a class="nav-link" href="../usuario/dashboard.php">
            <i>H</i>
            <span class="nav-link-text">o m e</span>
          </a>
        </li>
        <li class="nav-item" data-toggle="tooltip" data-placement="right" title="Alterar dados">
          <a class="nav-link" href="../usuario/altera_dados.php">
            <i>></i>
            <span class="nav-link-text">Alterar dados</span>
          </a>
        </li>
        <li class="nav-item" data-toggle="tooltip" data-placement="right" title="Consultar horários de pico">
          <a class="nav-link" href="consulta_horario.php">
            <i>></i>
            <span class="nav-link-text">Consultar horários de pico</span>
          </a>
        </li>
        <li class="nav-item" data-toggle="tooltip" data-placement="right" title="Consultar unidades">
          <a class="nav-link" href="consulta_unidades.php">
            <i>></i>
            <span class="nav-link-text">Consultar unidades</span>
          </a>
        </li>
        <li class="nav-item" data-toggle="tooltip" data-placement="right" title="Avaliações">
          <a class="nav-link" href="marca_avaliacao.php">
            <i>></i>
            <span class="nav-link-text">Avaliações</span>
          </a>
        </li>
        <li class="nav-item" data-toggle="tooltip" data-placement="right" title="Treinos com personal">
          <a class="nav-link" href="marca_treino.php">
            <i>></i>
            <span class="nav-link-text">Treinos com personal</span>
          </a>
        </li>
        <li class="nav-item" data-toggle="tooltip" data-placement="right" title="Consultar séries">
          <a class="nav-link" href="consultar_serie.php">
            <i>></i>
            <span class="nav-link-text">Consultar séries</span>
          </a>
        </li>
      </ul>
      <ul class="navbar-nav sidenav-toggler">
        <li class="nav-item">
          <a class="nav-link text-center" id="sidenavToggler">
            <i class="fa fa-fw fa-angle-left"></i>
          </a>
        </li>
      </ul>
      <ul class="navbar-nav ml-auto">

        <li class="nav-item">
          <a class="nav-link" data-toggle="modal" data-target="#exampleModal">
            <i class="fa fa-fw fa-sign-out"></i>Logout</a>
        </li>
      </ul>
    </div>
  </nav>
  <div class="content-wrapper">
    <div class="container-fluid">



      <body class="bg-dark">
        <div class="container">
          <div class="card card-login mx-auto mt-5">
            <center>
            <div class="card-header">Sua(s) série(s)</div>
          </center>
            <div class="card-body">
              <table>
                <tr>
                  <td> Exercicio </td>
                  <td> Repetições </td>
                  <td> Quantidade </td>
                </tr>
                <tr>
                  <td> <?= $row['exercicio1'] ?> </td>
                  <td> <?= $row['repeticao1'] ?> </td>
                  <td> <?= $row['quantidade1'] ?> </td>
                </tr>
                <tr>
                  <td> <?= $row['exercicio2'] ?> </td>
                  <td> <?= $row['repeticao2'] ?> </td>
                  <td> <?= $row['quantidade2'] ?> </td>
                </tr>
                <tr>
                  <td> <?= $row['exercicio3'] ?> </td>
                  <td> <?= $row['repeticao3'] ?> </td>
                  <td> <?= $row['quantidade3'] ?> </td>
                </tr>
                <tr>
                  <td> <?= $row['exercicio4'] ?> </td>
                  <td> <?= $row['repeticao4'] ?> </td>
                  <td> <?= $row['quantidade4'] ?> </td>
                </tr>
                  <tr>
                      <td> <?= $row['exercicio5'] ?> </td>
                      <td> <?= $row['repeticao5'] ?> </td>
                      <td> <?= $row['quantidade5'] ?> </td>
                  </tr>
                  <tr>
                      <td> <?= $row['exercicio6'] ?> </td>
                      <td> <?= $row['repeticao6'] ?> </td>
                      <td> <?= $row['quantidade6'] ?> </td>
                  </tr>
                  <tr>
                      <td> <?= $row['exercicio7'] ?> </td>
                      <td> <?= $row['repeticao7'] ?> </td>
                      <td> <?= $row['quantidade7'] ?> </td>
                  </tr>
                  <tr>
                      <td> <?= $row['exercicio8'] ?> </td>
                      <td> <?= $row['repeticao8'] ?> </td>
                      <td> <?= $row['quantidade8'] ?> </td>
                  </tr>
                  <tr>
                      <td> <?= $row['exercicio9'] ?> </td>
                      <td> <?= $row['repeticao9'] ?> </td>
                      <td> <?= $row['quantidade9'] ?> </td>
                  </tr>
                  <tr>
                      <td> <?= $row['exercicio10'] ?> </td>
                      <td> <?= $row['repeticao10'] ?> </td>
                      <td> <?= $row['quantidade10'] ?> </td>
                  </tr>
                  <tr>
                      <td> <?= $row['exercicio11'] ?> </td>
                      <td> <?= $row['repeticao11'] ?> </td>
                      <td> <?= $row['quantidade11'] ?> </td>
                  </tr>
                  <tr>
                      <td> <?= $row['exercicio12'] ?> </td>
                      <td> <?= $row['repeticao12'] ?> </td>
                      <td> <?= $row['quantidade12'] ?> </td>
                  </tr>
              </table>


              <?php } else { ?>

                    <meta charset="utf-8">
                    <meta http-equiv="X-UA-Compatible" content="IE=edge">
                    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
                    <meta name="description" content="">
                    <meta name="author" content="">
                    <title>Home</title>
                    <!-- Bootstrap core CSS-->
                    <link href="../vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
                    <!-- Custom fonts for this template-->
                    <link href="../vendor/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">
                    <!-- Page level plugin CSS-->
                    <link href="../vendor/datatables/dataTables.bootstrap4.css" rel="stylesheet">
                    <!-- Custom styles for this template-->
                    <link href="../css/sb-admin.css" rel="stylesheet">
                  </head>

                  <body class="fixed-nav sticky-footer bg-dark" id="page-top">
                    <!-- Navigation-->
                    <nav class="navbar navbar-expand-lg navbar-dark bg-dark fixed-top" id="mainNav">
                      <a class="navbar-brand" href="index.html">Seja bem vindo ao painel de controle GyMaravilha, <?= $_SESSION['nome'] ?></a>
                      <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
                        <span class="navbar-toggler-icon"></span>
                      </button>
                      <div class="collapse navbar-collapse" id="navbarResponsive">
                        <ul class="navbar-nav navbar-sidenav" id="exampleAccordion">
                          <li class="nav-item" data-toggle="tooltip" data-placement="right" title="Home">
                            <a class="nav-link" href="../usuario/dashboard.php">
                              <i>H</i>
                              <span class="nav-link-text">o m e</span>
                            </a>
                          </li>
                          <li class="nav-item" data-toggle="tooltip" data-placement="right" title="Alterar dados">
                            <a class="nav-link" href="../usuario/altera_dados.php">
                              <i>></i>
                              <span class="nav-link-text">Alterar dados</span>
                            </a>
                          </li>
                          <li class="nav-item" data-toggle="tooltip" data-placement="right" title="Consultar horários de pico">
                            <a class="nav-link" href="consulta_horario.php">
                              <i>></i>
                              <span class="nav-link-text">Consultar horários de pico</span>
                            </a>
                          </li>
                          <li class="nav-item" data-toggle="tooltip" data-placement="right" title="Consultar unidades">
                            <a class="nav-link" href="consulta_unidades.php">
                              <i>></i>
                              <span class="nav-link-text">Consultar unidades</span>
                            </a>
                          </li>
                          <li class="nav-item" data-toggle="tooltip" data-placement="right" title="Avaliações">
                            <a class="nav-link" href="marca_avaliacao.php">
                              <i>></i>
                              <span class="nav-link-text">Avaliações</span>
                            </a>
                          </li>
                          <li class="nav-item" data-toggle="tooltip" data-placement="right" title="Treinos com personal">
                            <a class="nav-link" href="marca_treino.php">
                              <i>></i>
                              <span class="nav-link-text">Treinos com personal</span>
                            </a>
                          </li>
                          <li class="nav-item" data-toggle="tooltip" data-placement="right" title="Consultar séries">
                            <a class="nav-link" href="consultar_serie.php">
                              <i>></i>
                              <span class="nav-link-text">Consultar séries</span>
                            </a>
                          </li>
                        </ul>
                        <ul class="navbar-nav sidenav-toggler">
                          <li class="nav-item">
                            <a class="nav-link text-center" id="sidenavToggler">
                              <i class="fa fa-fw fa-angle-left"></i>
                            </a>
                          </li>
                        </ul>
                        <ul class="navbar-nav ml-auto">

                          <li class="nav-item">
                            <a class="nav-link" data-toggle="modal" data-target="#exampleModal">
                              <i class="fa fa-fw fa-sign-out"></i>Logout</a>
                          </li>
                        </ul>
                      </div>
                    </nav>
                    <div class="content-wrapper">
                      <div class="container-fluid">

                      <body class="bg-dark">
                    <div class="container">
                      <div class="card card-login mx-auto mt-5">
                        <div class="card-body">
                            <h3>Você não tem uma série disponível </h3>


                          <div class="text-center">


                          </div>
                        </div>
                        <center>
                        <p id="msg_js" class="mensagem">
                          <?php
                             if (isset($_SESSION['mensagem'])) {
                               echo $_SESSION['mensagem'];
                               unset($_SESSION['mensagem']);
                             }
                         ?>
                       </p>
                     </center>
                      </div>

                    </div>
                <!-- /.container-fluid-->
                <!-- /.content-wrapper-->
                <footer class="sticky-footer">
                  <div class="container">
                    <div class="text-center">
                      <small>Copyright © GyMaravilha 2018</small>
                    </div>
                  </div>
                </footer>
                <!-- Scroll to Top Button-->
                <a class="scroll-to-top rounded" href="#page-top">
                  <i class="fa fa-angle-up"></i>
                </a>
                <!-- Logout Modal-->
                <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                  <div class="modal-dialog" role="document">
                    <div class="modal-content">
                      <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLabel">Deseja realmente sair?</h5>
                        <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                          <span aria-hidden="true">×</span>
                        </button>
                      </div>
                      <div class="modal-body">Selecione "Sair" se realmente deseja encerrar sua sessão</div>
                      <div class="modal-footer">
                        <button class="btn btn-secondary" type="button" data-dismiss="modal">Cancelar</button>
                        <a class="btn btn-primary" href="../usuario/doLogout.php">Sair</a>
                      </div>
                    </div>
                  </div>
                </div>
                <!-- Bootstrap core JavaScript-->
                <script src="../vendor/jquery/jquery.min.js"></script>
                <script src="../vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
                <!-- Core plugin JavaScript-->
                <script src="../vendor/jquery-easing/jquery.easing.min.js"></script>
                <!-- Page level plugin JavaScript-->
                <script src="../vendor/chart.js/Chart.min.js"></script>
                <script src="../vendor/datatables/jquery.dataTables.js"></script>
                <script src="../vendor/datatables/dataTables.bootstrap4.js"></script>
                <!-- Custom scripts for all pages-->
                <script src="../js/sb-admin.min.js"></script>
                <!-- Custom scripts for this page-->
                <script src="../js/sb-admin-datatables.min.js"></script>
                <script src="../js/sb-admin-charts.min.js"></script>
              </div>
            </body>
            <?php
             include("../padrao/rodape.php");
            ?>
            </html>



                  <?php } ?>
              <div class="text-center">


              </div>
            </div>
            <center>
            <p id="msg_js" class="mensagem">
              <?php
                 if (isset($_SESSION['mensagem'])) {
                   echo $_SESSION['mensagem'];
                   unset($_SESSION['mensagem']);
                 }
             ?>
           </p>
         </center>
          </div>

        </div>
    <!-- /.container-fluid-->
    <!-- /.content-wrapper-->
    <footer class="sticky-footer">
      <div class="container">
        <div class="text-center">
          <small>Copyright © GyMaravilha 2018</small>
        </div>
      </div>
    </footer>
    <!-- Scroll to Top Button-->
    <a class="scroll-to-top rounded" href="#page-top">
      <i class="fa fa-angle-up"></i>
    </a>
    <!-- Logout Modal-->
    <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
      <div class="modal-dialog" role="document">
        <div class="modal-content">
          <div class="modal-header">
            <h5 class="modal-title" id="exampleModalLabel">Deseja realmente sair?</h5>
            <button class="close" type="button" data-dismiss="modal" aria-label="Close">
              <span aria-hidden="true">×</span>
            </button>
          </div>
          <div class="modal-body">Selecione "Sair" se realmente deseja encerrar sua sessão</div>
          <div class="modal-footer">
            <button class="btn btn-secondary" type="button" data-dismiss="modal">Cancelar</button>
            <a class="btn btn-primary" href="../usuario/doLogout.php">Sair</a>
          </div>
        </div>
      </div>
    </div>
    <!-- Bootstrap core JavaScript-->
    <script src="../vendor/jquery/jquery.min.js"></script>
    <script src="../vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
    <!-- Core plugin JavaScript-->
    <script src="../vendor/jquery-easing/jquery.easing.min.js"></script>
    <!-- Page level plugin JavaScript-->
    <script src="../vendor/chart.js/Chart.min.js"></script>
    <script src="../vendor/datatables/jquery.dataTables.js"></script>
    <script src="../vendor/datatables/dataTables.bootstrap4.js"></script>
    <!-- Custom scripts for all pages-->
    <script src="../js/sb-admin.min.js"></script>
    <!-- Custom scripts for this page-->
    <script src="../js/sb-admin-datatables.min.js"></script>
    <script src="../js/sb-admin-charts.min.js"></script>
  </div>
</body>
<?php
 include("../padrao/rodape.php");
?>
</html>
