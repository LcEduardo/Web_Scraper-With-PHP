<?php

namespace Lucaseduardo\Buscador;

use GuzzleHttp\Client;
use Symfony\Component\DomCrawler\Crawler;

class Buscador {

    private Client $cliente;
    private string $url;
    public function __construct(Client $cliente, string $url)
    {
        $this->cliente = $cliente;
        $this->url = $url;
    }

    public function buscarLivros(): array {
        $response = $this->cliente->request('GET', $this->url);

        $html = $response->getBody()->getContents();

        
        $crawler = new Crawler($html);
        $class = $crawler->filter('.product_pod');

        $livros = [];

        $class->each(function (Crawler $book) use (&$livros) {
            $livros[] = $book->filter('h3 a')->attr('title');
            //echo $title . PHP_EOL;
        });

        return $livros;
    }
}