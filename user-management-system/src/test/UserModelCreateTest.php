<?php

/*ini_set('display_errors', true);
error_reporting(E_ALL);*/

require __DIR__."/../entity/User.php";   //__DIR__ serve per lanciare il test a prescindere da dove siamo
require __DIR__."/../model/UserModel.php";


$model = new UserModel();
$user = new User('Gianni', 'Verdi', 'cicciverdolino@email.com', '1988-04-04');
$model->create($user);