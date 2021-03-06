<?php
    include("../padrao/cabecalho.php");
    include("../requisicoesphp/funcoes.php");

    verificaLogin();

    include("../requisicoesphp/conexao.php");

?>

<body class="fixed-nav sticky-footer bg-dark" id="page-top">
  <!-- Navigation-->
  <nav class="navbar navbar-expand-lg navbar-dark bg-dark fixed-top" id="mainNav">
    <a class="navbar-brand" href="index.html">Seja bem vindo ao painel de controle admistrador GyMaravilha, <?= $_SESSION['nome'] ?></a>
    <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarResponsive">
      <ul class="navbar-nav navbar-sidenav" id="exampleAccordion">
        <li class="nav-item" data-toggle="tooltip" data-placement="right" title="Home">
          <a class="nav-link" href="../administrador/dashboard.php">
            <i>H</i>
            <span class="nav-link-text">o m e</span>
          </a>
        </li>
        <li class="nav-item" data-toggle="tooltip" data-placement="right" title="Alterar dados">
          <a class="nav-link" href='../administrador/novo_usuario.php'>
            <i>></i>
            <span class="nav-link-text">Cadastrar novo usuário</span>
          </a>
        </li>
        <li class="nav-item" data-toggle="tooltip" data-placement="right" title="Consultar horários de pico">
          <a class="nav-link" href="busca_usuario.php">
            <i>></i>
            <span class="nav-link-text">Buscar Usuário</span>
          </a>
        </li>
        <li class="nav-item" data-toggle="tooltip" data-placement="right" title="Consultar unidades">
          <a class="nav-link" href="#">
            <i>></i>
            <span class="nav-link-text">Disponibilizar horários para avaliações</span>
          </a>
        </li>
        <li class="nav-item" data-toggle="tooltip" data-placement="right" title="Avaliações">
          <a class="nav-link" href="lista_profissionais.php">
            <i>></i>
            <span class="nav-link-text">Listar Profissionais</span>
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
      <center>
        <h1>Você está alterando o usuário, <?= $_SESSION['nomuser'] ?>,  de matricula: <?= $_SESSION['matuser'] ?></h1>
      </center>

     <ul class="nav nav-tabs">
        <li class="nav-item">
          <a class="nav-link" href="altera_dados.php">Alterar Conta de usuário</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="bloqueia_usuario.php">Bloquear Conta de usuário</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="exclui_usuario.php">Excluir Conta de usuario</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="insere_serie.php">Disponibilizar Série</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#">Disponibilizar dados de avaliação</a>
        </li>
      </ul>

      <body class="bg-dark">
        <div class="container">
          <div class="card card-login mx-auto mt-5">
            <div class="card-header">Dados de avaliação</div>
            <div class="card-body">
              <form class="" action="../requisicoesphp/inserir_dados_avaliacao.php" method="post">
                <div class="form-group">
                  <label for="exampleInputEmail1">Peso</label>
                  <input class="form-control" id="exampleInputEmail1" type="text" name="peso" value="" placeholder="Digite o novo nome do Usuário">
                </div>
                <div class="form-group">
                  <label for="exampleInputEmail1">Altura</label>
                  <input class="form-control" id="exampleInputEmail1" type="text" name="altura" value="" placeholder="Digite o novo email do Usuário">
                </div>
                <div class="form-group">
                  <label for="exampleInputEmail1">Circunferencia de Braço</label>
                  <input class="form-control" id="exampleInputEmail1" type="text" name="cirBraco" value="" placeholder="Digite seu novo e-mail">
                </div>
                <div class="form-group">
                  <label for="exampleInputPassword1">CircunferÊncia de Peito</label>
                  <input class="form-control" id="exampleInputPassword1" type="text" name="cirPeito" placeholder="Digite sua nova senha">
                </div>
                <div class="form-group">
                  <label for="exampleInputPassword1">CircunferÊncia da Cintura</label>
                  <input class="form-control" id="exampleInputPassword1" type="text" name="cirCintura" placeholder="Digite sua nova senha">
                </div>
                <div class="form-group">
                  <label for="exampleInputPassword1">CircunferÊncia da Coxa</label>
                  <input class="form-control" id="exampleInputPassword1" type="text" name="cirCoxa" placeholder="Digite sua nova senha">
                </div>
                <div class="form-group">
                  <label for="exampleInputPassword1">CircunferÊncia de Panturrilha</label>
                  <input class="form-control" id="exampleInputPassword1" type="text" name="cirPanturrilha" placeholder="Digite sua nova senha">
                </div>
                <div class="form-group">

                </div>
                <input class="btn btn-primary btn-block" type="submit" name="enviar" value="Alterar">
                <center>
                <td><a href="busca_usuario.php" class="btn btn-default">Cancelar</a></td>
              </center>
              </form>
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

<?php include("../padrao/rodape.php") ?>
