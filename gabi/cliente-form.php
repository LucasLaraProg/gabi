<head>
        <meta charset="UTF-8"/>
        <link rel="stylesheet" href="style.css"/>
</head>
<section class="cliente-form">
        <div class="titulo">
            <h3>Novo Cliente</h3>
        </div>
        
        <form action="cliente-action-inserir.php"  method="post">
            <div class="form-group">
                <label for="txtnome">Nome do Cliente:</label>
                <input type="string" class="form-control" id="txtnome" name="nome" placeholder="Digite o Nome"  autofocus required>
            </div>
            <div clas="form-group">
                <label for="txtendereco">Endereço do Cliente:</label>
                <input type="string" class="form-control" id="txtendereco" name="endereco" placeholder="Digite o Endereço"  autofocus required>
            </div>
            <div clas="form-group">
                <label for="txttelefone">Telefone:</label>
                <input type="tel" class="form-control" id="txttelefone" name="telefone" placeholder="Digite o telefone" autofocus required pattern="\([0-9]{2}\)[\s][0-9]{4}-[0-9]{4,5}" >
                <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery.mask/1.14.11/jquery.mask.min.js"></script>
<script type="text/javascript">$("#txttelefone").mask("(00) 0000-00009");</script>
            </div>
            <div class="btn-cadastrarr">
                <button type="submit"  class="btn btn-success" name="btnCadastrar">Cadastrar</button>
            </div>
            
            
        </form> 
    </section>