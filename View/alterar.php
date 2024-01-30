<?php
include_once("header.php");
include_once("../model/conexao.php");
include_once("../model/bancoContato.php");
?>
<!-- inicio formulario -->
<div class="container m-4">
<form class="row g-3" method="POST" action="#">
<div class="row g-3 align-items-center">
    <div class="col-auto">
        <label for="inputcodigo" class="col-form-label">Digite o Nome</label>
    </div>
    <div class="col-auto">
        <input type="text" id="inputcodigo" name="nomeProduto" class="form-control" aria-describedby="passwordHelpInline">
    </div>
    <div class="col-auto">
         <button type="submit" class="btn btn-primary">Buscar</button>
    </div>
</div>
<!--fim formulario -->

<!--inicio tabela-->
<hr>
<table class="table">
  <thead>
    <tr>
      <th scope="col">Código</th>
      <th scope="col">Nome</th>
      <th scope="col">Marca</th>
      <th scope="col">Valor</th>
      <th scope="col">Qtd</th>
      <th scope="col">Alterar</th>
    </tr>
  </thead>
  <tbody>
  <?php
     extract($_REQUEST,EXTR_OVERWRITE);

     $nomeProduto = isset($nomeProduto)?$nomeProduto : "";
     
     if($nomeProduto){
       
       $dados = buscarProdutoNome($conexao,$nomeProduto);

     foreach($dados as $produtos) :
     ?>
    <tr>
    <th scope="row"> <?php echo($produtos["idProduto"]);?> </th>
      <td> <?php echo($produtos["nomeProduto"])?> </td>
      <td> <?=$produtos["marcaProduto"]?> </td>
      <td> <?=$produtos["valorProduto"]?> </td>
      <td> <?=$produtos["qtdProduto"]?> </td>
      <td>
     <a class="btn btn-primary" href="alterarFormulario.php?idProduto=<?=$produtos["idProduto"]?>">
      Alterar
      </a>
      </td>
    </tr>
       <?php
       endforeach;
      }
       ?>
  </tbody>
</table>
    
  </tbody>
</table>
<!--fim tabela-->

</div>
<?php
include_once("footer.php");
?>