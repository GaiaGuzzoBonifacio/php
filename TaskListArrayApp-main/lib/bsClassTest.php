<?php
require './vendortestTools/testTool.php';

function getClass(string $status):string {
    if($status === 'progress'){
        return 'primary'
        // "bg-<?= getClass($status) *chiusura php*";
    }
    // ... status e altri casi
}


$dataset = [
    ['todo','danger'],
    ['progress','primary'],
    ['done','secondary']
];


foreach ($dataset as $row) {
    $input = $row[0];
    $output = $row[1];

    $actual = getClass($input);

    assertEquals($output,$actual);
}