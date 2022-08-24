<?php

    $host = "localhost";
    $dbname = "agenda_de_contato";
    $user = "root";
    $pass = "";

    try {

        $conn = new PDO("mysql:host=$host;dbname=$dbname", $user, $pass);

        // Activate error modes
        $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

    }   catch(PDOException $e) {

        // Connection error
        $error = $e->getMessage();
        echo "Erro: $error";

    }

?>