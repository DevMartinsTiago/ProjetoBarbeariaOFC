<?php

// Conecta ao banco de dados
$conn = new PDO("mysql:host=localhost;port=3306;dbname=formulario-barbearia", "meu_usuario", "meu_senha");

// Verifica se a conexão foi bem-sucedida
if (!$conn) {
    die("Não foi possível conectar ao banco de dados.");
}

// Exibe uma mensagem de sucesso
echo "Conectado ao banco de dados com sucesso!";

// Fecha a conexão
$conn = null;

?>