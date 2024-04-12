<?php
require_once("mostrar-alerta.php");
require_once('banco-cliente.php');
require_once("banco-tipo-servico.php");
$id = $_GET['id'];
$cliente = buscarCliente($conexao, $id);
$tiposervicos = listarTipoServicos($conexao);

?>
<head>
        <meta charset="UTF-8"/>
        <link rel="stylesheet" href="style.css"/>
</head>
<section class="cliente-form">
        <div class="titulo">
            <h3>Novo Registro de Serviço</h3>
        </div>
        <form action="servicos-action-inserir.php"  method="post">
        <input type="hidden" id="txtId" name="id"readonly  value="<?=$cliente['Id_Cliente'] ?>">
        <div class="form-group">
                <label for="txtnome">Nome do Cliente:</label>
                <input type="text" class="form-control" id="txtnome" name="nome"placeholder="Digite o Nome do Cliente" autofocus required readonly value="<?=$cliente['Nome'] ?>">
            </div>
            <div class="form-group">
                <label for="selectservico">Tipo de Serviço:</label>
                
                <select class="form-control" id="selectservico" name="servico" autofocus required>
                <?php
                //ler todos os registros do array TipoServiços e colocar no option
                foreach ($tiposervicos as $tiposervico) :
                ?>
                <option name="idd" value="<?=$tiposervico['Id_TipoServico'] ?>"><?= $tiposervico['TipoServico'] ?></option>
                <?php endforeach ?>
            </div>
            <div clas="form-group">
                <label for="txtdescricaoservico">Descrição do Serviço (Opicional):</label>
                <textarea class="form-control" id="txtdescricaoservico" rows="4" cols="auto" name="descricaoServico"  placeholder="Digite a Descrição do Serviço"  autofocus></textarea> 
            </div>
            <div clas="form-group">
                <label for="txtdescricaoservico">Débitos:</label>
                <textarea class="form-control" id="txtdebitos" rows="4" cols="auto" name="debitos"  placeholder="Digite se tem débitos"  autofocus></textarea> 
            </div>
                <div class="btn-cadastrarr">
                <button type="submit"  class="btn btn-success" name="btnCadastrar">Cadastrar</button>
            </div>
            
        </form> 
    </section>