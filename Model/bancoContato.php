<?php
function inserirProduto($conexao, $nomeProduto, $marcaProduto, $valorProduto, $qtdProduto){
    $query = "insert into produtostb(nomeProduto, marcaProduto, valorProduto, qtdProduto)values('{$nomeProduto}','{$marcaProduto}', '{$valorProduto}', '{$qtdProduto}')";
    return mysqli_query($conexao,$query);
}

function buscarProdutoNome($conexao,$nomeProduto){
    $query = "Select * from produtostb where nomeProduto like '%{$nomeProduto}%'";
    $result = mysqli_query($conexao,$query);
    return $result;
}

function buscarProdutoID($conexao, $idProduto){
    $query = "Select * from produtostb where idProduto = '{$idProduto}'";
    $result = mysqli_query($conexao,$query);
    $result = mysqli_fetch_array($result);
    return $result;
}

function alterarProduto($conexao,$idProduto, $nomeProduto, $marcaProduto, $valorProduto, $qtdProduto){
    $query = "update produtostb set nomeProduto ='{$nomeProduto}', 
    marcaProduto ='{$marcaProduto}', valorProduto = '{$valorProduto}', qtdProduto ='{$qtdProduto}' where idProduto = '{$idProduto}'";
    $result = mysqli_query($conexao,$query);
    return $result;
}

function deletarProduto($conexao,$idProduto){
    $query = "Delete from produtostb where idProduto = '{$idProduto}'";
    $result = mysqli_query($conexao,$query);
    return $result;
}