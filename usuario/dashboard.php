<?php
  include("../padrao/cabecalho.php");
  include("../requisicoesphp/funcoes.php");

  verificaLogin();

 ?>

 <h1>Olá <?= $_SESSION['nome'] ?></h1>
<p>Seja bem vindo ao modulo do usuario da Academia</p>

<ul class="nav nav-tabs">
   <li class="nav-item">
     <a class="nav-link" href="altera_dados.php">Alterar Conta de usuário</a>
   </li>
   <li class="nav-item">
     <a class="nav-link" href="busca_usuario.php">Consultar horários de pico</a>
   </li>
   <li class="nav-item">
     <a class="nav-link" href="busca_usuario.php">Calcular IMC</a>
   </li>
   <li class="nav-item">
     <a class="nav-link" href="busca_usuario.php">Consultar unidades</a>
   </li>
   <li class="nav-item">
     <a class="nav-link" href="busca_usuario.php">Consultar Aparelhos</a>
   </li>
   <li class="nav-item">
     <a class="nav-link" href="busca_usuario.php">Marcar Avaliação</a>
   </li>
   <li class="nav-item">
     <a class="nav-link" href="busca_usuario.php">Marcar treino com personal</a>
   </li>
   <li class="nav-item">
     <a class="nav-link" href="busca_usuario.php">Consultar série</a>
   </li>
 </ul>

 <?php
  include("../padrao/rodape.php");
 ?>
