<?php
	include_once "conexao.php";
	$con= conectar();
/*esta função fica responsavel em executar o que passado como parametro no banco de dados junto dele a conexão estabelecida e o comando que sera feito no banco de dados*/
	function execsql($query,$con){
			$result=mysqli_query($con,$query);
	  		if (!$result) {
	    		$message  = 'Invalid query: ' . mysqli_error($con) . "\n";
	    		$message .= 'Whole query: ' . $query;
	    		die($message);
	    	}
	    	return $result;
		}  	

?>

