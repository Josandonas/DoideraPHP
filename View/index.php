<!DOCTYPE html>
<html>

	<head>
		<meta charset="UTF-8">
		<title>Sistema de Cadastro</title>
		<link href="../View/CSS/Principal.css" rel="stylesheet">
		<link href="../View/IconFont/icofont.min.css" rel="stylesheet">
		<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-eOJMYsd53ii+scO/bJGFsiCZc+5NDVN2yr8+0RDqr0Ql0h+rP48ckxlpbzKgwra6" crossorigin="anonymous">
		<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/js/bootstrap.bundle.min.js" integrity="sha384-JEW9xMcG8R+pH31jmWH6WWP0WintQrMb4s7ZOdauHnUtxwoG2vI5DkLtS3qm9Ekf" crossorigin="anonymous"></script>
		
	</head>
	<body id="index">
		<div class="container-fluid">
			<div class="card">
			<div class="card-body">
			<h1 style="text-align: center;"><i class="icofont-lion-head-2 icofont-2x"></i>Cadastro de Animais<i class="icofont-lion-head-2 icofont-2x"></i></h1>
				<div class="row">
					<div class="col-md">
						<div class="container-fluid">
							<div class="row">
								<div class="col-12">
									<div class="d-grid gap-2">
										<a href="../View/PaginaDados.php" class="btn btn-primary" type="button" aria-current="page" >Relatório <i class="icofont-presentation-alt"></i></a>
									</div>
									<br>
									<div class="girar-container" >
										<div class="girar" >
											<div class="front">
												<img id="imagem1" src="../Images/tigre.jpg" />
											</div>
											<div class="back">
												<img id="imagem2" src="../Images/esquilo.jpg" />
											</div>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
					<div class="col-md">
						<div class="container-fluid">
							<form method="$POST" action="../Controller/Salvar.php">
								<div>Nome do Animal:<br> <input type="text" name="nome" class="form-control" maxlength="40" required autofocus></div>

								<div>Gênero:<br> <input type="text" name="genero" class="form-control" maxlength="5000" required autofocus></div>
								
								<div>Sobre:<br> <textarea type="text-area" name="sobre" class="form-control" maxlength="6000" required autofocus></textarea>
								<br>
								<div class="btn-toolbar mb-3" role="toolbar"> 
									<div class="btn-group me-4" role="group">
										<button type="submit" class="btn btn-success">Salvar <i class="icofont-save"></i></button>	
									</div>
									<div class="btn-group me-4" role="group">
										<button type="reset" name="Limpar" class="btn btn-danger">Limpar <i class="icofont-mop"></i></button>
									</div>
								</div>							
							</form>
						</div>
					</div>
				</div>
			</div>
			</div>
		</div>
	</body>	
</html>