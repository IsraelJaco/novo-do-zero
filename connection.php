<?php
// Configurações de conexão com o banco de dados
$host = "localhost";   // Servidor do banco de dados (normalmente 'localhost')
$user = "root";        // Usuário do banco de dados
$password = "";        // Senha do banco de dados (deixe vazio se não houver senha)
$database = "blog_phpiando";  // Nome do banco de dados

// Criando a conexão
$conn = new mysqli($host, $user, $password, $database);

// Verificando a conexão
if ($conn->connect_error) {
    die("Falha na conexão: " . $conn->connect_error);
} else {
    echo "Conexão bem-sucedida!";
}

// Fechando a conexão (opcional)
$conn->close();
?>
