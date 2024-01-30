<?php
include_once("header.php");
 
 
 
require_once("../model/conexao.php");
require_once("../model/BancoContato.php");
include_once("../view/header.php");
?>
 
 
<!-- inicio formulario -->
<div class="row g-3 align-items-center">
  <form class="row g-3" method="POST" action="#">
  <div class="col-auto" >
    <label for="inputcodigo" class="col-form-label">Digite o Nome</label>
  </div>
  <div class="col-auto">
    <input type="text" id="inputcodigo" class="form-control" name="nomeProduto" aria-describedby="passwordHelpInline">
  </div>
  <div class="col-auto" >
  <button type="submit" class="btn btn-primary">Buscar</button>
  </div>
</div>
</form>
 
<table class="table">
  <thead>
    <tr>
      <th scope="col">Código</th>
      <th scope="col">Nome</th>
      <th scope="col">Marca</th>
      <th scope="col">Valor</th>
      <th scope="col">Qtd</th>
      <th scope="col">Deletar</th>
    </tr>
  </thead>
   
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
      <th scope="row"><?php echo($produtos["idProduto"]);?></th>
      <td><?=$produtos["nomeProduto"]?></td>
      <td><?=$produtos["marcaProduto"]?></td>
      <td><?=$produtos["valorProduto"]?></td>
      <td><?=$produtos["qtdProduto"]?></td>
      <td>
        <!-- Button trigger modal -->
   <button type="button" idProduto="<?php echo($produtos["idProduto"]);?>" nomeProduto="<?php echo($produtos["nomeProduto"]);?>" class="btn btn-danger" data-bs-toggle="modal" data-bs-target="#deletarModal">
    Deletar
</button>
      </td>
    </tr>
    <?php endforeach;
    }
    ?>
  </tbody>
</table>
</div>
<!-- Fim da Tabela-->
 <!-- Modal -->
<div class="modal fade" id="deletarModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h1 class="modal-title fs-5" id="exampleModalLabel">Atenção na Exclusão</h1>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
       ...
      </div>
      <div class="modal-footer">
      <form action="../Controller/deletarProduto.php" method="post">  
        <input type = "hidden" value="" class="idProduto from-control" name="idProduto">
        <button type="submit" class="btn btn-danger">Excluir</button>
      </form>
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Fechar</button>
      </div>
    </div>
  </div>
</div>
 
<script>
  let deletarContatoModal = document.getElementById('deletarModal');
      deletarContatoModal.addEventListener('show.bs.modal',function(event){
  let button = event.relatedTarget;
  let idProduto = button.getAttribute('idProduto');
  let nome_contato = button.getAttribute('nomeProduto');
 
  let modalBody = deletarContatoModal.querySelector('.modal-body');
  modalBody.textContent = 'Deseja realmente excluir o Produto ' + nome_contato + '?'
 
  let IDProduto = deletarContatoModal.querySelector('.modal-footer .idProduto');
  IDProduto.value = idProduto;
  })
</script>
<?php
include_once("footer.php");
?>