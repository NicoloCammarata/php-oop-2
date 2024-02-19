<?php
require_once __DIR__.'/class/cani.php';
require_once __DIR__.'/class/categoria.php';
require_once __DIR__.'/class/cibo.php';
require_once __DIR__.'/class/prodotto.php';


$prodottOne = new cibo('Purina', '3/kg', 'Portogruaro');

$prodottOne->ingredienti = 'carne';


$caneOne = new cani();
$caneOne->$tipo = 'cane';
$caneOne->$razza = 'labrador';
$caneOne->$età = '7';
$caneOne->$peso = '15kg'

?>