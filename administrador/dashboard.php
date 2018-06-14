<?php
  include("../padrao/cabecalho.php");
  include("../requisicoesphp/funcoes.php");

  verificaLogin();

 ?>

 <h1>Olá <?= $_SESSION['nome'] ?></h1>
<p>Seja bem vindo ao modulo do administrador da Academia</p>

<p><?= $_SESSION['msgAdmin'] ?></p>

<ul class="nav nav-tabs">
   <li class="nav-item">
     <a class="nav-link active" href='novo_usuario.php'>Cadastrar novo usuário</a>
   </li>

   <li class="nav-item">
     <a class="nav-link" href="busca_usuario.php">Buscar usuário</a>
   </li>
   <li class="nav-item">
     <a class="nav-link" href="#">Disponibilizar horários para avaliações</a>
   </li>
   <li class="nav-item">
     <a class="nav-link" href="lista_profissionais.php">Listar Profissionais</a>
   </li>
 </ul>

 <?php
  include("../padrao/rodape.php");
 ?>
