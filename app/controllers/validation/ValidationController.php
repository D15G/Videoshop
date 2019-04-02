<?php

function validate(string $name, string $email, string $telefon, string $memberStatus, string $video): array
{

    $errors = array();
    $regex = '/^[_a-z0-9-]+(\.[_a-z0-9-]+)*@[a-z0-9-]+(\.[a-z0-9-]+)*(\.[a-z]{2,3})$/';

    $movieModel = new MoviesModel();
    $allMovies = $movieModel->getAllMovieIds();
    $allMemberStatuses = ['', 'Bronze', 'Silber', 'Gold'];

    if ($name === '') {
        array_push($errors, 'Namensfeld ist leer!');
    }

    if (strlen($name) <= 4) {
        array_push($errors, 'Der Name muss länger als 4 Zeichen sein!');
    }

    if ($email === '') {
        array_push($errors, 'Emailfeld ist leer!');
    }

    if (!preg_match($regex, $email)) {
        array_push($errors, 'Email ist invalid!');
    }

    if (strpos($email, "google.com")) {
        array_push($errors, 'google.com ist keine gültige Email!');
    }

    if (preg_match("/[a-z]/i", $telefon)) {
        array_push($errors, 'Telefonnummer darf keine Alphabetischen Zeichen enthalten!');
    }

    if (!in_array($video, $allMovies)) {
        array_push($errors, 'Der Ausgewählte Film existiert nicht!');
    }

    if (!in_array($memberStatus, $allMemberStatuses)) {
        array_push($errors, 'Der Ausgewählte Mitgliedschaftsstatus existiert nicht!');
    }






    return $errors;

}