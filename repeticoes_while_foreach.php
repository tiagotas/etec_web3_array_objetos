<?php

//                0        1        2       3
$lista_nomes = ['João', 'Maria', 'José', 'Joana'];


reset($lista_nomes);

while( key($lista_nomes) !== null )
{
    $posicao = key($lista_nomes);
    $valor = current($lista_nomes);

    echo "A posição atual é $posicao e o valor é $valor <br />";

    next($lista_nomes);
}

echo '<hr />';

// para cada
foreach($lista_nomes as $nome_corrente)
{
    echo "O nome da vez é $nome_corrente <br />";
}




