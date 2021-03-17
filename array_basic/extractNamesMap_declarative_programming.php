<?php 

# tasklist ---> file json
$persons = array(
    array(
        'name' => 'Paolo',
        'surname' => 'Verdi'
    ),
    [
        'name'=>'Mario',
        'surname'=>'Mario'
    ],
    [
        'name'=>'Luigi',
        'surname'=>'Mario'
    ]
);


/** 
 * Esempi di stile dichiarativo
 */

# criteria  taskName - contiene ->  $searchText
/**
 * La funzione anonima viene assegnata alla variabile $filterMario
 */
$filterMario =  function ($person) {
                    return $person['surname']=='Mario'; 
};

/**
 * La funzione array_filter utilizza la callback contenuta in $filterMario  
 */
$marios = array_filter($person, $filterMario);


/**
 * Questa funzione estrae il valore dell'indice name per ogni elemento dell' array
 */
function extractName($item)
{
    return $item['name'];
}

/**
 * La funzione di callback viene dichiarata con il nome della finzione
 */
$names = array_map('extractName', $persons);

print_r($names);


/**
 * La funzione di callback viene passata direttamente come funzione anonima come
 * argomento
 */
$marios = array_filter($persons, function($person){
        return $person['surname']=='Mario';
} );

print_r($marios);