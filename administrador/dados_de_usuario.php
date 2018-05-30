<?php
  include("../padrao/cabecalho.php");
  include("../requisicoesphp/funcoes.php");

  verificaLogin();

 ?>

 <h1>Você está alterando o usuário de matricula: <?= $_SESSION['matuser'] ?></h1>

<ul class="nav nav-tabs">
   <li class="nav-item">
     <a class="nav-link" href="altera_dados.php">Alterar Conta de usuário</a>
   </li>
   <li class="nav-item">
     <a class="nav-link" href="#">Bloquear Conta de usuário</a>
   </li>
   <li class="nav-item">
     <a class="nav-link" href="#">Excluir Conta de usuario</a>
   </li>
   <li class="nav-item">
     <a class="nav-link" href="#">Disponibilizar Série</a>
   </li>
   <li class="nav-item">
     <a class="nav-link" href="#">Disponibilizar dados de avaliação</a>
   </li>
 </ul>

 <?php
  include("../padrao/rodape.php");
 ?>
