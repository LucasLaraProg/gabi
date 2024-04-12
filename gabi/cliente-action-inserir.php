<?php
require_once("cabecalho.php");
require_once("banco-cliente.php");
session_start();
   //pega as informações do POST do formulário
$nome = strtolower((filter_input(INPUT_POST, 'nome', FILTER_SANITIZE_SPECIAL_CHARS)));
$endereco = (filter_input(INPUT_POST, 'endereco', FILTER_SANITIZE_SPECIAL_CHARS));
$telefone = (filter_input(INPUT_POST,'telefone'));
function limpaTel($valor){
   $valor = preg_replace('/[^0-9]/', '', $valor);
      return $valor;
   }
if(inserirCliente($conexao,$nome,$endereco,limpaTel($telefone))):
header("Location: inser-sucess.php");
$_SESSION["success"] = 'Cliente cadastrado com
sucesso';
else:
header("Location: inser-error.php");
$_SESSION["danger"] = 'Erro no cadastro do Cliente';
endif;

