<?php

function validate(string $name, string $email, string $telefon): array
{

    $errors = array();
    $regex = '/^[_a-z0-9-]+(\.[_a-z0-9-]+)*@[a-z0-9-]+(\.[a-z0-9-]+)*(\.[a-z]{2,3})$/';

    if ($name === '') {
        array_push($errors, 'Namensfeld ist leer!');
    }

    if ($email === '') {
        array_push($errors, 'Emailfeld ist leer!');
    }

    if (!preg_match($regex, $email)) {
        array_push($errors, 'Email ist invalid!');
    }

    if (preg_match("/[a-z]/i", $telefon)) {
        array_push($errors, 'Telefonnummer darf keine Alphabetischen Zeichen enthalten!');
    }





    return $errors;

}