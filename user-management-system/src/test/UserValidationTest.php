<?php

require __DIR__."/../../vendor/testTools/testTool.php";
require __DIR__."/../entity/User.php";
require __DIR__."/../validator/UserValidation.php";
require __DIR__."/../validator/ValidationResult.php";


$user = new User('Mario','Draghi','mg@prez.gov','2000-01-01'); //nuovo utente

$val = new UserValidation($user); //nuova validazione
//$val->validate(); dentro al costruttore uservalidation abbiamo messo $this->validate

$firstNameValidation = $val->getError('firstName'); //dovrebbe restituire un validation result

//print_r($val);

assertEquals(true, $firstNameValidation->getisValid());
assertEquals(UserValidation::FIRST_NAME_ERROR_NONE_MSG, $firstNameValidation->getMessage());


//*********************************************caso test 1*********************************************
$user = new User('','Draghi','mg@prez.gov','2000-01-01'); 
$val = new UserValidation($user);
$firstNameValidation = $val->getError('firstName');

assertEquals(false, $firstNameValidation->getisValid());
assertEquals(UserValidation::FIRST_NAME_ERROR_REQUIRED_MSG, $firstNameValidation->getMessage());

//*********************************************caso test 2*********************************************
$user = new User('     ','Draghi','mg@prez.gov','2000-01-01'); 
$val = new UserValidation($user);
$firstNameValidation = $val->getError('firstName');

assertEquals(false, $firstNameValidation->getisValid());
assertEquals(UserValidation::FIRST_NAME_ERROR_REQUIRED_MSG, $firstNameValidation->getMessage());

//*********************************************caso test 3*********************************************
$user = new User(NULL,'Draghi','mg@prez.gov','2000-01-01'); 
$val = new UserValidation($user);
$firstNameValidation = $val->getError('firstName');

assertEquals(false, $firstNameValidation->getisValid());
assertEquals(UserValidation::FIRST_NAME_ERROR_REQUIRED_MSG, $firstNameValidation->getMessage());