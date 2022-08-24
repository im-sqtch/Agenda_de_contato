<?php

    $host = "localhost";
    $dbname = "agenda_de_contato";
    $user = "root";
    $pass = "";

    try {

        $conn = new PDO("mysql:host=$host;dbname=$dbname", $user, $pass);

        // Ativar o modo de erros
        $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

    }   catch(PDOException $e) {

        // erro na conexão
        $error = $e->getMessage();
        echo "Erro: $error";

    }

?>