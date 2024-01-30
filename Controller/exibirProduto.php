<?php
include_once("../model/conexao.php");
include_once("../model/bancoContato.php");
 
extract($_REQUEST,EXTR_OVERWRITE);
 
buscarProdutoNome($conexao,$nomePruduto);
 
header("Location: ../view/buscar.php");
?>