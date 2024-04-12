<?php
require_once("cabecalho.php");
require_once("banco-tipo-servico.php");
session_start();
   //pega as informações do POST do formulário
$tiposervico= strtolower((filter_input(INPUT_POST, 'tiposervico', FILTER_SANITIZE_SPECIAL_CHARS)));

if(inserirTipoServico($conexao,$tiposervico)):
header("Location: inser-sucess.php");
$_SESSION["success"] = 'Tipo de serviço cadastrado com
sucesso';
else:
header("Location: inser-error.php");
$_SESSION["danger"] = 'Erro no cadastro do tipo de serviço';
endif;

