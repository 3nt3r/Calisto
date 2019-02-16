<!DOCTYPE html>
<html lang="pt-br">
<head>

  <title>Email Enviado - Calisto</title>


<?php 

  include "cabecalho.php";

 ?>


</head>
<body>


<?php 

  include "menu.php";

 ?>


<hr>

<div id="paginaEmail">

<?php 

$nome = htmlspecialchars($_POST['nome']);
$sobrenome = htmlspecialchars($_POST['sobrenome']);
$assunto = htmlspecialchars($_POST['assunto']);
$email = htmlspecialchars($_POST['email']);
$mensagem = htmlspecialchars($_POST['mensagem']);

if (isset($_POST['btnEnviar'])){
	ini_set('display_errors', 1);
	error_reporting(E_ALL);
	mail("calistosoftwares@gmail.com", "Assunto: ".$assunto.", ".$nome." ".$sobrenome, $mensagem, $email);

	echo "
	    <center style='margin-left: 6em; margin-right: 6em;'>
		<div class='alert alert-success' role='alert'>
  			<h4 class='alert-heading'>Email Enviado com Sucesso!</h4>
  			<p>Assim que possível, vamos analisar sua mensagem e responder o mais rápido possível!</p>
  			<hr>
  		<p class='mb-0'>Volte ao início e conheça mais sobre os nossos produtos!</p>
		</div>
		
		<a href='index.php' style='text-decoration: none;'> <button type='button' class='btn btn-primary btn-lg btn-block'> Voltar ao Início </button> </a>
		
		</center>
	";

} else {
	echo "<script> alert('Preencha todos os campos!'); window.location.href = 'contato.php'; </script>";
}

?>

</div>


<?php 

  include "rodape.php";

?>


</body>
</html>
