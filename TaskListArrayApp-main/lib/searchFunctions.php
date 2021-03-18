<?php

function searchText($searchText) {
    
   return function ($taskItem) use ($searchText) {
       
    
    $noSpaces = preg_replace('/[ ]+/m', ' ', $searchText);
       
       $stringToLowerCase = strtolower($taskItem['taskName']);
       
       $searchToLowerCase = trim(strtolower($noSpaces));
       
       
       if ($searchToLowerCase !== '') {
           $result = strpos($stringToLowerCase, $searchToLowerCase) !== false;
       } else {
           $result = true;
       }
       
       
       return $result;
   };
   
}

function searchStatus(string $search): callable {
    
    return function ($mockTaskItem) use ($search) {
        
        if ($search !== '') {
            
            
            if ($search !== 'all') {
                
                $result = strpos($mockTaskItem['status'], $search) !== false;
            
            
            } else {
                
                $result = true;
           
            }
        
        
        } else {
            
            $result = true;
        
        }
       
       
        return $result;
    };
}




