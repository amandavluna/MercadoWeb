<?php
include_once("header.php");
include_once("../model/conexao.php");
include_once("../model/bancoContato.php");

extract($_REQUEST, EXTR_OVERWRITE);

$idProduto = isset($idProduto) ? $idProduto : "";

if ($idProduto) {

    $produto = buscarProdutoID($conexao, $idProduto);
?>

    <div class="container">
        <form class="row g-3" method="Post" action="../Controller/alterarProduto.php">
        <input type="hidden" value="<?php echo ($produto["idProduto"]); ?>"  name="idProduto">   
        
        <div class="col-md-8">
                <label for="inputNome" class="form-label">Nome</label>
                <input type="text" class="form-control" value="<?php echo ($produto["nomeProduto"]); ?>" name="nomeProduto" id="inputNome">
            </div>

            <div class="col-md-4">
                <label for="inputMarca" class="form-label">Marca</label>
                <input type="text" class="form-control" value="<?php echo ($produto["marcaProduto"]); ?>" name="marcaProduto" id="inputMarca">
            </div>

            <div class="col-md-4">
                <label for="inputValor" class="form-label">Valor</label>
                <input type="text" class="form-control" value="<?php echo ($produto["valorProduto"]); ?>" name="valorProduto" id="inputValor">
            </div>

            <div class="col-md-4">
                <label for="inputQtd" class="form-label">Qtd</label>
                <input type="text" class="form-control" value="<?php echo ($produto["qtdProduto"]); ?>" name="qtdProduto" id="inputQtd">
            </div>

            <div class="col-12">
                <!-- Button trigger modal -->
                
                <button type="submit" class="btn btn-primary">Alterar</button>
            </div>
        </form>
    </div>
    

<?php
} else {
    echo ("Dados não encontrados");
};
include_once("footer.php");
?>