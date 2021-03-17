<?php
$names = ['Mario','Luigi','Paolo'];
/**
 * Questa funzione cerca un nome (una stringa) in un array
 */
function findName(string $nameTofind, array $names):bool
{
    foreach ($names as $name) {

        if ($name == $nameTofind)
        {
            return true;
        }
    }
    return false;
}

var_dump(findName('Mario', $names));

/** 
 * Esiste una funzione di php che svolge un compito simile
 * 
 * @link https://php.net/manual/en/function.in-array.php  
 */
var_dump(in_array('Mario', $names));