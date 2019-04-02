<?php
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $id = $_POST['ausleihe'];
    $movieModel = new MoviesModel();
    $films = $movieModel->getAll();
    $ausleihModel = new AusleihModel();
    $ausleihe = $ausleihModel->getAusleiheById((int)$_POST['ausleihe']);
} else {
    echo '<script>window.location = "/videoshop"</script>';
}
require 'app/views/ausleihe-bearbeiten.view.php';