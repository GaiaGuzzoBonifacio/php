<?php
require '../vendor/TestTools/testTool.php';
require '../class/Task.php';

$dataset = [
    ['2021-03-23',true,'task scaduta ieri'],
    ['2021-03-24',false,'task di oggi'],
    ['2021-03-25',false,'task che scade domani'],
];

foreach ($dataset as $testCase) {
    $inputDate = $testCase[0];
    $expected = $testCase[1];
    $description = $testCase[2];
    //list($inputDate,$expected,$description) = $testCase; //con array non troppo lunghi, list serve per fare assegnazioni veloci

    $task = new Task();
    $task->taskName = 'ciccio';
    $task->expirationDate = $inputDate;
    $task->status = 'done';

    assertEquals($expected,$task->isExpired(), $description);
}