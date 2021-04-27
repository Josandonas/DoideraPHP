<?php
// Aqui onde incluo o arquivo responsável pela execução da query 
include_once "../Model/sql.php";

//apresento todos os dados na tabela dos animais cadastrados
function Dados(){
    $con=conectar();
    $query="SELECT *From animal";
    $informacoes=execsql($query,$con);
    return $informacoes;
}

//apresento as informações relacionadas ao animal da página de edição 
function dadoEdicao($id , $con){
    $query = "SELECT *FROM animal WHERE id_name= '$id' ";
    $dados = execsql($query,$con);
    return mysqli_fetch_object($dados);
    header("Location:../View/PaginaEdicao.php");
}

?>