<?php
/*Definindo os parâmetros de conexão
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "blog_phpiando";

// Criando a conexão
$conn = new mysqli($servername, $username, $password, $dbname);

// Verificando a conexão
if ($conn->connect_error) {
    die("Conexão mal sucedida: " . $conn->connect_error);
}

// Inserindo dados no banco de dados 
$insert = "INSERT INTO users (nome, email, password) 
           VALUES ('Aurio', 'aurio1@gmail.com', SHA2('43214321i', 256));";
$result = $conn->query($insert);

if ($result) {
    echo "Dados inseridos com sucesso! O ID é {$conn->insert_id}<br>";
} else {
    echo "Erro ao inserir dados no banco: {$conn->error}<br>";
}

// Exemplo de uma consulta após verificar a conexão
$sql = "SELECT * FROM users";
$result = $conn->query($sql);

if ($result) {
    echo "Consulta realizada com sucesso!<br>";
    while ($obj = $result->fetch_object()) {
        // Acessando a propriedade 'nome' corretamente
        echo "Nome: " . $obj->nome . "<br>";
        echo "Email: " . $obj->email . "<br>";
        echo "Password (SHA256 hash): " . $obj->password . "<br>";
        echo "Created At: " . $obj->created_at . "<br>";
    }
} else {
    echo "Erro na consulta: " . $conn->error;
}

// Fechando a conexão
$conn->close();

?>


