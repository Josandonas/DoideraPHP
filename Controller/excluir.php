<?php
	include_once "../Model/sql.php";

	$id=$_GET["codigo"];
	
	$con=conectar();

	$query="DELETE FROM animal WHERE id_name=$id";

	execsql($query,$con);
	 
	mysqli_close($con);

/* o header e responsavel por exibir página especifica quando invocado*/
	header("Location:../View/PaginaDados.php");
?>