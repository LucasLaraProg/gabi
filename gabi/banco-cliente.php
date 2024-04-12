<?php
require_once("conexao.php");
//função para retornar todos os clientes
function listarClientes($conexao){
    //monta SQL
    $query ="SELECT * FROM `clientes` ORDER BY `clientes`.`Nome` ASC";
    //executa SQL
    $resultado = mysqli_query($conexao, $query);
    //cria uma array clientes
    $clientes = array();
    //le resultado do SQL e coloca dentro da array
    while ($dados = mysqli_fetch_array($resultado)) {
    array_push($clientes, $dados);
}
//retorna array com os dados
return $clientes;
}
//função para buscar um Cliente por ID
function buscarCliente($conexao, $id) {
    //monta SQL para pegar um  Cliente especifico
    $query = "SELECT * FROM clientes WHERE Id_Cliente = $id";
    //executa SQL
    $resultado = mysqli_query($conexao, $query);
    return mysqli_fetch_assoc($resultado);
    }
    //função para inserir um cliente
function inserirCliente($conexao, $nome,$endereco,$telefone){
    $nome = mysqli_escape_string($conexao, $nome);
    $endereco= mysqli_escape_string($conexao, $endereco);
    $telefone = mysqli_escape_string($conexao, $telefone);
    //monta o SQL
    $query = "insert into clientes (Nome,Endereco,Telefone) values ('$nome', '$endereco', '$telefone')";
    //executa o SQL
    $resultadoInsercao = mysqli_query($conexao, $query);
    //retorna resultado da execucao
    return $resultadoInsercao;
    }
   
    //função para alterar um cliente
function alterarCliente($conexao,$id,$nome,$endereco,$telefone) {
    $id= mysqli_escape_string($conexao, $id);
    $nome = mysqli_escape_string($conexao, $nome);
    $endereco = mysqli_escape_string($conexao, $endereco);
    $telefone = mysqli_escape_string($conexao, $telefone);
    //monta SQL
     $query = "UPDATE clientes SET Nome = '$nome', Endereco='$endereco', Telefone='$telefone' WHERE Id_Cliente = $id";
    //executa o SQL
    $resultadoAlteracao = mysqli_query($conexao, $query);
    //retorna resultado da execucao
    return $resultadoAlteracao;
    }
//função para excluir um cliente
function excluirCliente($conexao, $id) {
    $id = mysqli_escape_string($conexao, $id);
    //monta SQL
    $query = "DELETE FROM clientes where Id_Cliente = $id";
    //executa SQL
    $resultadoExclusao = mysqli_query($conexao, $query);
    return $resultadoExclusao;
    }
    
    

?>