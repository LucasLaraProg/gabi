<?php
require_once("cabecalho.php");
require_once("banco-cliente.php");
session_start();

//pega as informações formulário
$id = $_GET['id'];
//chamar função de inserir e verificar sucesso da execução
if(excluirCliente($conexao, $id)):
$_SESSION["success"] = 'Cliente excluido com
sucesso';
header("Location: clientes-lista.php");
else:
$_SESSION["danger"] = 'Erro na exclusão de paciente';
header("Location: clientes-lista.php");
endif;