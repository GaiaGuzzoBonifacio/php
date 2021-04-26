<?php

class UserValidation {

    //costanti di classe
    public const FIRST_NAME_ERROR_NONE_MSG = 'Il nome é corretto';
    public const FIRST_NAME_ERROR_REQUIRED_MSG = 'Il nome é obbligatorio';

    public const LAST_NAME_ERROR_NONE_MSG = 'Il cognome é corretto';
    public const LAST_NAME_ERROR_REQUIRED_MSG = 'Il cognome é obbligatorio';

    public const EMAIL_ERROR_NONE_MSG = 'Indirizzo email corretto';
    public const EMAIL_ERROR_REQUIRED_MSG = 'Indirizzo email obbligatorio';
    public const WRONG_EMAIL_MSG = 'Digitare un indirizzo email valido';

    private $user;
    private $error = []; //Array<ValidationResult>;
    private $isValid = true;

    public $firstNameResult;
    public $lastNameResult;
    public $emailResult;

    public function __construct(User $user) {

        $this->user = $user;
        $this->validate();
    }

    private function validate() {

        //$this->firstNameResult = $this->validateFirstName();
        //quello a destra viene aggiunto qua alla collezione di errori   //valida il nome
        //$this->errors['firstName']                         
        $firstNameResult                                           =               $this->validateFirstName();
        $lastNameResult =   $this->validateLastName();
        $emailResult = $this->validateEmail();
        
        $this->errors['firstName'] = $firstNameResult; //il risultato della validazione viene messo dentro firstName
        $this->errors['lastName'] = $lastNameResult;
        $this->errors['email'] = $emailResult;
                                       //questo isValid vale solo per firstName
        if(!$firstNameResult->getisValid()) {
                //questo isValid vale per tutto il form
            $this->isValid = false;
        }

        if(!$lastNameResult->getisValid()) {

        $this->isValid = false;
        }
        
        if(!$emailResult->getisValid()) {
            
        $this->isValid = false;
        }
        /** 
        *$result = $this->validateLastName();
        *$this->errors['lastName'] = $result;
        *if(!$result->isValid) {
        *    $this->isValid = false;
        *}
        */
        //$key = 'firstName';
        //$this->errors[$key] = $this->validateFirstName();
    }


    private function validateFirstName():?ValidationResult { //questo risultato ciccerà poi in firstName della riga 20

        $firstName = trim($this->user->getFirstName());
        //$this->user->getFirstName()
        if(empty($firstName)) {
                                                    //come si chiama la costante - self è un po' come il this ma self si riferisce alla classe, mentre this all'istanza
            $validationResult = new ValidationResult(self::FIRST_NAME_ERROR_REQUIRED_MSG, false, $firstName); //firstName è il value che arriva dalla trimmazione precedente
        }else { //cosa faccio quando le cose vanno bene invece
                                                    //in php il :: vuol dire che è riferito alla classe 
            $validationResult = new ValidationResult(self::FIRST_NAME_ERROR_NONE_MSG, true, $firstName);
        };

        return $validationResult;
    }

    private function validateLastName():?ValidationResult { 

        $lastName = trim($this->user->getlastName());
       
        if(empty($lastName)) {
                                                    
            $validationResult = new ValidationResult(self::LAST_NAME_ERROR_REQUIRED_MSG, false, $lastName); 
        }else {  

            $validationResult = new ValidationResult(self::LAST_NAME_ERROR_NONE_MSG, true, $lastName);
        };

        return $validationResult;
    }

    private function validateEmail():?ValidationResult { 

        $email = trim($this->user->getEmail());
        
       
        if(empty($email)) {
                                                    
            $validationResult = new ValidationResult(self::EMAIL_ERROR_REQUIRED_MSG, false, $email); 
        }else {  
            
            $validationResult = filter_var($email, FILTER_VALIDATE_EMAIL);
            
                if($validationResult == $email) {
                                                    
                    $validationResult = new ValidationResult(self::EMAIL_ERROR_NONE_MSG, true, $validationResult); 
                    
                }else {  

                    $validationResult = new ValidationResult(self::WRONG_EMAIL_MSG, false, $validationResult);
                };

            
        }

        return $validationResult;
    }

    
    /**
    *foreach($userValidation->getErrors() as $error){
    *   echo "<li></li>"
    *}
    */
    public function getErrors() {

        return $this->errors;
    }


    /**$userValidation->getError('firstName'); ---> mi prendo il risultato di firstName
    * @var ValidationResult $errorKey Chiave associativa che contiene un ValidationResult
    * mi serve lanciare validate per far funzionare questo
    */
    public function getError($errorKey) {

        return $this->errors[$errorKey];
    }
}