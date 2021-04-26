<?php

//su command line
//cd src/test
//php empty_isset_null.php


//come controllo se il campo è stato compilato oppure no

//isset = è impostato?
//empty = è vuoto?

$a = empty('');
var_dump($a);

$a = empty('    '); //dà false perchè gli spazi non vengono considerati null dall'empty
var_dump($a);


//$a = isset(''); --> non funziona perchè isset lavora solo in riferimento a una variabile
//quindi:

$value = '';
$a = isset($value);
var_dump($a);

$value = '        ';  //con isset invece dà true perchè non li conta e lo considera vuoto
$a = isset($value);
var_dump($a);

$value = 'Mario';
$a = isset($value);
var_dump($a);


var_dump($_POST['ciccio']); //$_POST è un array associativo [] ci sta l'indice
var_dump(isset($_POST['ciccio'])); //qua dà false perchè ciccio non è impostato
var_dump(empty($_POST['ciccio'])); //ciccio non esiste nell'array quindi qua dà true
var_dump(is_null($_POST['ciccio']));
var_dump(empty(NULL)); //true
var_dump(empty(trim('       '))); //true
var_dump(empty('')); //true