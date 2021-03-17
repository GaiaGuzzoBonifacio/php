<?php
/**
 * Funzione di ordine superiore funzione che restituisce una funzione
 * Programmazione Funzionale - dichiarativo 
 */
function searchText($searchText) {
    // "Latte" // "php"
    return function ($taskItem) use ($searchText) {
        // [0] => "prendere il latte" --> 12 != --> true
        // [1] => "fare benzina" --> false --> false !== false
        // [2] => "latte per il viso" --> 0 !== falso ---> true
        $result =strpos($taskItem['taskName'], $searchText) !== false;
        return $result;
    };
   
}

/**
 * Imperativo
 * 
 * @var string $searchText testo da cercare nella chiave "taskName"
 * @var array $taskList elenco delle task dove cercare
 * @return array $result un nuovo array con il risultato della ricerca
 */
//function searchText(string $searchText, array $taskList):array {
    //$result = [];
    //foreach ($taskList as $taskItem) {
        //if(strpos($taskItem['taskName'], $searchText) !== false) 
        //{
            //$result[] = $taskItem;
        //}
    //}
    //return $result;
//}

/**
 * @var string $status è la stringa che corrisponde allo status da cercare
 * (progress|done|todo)
 * @return callable La funzione che verrà utilizzata da array_filter
 */
function searchStatus(string $status) : callable {
    return function ($mockTaskItem) use ($status) {
        $result = strpos($mockTaskItem['status'], $status) !== false;
        return $result;
    };
} 


