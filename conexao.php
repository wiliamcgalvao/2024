<?php
try {
    $pdo = new PDO('mysql:host=localhost;dbname=php_2ab', 'root', '');
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    echo ("Conectado 2AB - O MELHOR");
} catch (PDOException $e) {
    echo 'Erro: ' . $e->getMessage();
    echo ("Não conectado");
}
?>
