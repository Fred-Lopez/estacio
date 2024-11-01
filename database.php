<?php
    $host = 'localhost';
    $database = 'estacio';
    $user = 'root';
    $password = '';

    try {
        $pdo = new PDO('mysql:host = $host; dbname = $database', $user, $password);
        $pdo -> setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    }
    catch (PDOException $erro) {
        echo 'Erro de Conexão: '.$erro -> getMessage();
    }
?>