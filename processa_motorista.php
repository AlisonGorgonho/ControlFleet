<?php
    include_once("conexao.php");

    $nome_motorista = $_POST['nome'];
    // echo $nome_motorista;
    $matricula_motorista = $_POST['matricula'];
    // echo $matricula_motorista;
    $setor_motorista = $_POST['setor'];
    // echo $setor_motorista;
    $turno_motorista = $_POST['turno'];
    // echo $turno_motorista;

    $sql = "INSERT INTO motoristas(nome, matricula, setor, turno)
    VALUES('$nome_motorista', '$matricula_motorista', '$setor_motorista', '$turno_motorista')";

    if ($salvar = mysqli_query($conexao, $sql)) {
        echo "<script>window.alert('Cadasto feito com sucesso !')</script>";
        mysqli_close($conexao);
        echo "<script>javascript:history.go(-1)</script>";
    } else {
        echo "<script>window.alert('Falha na realização do cadastro !')</script>";
        die(mysqli_error($conexao));
        mysqli_close($conexao);
        "<script>javascript:history.go(-1)</script>";

    }
    
?>