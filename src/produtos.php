<?php

require __DIR__ . '/../vendor/autoload.php';

use GuzzleHttp\Client;
use Symfony\Component\DomCrawler\Crawler;

$client = new Client();
$response = $client->request('GET', 'https://books.toscrape.com/');

echo $response->getStatusCode() . PHP_EOL;
//echo $response->getBody() . PHP_EOL;

$html = $response->getBody()->getContents();

// preciso percorrer o html
$crawler = new Crawler($html);
$class = $crawler->filter('.product_pod');

$class->each(function (Crawler $book, $i) {
    $title = $book->filter('h3 a')->attr('title');
    echo $title . PHP_EOL;
});

