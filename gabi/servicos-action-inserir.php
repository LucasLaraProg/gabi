<?php
require_once("cabecalho.php");
require_once("banco-servico.php");
session_start();
   //pega as informações do POST do formulário
$descricaoServico = (filter_input(INPUT_POST, 'descricaoServico', FILTER_SANITIZE_SPECIAL_CHARS));
$debitos=(filter_input(INPUT_POST,'debitos',FILTER_SANITIZE_SPECIAL_CHARS));
$dataServico=date('Y-m-d');
$idCliente=(filter_input(INPUT_POST, 'id',FILTER_SANITIZE_NUMBER_INT	));
$id_TipoServico=(filter_input(INPUT_POST,'servico'));
if(inserirRegistroDeServico($conexao,$descricaoServico,$debitos,$dataServico,$idCliente,$id_TipoServico)):
header("Location: inser-sucess.php");
$_SESSION["success"] = 'Registro cadastrado com
sucesso';
else:
header("Location: inser-error.php");
$_SESSION["danger"] = 'Erro no cadastro do Registro';
endif;

