<?php
require_once("../model/conexao.php");
require_once("../model/bancoContato.php");
include_once("../view/header.php");
 
extract($_REQUEST,EXTR_OVERWRITE);
 
 
if(alterarProduto($conexao,$idProduto, $nomeProduto, $marcaProduto, $valorProduto, $qtdProduto)){
echo("As informações do Produto foram Alteradas");
 
}else{
echo("Alerta!!! As informações do Produto Não foram Alteradas");
}
 
?>