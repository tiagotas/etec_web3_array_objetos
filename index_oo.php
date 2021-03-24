<?php

include "Gato.php";
include "Cachorro.php";

$nicolau = new Gato("Nicolau");
$nicolau->miar();
$nicolau->comer("Wiskas");
$nicolau->dormir();

echo "<hr />";

$mel = new Cachorro("Mel");
$mel->latir();
$mel->comer("Sachê");
$mel->dormir();

echo "<hr />";

$lista_gatos = [];

/*
$lista_gatos[] = new Gato("Cinzão");
$lista_gatos[] = new Gato("Nikita");
$lista_gatos[] = new Gato("Xanão");
$lista_gatos[] = $nicolau;*/

$lista_gatos = [
    new Gato("Cinzão"), 
    new Gato("Nikita"), 
    new Gato("Xanão"),
    $nicolau
];

foreach($lista_gatos as $gato_da_vez)
{
    $gato_da_vez->miar();
}





