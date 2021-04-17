<?php 
	/* incluo o arquivo sql com as funções de conectar e a execução */
	include_once "../Model/sql.php";
	/* O $id coleta o código que é passado via endereço do arquivo consulta.php */
	$id=$_GET["codigo"];

	/* $con recebe a função de conectar no banco de dados */
	$con=conectar();
	/* $query recebe o comando do mysql do banco de dados */
	$query="SELECT *FROM animal WHERE id_name= '$id' ";

/* Da um print na variavel e mostra o que ela retorna var_dump($query);*/

	/* o resultado recebe o que o banco de dados determinou realizar recebendo como parametro o comando no banco de dados de o ok da conexão */
	$resultado=execsql($query,$con);

/* o $linha pega a funçao do buscar por obejtos interno do banco de dados como os dados internos contidos nele*/
$linha=mysqli_fetch_object($resultado);	


?>
<!-- colei novamente as coisas dentro da pagina principal para conseguir expor os dados do banco de dados para sim realizar uma edição que seja de certa forma aprensentavel -->
<!DOCTYPE html>
<html>

	<head>
	<meta charset="UTF-8">
	<script>document.createElement("Pedição de Dados")</script>
	<title>Modificação das informações</title>
	<!-- no link eu chamo o arquivo css para realizar a beleza na apresentação da página-->
	<link href="../View/CSS/model_edit.css" rel="stylesheet">
	</head>
	
	<body>
		<div class="container">
			<nav>
				<ul class="menu"><!-- nesta parte do html eu nomeio dois botões para realizar um a consulta e o outro para que a pessoa volte a página principal de cadastro-->
					<a href="consulta.php"> <li>Consulta </li> </a>
					<a href="index.php"><li>Voltar a página de Cadastro</li></a>
					<!-- termina aqui a criação dos botões-->
				</ul>
			</nav>
			<section>
				<h1 style="text-align: center;">Edição de informação dos Animais do Muzoopan</h1>
				<hr><br><br>
					<!-- nesta parte do forme eu indico onde as informações que forma editadas vão parar apos o ok-->
				<form method="$POST" action="../Controller/edit_mysql.php">
					
					<!--Nesta parte codigo defino o botão aplicando o comando do echo do php para mostrar os dados que estão salvos dentro do banco de dados porque dai em diante quando eu confirmar os dados são atulaizados enviando os dados ao arquivo de edit_mysql.php e assim realizo minhas modificações -->

					<div>
					Codigo do Animal:<br> <input name="code" value="<?php echo $linha->id_name; ?>" type="text" class="campo" maxlength="40" required autofocus>
					</div>
					
					<!-- o valor pleo qual fica responsavel por mostrar as informações  e o maxlength que fica na responsa de determinar o limite de caracteres que e bom o usuario definir uma quantia razoavel para bater com o mesmo numero de varchar do banco de dados-->

					<div>
					Nome do Animal:<br> <input name="nome" value="<?php echo $linha->nome; ?>" type="text" class="campo" maxlength="40" required autofocus>
					</div>

					<div>
					Gênero:<br> <input name="genero" value="<?php echo $linha->genero;?>"" type="text" class="campo" maxlength="5000" required autofocus> 
					</div>
					
					<div>
					Sobre:<br> <input  name="sobre" value="<?php echo $linha->sobre; ?>" type="text" class="campodescribe" maxlength="6000" required autofocus>
					</div>
					
					<input type="submit" value="Salvar Alterações" class="btn">
	
				</form>
			</section>
		</div>
		
	</body>
</html>
<!-- onde a aplcação do mysql se encerra -->
<?php mysqli_close($con); ?>