<?php

require __DIR__ . '/vendor/autoload.php';

use GuzzleHttp\Client;
use Lucaseduardo\Buscador\Buscador;

$cliente = new Client();

$buscar = new Buscador($cliente, 'https://books.toscrape.com/');

$livros = $buscar->buscarLivros();

foreach ($livros as $livro) {
    echo $livro . PHP_EOL;
}