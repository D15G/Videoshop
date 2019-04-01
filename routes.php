<?php

$router = new Router();

$router->define([
    '' => 'app/controllers/StatusController.php',
    'erfassen' => 'app/controllers/AusleiheErfassenController.php',
    'kontrolle' => 'app/controllers/AusleiheKontrollierenController.php'

]);