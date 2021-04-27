<?php 
	include_once "../Controller/Mostrar.php";
	$select = $_GET["codigo"];
	$con = conectar();
	$linha = dadoEdicao($select,$con);
	
?>
<!DOCTYPE html>
<html>

	<head>
	<meta charset="UTF-8">
	<title>Modificação das informações</title>
	<!-- no link eu chamo o arquivo css para realizar a beleza na apresentação da página-->
	<link href="../View/CSS/Principal.css" rel="stylesheet">
		<link href="../View/IconFont/icofont.min.css" rel="stylesheet">
		<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-eOJMYsd53ii+scO/bJGFsiCZc+5NDVN2yr8+0RDqr0Ql0h+rP48ckxlpbzKgwra6" crossorigin="anonymous">
		<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/js/bootstrap.bundle.min.js" integrity="sha384-JEW9xMcG8R+pH31jmWH6WWP0WintQrMb4s7ZOdauHnUtxwoG2vI5DkLtS3qm9Ekf" crossorigin="anonymous"></script>
	</head>
	
	<body id="textoCor" class="Edicao">
		<nav class="navbar navbar-light bg-dark">
				<div class="container-fluid">
				<a class="btn btn-primary" type="button" href="PaginaDados.php">Relatório <i class="icofont-presentation-alt"></i></a>				
				</div>
		</nav>
		<div class="container-fluid">
				<h1 style="text-align: center;">Editar Informações</h1>
				<div class="container">
					<form method="$POST" action="../Controller/Editar.php" >
						<input name="code" value="<?php echo $linha->id_name; ?>" type="hidden">
						<div class="mb-3">
							<label for="exampleFormControlInput1" class="form-label">Nome do Animal:</label>
							<input type="text" class="form-control" name="nome" value="<?php echo $linha->nome; ?>">
						</div>
						<div class="mb-3">
							<label for="exampleFormControlInput1" class="form-label">Gênero:</label>
							<input type="text" class="form-control" name="genero" value="<?php echo $linha->genero;?>">
						</div>
						<div class="mb-3">
							<label for="exampleFormControlTextarea1" class="form-label">Sobre:</label>
							<textarea class="form-control" name="sobre" type="text" rows="3" ><?php echo $linha->sobre; ?></textarea>
						</div>
						<br>
						<div class="text-center">
							<div class="d-grid gap-4 col-5 mx-auto">
								<button class="btn btn-primary" type="submit"><i class="icofont-save"></i> Salvar</button>
								<!-- <input class="btn btn-danger" type="reset" name="Limpar"> -->
							</div>
						</div>
						

						</form>
				</div>
		</div>
	</body>
</html>

<?php   mysqli_close($con);?>
<!-- onde a aplcação do mysql se encerra -->