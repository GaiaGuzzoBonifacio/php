<?php 
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

// imperativo
// trasformazione
// ["Paolo","Mario","Luigi"];
$names = [];
foreach ($persons as $person) {
    $names[] = $person['name'];
}

// filtro
$marios =[];
foreach ($persons as $person) {
    if($person['surname']=='Mario'){
        array_push($marios,$person); 
        // $marios[] = $person;
    }
}

print_r($marios);


