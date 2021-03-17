<?php

// $classe = array();
$classe = [
    ['Mario','Rossi'],
    ['Luigi','Mario'],
    ['Mario','Mario'],
];

// print_r($classe);

foreach ($classe as $key => $alunno) {
    $nome = $alunno[0];
    $cognome = $alunno[1];
    
    echo "ciao sono $nome $cognome \n";
}

