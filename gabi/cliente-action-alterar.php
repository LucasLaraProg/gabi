<?php
require_once("cabecalho.php");
require_once("banco-cliente.php");
session_start();
//pega as informações do POST do formulário
$id=(filter_input(INPUT_POST, 'id', FILTER_SANITIZE_NUMBER_INT));
$nome = (filter_input(INPUT_POST, 'nome', FILTER_SANITIZE_SPECIAL_CHARS));
$endereco = (filter_input(INPUT_POST, 'endereco', FILTER_SANITIZE_SPECIAL_CHARS));
$telefone = (filter_input(INPUT_POST, 'telefone', FILTER_SANITIZE_SPECIAL_CHARS));
if(alterarCliente($conexao,$id,$nome,$endereco,$telefone)):
header("Location: alter-sucess.php");
$_SESSION["success"] = 'Cliente alterado com
sucesso';
else:
header("Location: alter-error.php");
$_SESSION["danger"] = 'Erro na alteração de Cliente';
endif;
