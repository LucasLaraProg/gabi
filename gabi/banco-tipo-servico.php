<?php
require_once("conexao.php");
//função para retornar todos os clientes
function listarTipoServicos($conexao){
    //monta SQL
    $query ="SELECT * FROM `tiposervico`";
    //executa SQL
    $resultado = mysqli_query($conexao, $query);
    //cria uma array dos tipos de servicos
    $tiposervicos = array();
    //le resultado do SQL e coloca dentro da array
    while ($dados = mysqli_fetch_array($resultado)) {
    array_push($tiposervicos, $dados);
}
//retorna array com os dados
return $tiposervicos;
}
//função para buscar um Tipo de Serviço por ID
function buscarTipoServico($conexao, $id) {
    //monta SQL para pegar um  tipo de Serviço especifico
    $query = "SELECT * FROM tiposervico WHERE Id_TipoServico = $id";
    //executa SQL
    $resultado = mysqli_query($conexao, $query);
    return mysqli_fetch_assoc($resultado);
    }
    //função para inserir um Tipo de Serviço
function inserirTipoServico($conexao, $tiposervico){
    $nome = mysqli_escape_string($conexao, $tiposervico);
    //monta o SQL
    $query = "insert into tiposervico (TipoServico) values ('$tiposervico')";
    //executa o SQL
    $resultadoInsercao = mysqli_query($conexao, $query);
    //retorna resultado da execucao
    return $resultadoInsercao;
    }
?>