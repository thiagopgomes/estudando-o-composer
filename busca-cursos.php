<?php

require_once 'vendor/autoload.php';
//require 'src/Buscador.php';

use Alura\BuscadorDeCursos\Buscador;
use GuzzleHttp\Client;
use Symfony\Component\DomCrawler\Crawler;



$cliente = new Client(['base_uri' => 'https://www.alura.com.br/']);
$crawler = new Crawler();


$buscador = new Buscador($cliente, $crawler);
$cursos = $buscador->busca('/cursos-online-programacao/php');


foreach ($cursos as $curso){
    echo $curso . PHP_EOL;
}

