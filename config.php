<?php

    $dbHost = 'localhost';
    $dbusername ='root';
    $dbPassword = '';
    $dbname = 'formulario-barbearia';

    $conexao = new msqli ($dbHost, $dbusername, $dbPassword, $dbname);

    if ($conexao -> connect_errno)
    {
            echo "Erro"
    }
    else 
    {
        echo "Conexão deu certo"
    }




?>