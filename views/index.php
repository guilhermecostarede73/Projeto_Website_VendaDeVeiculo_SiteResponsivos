<!DOCTYPE html>
<html lang="pt-br">


<head>

	<!-- Criando site do zero - METAS TAG - Otimização do site para os mecanismo de buscas-->
	<title>GC.Veiculos - Anúncio de veiculos </title>
	
	<?php  require_once ("../libraries/head.php"); ?>
	<!-- Essa tag link o arquivo "../libraries/head.php" -->

	<meta name="description" content="A GC.Veiculos é um empresa especializada em anuncio de automóveis e motos BH em região. Contamos com dezenas de veículos à sua disposição.">

	<meta name="keywords" content="GC.Veiculos, sua emprese de veículos com dezenas de veículos em BH e região.">
	<!-- Essa tag 'KeyWords' é exclusivamente para os navegadores Yahoo e Bing;
	Lembre-se: a 'tag KeyWords' não tem tanta relevância para o navegador "google"; -->

	<link href="https://fonts.googleapis.com/css?family=Ubuntu&display=swap" rel="stylesheet"> 
	<!--Google Fonts Ubuntu -->
	
	<script src="../libraries/jquery.cycle.lite.js"></script>
	
</head>
<body>
		<header>
			<?php require_once ("../libraries/body.php"); ?>
			<!-- Essa tag link o arquivo "../libraries/body.php" -->



			<div class="ind-slide">
				<picture>
					<source media="(max-width: 480px)" srcset="../images/mobile-slide1.jpg">
					<source media="(min-width: 481px) and (max-width: 768px)" srcset="../images/tablet-slide1.jpg">
					<source media="(min-width: 769px)" srcset="../images/desktop-slide1.jpg">
					<img src="./images/mobile-slide1.jpg" alt="GC Veiculos - slide 1" title="GC Veiculos - slide 1">
				</picture>

				<picture>
					<source media="(max-width: 480px)" srcset="../images/mobile-slide2.jpg">
					<source media="(min-width: 481px) and (max-width: 768px)" srcset="../images/tablet-slide2.jpg">
					<source media="(min-width: 769px)" srcset="../images/desktop-slide2.jpg">
					<img src="../images/mobile-slide2.jpg" alt="GC Veiculos - slide 2" title="GC Veiculos - slide 2">
				</picture>

				<picture>
					<source media="(max-width: 480px)" srcset="../images/mobile-slide3.jpg">
					<source media="(min-width: 481px) and (max-width: 768px)" srcset="../images/tablet-slide3.jpg">
					<source media="(min-width: 769px)" srcset="../images/desktop-slide3.jpg">
					<img src="../images/mobile-slide3.jpg" alt="GC Veiculos - slide 3" title="GC Veiculos - slide 3">
				</picture>				
			</div>



		</header>


		<main>

			<div class="ind-anuncio"> <!-- CARRO 1-->

				<div class="ind-anuncio-title"> Carro 1</div>
				<div class="ind-anuncio-image"> <img src="../images/anuncio/carrogol.jpg" alt="Carro 1"></div>
				<div class="ind-anuncio-texto">Gol 2012<br>Nova geração de veiculos fabricados no Brasil.</div>
			</div>

			<div class="ind-anuncio">

				<div class="ind-anuncio-title"> Carro 2</div>
				<div class="ind-anuncio-image"> <img src="../images/anuncio/chevroletcruze.jpg" alt="Carro 1"></div>
				<div class="ind-anuncio-texto">Chevrolet Cruze - 2020<br>Nova geração de veiculos fabricados no Brasil.</div>
			</div>

			<div class="ind-anuncio">

				<div class="ind-anuncio-title"> Carro 3</div>
				<div class="ind-anuncio-image"> <img src="../images/anuncio/fiatmobi.jpg" alt="Carro 1"></div>
				<div class="ind-anuncio-texto">Fiat Mobi - 2020<br>Nova geração de veiculos fabricados no Brasil.</div>
			</div>

			<div class="ind-anuncio">

				<div class="ind-anuncio-title"> Carro 4</div>
				<div class="ind-anuncio-image"> <img src="../images/anuncio/hyundaihb20.jpg" alt="Carro 1"></div>
				<div class="ind-anuncio-texto">Hyundai HB20 - 2019<br>Nova geração de veiculos fabricados no Brasil.</div>
			</div>

			<div class="ind-anuncio"> <!-- CARRO 5-->

				<div class="ind-anuncio-title"> Carro 1</div>
				<div class="ind-anuncio-image"> <img src="../images/anuncio/carrogol.jpg" alt="Carro 1"></div>
				<div class="ind-anuncio-texto">Gol 2012<br>Nova geração de veiculos fabricados no Brasil.</div>
			</div>

			<div class="ind-anuncio">

				<div class="ind-anuncio-title"> Carro 1</div>
				<div class="ind-anuncio-image"> <img src="../images/anuncio/carrogol.jpg" alt="Carro 1"></div>
				<div class="ind-anuncio-texto">Gol 2012<br>Nova geração de veiculos fabricados no Brasil.</div>
			</div>

			<div class="ind-anuncio">

				<div class="ind-anuncio-title"> Carro 1</div>
				<div class="ind-anuncio-image"> <img src="../images/anuncio/carrogol.jpg" alt="Carro 1"></div>
				<div class="ind-anuncio-texto">Gol 2012<br>Nova geração de veiculos fabricados no Brasil.</div>
			</div>

			<div class="ind-anuncio">

				<div class="ind-anuncio-title"> Carro 1</div>
				<div class="ind-anuncio-image"> <img src="../images/anuncio/carrogol.jpg" alt="Carro 1"></div>
				<div class="ind-anuncio-texto">Gol 2012<br>Nova geração de veiculos fabricados no Brasil.</div>
			</div>


		</main>


		<!-- RODAPÉ DA PAGINA -->
		<footer>
			
			<?php require_once ("../libraries/footer.php"); ?>

		</footer>
</body>
</html>