<?php
/*
$nome1 = "João";
$nome2 = "Maria";
$nome3 = "José";*/

$lista_nomes = array(); // $lista_nomes = [];

                          // i = index = índice (posição)
$lista_nomes[] = "João";  // 0
$lista_nomes[] = "Maria"; // 1
$lista_nomes[] = "José";  // 2
$lista_nomes[] = "Joana"; // 3

//var_dump($lista_nomes);

echo count($lista_nomes); // sizeof
echo "<br />";


// Testando se a posição i existe
if(isset($lista_nomes[9]))
    echo $lista_nomes[9];
else
    echo "índice não existe";

echo '<hr />';

// Com operador ternário
$i = 22;

echo isset($lista_nomes[$i]) ? $lista_nomes[$i] : 'índice não existe';

echo '<hr />';

$total_posicoes_array = count($lista_nomes);

for($i=0; $i<$total_posicoes_array; $i++)
{
    /*if(isset($lista_nomes[$i]))
        echo "Posição do índice está em $i com o valor " . $lista_nomes[$i];
    else
        break;*/
    
    echo "Posição do índice está em $i com o valor " . $lista_nomes[$i];
    echo "<br />";
}




