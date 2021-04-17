<?php
/* incluo o arquivo sql com as funções de conectar e a execução */
	include_once "./Model/sql.php";

/* este get e especial ele pega o codigo dcorrespondente ao animal e o armazena dentro da variavel id lembra aquele codigo que sai da pagina de editar então e esse mesmo que e coletado neste lugar */
	$id=$_GET["codigo"];


/*A variavel "$con" recebe a função abaixo, que verifica se a conexão do banco foi realizada com sucesso */	
	$con=conectar();


/*A variavel "$query" recebe o comando responsável pela edição na tabela do banco de dados junto de seus campos relacionados com sua tabela*/
	$query="DELETE FROM animal WHERE id_name=$id";
/*Função que executa a ação passando como parametro a conexão com o banco de dados e o query aplicando no banco de dados*/
	execsql($query,$con);
	 
/*encerra a conexão e qualquer ação no banco de dados*/	 
	mysqli_close($con);

/* o header e responsavel por direcionar autoamticamente qume esta usando a página que no caso e da consulta dos dados*/
	header("Location:consulta.php");
?>