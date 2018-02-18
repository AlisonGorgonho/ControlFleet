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

			<form method="POST" action="processa_consulta.php">

				<div class="form-group">
					<label for="select_opcoes">Opções:</label>
					<select class="form-control" name="opcao" id="select_opcao">
						<option value="viagens">Viagens</option> 
    					<option value="carros">Carros</option>
						<option value="motoristas">Motoristas</option>
					</select>
				</div>

			<hr/>
			
				<div class="btn-group">
					<input class="btn-md btn_submit" type="submit" name="consulta" value="Consulta" />
				</div>

			</form>
		</div>
	</div>
</body>
</html>