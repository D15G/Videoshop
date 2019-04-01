<?php

$movieModel = new MoviesModel();
$films = $movieModel->getAll();

if ($_SERVER['REQUEST_METHOD'] === 'POST') {

    $name = $_POST['name'];
    $email = $_POST['email'];
    $telefon = $_POST['phone'];
    $mitgliedschafts_status = $_POST['member-status'];

}

require 'app/views/ausleihe-erfassen.view.php';