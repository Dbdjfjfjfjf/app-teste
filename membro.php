<?php
session_start();

// Resto do seu código...
?>
<!DOCTYPE html>
<html>
  <head>
    <title>Pagina - Membros</title>
    <link rel="stylesheet" href="css/membro.css">
  </head>
  <body>
    <header>
      <nav>
        <ul>
          <li><a href="verificar_login.php">Inicio</a></li>
          <li><a href="sobre.php">Sobre</a></li>
          <li><a href="contato.php">Contato</a></li>
          <li><a href="membro.php">Membros</a></li>
          <li><a href="ajuda.php">Ajuda</a></li>
          <li><a href="https://discord.com/invite/XxX3fWcETr">Discord</a></li>
          <li><a href="lojas.php">Servicos</a></li>
          <li><a href="configuracoes.php">Configurações do Usuário</a></li> <!-- Adicionado link para Configurações do Usuário -->
        </ul>
      </nav>
    </header>
    <section class="hero">
        <h1>Bem-Vindo(a) a Nossa Pagina De Membros!</h1>
        <p>Seja Bem Vindo(a) a Nossas pagina Membros Espero que goste!!</p>
      </section>
    <style>
      /* Estilos gerais */
      body {
        font-family: Arial, sans-serif;
        margin: 0;
        padding: 0;
      }

      /* Estilos dos membros */
      .member {
        display: flex;
        flex-direction: column;
        justify-content: space-between;
        align-items: center;
        background-color: #fff;
        border: 1px solid #ddd;
        border-radius: 5px;
        box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);
        margin: 20px;
        padding: 20px;
        max-width: 300px;
      }

      .member img {
        width: 150px;
        height: 150px;
        object-fit: cover;
        border-radius: 50%;
      }

      .member h2 {
        margin: 10px 0;
        font-size: 24px;
        text-align: center;
      }

      .member p {
        margin: 0;
        font-size: 18px;
        text-align: center;
      }

      /* Estilos do rodapé */
      footer {
        background-color: #7289da;
        color: #fff;
        padding: 20px;
        text-align: center;
      }
    </style>
  </head>
  <body>
    <main>
      <div class="member">
        <img src="https://cdn-icons-png.flaticon.com/512/2206/2206368.png" alt="Foto do Membro">
        <h2>Nulo</h2>
        <p>Cargo do Membro</p>
      </div>

      <div class="member">
        <a href="Membros/RuanAlves.php">
        <img src="https://static.vecteezy.com/ti/vetor-gratis/p1/10384672-fundador-startup-ideia-empresario-color-icone-ilustracao-vetor.jpg" alt="Foto do Membro">
      </a>
        <h2>Ruan Alves</h2>
        <p>Fundador</p>
      </div>

      <!-- Adicione mais membros aqui -->

    </main>

    <footer>
      <p>&copy; 2023 BVR STUDIOS. Todos os direitos reservados.</p>
    </footer>
  </body>
</html>
