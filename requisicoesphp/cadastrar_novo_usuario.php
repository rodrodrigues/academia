<?php

include("conexao.php");
include("funcoes.php");

$matricula_usuario = $_POST['matricula_novo_usuario'];
$nome_usuario = $_POST['nome_novo_usuario'];
$email_usuario = $_POST['email_novo_usuario'];
$peso_usuario = $_POST['peso_novo_usuario'];
$altura_usuario = $_POST['altura_novo_usuario'];
$senha_usuario = $_POST['senha_novo_usuario'];

$senha_usuario_md5 = md5($senha_usuario);

$query = "INSERT INTO usuario (matricula, nome, email, peso, altura, senha)
          VALUES ('$matricula_usuario', '$nome_usuario', '$email_usuario', '$peso_usuario', '$altura_usuario', '$senha_usuario_md5')";

if (mysqli_query($conexao, $query)) {
    echo "New record created successfully";
} else {
    echo "Error: " . $query . "<br>" . mysqli_error($conexao);
}

?>