<?php

$router = new Router();

$router->define([
    '' => 'app/controllers/StatusController.php',
    'erfassen' => 'app/controllers/AusleiheErfassenController.php',
    'kontrolle' => 'app/controllers/AusleiheKontrollierenController.php',
    'bearbeiten' => 'app/controllers/AusleiheBearbeitenController.php',
    'bearbeiten-speichern' => 'app/controllers/AusleiheBearbeitenSpeichernController.php'
]);