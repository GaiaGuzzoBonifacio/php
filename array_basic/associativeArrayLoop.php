<?php 
$persons = array(
    array(
        'name' => 'Paolo',
        'surname' => 'Verdi'
    ),
    [
        'name'=>'Mario',
        'surname'=>'Rossi'
    ],
    [
        'name'=>'Luigi',
        'surname'=>'Mario'
    ]
);

$result = '';
foreach ($persons as $person) {
    $result .= $person['name']."\n";
}

echo $result;




