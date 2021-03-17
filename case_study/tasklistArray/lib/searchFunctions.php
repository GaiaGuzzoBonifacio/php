<?php
/**
 * Funzione di ordine superiore funzione che restituisce una funzione
 * Programmazione Funzionale - dichiarativo 
 */
function searchText($searchText) {

    // $searchText : locale 
    // per fare il modo che $searchText sia visibile (ambito) all'interno della funzione anonima
    // devo usare "use"
    return function ($taskItem) use ($searchText) {

        //print_r($taskItem['taskName']);
        //echo "sto cercando $searchText";

        $result = strpos($taskItem['taskName'] ,$searchText) !== false;
        return $result;
        //var_dump($result);
        //print_r($searchText);
        //print_r($taskItem);
    };
    
    // return 10 ;
}