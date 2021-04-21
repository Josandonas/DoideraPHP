<?php
// Aqui onde incluo o arquivo responsável pela execução da query 
include_once "../Model/sql.php";

// realizo a criação da função  que retornará os dados do BD
function Dados(){

    /* $dado recebe a query que será executado no banco de dados */
    $query="SELECT *From animal";

    // A conexão com o banco é realizada neste ponto
    $con=conectar();

    // aqui onde a varivel $informacoes recebe a função que realiza a execução da query e a conexão dentro do BD
    $informacoes=execsql($query,$con);

    return $informacoes;
}

?>