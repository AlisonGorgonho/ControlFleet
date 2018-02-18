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
			<h2 class="title">Cadastro Motorista</h2>

			<hr/>
			<form method="POST" action="processa_motorista.php">
				<div class="form-group">
					<label for="nome">Nome: </label>
					<input class="form-control" type="text" name="nome">
				</div>
				<div class="form-group">
					<label for="matricula">Matricula: </label>
					<input class="form-control" type="text" name="matricula">
				</div>
				<div class="form-group">
					<label for="setor">Setor: </label>
					<input class="form-control" type="text" name="setor">
				</div>
				<div class="form-group">
					<label for="turno">Turno: </label>
					<input class="form-control" type="text" name="turno">
				</div>
				<div class="btn-group">
					<input class="btn-md btn_submit" type="submit" name="save" value="Cadastrar Motorista" />
					<a class="btn-md btn_back" href="cadastro.php">Voltar</a>
				</div>
			</form>
			
		</div>
	</div>
</body>
</html>