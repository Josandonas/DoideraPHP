<?php
/* incluo o arquivo sql com a função de mostrar os dados */
	include_once "../Controller/Mostrar.php";
// faço a variavel $resultado coletar os dados da chamada do banco	
	$resultado=Dados();
	$itens_por_pagina = 5;
?>

<!DOCTYPE html>
<html>
	<head>
		<title>Mostrando Informações</title>
		<link href="../View/CSS/Principal.css" rel="stylesheet">
		<link href="../View/IconFont/icofont.min.css" rel="stylesheet">
		<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-eOJMYsd53ii+scO/bJGFsiCZc+5NDVN2yr8+0RDqr0Ql0h+rP48ckxlpbzKgwra6" crossorigin="anonymous">
		<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/js/bootstrap.bundle.min.js" integrity="sha384-JEW9xMcG8R+pH31jmWH6WWP0WintQrMb4s7ZOdauHnUtxwoG2vI5DkLtS3qm9Ekf" crossorigin="anonymous"></script>
		<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
		<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
		<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
	</head>

	<body class="Dados">
		
		<nav class="navbar navbar-light bg-dark">
			<div class="container-fluid">
				<a class="btn btn-primary" type="button" href="../View/index.php"><i class="icofont-arrow-left"></i> Página de Cadastro</a>
				<!-- <h1 class="text-white">Sobre</h1> -->
			</div>
		</nav>
		<div class="container-fluid" style="width: 90%;">		
			<br>
			<table class="table table-secondary table-bordered caption-top" >
				<caption><h1 class="text-white" align="center"><i class="icofont-pelican"></i> Relatório de Animais <i class="icofont-pelican"></i></h1></caption>
				<thead class="table-dark">
					<tr>
						<td>Nome</td>
						<td>Genero</td>
						<td>Sobre</td>
						<td class="text-center">Ação</td>						
					</tr>
				</thead>
		<?php while($mostrar = mysqli_fetch_array($resultado)){	/* um laço pelo qual fica responsavel de mostrar na tela todas as informações da tabela */?>
				<tbody>
					<tr>
					<!-- mostra o qu está contido no array do banco de dados contruindo uma tabela com os dados internos como a tag <td> </td> e <tr> </tr>-->
						<td><?php echo $mostrar["nome"]; ?></td>
						<td><?php echo $mostrar["genero"]; ?></td>
						<td class="text-center"><button type="button"
									class="btn btn-primary"
									data-toggle="modal"
									data-target="#edita<?php echo $mostrar["id_name"]; ?>">Ler <i class="icofont-eye"></i></button>
						</td>

						<div class="modal fade" id="edita<?php echo $mostrar["id_name"]; ?>" data-backdrop="static" data-keyboard="false" tabindex="-1" aria-hidden="true">
							<div class="modal-dialog modal-dialog-centered modal-dialog-scrollable">
								<div class="modal-content">
									<div class="modal-header" >
										<h5 class="modal-title" id="staticBackdropLabel"><?php echo $mostrar["nome"]; ?></h5>
									</div>
									<div class="modal-body">
									<?php echo $mostrar["sobre"]; ?>
									</div>
									<div class="modal-footer">
										<button type="button" class="btn btn-danger" data-dismiss="modal">Fechar</button>
									</div>
								</div>
							</div>
						</div>

						<td class="text-center"> 
							<a href="./PaginaEdicao.php ?codigo=<?php echo $mostrar["id_name"]; ?>" type="button" class="btn btn-warning"> <i class="icofont-ui-edit"></i> Editar </a> 
							<button type="button"
									class="btn btn-danger"
									data-toggle="modal"
									data-target="#apaga<?php echo $mostrar["id_name"]; ?>"><i class="icofont-ui-delete"></i> Excluir 
							</button>
							<div class="modal fade" id="apaga<?php echo $mostrar["id_name"]; ?>" data-backdrop="static" data-keyboard="false" tabindex="-1" aria-hidden="true">
								<div class="modal-dialog">
									<div class="modal-content">
										<div class="modal-header"> 
											<h5 class="modal-title">Aviso <i class="icofont-exclamation-tringle"></i></h5>
											<button type="button" class="btn btn-danger" data-dismiss="modal"><i class="icofont-ui-close"></i></button>
										</div>
										<div class="modal-body">
											<p class="fw-normal">Tem certeza que deseja exluir o animal <b><?php echo $mostrar["nome"]; ?></b> do registro</p>
										</div>
										<div class="modal-footer">
											<a href="../Controller/Excluir.php ?codigo=<?php echo $mostrar["id_name"]; ?>" type="button" class="btn btn-danger"><i class="icofont-ui-delete"></i> Sim, tenho certeza </a>
										</div>
									</div>
								</div>
							</div>
						</td>
					
					</tr>
				</tbody>
		<?php  } ?>
			</table>
		</div>
	</body>
	
</html>

<!-- onde a aplcação do mysql se encerra -->
<?php   mysqli_close($con);?>