<?php
// indici sono stringhe

// $task = array();
$task = [
    'taskName' => 'Comprare il latte',
    'date' => '2021-02-11', // Y-m-d
    'id' => 4212  
];

echo $task['date']."\n";

$person = array (
    "name" => "Mario",
    'surname' => 'Rossi',
    'age' => 25,
    'cf' => 'xxxxxxxxxxxx',
    'address' => array (
        'street' => 'Via Ormea',
        'number' => '22/2',
        'postalcode' => '10100'
    )
);

$name = $person['name'];
$number = $person['address']['number'];
$street = $person['address']['street'];

echo "$name \n abita in $street numero $number\n";

echo $person['name']. "\n abita in ".$person['address']['street']." numero ".$person['address']['number']; 






$personNum = ['Mario','Rossi',25,'xxxxxxxx',['Via Ormea','22/2']];

