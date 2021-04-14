<?php


function searchUserFirstName($search) {
    return function($taskItem) use ($search) {

        $sanitizedSearchFirstName = strtolower($search);
        $sanitizedItemFirstName = strtolower($taskItem['firstName']);

        if ($sanitizedItemFirstName === $sanitizedSearchFirstName) {
            return true;
        }else{
            return false;
        }
    };
}


function searchUserLastName($search) {
    return function($taskItem) use ($search) {

        $sanitizedSearchLastName = strtolower($search);
        $sanitizedItemLastName = strtolower($taskItem['lastName']);

        if ($sanitizedItemLastName === $sanitizedSearchLastName) {
            return true;
        }else{
            return false;
        }
    };
}

function searchUserFirstNameObj($search) {
    return function($taskItem) use ($search) {

        $sanitizedSearchFirstName = strtolower($search);
        $sanitizedItemFirstName = strtolower($taskItem->getFirstName());

        if ($sanitizedItemFirstName === '' || strpos($sanitizedItemFirstName, $sanitizedSearchFirstName) !== FALSE) {
            return true;
        }else{
            return false;
        }
    };
}

function searchUserLastNameObj($search) {
    return function($taskItem) use ($search) {

        $sanitizedSearchLastName = strtolower($search);
        $sanitizedItemLastName = strtolower($taskItem->getLastName());

        if ($sanitizedItemLastName === '' || strpos($sanitizedItemFirstName, $sanitizedSearchFirstName) !== FALSE) {
            return true;
        }else{
            return false;
        }
    };
}

function searchUserAgeObj($search) {
    return function($taskItem) use($search) {
        $input = $taskItem->getAge();

        if($search == $input) {
            return true;
        }else{
            return false;
        }
    };
}

