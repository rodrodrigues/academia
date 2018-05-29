<?php
  include("../padrao/cabecalho.php");
  include("../requisicoesphp/funcoes.php");

  session_start();
  verificaLogin();

 ?>

 <h1>Olá <?= $_SESSION['nome'] ?></h1>
<p>Seja bem vindo ao modulo do administrador da Academia</p>

<ul class="nav nav-tabs">
   <li class="nav-item">
     <a class="nav-link active" href='novo_usuario.php'>Cadastrar novo usuário</a>
   </li>
   <li class="nav-item">
     <a class="nav-link" href="busca_usuario.php">Alterar Conta de usuário</a>
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
     <a class="nav-link" href="#">Disponibilizar dados de avaliações</a>
   </li>
   <li class="nav-item">
     <a class="nav-link" href="#">Disponibilizar horários para avaliações</a>
   </li>
   <li class="nav-item">
     <a class="nav-link" href="#">Listar Profissionais</a>
   </li>
 </ul>

 <?php
  include("../padrao/rodape.php");
 ?>
