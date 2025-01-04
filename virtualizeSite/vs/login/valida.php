<?php

require_once('../config/conn.php');
$conn = new mysqli($servername, $username, $password, $dbname);

// Verifica a conexão
if ($conn->connect_error) {
    die("Conexão falhou: " . $conn->connect_error);
}

// Recebe os dados do formulário
$email = $_POST['email'];
$senha = $_POST['senha'];

// Hash da senha (substitua por um algoritmo de hash mais seguro, como bcrypt)
$senha_hash = md5($senha); // Exemplo simples, use bcrypt em produção

// Consulta no banco de dados para verificar se o email e senha existem
$sql = "SELECT * FROM usuarios WHERE email='$email' AND senha='$senha_hash'";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    // Email e senha encontrados, redireciona para o Terra

    session_start();
    $_SESSION['usuario_logado']='1';
    header("Location: admin/index.php");
    exit();
} else {
    // Email ou senha inválidos
    echo "Email ou senha inválidos.";
?> 
    <script>
    window.history.back();
    alert("Email ou senha inválidos.");
    </script>

<?php
$conn->close();
}

?>