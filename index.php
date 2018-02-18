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
			<h2 class="title">Nova Viagem</h2>

			<hr/>

			<form method="POST" action="processa_index.php">

				<div class="form-group">
					<label for="select_motorista">Motorista:</label>
					<select class="form-control" name="motorista" id="select_motorista">
						<?php
							include_once('conexao.php');
							$results_motoristas = "SELECT * FROM motoristas";
							$resultados_motoristas = mysqli_query($conexao, $results_motoristas);
							while($row_motoristas = mysqli_fetch_assoc($resultados_motoristas)){?>
								<option value="<?php echo $row_motoristas['motorista_id']; ?>"><?php echo $row_motoristas['nome']; ?>

								</option> <?php
							}
						?>
					</select>
				</div>

				<div class="form-group">
					<label for="select_carro">Carro: </label>
					<select class="form-control" name="carro" id="select_carro">
						<?php
							include_once('conexao.php');
							$results_carros = "SELECT * FROM carros";
							$resultados_carros= mysqli_query($conexao, $results_carros);
							while($row_carros = mysqli_fetch_assoc($resultados_carros)){?>
								<option value="<?php echo $row_carros['carro_id']; ?>"><?php echo $row_carros['placa']; ?>

								</option> <?php
							}

						?>
					</select>
				</div>

				<div class="form-group">
					<label>Quilometragem Inicial:</label>
					<input class="form-control" type="int" name="km_inicial">
				</div>

				<div class="form-group">
					<label>Quilometragem Final: </label>
					<input class="form-control" type="int" name="km_final">
				</div>

				<div class="form-group">
					<label>Observação:</label>
					<input class="form-control" type="text" name="observacao">
				</div>

				<input class="btn-md btn_submit" type="submit" name="save" value="Cadastrar Viagem" />
			</form>
		</div>
	</div>
	<?php
		mysqli_close($conexao);
	?>
</body>
</html>