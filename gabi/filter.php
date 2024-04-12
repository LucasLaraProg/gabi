<?php
require_once("conexao.php")
?>
<head>
        <meta charset="UTF-8"/>
        <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.12.1/css/all.css" crossorigin="anonymous">
        <link rel="stylesheet" href="style.css"/>
</head>
<div class="filtro-cliente">
    <form action="cliente-lista-pesquisa.php" method="GET">
        <h3 class="titlefiltro">Filtro</h3>
        <label for="nome"> Nome:
        <input id="nome" type="text" name="nome" autofocus placeholder="Nome do Cliente">
    </label>
    <label for="telefone"> Telefone:
        <input id="telefone" type="text" name="telefone"autofocus placeholder="Telefone">
    </label>
    <label>
        <button class="btn btn-submit"><i class="fas fa-filter"></i> Filtrar </button>
    </label>
    </form>
</div>

  
