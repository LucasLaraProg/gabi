<?php
require_once("conexao.php");
//funcão para retornar todos os Registros
function listarServicos($conexao){
    //monta SQL
    $query ="SELECT * FROM servicos ";
    //executa SQL
    $resultado = mysqli_query($conexao, $query);
    //cria uma array servicos
    $servicos = array();
    //le resultado do SQL e coloca dentro da array
    while ($dados = mysqli_fetch_array($resultado)) {
    array_push($servicos, $dados);
}
//retorna array com os dados
return $servicos;
}
//funcão para retornar  os Registros por data
function listarServicosDate($conexao,$date1,$date2){
    //monta SQL
    $query ="SELECT * FROM servicos where Data_Servico between '$date1' and '$date2' ";
    //executa SQL
    $resultado = mysqli_query($conexao, $query);
    //cria uma array servicos
    $servicos = array();
    //le resultado do SQL e coloca dentro da array
    while ($dados = mysqli_fetch_array($resultado)) {
    array_push($servicos, $dados);
}
//retorna array com os dados
return $servicos;
}
 //função para inserir um registro de Serviço
 function inserirRegistroDeServico($conexao,$descricaoServico,$debitos,$dataServico,$id_Cliente,$id_TipoServico){
    $descricaoServico=mysqli_escape_string($conexao,$descricaoServico);
    //$debitos=mysqli_escape_string($conexao,$debitos);
    $dataServico=mysqli_escape_string($conexao,$dataServico);
    $debitos=mysqli_escape_string($conexao,$debitos);
    $id_Cliente=mysqli_escape_string($conexao,$id_Cliente);
    $id_TipoServico=mysqli_escape_string($conexao,$id_TipoServico);
    //monta o SQL
    $query="insert into servicos (Descricao_Servico,Debitos,Data_Servico,Id_cliente,Id_TipoServico) values ('$descricaoServico','$debitos','$dataServico','$id_Cliente', '$id_TipoServico')";
    //executa o SQL
    $resultadoInsercao = mysqli_query($conexao, $query);
    //retorna resultado da execucao
    return $resultadoInsercao;
    }
    //função para buscar um servico por ID do Cliente
function buscarServico($conexao, $id) {
    //monta SQL para pegar um  Cliente especifico
    $query = "SELECT * FROM `servicos` WHERE Id_Cliente = $id";
    //executa SQL
    $resultado = mysqli_query($conexao, $query);
    return mysqli_fetch_assoc($resultado);
    }