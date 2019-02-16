<!DOCTYPE html>
<html lang="pt-br">
<head>

  <title>Contato - Calisto</title>


<?php 

  include "cabecalho.php";

 ?>


</head>
<body>


<?php 

  include "menu.php";

 ?>


<hr>

<div class="conteudoPagina">
<center>
<div class="container-fluid">
<div class="row">
<div class="col-md-12">
<div class="row">
<div class="col-md-4">
</div>
<div class="col-md-4">
<img alt="Imagem Contato" src="imagens/contato.png" class="img-fluid">
</div>
<div class="col-md-4">
</div>
</div>
<br>
    <span class="titulo"> Contato </span>
<br>
	<label class="form"> Por favor, preencha todos os campos corretamente! </label>
<hr>
</div>
</div>
</div>
<br>


<form action="email.php" name="formulario1" method="post">

    <div class="col-md-4 mb-3">
      <label for="validationCustom02">Nome</label>
      <input type="text" class="form-control" id="validationCustom02" placeholder="Digite seu nome" required name="nome">
    </div>

    <div class="col-md-4 mb-3">
      <label for="validationCustom02">Sobrenome</label>
      <input type="text" class="form-control" id="validationCustom02" placeholder="Digite seu sobrenome" required name="sobrenome">
    </div>

    <div class="col-md-4 mb-3">
      <label for="validationCustom02">Assunto</label>
      <input type="text" class="form-control" id="validationCustom02" placeholder="Digite o assunto da mensagem" required name="assunto">
    </div>

  <div class="form-group campos-contato">
    <label for="exampleFormControlInput1">Endereço de Email</label>
    <input type="email" class="form-control" id="exampleFormControlInput1" placeholder="nome@exemplo.com" required name="email">
  </div>

  <div class="form-group campos-contato">
    <label for="exampleFormControlTextarea1">Mensagem</label>
    <textarea class="form-control" id="exampleFormControlTextarea1" rows="3" cols="4" placeholder="Digite sua mensagem" required name="mensagem"></textarea>
  </div>

  <button type="submit" class="btn btn-primary" name="btnEnviar">Enviar</button>

</form>

</center>
</div>

<br>


<?php 

  include "rodape.php";

?>


</body>
</html>
