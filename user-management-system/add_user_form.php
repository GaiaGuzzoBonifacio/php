<?php
//require "autoload.php"; ----> è uno script php che si cucca i require da solo ecciao

require __DIR__."/vendor/testTools/testTool.php";
require __DIR__."/src/entity/User.php";
require __DIR__."/src/validator/UserValidation.php";
require __DIR__."/src/validator/ValidationResult.php";


if($_SERVER['REQUEST_METHOD']==='GET') {
   //valori del form quando entro nella pagina
    $firstNameValue = ''; 
    //creiamo una situazione di default del form (pre-compilamento, pre-bottone add)
    $firstNameClass = '';
    $firstNameClassMessage = '';
    $firstNameMessage = '';

    $lastNameValue = ''; 
    $lastNameClass = '';
    $lastNameClassMessage = '';
    $lastNameMessage = '';

    $emailValue = ''; 
    $emailClass = '';
    $emailClassMessage = '';
    $emailMessage = '';
}



if($_SERVER['REQUEST_METHOD']==='POST') { 
    //valori del form quando pigi Add
    $user = new User($_POST['firstName'], $_POST['lastName'], $_POST['email'], $_POST['birthday']); //
    $val = new UserValidation($user);
    $firstNameValidation = $val->getError('firstName'); //di val vai a cicciarmi quello che è uscito dall'Error
    $lastNameValidation = $val->getError('lastName');
    $emailValidation = $val->getError('email');


    $firstNameValue = $user->getFirstName(); //se inserisco il nome giusto, non dovrò riscriverlo dopo aver premuto Add
    $firstNameClass = $firstNameValidation->getIsValid() ? 'is-valid' : 'is-invalid';
    $firstNameClassMessage = $firstNameValidation->getIsValid() ? 'valid-feedback' : 'invalid-feedback';
    $firstNameMessage = $firstNameValidation->getMessage();

    $lastNameValue = $user->getlastName(); 
    $lastNameClass = $lastNameValidation->getIsValid() ? 'is-valid' : 'is-invalid';
    $lastNameClassMessage = $lastNameValidation->getIsValid() ? 'valid-feedback' : 'invalid-feedback';
    $lastNameMessage = $lastNameValidation->getMessage();

    $emailValue = $user->getEmail();
    $emailClass = $emailValidation->getIsValid() ? 'is-valid' : 'is-invalid';
    $emailClassMessage = $emailValidation->getIsValid() ? 'valid-feedback' : 'invalid-feedback';
    $emailMessage = $emailValidation->getMessage();

}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>add User</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-eOJMYsd53ii+scO/bJGFsiCZc+5NDVN2yr8+0RDqr0Ql0h+rP48ckxlpbzKgwra6" crossorigin="anonymous">

</head>
<body>
    <pre> <!-- il tag pre mantiene gli a capo tra una riga e laltra-->
    
    <?php
    /*
    echo "REQUEST_METHOD: ";
    echo $_SERVER['REQUEST_METHOD']."\n"; //metodo della richiesta: post/get/ciccia 
    
    echo "POST \n";
    print_r($_POST);

    echo "GET \n";
    print_r($_GET); //$_CICCIA sono array super globali che riescono a leggere il protocollo php che quando arriva una richiesta sotto forma di CICCIA i dati finiscono lì
    

    if($_SERVER['REQUEST_METHOD'] === 'POST') {
        //posso controllare i dati e se sono giusti inserire il nuovo utente

        $user = new User($_POST['firstName'],$_POST['lastName'],$_POST['email'],$_POST['birthday']); //qua in realtà dovrei mettere qualcosa che somiglia ll'userfactory
        $userModel = new UserModel();
        $userModel->create($user);
    }
    */
    ?>
    
    </pre>
    <header>
        USM
    </header>
    <div class="container">
        <form action="add_user_form.php" method="POST"> <!-- GET per ottenere parametri POST per inviare i dati-->
            <div class="form-group">
                <label for="">Name</label>
                <!-- <input class="form-control < ?= $firstNameValidationResult->getisValid() ? 'is-valid':'is-invalid' /* abilita visualizzazione dell'errore */?>" 
                value="< ?= $firstNameValidationResult->getValue() ? >" ESEMPIO-->
                <input 
                value="<?= $firstNameValue ?>"
                class="form-control <?= $firstNameClass?>" 
                name="firstName" 
                type="text"> <!-- is-invalid -->
                <div class="<?= $firstNameClassMessage ?>">
                    <?= $firstNameMessage ?>
                </div>
            </div>
            <div class="form-group">
                <label for="">Surname</label>
                <input 
                value="<?= $lastNameValue ?>"
                class="form-control <?= $lastNameClass?>"
                name="lastName" 
                type="text">
                <div class="<?= $lastNameClassMessage ?>">
                    <?= $lastNameMessage ?>
                </div>
            </div>
            <div class="form-group">
                <label for="">Email</label>
                <input 
                value="<?= $emailValue ?>"
                class="form-control <?= $emailClass?>" 
                name="email" 
                type="text">
                <!-- <input class="form-control" required name="email" type="email"> oppure posso scrivere questo per avere una validazione via html, molto fico. required per renderla obbligatoria, type email per errore di compilazione--> 
                <div class="<?= $emailClassMessage ?>">
                    <?= $emailMessage ?>
                </div>
            </div>
            <div class="form-group">
                <label for="">Birthday</label>
                <input class="form-control" name="birthday" type="date">
                <div class="invalid-feedback">
                    Please select your birthday date.
                </div>
            </div>

            <button class="btn btn-primary mt-3" type="submit">Add</button>
        </form>
    </div>
</body>
</html>