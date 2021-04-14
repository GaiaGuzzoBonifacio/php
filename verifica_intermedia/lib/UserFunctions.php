<?php

function UserFactory(array $userData) {
    $user = new user();
    $user->setLastName(sanitizeName($userData['lastname']));
    $user->setFirstName(sanitizeName($userData['fistname']));
    $user->setEmail(filter_var($userData['email'], FILTER_SANITIZE_EMAIL));
    $user->setBirthday($userData['birthday']);
    $user->setuserId($userData['id']);
    return $user;
}