
<!DOCTYPE html>
<?php
  include("../padrao/cabecalho.php");
  include("../requisicoesphp/funcoes.php");

  verificaLogin();
  //verificaBloqueio();
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
<<<<<<< HEAD
=======
        <li class="nav-item" data-toggle="tooltip" data-placement="right" title="Consultar unidades">
          <a class="nav-link" href="insere_dados_avaliacao.php">
            <i>></i>
            <span class="nav-link-text">Disponibilizar horários para avaliações</span>
          </a>
        </li>
>>>>>>> 80e1c00658a23f32aa88e143e6d8251885b5b8e5
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
<center><h2>Tenha Paciência, atenda bem, ganhe mais!</h2></center>
<br><br>
<h4>Ter paciência é essencial para quem quer vender bem e para qualquer tipo de cliente. Mas quando o cliente trata a compra como uma batalha é ainda mais difícil manter o controle e não estragar a venda. Ao se antecipar e não escutar tudo o que cliente tem a dizer o vendedor corre o risco de perder uma oportunidade de negócio. Além disso, reclamar da atitude do cliente torna mais difícil saber como agir na negociação. Confira abaixo quatro recomendações de especialistas na área de vendas para lidar com clientes difíceis.
</h4>
<br>
<h5><b>1. Mantenha a calma</b>

Tenha paciência e mantenha o equilíbrio emocional. No fundo, o cliente está em busca de algo, uma solução ou uma resposta. O mau humor pode ser resultado de um dia difícil, por isso, ao se distanciar, o atendimento flui melhor.

No caso da pós-venda, a não ser que o problema realmente tenha sido culpa do vendedor, a impaciência do cliente decorre de experiências ruins e que o frustraram de alguma maneira. Por isso, a máxima de que o cliente tem razão deve ser respeitada.
</h5>
<br>
<h5><b>2. Adapte-se ao estilo do cliente</b>

Durante o primeiro contato já é possível perceber se a pessoa para quem você está tentando vender é ansiosa, detalhista ou extrovertida, por exemplo. “Se espelhe no jeito dela, se ela é muito séria, fique sério. Algumas pessoas vão direto ao ponto e outras dependem mais do vendedor”.

Quem trabalha com atendimento tem de prestar atenção nos sinais dos clientes, pois cada abordagem deve ser diferente.

Mesmo que a venda não seja fechada, o cliente mais exigente deve ser respeitado e tratado com cordialidade. “Todo cliente que aparentemente é difícil de lidar precisa ser bem atendido. Pode ser que não gere resultado naquela hora, mas pode gerar negócios futuros”.
</h5><br>
<h5><b>2. Foque na solução do problema</b>

Descobrir o motivo pelo qual o cliente procura sua empresa é o caminho mais indicado para lidar com qualquer tipo de cliente. Ao se deparar com um cliente agressivo, especialistas contam que o melhor é não presumir o que ele deseja e deixar que ele se expresse.

As reclamações dos clientes também são uma forma de aprendizado para a empresa e para os vendedores. “Quando o cliente reclama é porque ele ainda se importa. Ele está tentando entrar em um acordo”. Assim, para garantir que ele saia satisfeito o esforço deve ser centralizado em soluções.
</h5><br>
<h5><b>4. Estabeleça limites</b>

Insatisfação, impaciência ou agressividade têm limite. Certo afirma que a melhor forma de lidar com um cliente que se descontrola é romper o vínculo. Se o consumidor perder a razão, em situações extremas, a melhor solução é devolver o dinheiro ou interromper o contrato de serviço. Você pode perder o cliente, mas evitará que as dores de cabeça sejam recorrentes.
</h5>
                </div>


              </div>



            <!-- Example Social Card-->


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
