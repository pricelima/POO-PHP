<?php
class Exemplo {
    //criação de classe necessariamente precisa de atributos ou propriedades
    public string $nome;
    public string $escola;
}

// para trabalhar com classe é necessario objetos
// criar objetos/instacias
$exemploA = new Exemplo;
$exemploB = new Exemplo;


echo "<pre>";
var_dump($exemploA);
echo "  </pre>";

echo "<pre>";
var_dump($exemploB);
echo "  </pre>";
