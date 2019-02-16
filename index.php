<!DOCTYPE html>
<html lang="pt-br">
<head>

  <title>Calisto Software</title>


<?php 

  include "cabecalho.php";

 ?>


</head>
<body>


<?php 

  include "menu.php";

 ?>


<hr>


<div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
  <ol class="carousel-indicators">
    <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
    <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
    <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
  </ol>
  <div class="carousel-inner">
    <div class="carousel-item active">
      <img class="d-block w-100" src="imagens/carrocel1.png" alt="First slide" width="640" height="442">
        <div class="carousel-caption">
    		<h3>Calisto Software</h3>
    		<p class="texto-carousel">A Calisto Software é uma empresa fundada para desenvolver um projeto na disciplina Projeto Integrador no curso Sistemas para Internet.</p>
  		</div>
    </div>

    <div class="carousel-item">
      <img class="d-block w-100" src="imagens/carrocel1.png" alt="Second slide" width="640" height="442">
        <div class="carousel-caption">
    		<h3>Objetivo</h3>
    		<p class="texto-carousel">Temos como objetivo, desenvolver softwares WEB sob medida e com as melhores tecnologias disponíveis.</p>
  		</div>
    </div>

    <div class="carousel-item">
      <img class="d-block w-100" src="imagens/carrocel1.png" alt="Third slide" width="640" height="442">
        <div class="carousel-caption">
    		<h3>Ferramentas</h3>
    		<p class="texto-carousel">Usamos as metodologias ágeis para o processo de desenvolvimento dos nossos softwares, garantindo a qualidade e organização de nossos produtos.</p>
  		</div>
    </div>
  </div>

  <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="sr-only">Previous</span>
  </a>
  <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="sr-only">Next</span>
  </a>
</div>


<hr>


<div id="afastaMeio">
  <div class="row">
    <div class="col-md-1"></div>
      <div class="col-md-10">
        <div class="row">
          <div class="col-md-4">
            <div class="card">
	             <br>
		            <center> <img class="card-img-top img-fluid" alt="Logo Projeto Desconhecido" src="imagens/desconhecido.png" class="img-fluid"> </center>
	               <div class="card-block">
		                <h5 class="card-title"></h5>
		                <p class="card-text desc-projetos">
		                <label class="desc"> Projeto sem divulgação ou ainda não planejado! </label>
		                </p>
		                <center> <button type="button" class="btn btn-outline-secondary">Em Breve!</button> </center>
	               </div>
              </div>
          </div>

		<div class="col-md-4">
			<div class="card">
					<br>
					<center> <img class="card-img-top img-fluid" alt="Logo Projeto Eridanus" src="imagens/eridanus.png" class="img-fluid"> </center>
					<div class="card-block">
						<h5 class="card-title"></h5>
							<p class="card-text desc-projetos">
								<label class="desc"> Eridanus é um sistema WEB gerenciador de resíduos eletrônicos.</label>
							</p>
					     <center> <a href="eridanus.php"> <button type="button" class="btn btn-success"> Saiba Mais! </button> </a> </center>
		            </div>
									</div>
								</div>

							<div class="col-md-4">
								<div class="card">
									<br>
									<center> <img class="card-img-top img-fluid" alt="Logo Projeto Desconhecido" src="imagens/desconhecido.png" class="img-fluid"> </center>
									<div class="card-block">
										<h5 class="card-title"></h5>
											<p class="card-text desc-projetos">
												<label class="desc"> Projeto sem divulgação ou ainda não planejado! </label>
											</p>
											<center> <button type="button" class="btn btn-outline-secondary">Em Breve!</button> </center>
									</div>
								</div>
							</div>
							<br>
						<br>
				</div>
			</div>
		</div>
  </div>


<?php 

  include "rodape.php";

?>


</body>
</html>
