<?php
require './src/entity/User.php';
try {               //come si chiama il db       dove si trova il db
    $conn = new PDO('mysql:dbname=corso_formarete;host=localhost',  //PDO é la classe interfaccia ad oggetti che php utilizza per gestire la connessione con un database
                  //utente psw
                    'root', '');

                    //indico una "query"->una stringa che compila un comando
    $stm = $conn->prepare('select * from User;');
    //execute esegue la query ma qui non gli abbiamo spiegato come vogliamo il risultato
    $stm->execute();
    //viene tradotta in qualcosa che php possa capire
    $result = $stm->fetchAll(PDO::FETCH_CLASS,'User'); //con i FETCH_qualcosa gli dico che il risultato del db deve essere convertito in user che abbiamo determinato noi (tipo UserFactory di php) https://phpdelusions.net/pdo

    // new User() id 3 
    // new User() id 4
    // new User() 

    print_r($result);

    //il PDO gestisce le eccezioni un po' come il JsonReader
} catch (\PDOException $e) {
    echo $e->getMessage()."\n";
}