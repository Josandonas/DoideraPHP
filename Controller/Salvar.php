<?php
	include_once "../Model/sql.php";

	$nome= $_GET['nome'];
	$genero= $_GET['genero'];
	$sobre= $_GET['sobre'];

	$con=conectar();
	
	$query="INSERT INTO animal( nome, genero, sobre) VALUES('".$nome ."','".$genero."', '".$sobre."')";
	
	execsql($query,$con);

	/*encerra a conexão e qualquer ação no banco de dados*/
	mysqli_close($con);

	/* o header e responsavel por direcionar autoamticamente qume esta usando a página que no caso e da consulta dos dados*/
	header("Location:../View/PaginaDados.php");
?>



	
	
	
	
