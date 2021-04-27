<?php
/* incluo o arquivo sql com a função de mostrar os dados */
	include_once "../Controller/Mostrar.php";
// faço a variavel $resultado coletar os dados da chamada do banco	
	$resultado=Dados();
?>

<!DOCTYPE html>
<html>
	<head>
		<title>Mostrando Informações</title>
		<link href="../View/CSS/Principal.css" rel="stylesheet">
		<link href="../View/IconFont/icofont.min.css" rel="stylesheet">
		<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-eOJMYsd53ii+scO/bJGFsiCZc+5NDVN2yr8+0RDqr0Ql0h+rP48ckxlpbzKgwra6" crossorigin="anonymous">
		<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/js/bootstrap.bundle.min.js" integrity="sha384-JEW9xMcG8R+pH31jmWH6WWP0WintQrMb4s7ZOdauHnUtxwoG2vI5DkLtS3qm9Ekf" crossorigin="anonymous"></script>
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
						<td><?php echo $mostrar["sobre"]; ?></td>
						
						<!-- cria dois botões responsaveis por retornar o id correspondente a um determinado animal no caso que são bem uteis para as funções de exclusão e edição-->
						<td class="text-center"> <a href="./PaginaEdicao.php ?codigo=<?php echo $mostrar["id_name"]; ?>" type="button" class="btn btn-warning"> <i class="icofont-ui-edit"></i> Editar </a> 
						<a href="../Controller/Excluir.php ?codigo=<?php echo $mostrar["id_name"]; ?>" type="button" class="btn btn-danger"><i class="icofont-ui-delete"></i> Excluir </a> 
						</td>
					
					</tr>
				</tbody>
		<?php  } ?>	
		<!-- foi necessario criar um botão que me permitisse voltar a pagina de cadastro-->
			</table>
		</div>
	</body>
</html>
<!-- onde a aplcação do mysql se encerra -->
<?php   mysqli_close($con);?>