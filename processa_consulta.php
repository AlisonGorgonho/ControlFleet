<?php

    include_once("conexao.php");

?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
	<meta charset="UTF-8">
	<title>Control Fleet</title>
    <link rel="stylesheet" type="text/css" href="css/style.css">
</head>
<body>
	<div class="container">
		<div class="sidebar">
			<ul class="nav">
				<li><a class="btn btn_new" href="index.php">Nova Viagem</a></li>
				<li><a class="btn" href="cadastro.php">Cadastro</a></li>
				<li><a class="btn" href="consulta.php">Consulta</a></li>
				<li><a class="btn" href="grafico.php">Gráficos</a></li>
				<li><a class="btn" href="gerencia.php">Gerência</a></li>
			</ul>
		</div>
		<div class="content">
			<h2 class="title">Consulta</h2>
            
			<hr/>

                <?php
                    
                    $opcao = $_POST['opcao'];
                    //echo $opcao;
                    $sql = "SELECT * FROM " . $opcao;
                    $resultado = mysqli_query($conexao, $sql);

                    if ($opcao == "motoristas" || $opcao == "carros") {
                        # code...
                        while ($registro = mysqli_fetch_array($resultado)) {
                            # code...
                            if ($opcao == "carros") {
                                # code...
                                $modelo = $registro['modelo'];
                                $placa = $registro['placa'];
                                $disponivel = $registro['disponivel'];
                                if ($disponivel == 1) {
                                    # code...
                                    $disponivel = "Sim";
                                }else {
                                    # code...
                                    $disponivel = "Não";
                                }

                                $km_atual = $registro['km_atual'];

                                echo "<p><label>Modelo: <label/>".$modelo."</p>";
                                echo "<p><label>Placa: <label/>".$placa."</p>";
                                echo "<p><label>Disponivel: <label/>".$disponivel."</p>";
                                echo "<p><label>Quilometragem Atual: <label/>".$km_atual."</p>";
                                echo "<hr>";

                            }elseif ($opcao == "motoristas") {
                                # code...
                                $nome = $registro['nome'];
                                $matricula = $registro['matricula'];
                                $setor = $registro['setor'];
                                $turno = $registro['turno'];

                                echo "<p><label>Nome: <label/>".$nome."</p>";
                                echo "<p><label>Matrícula: <label/>".$matricula."</p>";
                                echo "<p><label>Setor: <label/>".$setor."</p>";
                                echo "<p><label>Turno: <label/>".$turno."</p>";
                                echo "<hr>";

                            }
                        }
                    }elseif ($opcao == "viagens") {
                        # code...
                        $sql = "SELECT v.data_atual, m.nome, c.placa, c.modelo FROM viagens v
                        JOIN carros c
                        ON v.carro_usado = c.carro_id
                        JOIN motoristas m
                        ON v.motorista = m.motorista_id";

                        $resultado = mysqli_query($conexao, $sql);

                        while ($registro = mysqli_fetch_array($resultado)) {
                            # code...
                            $data_atual = $registro['data_atual'];
                            $nome = $registro['nome'];
                            $placa = $registro['placa'];
                            $modelo = $registro['modelo'];

                            echo "<p><label>Data do Cadastro: <label/>".$data_atual."</p>";
                            echo "<p><label>Motorista Responsável: <label/>".$nome."</p>";
                            echo "<p><label>Placa do Carro: <label/>".$placa."</p>";
                            echo "<p><label>Modelo do Carro: <label/>".$modelo."</p>";
                            echo "<hr>";

                        }

                    }
                
                ?>

            <div class="btn-group">
                <input class="btn-md btn_submit" type="submit" name="save" value="Consulta" />
                <a class="btn-md btn_back" href="consulta.php">Voltar</a>
            </div>

		</div>
	</div>
</body>
</html>