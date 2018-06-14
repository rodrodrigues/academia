<?php

include("conexao.php");
include("funcoes.php");

//$matricula_usuario = $_POST['matricula_novo_usuario'];
$nome_usuario = $_POST['nome_novo_usuario'];
$telefone_usuario = $_POST['telefone_novo_usuario'];
$email_usuario = $_POST['email_novo_usuario'];
$endereco_usuario = $_POST['endereco_novo_usuario'];
$senha_usuario = $_POST['senha_novo_usuario'];

$senha_usuario_md5 = md5($senha_usuario);

if((!empty($nome_usuario)) && (!empty($telefone_usuario)) && (!empty($email_usuario)) && (!empty($endereco_usuario))
   && (!empty($senha_usuario_md5))){


$query = "INSERT INTO usuario (nome, telefone, email, endereco, senha)
          VALUES ('$nome_usuario', '$telefone_usuario', '$email_usuario', '$endereco_usuario', '$senha_usuario_md5')";
} else{
    header("Location: ../administrador/novo_usuario.php");
}
if (mysqli_query($conexao, $query)) {
    $_SESSION['mensagem'] = "Usuário cadastrado com sucesso!";
    header("Location: ../administrador/novo_usuario.php");
} else {
    echo "Error: " . $query . "<br>" . mysqli_error($conexao);
    $_SESSION['mensagem'] = "Usuário não foi cadastrado com sucesso!";
    header("Location: ../administrador/novo_usuario.php");
}

?>
