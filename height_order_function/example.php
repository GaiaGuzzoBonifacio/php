<?php
// $a = 6;
// $b = "ciao";

// media(1,3,4,5)

/**
 * 
 */

/**
 * 1 - la callback passa 1 valore
 * 2 - la callback deve restituire un booleano
 * 
 */
function cercaDue($valoreCorrente):bool
            {
                return $valoreCorrente === 2; // true
            };

$risultatoRicerca = array_filter([1,2,3,4], 'cercaDue' ); // [2]

somma(5, 15);












function cerca($valoreDaCercare){
    
    /**
     * itemDellArray vale 1,2,3,4
     */

    return function($itemDellArray) use ($valoreDaCercare) {
        
            // 1 === 2 -> false
            // 2 === 2 -> true 
            return $itemDellArray === $valoreDaCercare // === 2 // === 4
    }
}


$risultato = array_filter([1,2,3,4], cerca(2) ); // [2]
$risultato = array_filter([1,2,3,4], cerca(4) ); // [4]
$risultato = array_filter([1,2,3,4,"ciccio"], cerca("ciccio") ); // ["ciccio"]
$risultato = array_filter([1,2,3,4], cerca(300) ); // [] 

somma( 10/2 ,6);




function perDue($valoreCorrente)
{
    return $valoreCorrente * 2
}


// $risultato = somma(10,5); // 15
array_map('perDue', [1,2,3,4]); // [2,4,6,8]
array_map('trim', ['a   ','    b','   c  ']); // ["a","b","c"]
