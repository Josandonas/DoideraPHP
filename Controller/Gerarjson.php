<?php
	include_once "../Model/conexao.php";
	$con=conectar();

	$return_arr=array();
/*Banco de Dados Supondo que já existe a base de dados e as tabelas criadas no exemplo irei utilizar um banco que contem a tabela tb_usuarios e que possui os campos id_usuario,nome e email. SQL que será executado Instrução SQL */
	$sql = "SELECT id_name, nome, genero, sobre FROM animal";

	$SQL = mysqli_query($sql,$con)or die(mysqli_error($con));
/*A variável $table agora contém e referência um objeto MySQL. Iniciando a iteração ao objeto para resgatar os registros temos: */
	while ($row = mysqli_fetch_array($SQL));{
   // utilizado para definir o array quando houver mais de 1 registro retornado.
   		$i=0;
   		foreach($row as $key => $value){
     		if (is_string($key)){
       // Irá criar um array com o nome do campo 
       // como chave (Key) e o valor (Value).
       			$fields[mysqli_fetch_field_direct($SQL,$i++)] = $value;
     		}
   		}
   // $json_result é o array que receberá 
   // os valores do array $fields
   // "bindings" é um nome que utilizei para dar nome ao objeto.
   // Você pode usar qualquer palavra.
   		$json_result["bindings"] [ ] =  $fields;
	}
	// json_encode é função mais importante e faz parte do Core PHP 5.x
	$JSON = json_encode($json_result);

	print_r($JSON);
	mysqli_close($con);
?>