<?php
require '../vendor/testTools/testTool.php';

function getClass(string $status):string {
    if($status === 'progress'){
        return 'primary';
        // "bg-<?= getClass($status) *chiusura php*";
    } else {
        if($status === 'todo'){
            return 'danger';
        } else {
            if ($status === 'done'){
                return 'secondary';
            }
        }
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