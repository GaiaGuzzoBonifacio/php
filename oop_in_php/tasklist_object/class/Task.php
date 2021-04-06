<?php 

class Task {
    public $id;
    public $taskName;
    public $status;
    public $expirationDate;

    public function isExpired():bool //mi aspetto restituisca un booleano
    {
        $today = new DateTime(); //oggetto $today istanza di DateTime
        // gettype($today) viene restituito object
        // get_class($today) viene restituito DateTime
        $task = new DateTime($this->expirationDate); //prende come argomento una stringa la trasforma in tempo
        
        return $task > $today;
    }

    public function getExpirationDate()
    {
        return $this->expirationDate;
    }
}