<?php
    $pedido = $_GET['pedido'];
    $loja = $_GET['loja'];
    $total = $_GET['total'];
?>
<form name="form-login" id="form-login" action="cad_pedido.php?pedido=<?php echo $pedido?>&loja=<?php echo $loja?>&total=<?php echo $total?>" method="post" onsubmit="return validaForm()">
  <div class="form-group">
    <label for="exampleFormControlTextarea1">Resumo do pedido</label>
    <textarea class="form-control" id="exampleFormControlTextarea1" rows="3" readonly=“true”><?php echo $pedido ?></textarea>
  </div>
  <h5 class="info" align="center">Total a pagar: R$<?php echo $_GET['total']?></h5>

  <p class="info" align="center">Informe o seu endereço de entrega.</p>

  <div class="form-row">
    <div class="form-group col-md-6">
      <label for="inputEmail4">Email</label>
      <input type="email" class="form-control" name="email" id="email">
    </div>
    <div class="form-group col-md-6">
      <label for="inputPassword4">Telefone</label>
      <input type="Text" class="form-control" name="telefone" id="telefone">
    </div>
  </div>
  <div class="form-group">
    <label for="inputAddress">Endereço</label>
    <input type="text" class="form-control" id="endereco" name = "endereco" placeholder="Rua Exemplo, 000">
  </div>
  <div class="form-group">
    <label for="inputAddress">Complemento</label>
    <input type="text" class="form-control" id="complemento" name="complemento" placeholder="Qualquer informação útil para a entrega.">
  </div>
  <div class="form-row">
    <div class="form-group col-md-6">
      <label for="inputCity">Cidade</label>
      <input type="text" class="form-control" id="cidade" name="cidade">
    </div>
  </div>
  <div class="form-group">
    <div class="form-check">
      <input class="form-check-input" type="checkbox" id="gridCheck">
      <label class="form-check-label" for="gridCheck">Concordo com os termos de responsabilidade.</label>
    </div>
  </div>
  <div align="center">
    <button type="submit" class="btn btn-primary">Enviar</button>
  </div>
</form>