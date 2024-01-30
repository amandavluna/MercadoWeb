<?php
include_once("header.php");
?>

<div class="container">
    <form class="row g-3" method="Post" action="../controller/adicionarProduto.php">
        <div class="col-md-4">
            <label for="inputNome" class="form-label">Nome</label>
            <input type="text" class="form-control" name="nomeProduto"id="inputNome">
        </div>

        <div class="col-md-4">
            <label for="inputMarca" class="form-label">Marca</label>
            <input type="text" class="form-control" name="marcaProduto"id="inputMarca">
        </div>

        <div class="col-md-2">
            <label for="inputValor" class="form-label">Valor</label>
            <input type="text" class="form-control" name="valorProduto"id="inputValor">
        </div>

        <div class="col-md-2">
            <label for="inputQtd" class="form-label">Qtd</label>
            <input type="text" class="form-control" name="qtdProduto"id="inputQtd">
        </div>
    
        <div class="col-12">
            <button type="submit" class="btn btn-primary">Cadastrar</button>
        </div>
    </form>
</div>

<?php
include_once("footer.php");
?>