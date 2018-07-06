<!DOCTYPE html>
<?php
  include("../padrao/cabecalho.php");
  include("../requisicoesphp/funcoes.php");

  verificaLogin();
  verificaBloqueio();
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

          <!-- Card Columns Example Social Feed-->
          <div class="mb-0 mt-4">
            <i>></i> Unidades</div>
          <hr class="mt-2">
          <div class="card-columns">
            <!-- Example Social Card-->
            <div class="card mb-3">
              <a href="#">
                <img class="card-img-top img-fluid w-100" src="../images/academia-campo-grande.png" alt="">
              </a>
              <div class="card-body">
                <h6 class="card-title mb-1">Campo Grande</h6>
                <p class="card-text small"> R. Laplace, 31 - Campo Grande, Rio de Janeiro - RJ, 23080-340
                  <br>
                  <h6>Horários</h6>
                  seg-sex: 6:00 - 23:00
                  <br>
                  sab-dom: 10:00 - 20:00

                </p>
              </div>


            </div>

            <div class="card mb-3">
              <a href="#">
                <img class="card-img-top img-fluid w-100" src="../images/academia-bangu.jpg" alt="">
              </a>
              <div class="card-body">
                <h6 class="card-title mb-1">Bangu</h6>
                <p class="card-text small"> Rua Fonseca, 534 - Bangu, Rio de Janeiro - RJ, 21820-005
                  <br>
                  <h6>Horários</h6>
                  seg-sex: 6:00 - 23:00
                  <br>
                  sab-dom: 10:00 - 20:00

                </p>
              </div>


            </div>


            <div class="card mb-3">
              <a href="#">
                <img class="card-img-top img-fluid w-100" src="../images/academia-seropedica.jpg" alt="">
              </a>
              <div class="card-body">
                <h6 class="card-title mb-1">Seropedica</h6>
                <p class="card-text small">  Av. Ministro Fernando Costa, 951 - Fazenda Caxias, RJ, 23890-000
                  <br>
                  <h6>Horários</h6>
                  seg-sex: 6:00 - 23:00
                  <br>
                  sab-dom: 10:00 - 20:00

                </p>
              </div>


            </div>


            <div class="card mb-3">
              <a href="#">
                <img class="card-img-top img-fluid w-100" src="../images/academia-realengo.jpg" alt="">
              </a>
              <div class="card-body">
                <h6 class="card-title mb-1">Realengo</h6>
                <p class="card-text small"> Rua Fonseca, 240 - Realengo, Rio de Janeiro - RJ, 21820-005
                  <br>
                  <h6>Horários</h6>
                  seg-sex: 6:00 - 23:00
                  <br>
                  sab-dom: 10:00 - 20:00

                </p>
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
