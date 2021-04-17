<?php 
/* esta função fica responsavel em realizar a conexão no banco de dados*/
function conectar(){
    /* os parametros correspiondentes ao conect do banco de dados*/
    $host="127.0.0.1";
    $user="root";
    $password="";
    $dattabase="creature";
/*o con fica responsavel por aramzenar o host o nome do usuario sua senha do banco de dados e o nome do banco de dados*/
    $con = mysqli_connect($host,$user,$password,$dattabase);
    // teste de conexão com o banco
    /*
    if(!$con){
        echo("erro ao conectar");
    }else{
        echo("conectado");
    }*/
    return $con;
}
?>