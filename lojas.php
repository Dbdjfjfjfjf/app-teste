<?php
session_start();

// Resto do seu código...
?>
<!DOCTYPE html>
<html lang="pt-br">
  <head>
    <title>Pagina - lojas</title>
    <link rel="stylesheet" href="css/lojas.css">
  </head>
  <body>
    <header>
      <nav>
        <ul>
          <li><a href="index.php">Inicio</a></li>
          <li><a href="sobre.php">Sobre</a></li>
          <li><a href="contato.php">Contato</a></li>
          <li><a href="membro.php">Membros</a></li>
          <li><a href="ajuda.php">Ajuda</a></li>
          <li><a href="https://discord.com/invite/XxX3fWcETr">Discord</a></li>
          <li><a href="lojas.php">Trabalhos</a></li>
        </ul>
      </nav>
    </header>
    <section class="hero">
        <h1>Bem-Vindo(a) Ao Site BVR STUDIOS</h1>
        <p>Seja Bem Vindo(a) Ao Nosso site Espero Que Goste!!</p>
      </section>

	<style>
		body {
			font-family: Arial, sans-serif;
			margin: 0;
			padding: 0;
		}
		header {
			background-color: #333;
			color: #fff;
			padding: 20px;
			text-align: center;
		}
		h1 {
			margin: 0;
		}
		nav {
			background-color: #eee;
			padding: 10px;
		}
		nav ul {
			margin: 0;
			padding: 0;
			list-style-type: none;
			display: flex;
			justify-content: space-between;
		}
		nav li {
			margin: 0 10px;
		}
		nav a {
			color: #333;
			text-decoration: none;
			padding: 5px;
			border-radius: 5px;
			transition: background-color 0.3s ease;
		}
		nav a:hover {
			background-color: #333;
			color: #fff;
		}
		main {
			padding: 20px;
		}
		h2 {
			margin-top: 0;
		}
		.work {
			display: flex;
			flex-wrap: wrap;
			justify-content: center;
		}
		.work-item {
			background-color: #eee;
			border: 1px solid #ccc;
			border-radius: 5px;
			box-shadow: 3px 3px 5px rgba(0,0,0,0.2);
			margin: 10px;
			padding: 20px;
			width: 300px;
		}
		.work-item h3 {
			margin-top: 0;
			font-size: 1.2em;
		}
		.work-item p {
			margin-bottom: 0;
		}
	</style>
	<header>
		<a href="verificar_login.php">
		<h1 style="color: red;">Meus trabalhos de desenvolvimento</h1>
	</a>
	</header>
	<nav>
		<ul>
			<li><a href="#web">Desenvolvimento Web</a></li>
			<li><a href="#mobile">Desenvolvimento Mobile</a></li>
			<li><a href="#ecommerce">E-commerce</a></li>
		</ul>
	</nav>
	<main>
		<section id="web">
			<h2 class="title-left">Veja Alguns de Nossos Trabalhos!</h2>
			<div class="work">
				<div class="work-item">
					<h3 class="title-center">Projeto 1</h3>
          <h3 class="e-commerce-gg">E-commerce</h3>
          <img class="centralizar-imagem" src="img/57589.png" alt="E-commerce" width="100px">
					<p></p>
				</div>

				<div class="work-item">
					<h3 class="title-center">Projeto 2</h3>
          <h3 class="e-commerce-gg">Desenvolvimento Mobile</h3>
          <img class="centralizar-imagem" src="img/images.png" alt="Desenvolvimento Mobile" width="100px" class="desenvolvimento-mobile">
					<p>A BVR STUDIOS e uma empresa especializada em desenvolvimento mobile, oferecendo solucoes personalizadas para atender as necessidades especificas de cada cliente. Seu principal objetivo e desenvolver aplicativos moveis que sejam modernos, funcionais e eficientes, ajudando as empresas a atingir seus objetivos e se destacarem no mercado. O desenvolvimento mobile envolve uma serie de atividades, desde a criacao do design e layout do aplicativo ate a programacao e implementacao das funcionalidades. A BVR STUDIOS conta com uma equipe de profissionais altamente qualificados e experientes, que utilizam as mais modernas tecnologias e metodologias para desenvolver aplicativos que atendam as expectativas dos clientes. Alem disso, a empresa tambem oferece servicos de manutencao e atualizacao de aplicativos, garantindo que eles estejam sempre atualizados e funcionando corretamente. Isso e essencial para manter a relevancia do aplicativo e garantir a satisfacao dos usuarios.</p>
				</div>	

        <div class="work-item">
					<h3 class="title-center">Projeto 3</h3>
					<p></p>
          <h3 class="e-commerce-gg">Desenvolvimento Web</h3>
          <div class="trabalhos">
            <div class="trabalho">
              <img class="centralizar-imagem" src="img/1688400.png" alt="Desenvolvimento Web" width="100px">              
              <p>A BVR STUDIOS e uma empresa especializada em desenvolvimento web, oferecendo solucoes personalizadas para atender as necessidades especificas de cada cliente. Seu principal objetivo e desenvolver websites modernos, funcionais e eficientes, que ajudem as empresas a atingir seus objetivos e se destacarem no mercado. O desenvolvimento web e uma area de grande importancia nos dias de hoje, ja que a presenca online e fundamental para qualquer empresa que queira ser bem-sucedida. Um website bem construido e bem estruturado pode ajudar a melhorar a visibilidade da empresa, atrair novos clientes e aumentar as vendas. O desenvolvimento web envolve uma serie de atividades, desde a criacao do layout e design do site ate a programacao e implementacao das funcionalidades. A BVR STUDIOS conta com uma equipe de profissionais altamente qualificados e experientes, que utilizam as mais modernas tecnologias e metodologias para desenvolver websites que atendam as expectativas dos clientes. Alem disso, a empresa tambem oferece servicos de manutencao e atualizacao de websites, garantindo que eles estejam sempre atualizados e funcionando corretamente. Isso e essencial para manter a relevancia do site e garantir a satisfacao dos usuario Em resumo, a BVR STUDIOS e uma empresa especializada em desenvolvimento web que oferece solucoes personalizadas para atender as necessidades especificas de cada cliente. Seu trabalho e fundamental para ajudar as empresas a se destacarem no mercado e atingirem seus objetivos, oferecendo websites modernos, funcionais e eficientes.</p>
              <a href="#">Saiba mais</a>
            </div>
            </div>
          </div>
      <footer>
         <p>Todos os direitos reservados &copy; 2023</p>
      </footer>
      <style>
        /* Centralizar Imagem */
        .centralizar-imagem {
          display: block;
          margin: 0 auto;
          background-color: transparent;
        }      
        /* Centralizar h3 com fundo branco*/
        .e-commerce-gg{
          text-align: center;
          background-color: white;
        }
        /* Centralizar h3 sem fundo */
        .title-center{
          text-align: center;
        }
        /* Texto Mais Para Esquerda */
        .title-left{
          left: 100px;
        }
      </style>
</body>
</html>