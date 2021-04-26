<?php
//questo file è una classe

class UserModel {

    //metto la connessione qua così perchè non mi serve rifare la connessione ogni volta che passo per una funzione sotto
    private $conn;

    //istanzio nel costruttore
    public function __construct() {
        try{
            $this->conn= new PDO('mysql:dbname=corso_formarete;host=localhost','root', '');
            $this->conn->setAttribute( PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION ); //setAttribute serve a cambiare le impostazioni di PDO ->https://stackoverflow.com/questions/35020308/pdo-not-throwing-exception-on-wrong-sql-query
            $this->conn->setAttribute( PDO::ATTR_EMULATE_PREPARES, FALSE ); 

        } catch(\PDOException $e) {
            //TODO togliere echo
            echo $e->getMessage();
        }
        
    }


    //CRUD(create)        tipo||parametro da passare  //è un metodo!
    public function create(User $user) {

        try {

            //$pdostatement è la query
            $pdostatement = $this->conn->prepare('INSERT INTO User (firstName, lastName, email, birthday)
            VALUES (:firstName, :lastName, :email, :birthday); /*metto parametri, :qualcosa*/
                                                ');
            $pdostatement->bindValue(':firstName', $user->getFirstName(), PDO::PARAM_STR); //bindValue per assegnare un valore, a firstName assegno user, il terzo è predefinito, puoi anche non scriverlo
            $pdostatement->bindValue(':lastName', $user->getlastName(), PDO::PARAM_STR);
            $pdostatement->bindValue(':email', $user->getEmail(), PDO::PARAM_STR);
            $pdostatement->bindValue(':birthday', $user->getBirthday(), PDO::PARAM_STR);

            $pdostatement->execute(); //tra le parentesi ci potevo mettere [':firstName'=>$user->getfirstName()]
        } catch(\PDOExceptions $e) {
            //TODO evitare echo
            echo $e->getMessage();
        }
        
    }

    
    public function read(){
        $conn = new PDO('mysql:dbname=corso_formarete;host=localhost',                  
                    'root', '');
        $stm = $conn->prepare('select * from User;');
        $stm->execute();
    }
    public function update(){}
    public function delete(){}
}