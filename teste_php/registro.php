<?php

/* incluo o arquivo sql com as funções de conectar e a execução */

	include_once "sql.php";

	/*   Pârametros que referenciam os dados do banco de dados */
	$nome= $_GET['nome'];

	$genero= $_GET['genero'];

	$sobre= $_GET['sobre'];
/*   Pârametros que referenciam os dados do banco de dados */


	/*A variavel "$con" recebe a função abaixo, que verifica se a conexão do banco foi realizada com sucesso */
	$con=conectar();
	
	/*A variavel "$query" recebe o comando responsável pela Inserção na tabela do banco de dados junto de seus campos relacionados com sua tabela*/
	$query="INSERT INTO animal( nome, genero, sobre) VALUES('".$nome ."','".$genero."', '".$sobre."')";
	
	/*Função que executa a ação passando como parametro a conexão com o banco de dados e o query aplicando no banco de dados*/
	execsql($query,$con);

	/*encerra a conexão e qualquer ação no banco de dados*/
	mysqli_close($con);

	/* o header e responsavel por direcionar autoamticamente qume esta usando a página que no caso e da consulta dos dados*/
	header("Location:consulta.php");
?>



	
	
	
	
