<?php
    include("../padrao/cabecalho.php");
    include("../requisicoesphp/funcoes.php");

    verificaLogin();

    include("../requisicoesphp/conexao.php");

    $id_usuario = $_SESSION['matuser'];

    $resultado = mysqli_query($conexao, "SELECT * FROM serie WHERE mat_usuario = '$id_usuario'");

      $a = mysqli_num_rows($resultado);


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
    <a class="navbar-brand" href="../administrador/dashboard.php">Seja bem vindo ao painel de controle admistrador GyMaravilha, <?= $_SESSION['nome'] ?></a>
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
        <h1>Você está inserindo uma série para o usuário: <?= $_SESSION['nomuser'] ?>,  de matricula: <?= $_SESSION['matuser'] ?></h1>
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
          <a class="nav-link" href="insere_dados_avaliacao.php">Disponibilizar dados de avaliação</a>
        </li>
      </ul>

      <body class="bg-dark">
        <div class="container">
          <br><br>
              <form class="" action="../requisicoesphp/inserir_serie.php" method="post">
                <table>
                  <tr>
                    <td> <label for=""> Exercicio </label> </td>
                    <td> <label for=""> Repetições </label> </td>
                    <td> <label for=""> Quantidade </label> </td>
                  </tr>
                  <tr>
                      <td><input type="text" name="ex1"></td>
                      <td><input type="text" name="rep1"></td>
                      <td><input type="text" name="qtd1"></td>
                  </tr>
                  <tr>
                      <td><input type="text" name="ex2"></td>
                      <td><input type="text" name="rep2"></td>
                      <td><input type="text" name="qtd2"></td>
                  </tr>
                  <tr>
                      <td><input type="text" name="ex3"></td>
                      <td><input type="text" name="rep3"></td>
                      <td><input type="text" name="qtd3"></td>
                  </tr>
                  <tr>
                      <td><input type="text" name="ex4"></td>
                      <td><input type="text" name="rep4"></td>
                      <td><input type="text" name="qtd4"></td>
                  </tr>
                    <tr>
                        <td><input type="text" name="ex5"></td>
                        <td><input type="text" name="rep5"></td>
                        <td><input type="text" name="qtd5"></td>
                    </tr>
                    <tr>
                        <td><input type="text" name="ex6"></td>
                        <td><input type="text" name="rep6"></td>
                        <td><input type="text" name="qtd6"></td>
                    </tr>
                    <tr>
                        <td><input type="text" name="ex7"></td>
                        <td><input type="text" name="rep7"></td>
                        <td><input type="text" name="qtd7"></td>
                    </tr>
                    <tr>
                        <td><input type="text" name="ex8"></td>
                        <td><input type="text" name="rep8"></td>
                        <td><input type="text" name="qtd8"></td>
                    </tr>
                    <tr>
                        <td><input type="text" name="ex9"></td>
                        <td><input type="text" name="rep9"></td>
                        <td><input type="text" name="qtd9"></td>
                    </tr>
                    <tr>
                        <td><input type="text" name="ex10"></td>
                        <td><input type="text" name="rep10"></td>
                        <td><input type="text" name="qtd10"></td>
                    </tr>
                    <tr>
                        <td><input type="text" name="ex11"></td>
                        <td><input type="text" name="rep11"></td>
                        <td><input type="text" name="qtd11"></td>
                    </tr>
                    <tr>
                        <td><input type="text" name="ex12"></td>
                        <td><input type="text" name="rep12"></td>
                        <td><input type="text" name="qtd12"></td>
                    </tr>
                    <tr>
                        <td><h3>Observações</h3></td>
                        <td><textarea rows="6" cols="20" name="observacao"></textarea></td>
                        <td><input type="date" name="data_treino"></td>
                    </tr>

                  <tr>
                    <td> <input type="submit"class="btn btn-primary btn-block" name="enviar" value="Cadastrar série"> </td>
                  </tr>

            </table>
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
<?php
 include("../padrao/rodape.php");

 
?>
</html>
