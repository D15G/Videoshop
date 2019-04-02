<?php
require 'app/views/navbar.view.php';
$movie = new MoviesModel();

if (!empty($_SESSION['formdata'])) {

    $name = $_SESSION['formdata'][0];
    $email = $_SESSION['formdata'][1];
    $telefon = $_SESSION['formdata'][2];
    $mitgliedschafts_status = $_SESSION['formdata'][3];
    $video = $_SESSION['formdata'][4];
    $enddatum = $_SESSION['formdata'][5];

    $movieTitle = $movie->getMovieById($video);

    $curDate = date('Y-m-d');
    $ausleiheModel = new AusleihModel();
    $id = $ausleiheModel->create($name, $email, $telefon, 0, $mitgliedschafts_status, $video, $curDate, $enddatum);

} else {
    echo "<script>window.location = '/videoshop'</script>";
}

require 'app/views/ausleihe-kontrollieren.view.php';