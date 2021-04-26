<?php

class ValidationResult {
    
    private $message; //msg di errore
    private $isValid; //bool se è valido o no
    private $value; //che c'è dentro papale papale
    
    public function __construct($message,$isValid,$value) {
        
        //quando scrivi una variabile (come qui sotto) occhio a non mettere il $ dopo il this o crei una variabile di variabile e ti spippola tutto
        $this->message = $message;
        $this->isValid = $isValid;
        $this->value = $value;
    }
    
    

    /**
     * Get the value of message
     */ 
    public function getMessage()
    {
        return $this->message;
    }

    /**
     * Get the value of isValid
     */ 
    public function getIsValid()
    {
        return $this->isValid;
    }

    /**
     * Get the value of value
     */ 
    public function getValue()
    {
        return $this->value;
    }
}