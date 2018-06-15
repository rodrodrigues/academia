<?php

include("conexao.php");
include("funcoes.php");

<<<<<<< HEAD
    $matricula = $_SESSION['matuser'];
=======
    $id_usuario = $_SESSION['matuser'];
>>>>>>> 80e1c00658a23f32aa88e143e6d8251885b5b8e5

    $peso = $_POST['peso'];
    $altura = $_POST['altura'];
    $cirBraco = $_POST['cirBraco'];
    $cirPeito = $_POST['cirPeito'];
    $cirCintura = $_POST['cirCintura'];
    $cirCoxa = $_POST['cirCoxa'];
    $cirPanturrilha = $_POST['cirPanturrilha'];

<<<<<<< HEAD
    if((!empty($peso)) && (!empty($altura)) && (!empty($cirCoxa)) && (!empty($cirPanturrilha)) && (!empty($cirBraco)) && (!empty($cirPeito))
       && (!empty($cirCintura))){

    $query = "UPDATE  usuario set peso = $peso, altura = $altura, cincunferenciaBraco = $cirBraco , circunferenciaPeito = $cirPeito, circunferenciaCintura = $cirCintura, circunferenciaCoxa = $cirCoxa, circunferenciaPanturrilha = $cirPanturrilha
              WHERE matricula = $matricula";
    } else{
        header("Location: ../administrador/novo_usuario.php");
    }
    if (mysqli_query($conexao, $query)) {
        $_SESSION['mensagem'] = "Avalaliação cadastrada com sucesso!";
        header("Location: ../administrador/insere_dados_avaliacao.php");
    } else {
        echo "Error: " . $query . "<br>" . mysqli_error($conexao);
        $_SESSION['mensagem'] = "Avalaliação não foi cadastrado com sucesso!";
        header("Location: ../administrador/insere_dados_avaliacao.php");
    }



    ?>
=======
    
>>>>>>> 80e1c00658a23f32aa88e143e6d8251885b5b8e5
