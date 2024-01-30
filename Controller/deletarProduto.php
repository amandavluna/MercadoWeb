<?php
require_once("../model/conexao.php");
require_once("../model/bancoContato.php");
include_once("../view/header.php");
 
extract($_REQUEST,EXTR_OVERWRITE);
 
 
if(deletarProduto($conexao, $idProduto)){
echo("As informações do Produto foram excluídas com sucesso.");
 
}else{
echo("Alerta!!! As informações do Produto Não foram excluídas");
}
 
?>