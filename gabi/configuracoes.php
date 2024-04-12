<?php 
require_once("banco-tipo-servico.php");
require_once("cabecalho.php");
require_once("modal.php");
require_once("mostrar-alerta.php");
//chama função que lista os tipos de serviços do banco de dados e retorna uma array
$tiposervicos = listarTipoServicos($conexao);
?>
<head>
        <meta charset="UTF-8"/>
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
        <link rel="stylesheet" href="style.css"/>
        </head>
    <section class="lista-clientes">
    <div class="clientes-wrapper">
        <div class="filtro">
    <?php require_once("filter.php");?>
    </div>
    </body>
    
    
    <div class="tabela-clientes-wrapper">
    <h3>Configurações</h3>
            <div class="div-botao-novocliente">
            <button class="btn btn-info "onclick="openModal('tipo-servico-form.php')" role="button" ><i class="fas fa-plus"></i> Novo Serviço</button>
            </div>
            <?php
mostraAlerta("success");
mostraAlerta("danger");
// Exiba os resultados
?>
        <div class="title-clientes-tabela">
        <table class="table">
<thead>
<tr>
<th class=linhas>Tipo de Serviço</th>
<th class="linhas">Alterações</th>
<th class="linhas">Exclusão</th>
</tr>
</thead>
<tbody>
<?php
//ler todos os registros do array tipo de serviços e colocar na tabela
foreach ($tiposervicos as $tiposervico) :
?>
<tr>
<td class=linhas><?= $tiposervico['TipoServico'] ?></td>
<td class="linhas"><a href="#" class="btn btn-success" onclick="openModal('?id=<?= $tiposervico['Id_TipoServico'] ?>')"><i class="fas fa-pen"> Alterar</a></td>
<td class=linhas><a href="c?id=<?= $tiposervico['Id_TipoServico'] ?>" class="btn btn-danger" onclick="return confirm('Confirma exclusão desse servico ( <?= $tiposervico['TipoServico'] ?>)?');"><i class="fas fa-trash"> Excluir</a></td>     
</td>
</tr>
</div>
<?php endforeach ?>
</tbody>
</table>

<?php if(sizeof($tiposervicos) > 0): ?>
<?php else: 

echo('Nenhum Tipo de Serviço Cadastrado.');

    ?>

<?php endif ?>


    </div>
        
</section>