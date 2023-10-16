<?php
session_start();

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $email = $_POST['email'];
    $senha = $_POST['senha'];

    // Conexão com o banco de dados (substitua os valores apropriados)
    $conn = new mysqli("localhost", "root", "", "loja");

    if ($conn->connect_error) {
        die("Erro na conexão com o banco de dados: " . $conn->connect_error);
    }

    // Consulta SQL para verificar as credenciais
    $query = "SELECT * FROM usuarios WHERE email='$email' AND senha='$senha'";
    $result = $conn->query($query);

    if ($result->num_rows == 1) {
        // Login bem-sucedido
        $_SESSION['logged_in'] = true;
        header("Location: pagina_inicial.php");
    } else {
        // Credenciais inválidas
        $_SESSION['error'] = "Email ou senha inválidos.";
        header("Location: ../paginas/login_erro.php");
    }

    $conn->close();
} else {
    header("Location: ../index.php");
}
?>
