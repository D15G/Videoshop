<?php
require 'app/views/navbar.view.php';
require 'app/controllers/validation/ValidationController.php';

$movieModel = new MoviesModel();
$films = $movieModel->getAll();

$name = '';
$email = '';
$telefon = '';

if ($_SERVER['REQUEST_METHOD'] === 'POST') {

    if (isset($_POST)) {

        $name = $_POST['name'];
        $email = $_POST['email'];
        $telefon = $_POST['phone'];
        $mitgliedschafts_status = $_POST['member-status'];
        $video = $_POST['movie'];
        $enddatum = $_POST['enddate'];

        $errors = validate($name, $email, $telefon, $mitgliedschafts_status, $video);

        if (empty($errors)) {
            $_SESSION["formdata"] = [$name, $email, $telefon, $mitgliedschafts_status, $video, $enddatum];
            header('Location: kontrolle');
        }

    }

}

require 'app/views/ausleihe-erfassen.view.php';