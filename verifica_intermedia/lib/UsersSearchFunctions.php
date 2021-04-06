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

        $sanitizedSearchLastName = strtolower($search);
        $sanitizedItemLastName = strtolower($taskItem->getFirstName());

        if ($sanitizedItemLastName === $sanitizedSearchLastName) {
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

        if ($sanitizedItemLastName === $sanitizedSearchLastName) {
            return true;
        }else{
            return false;
        }
    };
}