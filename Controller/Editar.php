<?php 
	include_once "../Model/sql.php";

	$con = conectar();

	$id=$_GET['code'];
	$nome= $_GET['nome'];
	$genero= $_GET['genero'];
	$sobre= $_GET['sobre'];
	
	$query="UPDATE animal SET nome='$nome', genero='$genero', sobre='$sobre'  where id_name= '$id' ";
	execsql($query,$con);
	
	header("Location:../View/PaginaDados.php");
?>
