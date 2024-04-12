<?php 
require_once("banco-tipo-servico.php");
require_once("banco-cliente.php");
require_once("banco-servico.php");
require_once("cabecalho.php");
require_once("modal.php");
require_once("mostrar-alerta.php");
//chama função que lista os registros do banco de dados e retorna uma array
$servicos = listarServicos($conexao);
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
    <div class="tabela-clientes-wrapper">
        <div class="title-clientes-tabela">
</body>
            <h3>Registros</h3>
        </div>
               
           
        <?php
mostraAlerta("success");
mostraAlerta("danger");
?>
        <div class="tabela-clientes">
        
            <table class="table">
<thead>
<tr>
<th class="linhas">Nome do Cliente</th>
<th class=linhas>Debitos</th>
<th class=linhas>Tipo Serviço</th>
<th class=linhas>Data do Serviço</th>
<th class=linhas>DescricaoServico</th>
<th class="linhas">Alterações</th>
<th class="linhas">Exclusão</th>
</tr>
</thead>
<tbody>
<?php
//ler todos os registros do array de registros e colocar na tabela
foreach ($servicos as $servico) :
$cliente = buscarCliente($conexao, $servico['Id_Cliente']);
$tiposervico = buscarTipoServico($conexao, $servico['Id_TipoServico']);
?>
<tr>
<td class=linhas><?= $cliente['Nome'] ?></td>
<td class=linhas><?= $servico['Debitos'] ?></td>
<td class=linhas><?= $tiposervico['TipoServico']?></td>
<td class=linhas><?= $servico['Data_Servico'] ?></td>
<td class=linhas><?= $servico['Descricao_Servico'] ?></td>
<td class="linhas"><a href="#" class="btn btn-success" onclick="openModal('servico-form-alterar.php?id=<?= $servico['Id_Servico'] ?>')"><i class="fas fa-pen"> Alterar</a></td>
<td class=linhas><a href="servico-action-excluir.php?id=<?= $servico['Id_Servico'] ?>" class="btn btn-danger" onclick="return confirm('Deseja realmente excluir esse Registro?');"><i class="fas fa-trash"> Excluir</a></td>     
</td>
</tr>
</div>
<?php endforeach ?>
</tbody>
</table>

<?php if(sizeof($servicos) > 0): ?>
<?php else: 

echo('Nenhum Registro.');

    ?>

<?php endif ?>


    </div>
    </section>