<?php
/* incluo o arquivo sql com as funções de conectar e a execução */
	include_once "../Model/sql.php";

/* $con recebe a função de conectar no banco de dados */
	$con=conectar();

/* $query recebe o comando do mysql do banco de dados */
	$dado="SELECT *From animal";

/* o resultado recebe o que o banco de dados determinou realizar recebendo como parametro o comando no banco de dados de o ok da conexão */
	$resultado=execsql($dado,$con);

?>

<!DOCTYPE html>
<html>
<head>
	<title>Mostrando Informações</title>
</head>

<body>

<section>
	<h1 >Consulta de Animais</h1>
	<table border="1" >
		<tr>
			<td>Codigo</td>
			<td>Nome</td>
			<td>Genero</td>
			<td>Sobre</td>
			<td>Ação</td>						
		</tr>
		<?php /* um laço pelo qual fica responsavel de mostrar na tela coletando o array do banco de dados e o $resultado da execução e do que sera feito no mysql*/
			while($mostrar = mysqli_fetch_array($resultado)){	?>

		<tr>
		<!-- mostra o qu está contido no array do banco de dados contruindo uma tabela com os dados internos como a tag <td> </td> e <tr> </tr>-->
			<td><?php echo $mostrar["id_name"]; ?></td>
			<td><?php echo $mostrar["nome"]; ?></td>
			<td><?php echo $mostrar["genero"]; ?></td>
			<td><?php echo $mostrar["sobre"]; ?></td>
			
			<!-- cria dois botões responsaveis por retornar o id correspondente a um determinado animal no caso que são bem uteis para as funções de exclusão e edição-->
			<td> <button><a href="./editar.php ?codigo=<?php echo $mostrar["id_name"]; ?>"> Editar </a></button> | 
			<button><a href="../Controller/excluir.php ?codigo=<?php echo $mostrar["id_name"]; ?>"> Excluir </a></button> 
			</td>
		
		</tr>

		<?php  } ?>	
		<!-- foi necessario criar um botão que me permitisse voltar a pagina de cadastro-->
		<a href="../View/index.php"><li>Voltar a página de Cadastro</li></a>
	</table>

</section>

</body>
</html>
<!-- onde a aplcação do mysql se encerra -->
<?php   mysqli_close($con);?>