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
			<h2 class="title">Cadastro Carro</h2>

			<hr/>
            <form method="POST" action="processa_carro.php">
                <div class="form-group">
                	<label for="placa">Placa:</label>
                	<input class="form-control" type="text" name="placa">
                </div>
                <div class="form-group">
                	<label for="km_inicial">Quilometragem Inicial:</label>
                	<input class="form-control" type="text" name="km_inicial">
                </div>
                <div class="form-group">
                	<label for="disponivel">Disponivel:</label>
                	<select class="form-control" name="disponivel">
	                    <option value="1">Sim</option>
	                    <option value="0">Não</option>
	                </select>
            	</div>
                <div class="form-group">
                	<label for="modelo">Modelo:</label>
                	<input class="form-control" type="text" name="modelo">
                </div>
				
				<div class="btn-group">
                	<input class="btn-md btn_submit" type="submit" name="save" value="Cadastrar Carro" />
            		<a class="btn-md btn_back" href="cadastro.php">Voltar</a>
            	</div>
            </form>
		</div>
	</div>
</body>
</html>