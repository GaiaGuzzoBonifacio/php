<?php

$unix = new DateTime('1970-01-01');
echo $unix->getTimestamp()."\n";

$un_minuto_dopo = new DateTime('1970-01-01 01:00:00');

echo $un_minuto_dopo->getTimestamp()."\n";

$today = new DateTime();
echo $today->getTimestamp()."\n";


// task | today
$passato->getTimestamp() < $today->getTimestamp();
// ----------------------------------------------

echo $today->format('d M Y');
echo $today->format('w')."\n";

$settimana = array('it_IT'=>[
                                'Domenica',
                                'Lunedi',
                                'Martedi',
                                'Mercoledi',
                            ],
                   'fr_FR'=>[
                                'xxxxxx',
                                'xxxxxx',
                                'xxxxxx',
                                'xxxxxx',
                            ]
                   );

echo "oggi è ".$settimana['fr_FR'][$today->format('w')]."\n";
echo "oggi è ".$settimana['it_IT'][$today->format('w')];
