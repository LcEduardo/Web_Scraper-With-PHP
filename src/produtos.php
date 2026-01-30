<?php

use GuzzleHttp\Client;

require __DIR__ . '/../vendor/autoload.php';
require __DIR__ . '/Buscador.php';

$cliente = new Client();

$buscar = new Buscador($cliente, 'https://books.toscrape.com/');

$livros = $buscar->buscarLivros();

foreach ($livros as $livro) {
    echo $livro . PHP_EOL;
}