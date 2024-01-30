<?php
require_once("../model/conexao.php");
require_once("../model/bancoContato.php");
include_once("../view/header.php");
 
extract($_REQUEST,EXTR_OVERWRITE);
 
 
if(inserirProduto($conexao,$nomeProduto,$marcaProduto,$valorProduto,$qtdProduto)){
echo("As informações do Produto foram salvas");
 
}else{
echo("Alerta!!! As informações do Produto Não foram salvas");
}
 
?>