<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exemplo 1</title>
</head>
<body>
    <h1>PHP POO - Exemplo 2</h1>
    <hr>
    <h2>Assuntos abordados:</h2>
    <ul>
        <li>Criação dos objetos</li>
        <li>uso do metodo construtor</li>
        <li>uso do <code>$this</code></li>
    </ul>

<?php
// Importando a classe
require_once "src/Cliente.php";

// Criação dos objetos
$clienteA = new Cliente ('Tiago', 'tiago@gmail.com');
$clienteB = new Cliente ('Lima', 'felipelima397@gmail.com');
?>

<pre> <?=var_dump($clienteA, $clienteB)?> </pre>

</body>
</html> 