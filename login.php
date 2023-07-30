<?php
    if(isset($_POST['submit']))
//      print_r('Nome: ' . $_POST['nome']);
//      print_r('<br>');
//      print_r('Email: ' . $_POST['email']);
//      print_r('<br>');
//      print_r('Telefone: ' . $_POST['telefone']);
//      print_r('<br>');
//      print_r('Sexo: ' . $_POST['genero']);
//      print_r('<br>');
//      print_r('Data De Nascimento: ' . $_POST['data_nascimento']);
//      print_r('<br>');
//      print_r('Cidade: ' . $_POST['cidade']);
//      print_r('<br>');
//      print_r('Estado: ' . $_POST['estado']);
//      print_r('<br>');
//      print_r('Endereço: ' . $_POST['endereco']);
//      print_r('<br>');

if (isset($_POST['submit'])) {
  include_once('config.php');

  $nome = $_POST['nome'];
  $email = $_POST['email'];
  $telefone = $_POST['telefone'];
  $genero = $_POST['genero'];
  $data_nascimento = $_POST['data_nascimento'];
  $cidade = $_POST['cidade'];
  $estado = $_POST['estado'];
  $endereco = $_POST['endereco'];

  $stmt = mysqli_prepare($conexao, "INSERT INTO usuarios (nome, email, telefone, genero, data_nascimento, cidade, estado, endereco) VALUES (?, ?, ?, ?, ?, ?, ?, ?)");
  mysqli_stmt_bind_param($stmt, 'ssssssss', $nome, $email, $telefone, $genero, $data_nascimento, $cidade, $estado, $endereco);
  mysqli_stmt_execute($stmt);

  if (mysqli_stmt_affected_rows($stmt) > 0) {
      echo "Dados inseridos com sucesso!";
  } else {
      echo "Erro ao inserir dados.";
  }

  mysqli_stmt_close($stmt);
  mysqli_close($conexao);
  header('Location: index.html');
  exit();
}



// Faz a conexão com o banco de dados
$conn = mysqli_connect("localhost", "root", "", "banco_ruan");

// Verifica se o formulário foi enviado
if($_SERVER["REQUEST_METHOD"] == "POST"){
  // Recebe as informações do formulário
  $email = $_POST["email"];
  $senha = $_POST["senha"];

  // Consulta o banco de dados para verificar se o e-mail já existe
  $sql = "SELECT * FROM usuarios WHERE email = '$email'";
  $result = mysqli_query($conn, $sql);

  // Se o e-mail existir, faz o login
  if(mysqli_num_rows($result) > 0){
    $row = mysqli_fetch_assoc($result);
    if(password_verify($senha, $row["senha"])){
      // Inicia a sessão e armazena os dados do usuário
      session_start();
      $_SESSION["id"] = $row["id"];
      $_SESSION["nome"] = $row["nome"];
      $_SESSION["email"] = $row["email"];
      
      // Redireciona para a página principal
      header("location: index.php");
      exit();
    } else {
      // Senha incorreta
      $erro = "Senha incorreta";
    }
  } else {
    // E-mail não existe
    $erro = "E-mail não cadastrado";
  }
}
?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="css/login.css">
  <title>Login</title>
</head>
<body>
  <div class="box">
    <form action="login.php" method="POST">
       <fieldset>
        <legend><b>Formulario de clientes</b></legend>
        <br>
        <div class="inputbox">
          <input type="text" name="nome" id="nome" class="InputUser" required>
          <label for="nome" class="labelInput">Nome Completo</label>
        </div>
        <br><br>
        <div class="inputbox">
          <input type="email" name="email" id="email" class="InputUser" required>
          <label for="email" class="labelInput">Email</label>
        </div>
        <br><br>
        <div class="inputbox">
          <input type="tel" name="telefone" id="telefone" class="InputUser" required>
          <label for="telefone" class="labelInput">Telefone</label>
        </div>
        <br><br>
        <p>Sexo:</p>
        <input type="radio" name="genero" value="feminino" required>
        <label for="feminino">Feminino</label>
        <br>
        <input type="radio" name="genero" value="masculino" required>
        <label for="masculino">Masculino</label>
        <br>
        <input type="radio" name="genero" value="outros" required>
        <label for="outros">Outros</label>
        <br>
        <div class="inputbox">
          <br><br>
          <label for="data_nascimento"><b>Ano de Nascimento:</b></label>
          <input type="date" name="data_nascimento" id="data_nascimento" class="InputUser" required>
          <br>
          <br>
          <div class="inputbox">
            <input type="text" name="cidade" id="cidade" class="InputUser" required>
            <label for="cidade" class="labelInput">Cidade</label>
            <br><br>
          </div>
          <div class="inputbox">
            <input type="text" name="estado" id="estado" class="InputUser" required>
            <label for="estado" class="labelInput">Estado</label>
            <br><br>
          </div>
          <div class="inputbox">
            <input type="text" name="endereco" id="endereco" class="InputUser" required>
            <label for="endereco" class="labelInput">senha</label>
            <br><br>
          </div>
        </div>
        <input type="submit" name="submit" id="submit" class="button">
       </fieldset>
       <p>Ou faça login com:</p>
      <a href="https://accounts.google.com/o/oauth2/auth?response_type=code&client_id=SEU_CLIENT_ID&redirect_uri=SUA_URL_DE_REDIRECIONAMENTO&scope=email%20profile&state=SEU_ESTADO">
  Conectar com o Google
</a>

    </form>
  </div>
</body>
</html>