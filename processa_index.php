<?php
    include_once("conexao.php");
    date_default_timezone_set('America/Recife');

    $id_motorista = $_POST['motorista'];
    // echo $id_motorista;
    $id_carro = $_POST['carro'];
    // echo $id_carro;
    $km_inicial = $_POST['km_inicial'];
    // echo $km_inicial;
    $km_final = $_POST['km_final'];
    // echo $km_final;
    $obs = $_POST['observacao'];
    // echo $obs;


    $date = date('Y-m-d H:i');
    // echo $date;
    

    $sql = "INSERT INTO viagens(km_ini, km_fim, observacao, data_atual, carro_usado, motorista) 
    VALUES('$km_inicial', '$km_final', '$obs', '$date', '$id_carro', '$id_motorista')";

    if ($salvar = mysqli_query($conexao, $sql)) {
        echo "<script>window.alert('Cadasto feito com sucesso !')</script>";
        mysqli_close($conexao);
        echo "<script>javascript:history.go(-1)</script>";
    } else {
        echo "<script>window.alert('Falha na realização do cadastro !')</script>";
        mysqli_close($conexao);
        echo "<script>javascript:history.go(-1)</script>";
    }
    
?>


