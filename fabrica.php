<?php

require_once 'Carro.php';

$carro1 = new Carro();
$carro2 = new Carro("Preto");
$carro3 = new Carro("Lilás");

//$carro2->cor = 'preto';

$carro1->abastecer(10);
$carro1->ligar();
$carro1->abastecer(20);
$carro1->acelerar(30);

var_dump($carro1);
var_dump($carro2);
var_dump($carro3);

