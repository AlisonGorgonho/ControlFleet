<?php
    include_once("conexao.php");

    $placa_carro = $_POST['placa'];

    $km_inicial = $_POST['km_inicial'];

    $disponivel = $_POST['disponivel'];

    $disponivel = intval($disponivel);
    
    echo $disponivel;

    $modelo_carro = $_POST['modelo'];

    $sql = "INSERT INTO carros(placa, km_inicial, disponivel, modelo)
    VALUES('$placa_carro', '$km_inicial', '$disponivel', '$modelo_carro')";

    if ($salvar = mysqli_query($conexao, $sql)) {
        echo "<script>window.alert('Cadasto feito com sucesso !')</script>";
        mysqli_close($conexao);
        echo "<script>javascript:history.go(-1)</script>";
    } else {
        echo "<script>window.alert('Falha na realização do cadastro !')</script>";
        die(mysqli_error($conexao));
        mysqli_close($conexao);
        //secho "<script>javascript:history.go(-1)</script>";
    }
    
?>