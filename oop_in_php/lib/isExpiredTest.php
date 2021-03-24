<?php
require "../vendor/TestTools/testTool.php";
require "../class/Task.php";

$testCases = [
    
    [
        'expired' => 'no',
        'expectedCount' => 9,
        'description' => 'ricerca di status in todo'
    ],
    [
        'expired' => 'yes',
        'expectedCount' => 1,
        'description' => 'ricerca di status in done'
    ],
    [
        'expired' => 'all',
        'expectedCount' => 10,
        'description' => 'ricerca all expirationDate'
    ],
    
];

$mockTaskList = array(
    array("id"=>4574,"taskName"=>"Mangiare il pesce","status"=>"done","expirationDate"=>"2011-05-04"),
    array("id"=>4574,"taskName"=>"Mangiare la verdura","status"=>"done","expirationDate"=>"2021-03-01"),
    array("id"=>6727,"taskName"=>"Fare esercizi di php","status"=>"todo","expirationDate"=>"2021-03-20"),
    array("id"=>4639,"taskName"=>"Latte detergente","status"=>"progress","expirationDate"=>"2021-09-02"),
    array("id"=>5718,"taskName"=>"Pizza e verdura da comprare","status"=>"done","expirationDate"=>"2021-09-02"),
    array("id"=>2637,"taskName"=>"Fare esercizi di java","status"=>"progress","expirationDate"=>"2021-09-02"),
    array("id"=>5497,"taskName"=>"Comprare il latte","status"=>"done","expirationDate"=>"2021-09-21"),
    array("id"=>5492,"taskName"=>"Fare preventivo per gestionale ACME","status"=>"todo","expirationDate"=>"2021-09-21"),
    array("id"=>6697,"taskName"=>"Onora il padre e  la madre","status"=>"todo","expirationDate"=>"2021-11-13"),
    array("id"=>6695,"taskName"=>"Tornare a Redmond (windows 10)","status"=>"todo","expirationDate"=>"2021-11-13")
);

foreach ($testCases as $testCase) {
    extract($testCase);
    $actual = array_filter($mockTaskList, isExpired());
    
   
    assertEquals($expectedCount, count($actual), $description);
}


